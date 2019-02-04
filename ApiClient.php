<?php

namespace Fatchip\Afterbuy;

use Fatchip\Afterbuy\Types\Product;
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
     */
    public function __construct($config)
    {
        if (!class_exists('\\Symfony\\Component\\Serializer\\Serializer')) {
            require __DIR__ . '/vendor/autoload.php';
        }
        foreach ($config as $key => $value) {
            $this->$key = $value;
        }
        $encoders = [new Encoder()];
        $normalizers = [new Normalizer()];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param Product[]|Product $products
     * @return mixed
     * @throws \Exception
     */
    public function updateShopProducts($products)
    {
        if (!is_array($products)) {
            $products = [$products];
        }
        foreach ($products as $index => $value) {
            if ($value instanceof Product === false) {
                throw new \InvalidArgumentException("Item '{$index}' is " .
                    "not an instance of \Fatchip\Afterbuy\Types\Product");
            }
        }
        $request = $this->buildRequest('UpdateShopProducts', ['Products' => ['Product' => $products]]);
        $response = $this->sendRequest($request);
        if ($response['CallStatus'] !== 'Success') {
            if ($response['Result']['ErrorList']['Error']['ErrorCode']) {
                throw new \Exception(
                    $response['Result']['ErrorList']['Error']['ErrorDescription'],
                    $response['Result']['ErrorList']['Error']['ErrorCode']
                );
            } else {
                throw new \Exception("An unknown error occured during API communication.");
            }
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

        $request = $this->buildRequest('GetShopCatalogs', $params, false,'EN', $detailLevel);
        $response = $this->sendRequest($request);
        return $response;
    }

    public function updateCatalogs($catalogs) {
        //TODO: add filter

        $params = [
            'Catalogs' => [
                'Catalog' => $catalogs,
                'UpdateAction' => 1,
            ]
        ];

        $request = $this->buildRequest('UpdateCatalogs', $params);

        return $this->sendRequest($request);
    }

        public function getOrdersFromAfterbuy($dataFilter = [], $detailLevel = 0, $iMaxShopItems = 200, $iPage = 0) {
        //TODO: add date filter
        $params = [
            'MaxSoldItems'                   => $iMaxShopItems,
            'SuppressBaseProductRelatedData' => 0,
            'PaginationEnabled'              => 1,
            'PageNumber'                     => $iPage,
            'ReturnShop20Container'          => 0,
            'DataFilter'                     => $dataFilter
        ];

        $request = $this->buildRequest('GetSoldItems', $params, false,'EN', $detailLevel);
        $response = $this->sendRequest($request);
        return $response;
    }

    public function getAllShopProductsFromAfterbuy(
        $dataFilter = []

    ) {
        $i = 1;

        $articles = [];

        do {
            $response = $this->getShopProductsFromAfterbuy($dataFilter, 250, $i++);

            if(array_key_exists('ProductID', $response['Result']['Products']['Product'])) {
                array_push($articles, $response['Result']['Products']['Product']);
            }
            else {
                foreach ($response['Result']['Products']['Product'] as $product) {
                    array_push($articles, $product);
                }
            }


        } while($response["Result"]["HasMoreProducts"] == "1");

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
        $response = $this->sendRequest($request);

        return $response;
    }

    /**
     * @param string $callName
     * @param array $content
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

        if($shopInterface) {
            $params['Action'] = $callName;
            $params['PartnerPass'] = $this->afterbuyPartnerPassword;

            $request = array_merge($params, $content);
            return http_build_query($request);

        } else {
            $params['ErrorLanguage'] = $errorLanguage;
            $params['CallName'] = $callName;
            $params['DetailLevel'] = $detailLevel;
            $params['PartnerPassword'] = $this->afterbuyPartnerPassword;

            $request = array_merge_recursive(['AfterbuyGlobal' => $params], $content);
            return $this->serializer->normalize($request);
        }
    }

    /**
     * @param mixed $request
     * @return mixed
     */
    public function sendOrdersToAfterbuy($values)
    {
        $result = array();

        $request = $this->buildRequest('new', $values, true);
        $response = $this->sendRequest($request, true);

        if($response["success"] == "1") {
            $result = array (
                'ordernumber' => $response["data"]["VID"],
                'afterbuyId' => $response["data"]["AID"]
            );
        }

        return $result;

    }

    /**
     * @param mixed $request
     * @return mixed
     */
    protected function sendRequest($request, $shopInterface = false)
    {
        if(!$shopInterface) {
            $request = $this->serializer->encode($request, 'request/xml');
            $resource = $this->afterbuyAbiUrl;
        } else {
            $resource = $this->afterbuyShopInterfaceBaseUrl . '?' . $request;
        }

        $ch = curl_init($resource);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
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
    protected $afterbuyLogFilepath = null;

    /**
     * ABI URL of Afterbuy
     * http://api.afterbuy.de/afterbuy/ABInterface.aspx
     * @var string
     */
    protected $afterbuyAbiUrl = "";

    /**
     * Shop Interface Base URL of Afterbuy
     * https://www.afterbuy.de/afterbuy/ShopInterface.aspx
     * @var string
     */
    protected $afterbuyShopInterfaceBaseUrl = "";

    /**
     * Partner ID for Afterbuy
     * @var string
     */
    protected $afterbuyPartnerId = "";

    /**
     * Partner password for Afterbuy
     * @var string
     */
    protected $afterbuyPartnerPassword = "";

    /**
     * User name for Afterbuy
     * @var string
     */
    protected $afterbuyUsername = "";

    /**
     * User password for Afterbuy
     * @var string
     */
    protected $afterbuyUserPassword = "";

    /**
     * Serializer for API communication
     * @var Serializer
     */
    protected $serializer = null;
}
