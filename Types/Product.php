<?php

namespace Fatchip\Afterbuy\Types;

class Product
{
    // --- Produktidentifizierung

    /** @var ProductIdent */ private $ProductIdent;

    // --- Aktualisierbare Werte

    /** @var Float */ private $Anr;
    /** @var String */ private $EAN;
    /** @var Integer */ private $FooterID;
    /** @var Integer */ private $HeaderID;
    /** @var String */ private $Name;
    /** @var String */ private $ManufacturerPartNumber;
    /** @var String */ private $ShortDescription;
    /** @var String */ private $Memo;
    /** @var String */ private $Description;
    /** @var String */ private $Keywords;
    /** @var Integer */ private $Quantity;
    /** @var Integer */ private $AuctionQuantity;
    /** @var Boolean */ private $Stock;
    /** @var Boolean */ private $Discontinued;
    /** @var Boolean */ private $MergeStock;
    /** @var Float */ private $UnitOfQuantity;
    /** @var String */ private $BasepriceFactor;
    /** @var Integer */ private $MinimumStock;
    /** @var Float */ private $SellingPrice;
    /** @var Float */ private $BuyingPrice;
    /** @var Float */ private $DealerPrice;
    /** @var Integer */ private $Level;
    /** @var Integer */ private $Position;
    /** @var Boolean */ private $TitleReplace;
    /** @var Float */ private $TaxRate;
    /** @var Float */ private $Weight;
    /** @var String */ private $Stocklocation_1;
    /** @var String */ private $Stocklocation_2;
    /** @var String */ private $Stocklocation_3;
    /** @var String */ private $Stocklocation_4;
    /** @var String */ private $CountryOfOrigin;
    /** @var String */ private $SearchAlias;
    /** @var Boolean */ private $Froogle;
    /** @var Boolean */ private $Kelkoo;
    /** @var String */ private $ShippingGroup;
    /** @var String */ private $ShopShippingGroup;
    /** @var Integer */ private $CrossCatalogID;
    /** @var String */ private $FreeValue1;
    /** @var String */ private $FreeValue2;
    /** @var String */ private $FreeValue3;
    /** @var String */ private $FreeValue4;
    /** @var String */ private $FreeValue5;
    /** @var String */ private $FreeValue6;
    /** @var String */ private $FreeValue7;
    /** @var String */ private $FreeValue8;
    /** @var String */ private $FreeValue9;
    /** @var String */ private $FreeValue10;
    /** @var String */ private $DeliveryTime;
    /** @var String */ private $ImageSmallURL;
    /** @var String */ private $ImageLargeURL;
    /** @var String */ private $ImageName;
    /** @var String */ private $ImageSource;
    /** @var String */ private $ManufacturerStandardProductIDType;
    /** @var String */ private $ManufacturerStandardProductIDValue;
    /** @var String */ private $ProductBrand;
    /** @var String */ private $CustomsTariffNumber;
    /** @var String */ private $GoogleProductCategory;
    /** @var Integer */ private $Condition;
    /** @var String */ private $Pattern;
    /** @var String */ private $Material;
    /** @var String */ private $ItemColor;
    /** @var String */ private $ItemSize;
    /** @var String */ private $CanonicalUrl;
    /** @var Integer */ private $EnergyClass;
    /** @var String */ private $EnergyClassPictureUrl;
    /** @var Integer */ private $AgeGroup;
    /** @var Integer */ private $Gender;

    /** @var Skus */ private $Skus;
    /** @var AddCatalogs */ private $AddCatalogs;
    /** @var AddAttributes */ private $AddAttributes;
    /** @var AddBaseProducts */ private $AddBaseProducts;
    /** @var PartsFitment */ private $PartsFitment;
    /** @var ProductPictures */ private $ProductPictures;
    /** @var ScaledDiscounts */ private $ScaledDiscounts;
    /** @var AdditionalDescriptionFields */ private $AdditionalDescriptionFields;

    /**
     * Product constructor.
     * @param ProductIdent $ProductIdent
     */
    public function __construct($ProductIdent = null)
    {
        if ($ProductIdent) {
            $this->ProductIdent = $ProductIdent;
        } else {
            $this->ProductIdent = new ProductIdent();
        }
    }

    /**
     * @return ProductIdent
     */
    public function getProductIdent()
    {
        return $this->ProductIdent;
    }

    /**
     * @param ProductIdent $ProductIdent
     * @return Product
     */
    public function setProductIdent($ProductIdent)
    {
        $this->ProductIdent = $ProductIdent;
        return $this;
    }

    /**
     * @return Float
     */
    public function getAnr()
    {
        return $this->Anr;
    }

    /**
     * @param Float $Anr
     * @return Product
     */
    public function setAnr($Anr)
    {
        $this->Anr = $Anr;
        return $this;
    }

    /**
     * @return String
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * @param String $EAN
     * @return Product
     */
    public function setEAN($EAN)
    {
        $this->EAN = $EAN;
        return $this;
    }

    /**
     * @return int
     */
    public function getFooterID()
    {
        return $this->FooterID;
    }

    /**
     * @param int $FooterID
     * @return Product
     */
    public function setFooterID($FooterID)
    {
        $this->FooterID = $FooterID;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeaderID()
    {
        return $this->HeaderID;
    }

    /**
     * @param int $HeaderID
     * @return Product
     */
    public function setHeaderID($HeaderID)
    {
        $this->HeaderID = $HeaderID;
        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param String $Name
     * @return Product
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return String
     */
    public function getManufacturerPartNumber()
    {
        return $this->ManufacturerPartNumber;
    }

    /**
     * @param String $ManufacturerPartNumber
     * @return Product
     */
    public function setManufacturerPartNumber($ManufacturerPartNumber)
    {
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param String $ShortDescription
     * @return Product
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
        return $this;
    }

    /**
     * @return String
     */
    public function getMemo()
    {
        return $this->Memo;
    }

    /**
     * @param String $Memo
     * @return Product
     */
    public function setMemo($Memo)
    {
        $this->Memo = $Memo;
        return $this;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param String $Description
     * @return Product
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return String
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * @param String $Keywords
     * @return Product
     */
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return Product
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuctionQuantity()
    {
        return $this->AuctionQuantity;
    }

    /**
     * @param int $AuctionQuantity
     * @return Product
     */
    public function setAuctionQuantity($AuctionQuantity)
    {
        $this->AuctionQuantity = $AuctionQuantity;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStock()
    {
        return $this->Stock;
    }

    /**
     * @param bool $Stock
     * @return Product
     */
    public function setStock($Stock)
    {
        $this->Stock = $Stock;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDiscontinued()
    {
        return $this->Discontinued;
    }

    /**
     * @param bool $Discontinued
     * @return Product
     */
    public function setDiscontinued($Discontinued)
    {
        $this->Discontinued = $Discontinued;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMergeStock()
    {
        return $this->MergeStock;
    }

    /**
     * @param bool $MergeStock
     * @return Product
     */
    public function setMergeStock($MergeStock)
    {
        $this->MergeStock = $MergeStock;
        return $this;
    }

    /**
     * @return Float
     */
    public function getUnitOfQuantity()
    {
        return $this->UnitOfQuantity;
    }

    /**
     * @param Float $UnitOfQuantity
     * @return Product
     */
    public function setUnitOfQuantity($UnitOfQuantity)
    {
        $this->UnitOfQuantity = $UnitOfQuantity;
        return $this;
    }

    /**
     * @return String
     */
    public function getBasepriceFactor()
    {
        return $this->BasepriceFactor;
    }

    /**
     * @param String $BasepriceFactor
     * @return Product
     */
    public function setBasepriceFactor($BasepriceFactor)
    {
        $this->BasepriceFactor = $BasepriceFactor;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumStock()
    {
        return $this->MinimumStock;
    }

    /**
     * @param int $MinimumStock
     * @return Product
     */
    public function setMinimumStock($MinimumStock)
    {
        $this->MinimumStock = $MinimumStock;
        return $this;
    }

    /**
     * @return Float
     */
    public function getSellingPrice()
    {
        return $this->SellingPrice;
    }

    /**
     * @param Float $SellingPrice
     * @return Product
     */
    public function setSellingPrice($SellingPrice)
    {
        $this->SellingPrice = $SellingPrice;
        return $this;
    }

    /**
     * @return Float
     */
    public function getBuyingPrice()
    {
        return $this->BuyingPrice;
    }

    /**
     * @param Float $BuyingPrice
     * @return Product
     */
    public function setBuyingPrice($BuyingPrice)
    {
        $this->BuyingPrice = $BuyingPrice;
        return $this;
    }

    /**
     * @return Float
     */
    public function getDealerPrice()
    {
        return $this->DealerPrice;
    }

    /**
     * @param Float $DealerPrice
     * @return Product
     */
    public function setDealerPrice($DealerPrice)
    {
        $this->DealerPrice = $DealerPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param int $Level
     * @return Product
     */
    public function setLevel($Level)
    {
        $this->Level = $Level;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return Product
     */
    public function setPosition($Position)
    {
        $this->Position = $Position;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTitleReplace()
    {
        return $this->TitleReplace;
    }

    /**
     * @param bool $TitleReplace
     * @return Product
     */
    public function setTitleReplace($TitleReplace)
    {
        $this->TitleReplace = $TitleReplace;
        return $this;
    }

    /**
     * @return Float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @param Float $TaxRate
     * @return Product
     */
    public function setTaxRate($TaxRate)
    {
        $this->TaxRate = $TaxRate;
        return $this;
    }

    /**
     * @return Float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param Float $Weight
     * @return Product
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }

    /**
     * @return String
     */
    public function getStocklocation1()
    {
        return $this->Stocklocation_1;
    }

    /**
     * @param String $Stocklocation_1
     * @return Product
     */
    public function setStocklocation1($Stocklocation_1)
    {
        $this->Stocklocation_1 = $Stocklocation_1;
        return $this;
    }

    /**
     * @return String
     */
    public function getStocklocation2()
    {
        return $this->Stocklocation_2;
    }

    /**
     * @param String $Stocklocation_2
     * @return Product
     */
    public function setStocklocation2($Stocklocation_2)
    {
        $this->Stocklocation_2 = $Stocklocation_2;
        return $this;
    }

    /**
     * @return String
     */
    public function getStocklocation3()
    {
        return $this->Stocklocation_3;
    }

    /**
     * @param String $Stocklocation_3
     * @return Product
     */
    public function setStocklocation3($Stocklocation_3)
    {
        $this->Stocklocation_3 = $Stocklocation_3;
        return $this;
    }

    /**
     * @return String
     */
    public function getStocklocation4()
    {
        return $this->Stocklocation_4;
    }

    /**
     * @param String $Stocklocation_4
     * @return Product
     */
    public function setStocklocation4($Stocklocation_4)
    {
        $this->Stocklocation_4 = $Stocklocation_4;
        return $this;
    }

    /**
     * @return String
     */
    public function getCountryOfOrigin()
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param String $CountryOfOrigin
     * @return Product
     */
    public function setCountryOfOrigin($CountryOfOrigin)
    {
        $this->CountryOfOrigin = $CountryOfOrigin;
        return $this;
    }

    /**
     * @return String
     */
    public function getSearchAlias()
    {
        return $this->SearchAlias;
    }

    /**
     * @param String $SearchAlias
     * @return Product
     */
    public function setSearchAlias($SearchAlias)
    {
        $this->SearchAlias = $SearchAlias;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFroogle()
    {
        return $this->Froogle;
    }

    /**
     * @param bool $Froogle
     * @return Product
     */
    public function setFroogle($Froogle)
    {
        $this->Froogle = $Froogle;
        return $this;
    }

    /**
     * @return bool
     */
    public function isKelkoo()
    {
        return $this->Kelkoo;
    }

    /**
     * @param bool $Kelkoo
     * @return Product
     */
    public function setKelkoo($Kelkoo)
    {
        $this->Kelkoo = $Kelkoo;
        return $this;
    }

    /**
     * @return String
     */
    public function getShippingGroup()
    {
        return $this->ShippingGroup;
    }

    /**
     * @param String $ShippingGroup
     * @return Product
     */
    public function setShippingGroup($ShippingGroup)
    {
        $this->ShippingGroup = $ShippingGroup;
        return $this;
    }

    /**
     * @return String
     */
    public function getShopShippingGroup()
    {
        return $this->ShopShippingGroup;
    }

    /**
     * @param String $ShopShippingGroup
     * @return Product
     */
    public function setShopShippingGroup($ShopShippingGroup)
    {
        $this->ShopShippingGroup = $ShopShippingGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getCrossCatalogID()
    {
        return $this->CrossCatalogID;
    }

    /**
     * @param int $CrossCatalogID
     * @return Product
     */
    public function setCrossCatalogID($CrossCatalogID)
    {
        $this->CrossCatalogID = $CrossCatalogID;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue1()
    {
        return $this->FreeValue1;
    }

    /**
     * @param String $FreeValue1
     * @return Product
     */
    public function setFreeValue1($FreeValue1)
    {
        $this->FreeValue1 = $FreeValue1;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue2()
    {
        return $this->FreeValue2;
    }

    /**
     * @param String $FreeValue2
     * @return Product
     */
    public function setFreeValue2($FreeValue2)
    {
        $this->FreeValue2 = $FreeValue2;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue3()
    {
        return $this->FreeValue3;
    }

    /**
     * @param String $FreeValue3
     * @return Product
     */
    public function setFreeValue3($FreeValue3)
    {
        $this->FreeValue3 = $FreeValue3;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue4()
    {
        return $this->FreeValue4;
    }

    /**
     * @param String $FreeValue4
     * @return Product
     */
    public function setFreeValue4($FreeValue4)
    {
        $this->FreeValue4 = $FreeValue4;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue5()
    {
        return $this->FreeValue5;
    }

    /**
     * @param String $FreeValue5
     * @return Product
     */
    public function setFreeValue5($FreeValue5)
    {
        $this->FreeValue5 = $FreeValue5;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue6()
    {
        return $this->FreeValue6;
    }

    /**
     * @param String $FreeValue6
     * @return Product
     */
    public function setFreeValue6($FreeValue6)
    {
        $this->FreeValue6 = $FreeValue6;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue7()
    {
        return $this->FreeValue7;
    }

    /**
     * @param String $FreeValue7
     * @return Product
     */
    public function setFreeValue7($FreeValue7)
    {
        $this->FreeValue7 = $FreeValue7;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue8()
    {
        return $this->FreeValue8;
    }

    /**
     * @param String $FreeValue8
     * @return Product
     */
    public function setFreeValue8($FreeValue8)
    {
        $this->FreeValue8 = $FreeValue8;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue9()
    {
        return $this->FreeValue9;
    }

    /**
     * @param String $FreeValue9
     * @return Product
     */
    public function setFreeValue9($FreeValue9)
    {
        $this->FreeValue9 = $FreeValue9;
        return $this;
    }

    /**
     * @return String
     */
    public function getFreeValue10()
    {
        return $this->FreeValue10;
    }

    /**
     * @param String $FreeValue10
     * @return Product
     */
    public function setFreeValue10($FreeValue10)
    {
        $this->FreeValue10 = $FreeValue10;
        return $this;
    }

    /**
     * @return String
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }

    /**
     * @param String $DeliveryTime
     * @return Product
     */
    public function setDeliveryTime($DeliveryTime)
    {
        $this->DeliveryTime = $DeliveryTime;
        return $this;
    }

    /**
     * @return String
     */
    public function getImageSmallURL()
    {
        return $this->ImageSmallURL;
    }

    /**
     * @param String $ImageSmallURL
     * @return Product
     */
    public function setImageSmallURL($ImageSmallURL)
    {
        $this->ImageSmallURL = $ImageSmallURL;
        return $this;
    }

    /**
     * @return String
     */
    public function getImageLargeURL()
    {
        return $this->ImageLargeURL;
    }

    /**
     * @param String $ImageLargeURL
     * @return Product
     */
    public function setImageLargeURL($ImageLargeURL)
    {
        $this->ImageLargeURL = $ImageLargeURL;
        return $this;
    }

    /**
     * @return String
     */
    public function getImageName()
    {
        return $this->ImageName;
    }

    /**
     * @param String $ImageName
     * @return Product
     */
    public function setImageName($ImageName)
    {
        $this->ImageName = $ImageName;
        return $this;
    }

    /**
     * @return String
     */
    public function getImageSource()
    {
        return $this->ImageSource;
    }

    /**
     * @param String $ImageSource
     * @return Product
     */
    public function setImageSource($ImageSource)
    {
        $this->ImageSource = $ImageSource;
        return $this;
    }

    /**
     * @return String
     */
    public function getManufacturerStandardProductIDType()
    {
        return $this->ManufacturerStandardProductIDType;
    }

    /**
     * @param String $ManufacturerStandardProductIDType
     * @return Product
     */
    public function setManufacturerStandardProductIDType($ManufacturerStandardProductIDType)
    {
        $this->ManufacturerStandardProductIDType = $ManufacturerStandardProductIDType;
        return $this;
    }

    /**
     * @return String
     */
    public function getManufacturerStandardProductIDValue()
    {
        return $this->ManufacturerStandardProductIDValue;
    }

    /**
     * @param String $ManufacturerStandardProductIDValue
     * @return Product
     */
    public function setManufacturerStandardProductIDValue($ManufacturerStandardProductIDValue)
    {
        $this->ManufacturerStandardProductIDValue = $ManufacturerStandardProductIDValue;
        return $this;
    }

    /**
     * @return String
     */
    public function getProductBrand()
    {
        return $this->ProductBrand;
    }

    /**
     * @param String $ProductBrand
     * @return Product
     */
    public function setProductBrand($ProductBrand)
    {
        $this->ProductBrand = $ProductBrand;
        return $this;
    }

    /**
     * @return String
     */
    public function getCustomsTariffNumber()
    {
        return $this->CustomsTariffNumber;
    }

    /**
     * @param String $CustomsTariffNumber
     * @return Product
     */
    public function setCustomsTariffNumber($CustomsTariffNumber)
    {
        $this->CustomsTariffNumber = $CustomsTariffNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getGoogleProductCategory()
    {
        return $this->GoogleProductCategory;
    }

    /**
     * @param String $GoogleProductCategory
     * @return Product
     */
    public function setGoogleProductCategory($GoogleProductCategory)
    {
        $this->GoogleProductCategory = $GoogleProductCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondition()
    {
        return $this->Condition;
    }

    /**
     * @param int $Condition
     * @return Product
     */
    public function setCondition($Condition)
    {
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * @return String
     */
    public function getPattern()
    {
        return $this->Pattern;
    }

    /**
     * @param String $Pattern
     * @return Product
     */
    public function setPattern($Pattern)
    {
        $this->Pattern = $Pattern;
        return $this;
    }

    /**
     * @return String
     */
    public function getMaterial()
    {
        return $this->Material;
    }

    /**
     * @param String $Material
     * @return Product
     */
    public function setMaterial($Material)
    {
        $this->Material = $Material;
        return $this;
    }

    /**
     * @return String
     */
    public function getItemColor()
    {
        return $this->ItemColor;
    }

    /**
     * @param String $ItemColor
     * @return Product
     */
    public function setItemColor($ItemColor)
    {
        $this->ItemColor = $ItemColor;
        return $this;
    }

    /**
     * @return String
     */
    public function getItemSize()
    {
        return $this->ItemSize;
    }

    /**
     * @param String $ItemSize
     * @return Product
     */
    public function setItemSize($ItemSize)
    {
        $this->ItemSize = $ItemSize;
        return $this;
    }

    /**
     * @return String
     */
    public function getCanonicalUrl()
    {
        return $this->CanonicalUrl;
    }

    /**
     * @param String $CanonicalUrl
     * @return Product
     */
    public function setCanonicalUrl($CanonicalUrl)
    {
        $this->CanonicalUrl = $CanonicalUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyClass()
    {
        return $this->EnergyClass;
    }

    /**
     * @param int $EnergyClass
     * @return Product
     */
    public function setEnergyClass($EnergyClass)
    {
        $this->EnergyClass = $EnergyClass;
        return $this;
    }

    /**
     * @return String
     */
    public function getEnergyClassPictureUrl()
    {
        return $this->EnergyClassPictureUrl;
    }

    /**
     * @param String $EnergyClassPictureUrl
     * @return Product
     */
    public function setEnergyClassPictureUrl($EnergyClassPictureUrl)
    {
        $this->EnergyClassPictureUrl = $EnergyClassPictureUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgeGroup()
    {
        return $this->AgeGroup;
    }

    /**
     * @param int $AgeGroup
     * @return Product
     */
    public function setAgeGroup($AgeGroup)
    {
        $this->AgeGroup = $AgeGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param int $Gender
     * @return Product
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
        return $this;
    }

    /**
     * @return Skus
     */
    public function getSkus()
    {
        return $this->Skus;
    }

    /**
     * @param Skus $Skus
     * @return Product
     */
    public function setSkus($Skus)
    {
        $this->Skus = $Skus;
        return $this;
    }

    /**
     * @return AddCatalogs
     */
    public function getAddCatalogs()
    {
        return $this->AddCatalogs;
    }

    /**
     * @param AddCatalogs $AddCatalogs
     * @return Product
     */
    public function setAddCatalogs($AddCatalogs)
    {
        $this->AddCatalogs = $AddCatalogs;
        return $this;
    }

    /**
     * @return AddAttributes
     */
    public function getAddAttributes()
    {
        return $this->AddAttributes;
    }

    /**
     * @param AddAttributes $AddAttributes
     * @return Product
     */
    public function setAddAttributes($AddAttributes)
    {
        $this->AddAttributes = $AddAttributes;
        return $this;
    }

    /**
     * @return AddBaseProducts
     */
    public function getAddBaseProducts()
    {
        return $this->AddBaseProducts;
    }

    /**
     * @param AddBaseProducts $AddBaseProducts
     * @return Product
     */
    public function setAddBaseProducts($AddBaseProducts)
    {
        $this->AddBaseProducts = $AddBaseProducts;
        return $this;
    }

    /**
     * @return PartsFitment
     */
    public function getPartsFitment()
    {
        return $this->PartsFitment;
    }

    /**
     * @param PartsFitment $PartsFitment
     * @return Product
     */
    public function setPartsFitment($PartsFitment)
    {
        $this->PartsFitment = $PartsFitment;
        return $this;
    }

    /**
     * @return ProductPictures
     */
    public function getProductPictures()
    {
        return $this->ProductPictures;
    }

    /**
     * @param ProductPictures $ProductPictures
     * @return Product
     */
    public function setProductPictures($ProductPictures)
    {
        $this->ProductPictures = $ProductPictures;
        return $this;
    }

    /**
     * @return ScaledDiscounts
     */
    public function getScaledDiscounts()
    {
        return $this->ScaledDiscounts;
    }

    /**
     * @param ScaledDiscounts $ScaledDiscounts
     * @return Product
     */
    public function setScaledDiscounts($ScaledDiscounts)
    {
        $this->ScaledDiscounts = $ScaledDiscounts;
        return $this;
    }

    /**
     * @return AdditionalDescriptionFields
     */
    public function getAdditionalDescriptionFields()
    {
        return $this->AdditionalDescriptionFields;
    }

    /**
     * @param AdditionalDescriptionFields $AdditionalDescriptionFields
     * @return Product
     */
    public function setAdditionalDescriptionFields($AdditionalDescriptionFields)
    {
        $this->AdditionalDescriptionFields = $AdditionalDescriptionFields;
        return $this;
    }
}

class ProductIdent
{
    /** @var Boolean */ private $ProductInsert;
    /** @var Integer */ private $BaseProductType;
    /** @var String */ private $UserProductID;
    /** @var Integer */ private $ProductID;
    /** @var Float */ private $Anr;
    /** @var String */ private $EAN;

    /**
     * @return bool
     */
    public function isProductInsert()
    {
        return $this->ProductInsert;
    }

    /**
     * @param bool $ProductInsert
     * @return ProductIdent
     */
    public function setProductInsert($ProductInsert)
    {
        $this->ProductInsert = $ProductInsert;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseProductType()
    {
        return $this->BaseProductType;
    }

    /**
     * @param int $BaseProductType
     * @return ProductIdent
     */
    public function setBaseProductType($BaseProductType)
    {
        $this->BaseProductType = $BaseProductType;
        return $this;
    }

    /**
     * @return String
     */
    public function getUserProductID()
    {
        return $this->UserProductID;
    }

    /**
     * @param String $UserProductID
     * @return ProductIdent
     */
    public function setUserProductID($UserProductID)
    {
        $this->UserProductID = $UserProductID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return ProductIdent
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
        return $this;
    }

    /**
     * @return Float
     */
    public function getAnr()
    {
        return $this->Anr;
    }

    /**
     * @param Float $Anr
     * @return ProductIdent
     */
    public function setAnr($Anr)
    {
        $this->Anr = $Anr;
        return $this;
    }

    /**
     * @return String
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * @param String $EAN
     * @return ProductIdent
     */
    public function setEAN($EAN)
    {
        $this->EAN = $EAN;
        return $this;
    }
}

class Skus
{
    /** @var Integer */ private $UpdateAction;
    /** @var string[] */ private $Sku;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->UpdateAction;
    }

    /**
     * @param int $UpdateAction
     * @return Skus
     */
    public function setUpdateAction($UpdateAction)
    {
        $this->UpdateAction = $UpdateAction;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSku()
    {
        return $this->Sku;
    }

    /**
     * @param string[] $Sku
     * @return Skus
     */
    public function setSku($Sku)
    {
        $this->Sku = $Sku;
        return $this;
    }
}

class AddCatalogs
{
    /** @var Integer */ private $UpdateAction;
    /** @var AddCatalog[] */ private $AddCatalog;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->UpdateAction;
    }

    /**
     * @param int $UpdateAction
     * @return AddCatalogs
     */
    public function setUpdateAction($UpdateAction)
    {
        $this->UpdateAction = $UpdateAction;
        return $this;
    }

    /**
     * @return AddCatalog[]
     */
    public function getAddCatalog()
    {
        return $this->AddCatalog;
    }

    /**
     * @param AddCatalog[] $AddCatalog
     * @return AddCatalogs
     */
    public function setAddCatalog($AddCatalog)
    {
        $this->AddCatalog = $AddCatalog;
        return $this;
    }
}

class AddCatalog
{
    /** @var Integer */ private $CatalogID;
    /** @var String */ private $CatalogName;
    /** @var Integer */ private $CatalogLevel;

    /**
     * @return int
     */
    public function getCatalogID()
    {
        return $this->CatalogID;
    }

    /**
     * @param int $CatalogID
     * @return AddCatalog
     */
    public function setCatalogID($CatalogID)
    {
        $this->CatalogID = $CatalogID;
        return $this;
    }

    /**
     * @return String
     */
    public function getCatalogName()
    {
        return $this->CatalogName;
    }

    /**
     * @param String $CatalogName
     * @return AddCatalog
     */
    public function setCatalogName($CatalogName)
    {
        $this->CatalogName = $CatalogName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatalogLevel()
    {
        return $this->CatalogLevel;
    }

    /**
     * @param int $CatalogLevel
     * @return AddCatalog
     */
    public function setCatalogLevel($CatalogLevel)
    {
        $this->CatalogLevel = $CatalogLevel;
        return $this;
    }
}

class AddAttributes
{
    /** @var Integer */ private $UpdateAction;
    /** @var AddAttribut[] */ private $AddAttribut;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->UpdateAction;
    }

    /**
     * @param int $UpdateAction
     * @return AddAttributes
     */
    public function setUpdateAction($UpdateAction)
    {
        $this->UpdateAction = $UpdateAction;
        return $this;
    }

    /**
     * @return AddAttribut[]
     */
    public function getAddAttribut()
    {
        return $this->AddAttribut;
    }

    /**
     * @param AddAttribut[] $AddAttribut
     * @return AddAttributes
     */
    public function setAddAttribut($AddAttribut)
    {
        $this->AddAttribut = $AddAttribut;
        return $this;
    }
}

class AddAttribut
{
    /** @var String */ private $AttributName;
    /** @var String */ private $AttributValue;
    /** @var Integer */ private $AttributTyp;
    /** @var Integer */ private $AttributPosition;
    /** @var Boolean */ private $AttributRequired;

    /**
     * @return String
     */
    public function getAttributName()
    {
        return $this->AttributName;
    }

    /**
     * @param String $AttributName
     * @return AddAttribut
     */
    public function setAttributName($AttributName)
    {
        $this->AttributName = $AttributName;
        return $this;
    }

    /**
     * @return String
     */
    public function getAttributValue()
    {
        return $this->AttributValue;
    }

    /**
     * @param String $AttributValue
     * @return AddAttribut
     */
    public function setAttributValue($AttributValue)
    {
        $this->AttributValue = $AttributValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributTyp()
    {
        return $this->AttributTyp;
    }

    /**
     * @param int $AttributTyp
     * @return AddAttribut
     */
    public function setAttributTyp($AttributTyp)
    {
        $this->AttributTyp = $AttributTyp;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributPosition()
    {
        return $this->AttributPosition;
    }

    /**
     * @param int $AttributPosition
     * @return AddAttribut
     */
    public function setAttributPosition($AttributPosition)
    {
        $this->AttributPosition = $AttributPosition;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAttributRequired()
    {
        return $this->AttributRequired;
    }

    /**
     * @param bool $AttributRequired
     * @return AddAttribut
     */
    public function setAttributRequired($AttributRequired)
    {
        $this->AttributRequired = $AttributRequired;
        return $this;
    }
}

class AddBaseProducts
{
    /** @var Integer */ private $UpdateAction;
    /** @var AddBaseProduct[] */ private $AddBaseProduct;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->UpdateAction;
    }

    /**
     * @param int $UpdateAction
     * @return AddBaseProducts
     */
    public function setUpdateAction($UpdateAction)
    {
        $this->UpdateAction = $UpdateAction;
        return $this;
    }

    /**
     * @return AddBaseProduct[]
     */
    public function getAddBaseProduct()
    {
        return $this->AddBaseProduct;
    }

    /**
     * @param AddBaseProduct[] $AddBaseProduct
     * @return AddBaseProducts
     */
    public function setAddBaseProduct($AddBaseProduct)
    {
        $this->AddBaseProduct = $AddBaseProduct;
        return $this;
    }
}

class AddBaseProduct
{
    /** @var Integer */ private $ProductID;
    /** @var String */ private $ProductLabel;
    /** @var Integer */ private $ProductPos;
    /** @var Integer */ private $DefaultProduct;
    /** @var Integer */ private $ProductQuantity;

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return AddBaseProduct
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;
        return $this;
    }

    /**
     * @return String
     */
    public function getProductLabel()
    {
        return $this->ProductLabel;
    }

    /**
     * @param String $ProductLabel
     * @return AddBaseProduct
     */
    public function setProductLabel($ProductLabel)
    {
        $this->ProductLabel = $ProductLabel;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductPos()
    {
        return $this->ProductPos;
    }

    /**
     * @param int $ProductPos
     * @return AddBaseProduct
     */
    public function setProductPos($ProductPos)
    {
        $this->ProductPos = $ProductPos;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultProduct()
    {
        return $this->DefaultProduct;
    }

    /**
     * @param int $DefaultProduct
     * @return AddBaseProduct
     */
    public function setDefaultProduct($DefaultProduct)
    {
        $this->DefaultProduct = $DefaultProduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->ProductQuantity;
    }

    /**
     * @param int $ProductQuantity
     * @return AddBaseProduct
     */
    public function setProductQuantity($ProductQuantity)
    {
        $this->ProductQuantity = $ProductQuantity;
        return $this;
    }
}

class PartsFitment
{
    /** @var PartsProperties */ private $PartsProperties;

    /**
     * @return PartsProperties
     */
    public function getPartsProperties()
    {
        return $this->PartsProperties;
    }

    /**
     * @param PartsProperties $PartsProperties
     * @return PartsFitment
     */
    public function setPartsProperties($PartsProperties)
    {
        $this->PartsProperties = $PartsProperties;
        return $this;
    }
}

class PartsProperties
{
    /** @var PartsProperty[] */ private $PartsProperty;

    /**
     * @return PartsProperty[]
     */
    public function getPartsProperty()
    {
        return $this->PartsProperty;
    }

    /**
     * @param PartsProperty[] $PartsProperty
     * @return PartsProperties
     */
    public function setPartsProperty($PartsProperty)
    {
        $this->PartsProperty = $PartsProperty;
        return $this;
    }
}

class PartsProperty
{
    /** @var String */ private $PropertyName;
    /** @var String */ private $PropertyValue;

    /**
     * @return String
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }

    /**
     * @param String $PropertyName
     * @return PartsProperty
     */
    public function setPropertyName($PropertyName)
    {
        $this->PropertyName = $PropertyName;
        return $this;
    }

    /**
     * @return String
     */
    public function getPropertyValue()
    {
        return $this->PropertyValue;
    }

    /**
     * @param String $PropertyValue
     * @return PartsProperty
     */
    public function setPropertyValue($PropertyValue)
    {
        $this->PropertyValue = $PropertyValue;
        return $this;
    }
}

class ProductPictures
{
    /** @var ProductPicture[] */ private $ProductPicture;

    /**
     * @return ProductPicture[]
     */
    public function getProductPicture()
    {
        return $this->ProductPicture;
    }

    /**
     * @param ProductPicture[] $ProductPicture
     * @return ProductPictures
     */
    public function setProductPicture($ProductPicture)
    {
        $this->ProductPicture = $ProductPicture;
        return $this;
    }
}

class ProductPicture
{
    /** @var Integer */ private $Nr;
    /** @var String */ private $Url;
    /** @var String */ private $AltText;
    /** @var object */ private $Childs;

    /**
     * @return int
     */
    public function getNr()
    {
        return $this->Nr;
    }

    /**
     * @param int $Nr
     * @return ProductPicture
     */
    public function setNr($Nr)
    {
        $this->Nr = $Nr;
        return $this;
    }

    /**
     * @return String
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param String $Url
     * @return ProductPicture
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

    /**
     * @return String
     */
    public function getAltText()
    {
        return $this->AltText;
    }

    /**
     * @param String $AltText
     * @return ProductPicture
     */
    public function setAltText($AltText)
    {
        $this->AltText = $AltText;
        return $this;
    }

    /**
     * @return object
     */
    public function getChilds()
    {
        return $this->Childs;
    }

    /**
     * @param object $Childs
     * @return ProductPicture
     */
    public function setChilds($Childs)
    {
        $this->Childs = $Childs;
        return $this;
    }
}

class ScaledDiscounts
{
    /** @var ScaledDiscount[] */ private $ScaledDiscount;

    /**
     * @return ScaledDiscount[]
     */
    public function getScaledDiscount()
    {
        return $this->ScaledDiscount;
    }

    /**
     * @param ScaledDiscount[] $ScaledDiscount
     * @return ScaledDiscounts
     */
    public function setScaledDiscount($ScaledDiscount)
    {
        $this->ScaledDiscount = $ScaledDiscount;
        return $this;
    }
}

class ScaledDiscount
{
    /** @var Integer */ private $ScaledQuantity;
    /** @var Float */ private $ScaledPrice;
    /** @var Float */ private $ScaledDPrice;

    /**
     * @return int
     */
    public function getScaledQuantity()
    {
        return $this->ScaledQuantity;
    }

    /**
     * @param int $ScaledQuantity
     * @return ScaledDiscount
     */
    public function setScaledQuantity($ScaledQuantity)
    {
        $this->ScaledQuantity = $ScaledQuantity;
        return $this;
    }

    /**
     * @return Float
     */
    public function getScaledPrice()
    {
        return $this->ScaledPrice;
    }

    /**
     * @param Float $ScaledPrice
     * @return ScaledDiscount
     */
    public function setScaledPrice($ScaledPrice)
    {
        $this->ScaledPrice = $ScaledPrice;
        return $this;
    }

    /**
     * @return Float
     */
    public function getScaledDPrice()
    {
        return $this->ScaledDPrice;
    }

    /**
     * @param Float $ScaledDPrice
     * @return ScaledDiscount
     */
    public function setScaledDPrice($ScaledDPrice)
    {
        $this->ScaledDPrice = $ScaledDPrice;
        return $this;
    }
}

class AdditionalDescriptionFields
{
    /** @var AdditionalDescriptionField[] */ private $AdditionalDescriptionField;

    /**
     * @return AdditionalDescriptionField[]
     */
    public function getAdditionalDescriptionField()
    {
        return $this->AdditionalDescriptionField;
    }

    /**
     * @param AdditionalDescriptionField[] $AdditionalDescriptionField
     * @return AdditionalDescriptionFields
     */
    public function setAdditionalDescriptionField($AdditionalDescriptionField)
    {
        $this->AdditionalDescriptionField = $AdditionalDescriptionField;
        return $this;
    }
}

class AdditionalDescriptionField
{
    /** @var String */ private $FieldIDIdent;
    /** @var String */ private $FieldNameIdent;

    /** @var Integer */ private $FieldID;
    /** @var String */ private $FieldName;
    /** @var String */ private $FieldLabel;
    /** @var String */ private $FieldContent;

    /**
     * @return String
     */
    public function getFieldIDIdent()
    {
        return $this->FieldIDIdent;
    }

    /**
     * @param String $FieldIDIdent
     * @return AdditionalDescriptionField
     */
    public function setFieldIDIdent($FieldIDIdent)
    {
        $this->FieldIDIdent = $FieldIDIdent;
        return $this;
    }

    /**
     * @return String
     */
    public function getFieldNameIdent()
    {
        return $this->FieldNameIdent;
    }

    /**
     * @param String $FieldNameIdent
     * @return AdditionalDescriptionField
     */
    public function setFieldNameIdent($FieldNameIdent)
    {
        $this->FieldNameIdent = $FieldNameIdent;
        return $this;
    }

    /**
     * @return int
     */
    public function getFieldID()
    {
        return $this->FieldID;
    }

    /**
     * @param int $FieldID
     * @return AdditionalDescriptionField
     */
    public function setFieldID($FieldID)
    {
        $this->FieldID = $FieldID;
        return $this;
    }

    /**
     * @return String
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }

    /**
     * @param String $FieldName
     * @return AdditionalDescriptionField
     */
    public function setFieldName($FieldName)
    {
        $this->FieldName = $FieldName;
        return $this;
    }

    /**
     * @return String
     */
    public function getFieldLabel()
    {
        return $this->FieldLabel;
    }

    /**
     * @param String $FieldLabel
     * @return AdditionalDescriptionField
     */
    public function setFieldLabel($FieldLabel)
    {
        $this->FieldLabel = $FieldLabel;
        return $this;
    }

    /**
     * @return String
     */
    public function getFieldContent()
    {
        return $this->FieldContent;
    }

    /**
     * @param String $FieldContent
     * @return AdditionalDescriptionField
     */
    public function setFieldContent($FieldContent)
    {
        $this->FieldContent = $FieldContent;
        return $this;
    }
}
