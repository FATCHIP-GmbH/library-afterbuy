<?php /** @noinspection PhpUnused */

namespace Fatchip\Afterbuy;

use Monolog\Logger;
use RuntimeException;
use Symfony\Component\Serializer\Serializer;

class ApiClient
{
    /**
     * AfterbuyClient constructor.
     *
     * Pass your configuration parameters as an array like this:
     * ```
     * $config = array(
     *      'afterbuyAbiUrl' => <AfterbuyAbiUrl>,
     *      'afterbuyShopInterfaceBaseUrl' => <AfterbuyShopInterfaceBaseUrl>,
     *      'afterbuyPartnerId' => <AfterbuyPartnerId>,
     *      'afterbuyPartnerPassword' => <AfterbuyPartnerPassword>,
     *      'afterbuyUsername' => <AfterbuyUsername>,
     *      'afterbuyUserPassword' => <AfterbuyUserPassword>,
     *      'logLevel' => <LogLevel>,
     * );
     * ```
     * @param array $config
     * @param null $logger
     */
    public function __construct($config, $logger = null)
    {
        if (!class_exists(Serializer::class)) {
            /** @noinspection PhpIncludeInspection */
            require __DIR__ . '/vendor/autoload.php';
        }
        foreach ($config as $key => $value) {
            $this->$key = $value;
        }
        $encoders = [new Encoder()];
        $normalizers = [new Normalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
        $this->logger = $logger;
    }

    public function getAfterbuyTime()
    {
        $request = $this->buildRequest('getAfterbuyTime', array());
        $response = $this->sendRequest($request);

        return $response;
    }


    public function updateShopProducts($products)
    {
        $request = $this->buildRequest('UpdateShopProducts', $products);
        $response = $this->sendRequest($request);
        if ($response['CallStatus'] === 'Error') {
            if (array_key_exists('ErrorCode', $response['Result']['ErrorList']['Error'])) {
                throw new RuntimeException(
                    $response['Result']['ErrorList']['Error']['ErrorDescription'],
                    $response['Result']['ErrorList']['Error']['ErrorCode']
                );
            }

            throw new RuntimeException('An unknown error occured during API communication.');
        }
        return $response;
    }

    public function getCatalogsFromAfterbuy(
        $maxCatalogs,
        $detailLevel,
        $pageNumber,
        $dataFilter = []
    ) {
        $params = [
            'MaxCatalogs' => $maxCatalogs,
            'PageNumber'  => $pageNumber,
            'DataFilter'      => $dataFilter,
        ];

        $request = $this->buildRequest('GetShopCatalogs', $params, false, 'EN', $detailLevel);
        return $this->sendRequest($request);
    }

    public function updateOrderStatus(array $content)
    {
        $request = $this->buildRequest('UpdateSoldItems', $content);
        return $this->sendRequest($request);
    }

    public function updateCatalogs($catalogs)
    {
        $params = [
            'Catalogs' => [
                'Catalog' => $catalogs,
                'UpdateAction' => 2,
            ]
        ];

        $request = $this->buildRequest('UpdateCatalogs', $params);

        return $this->sendRequest($request);
    }

    public function getOrdersFromAfterbuy($dataFilter = [], $detailLevel = 0, $iMaxShopItems = 250, $iPage = 0)
    {
        $params = [
            'MaxSoldItems'                   => $iMaxShopItems,
            'SuppressBaseProductRelatedData' => 0,
            'PaginationEnabled'              => 1,
            'PageNumber'                     => $iPage,
            'ReturnShop20Container'          => 0,
            'DataFilter'                     => $dataFilter
        ];

        $request = $this->buildRequest('GetSoldItems', $params, false, 'EN', $detailLevel);
        return $this->sendRequest($request);
    }

    public function getAllShopProductsFromAfterbuy(
        $dataFilter = []
    ) {
        $i = 1;

        $articles = [];

        do {
            $response = $this->getShopProductsFromAfterbuy($dataFilter, 250, $i++);

            if (!array_key_exists('Products', $response['Result'])) {
                break;
            }

            if (array_key_exists('ProductID', $response['Result']['Products']['Product'])) {
                $articles[] = $response['Result']['Products']['Product'];
            } else {
                foreach ($response['Result']['Products']['Product'] as $product) {
                    $articles[] = $product;
                }
            }
        } while ($response['Result']['HasMoreProducts'] == '1');

        return $articles;
    }

    /**
     * Returns the Afterbuy products as array
     *
     * @param int   $iMaxShopItems
     * @param int   $iPage
     * @param array $dataFilter DataFilter, as described in
     *                          https://xmldoku.afterbuy.de/dokued/
     *                          GetShopProducts
     *
     * @return array
     */
    public function getShopProductsFromAfterbuy(
        $dataFilter = [],
        $iMaxShopItems = 250,
        $iPage = 0
    ) {
        $params = [
            'MaxShopItems'                   => $iMaxShopItems,
            'SuppressBaseProductRelatedData' => 0,
            'PaginationEnabled'              => 1,
            'PageNumber'                     => $iPage,
            'ReturnShop20Container'          => 0,
            'DataFilter'                     => $dataFilter
        ];
        $request = $this->buildRequest('GetShopProducts', $params);
        return $this->sendRequest($request);
    }

    /**
     * @param string $callName
     * @param array $content
     * @param bool $shopInterface
     * @param string $errorLanguage
     * @param int $detailLevel
     * @return array
     */
    protected function buildRequest($callName, $content, $shopInterface = false, $errorLanguage = 'EN', $detailLevel = 0)
    {
        $params = [
            'PartnerID' => $this->afterbuyPartnerId,
            'UserID' => $this->afterbuyUsername,
            'UserPassword' => $this->afterbuyUserPassword
        ];

        if ($shopInterface) {
            $params['Action'] = $callName;
            $params['PartnerPass'] = $this->afterbuyPartnerPassword;

            $request = array_merge($params, $content);
            return http_build_query($request);
        }

        $params['ErrorLanguage'] = $errorLanguage;
        $params['CallName'] = $callName;
        $params['DetailLevel'] = $detailLevel;
        $params['PartnerPassword'] = $this->afterbuyPartnerPassword;

        $request = array_merge_recursive(['AfterbuyGlobal' => $params], $content);
        return $this->serializer->normalize($request);
    }

    /**
     * @param $values
     * @return mixed
     */
    public function sendOrdersToAfterbuy($values)
    {
        $result = array();

        /** @var array $values */
        $request = $this->buildRequest('new', $values, true);
        $response = $this->sendRequest($request, true);

        if ($response['success'] == '1') {
            $result = array(
                'ordernumber' => $response['data']['VID'],
                'afterbuyId' => $response['data']['AID']
            );
        } elseif (array_key_exists('errorlist', $response)) {
            $result = array('error' => $response['errorlist']);
        }

        return $result;
    }

    /**
     * @param mixed $request
     * @param bool $shopInterface
     * @return mixed
     */
    protected function sendRequest($request, $shopInterface = false)
    {
        if (!$shopInterface) {
            $request = $this->serializer->encode($request, 'request/xml');
            $resource = $this->afterbuyAbiUrl;
        } else {
            $resource = $this->afterbuyShopInterfaceBaseUrl;
        }

        $ch = curl_init($resource);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);

        if (!$shopInterface) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        }

        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($this->logger instanceof Logger) {
            $this->logger->debug('Request', array($request, $response));
        }

        return $this->serializer->decode($response, 'response/xml');
    }

    /**
     * Error log level 1 = Only errors, 2 = Errors and warnings, 3 = Output all
     * @var int
     */
    protected $logLevel = 1;

    /**
     * Filename for logfile
     * @var string
     */
    protected $afterbuyLogFilepath;

    /**
     * ABI URL of Afterbuy
     * http://api.afterbuy.de/afterbuy/ABInterface.aspx
     * @var string
     */
    protected $afterbuyAbiUrl = '';

    /**
     * Shop Interface Base URL of Afterbuy
     * https://www.afterbuy.de/afterbuy/ShopInterface.aspx
     * @var string
     */
    protected $afterbuyShopInterfaceBaseUrl = '';

    /**
     * Partner ID for Afterbuy
     * @var string
     */
    protected $afterbuyPartnerId = '';

    /**
     * Partner password for Afterbuy
     * @var string
     */
    protected $afterbuyPartnerPassword = '';

    /**
     * User name for Afterbuy
     * @var string
     */
    protected $afterbuyUsername = '';

    /**
     * User password for Afterbuy
     * @var string
     */
    protected $afterbuyUserPassword = '';

    /**
     * Serializer for API communication
     * @var Serializer
     */
    protected $serializer;

    protected $logger;
}
