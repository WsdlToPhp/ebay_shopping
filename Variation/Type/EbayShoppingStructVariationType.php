<?php
/**
 * File for class EbayShoppingStructVariationType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructVariationType originally named VariationType
 * Documentation : This element hold the values that define the SKU, StartPrice, Quantity, VariationDetails, and VariationSpecifics.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructVariationType extends EbayShoppingWsdlClass
{
	/**
	 * The SKU
	 * Meta informations extracted from the WSDL
	 * - documentation : An SKU (stock keeping unit) is an identifier defined by a seller. If you need to contact the seller to ask a question about a particular variation, you can mention the SKU (if present) to help the seller identify the variation you're interested in. Only returned if the seller chose to specify a SKU for the variation.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SKU;
	/**
	 * The StartPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The fixed price of all items identified by this variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 5.00. <br> <br> Each variation has its own price, and the prices can be different for each variation. This enables sellers to provide discounts on certain variations without affecting the price of others. Always returned) for multi-variation listings.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $StartPrice;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of items available for sale that are associated with this variation.
	 * - minOccurs : 0
	 * @var int
	 */
	public $Quantity;
	/**
	 * The VariationSpecifics
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of name/value pairs that uniquely identify the variation within the listing. All variations specify the same set of names, and each variation provides a unique combination of values for those names. For example, if the items vary by color and size, then every variation specifies Color and Size as names, and no two variations can specify the same combination of color and size values. Use this information to identify a variation of interest when you communicate with the seller. <br> <br> If your application supports PlaceOffer (in the Trading API), you use this information to uniquely identify the variation that you want to purchase.
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The QuantitySold
	 * Meta informations extracted from the WSDL
	 * - documentation : Not used. See SellingStatus.QuantitySold instead.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The SellingStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the variation's current price and quantity sold. Always returned when variations are present.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The DiscountPriceInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "sepcial account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items.
	 * - minOccurs : 0
	 * @var EbayShoppingStructDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for VariationType
	 * @see parent::__construct()
	 * @param string $_sKU
	 * @param EbayShoppingStructAmountType $_startPrice
	 * @param int $_quantity
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecifics
	 * @param int $_quantitySold
	 * @param EbayShoppingStructSellingStatusType $_sellingStatus
	 * @param EbayShoppingStructDiscountPriceInfoType $_discountPriceInfo
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructVariationType
	 */
	public function __construct($_sKU = NULL,$_startPrice = NULL,$_quantity = NULL,$_variationSpecifics = NULL,$_quantitySold = NULL,$_sellingStatus = NULL,$_discountPriceInfo = NULL,$_any = NULL)
	{
		parent::__construct(array('SKU'=>$_sKU,'StartPrice'=>$_startPrice,'Quantity'=>$_quantity,'VariationSpecifics'=>($_variationSpecifics instanceof EbayShoppingStructNameValueListArrayType)?$_variationSpecifics:new EbayShoppingStructNameValueListArrayType($_variationSpecifics),'QuantitySold'=>$_quantitySold,'SellingStatus'=>$_sellingStatus,'DiscountPriceInfo'=>$_discountPriceInfo,'any'=>$_any));
	}
	/**
	 * Get SKU value
	 * @return string|null
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set SKU value
	 * @param string $_sKU the SKU
	 * @return string
	 */
	public function setSKU($_sKU)
	{
		return ($this->SKU = $_sKU);
	}
	/**
	 * Get StartPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set StartPrice value
	 * @param EbayShoppingStructAmountType $_startPrice the StartPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setStartPrice($_startPrice)
	{
		return ($this->StartPrice = $_startPrice);
	}
	/**
	 * Get Quantity value
	 * @return int|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param int $_quantity the Quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
	}
	/**
	 * Get VariationSpecifics value
	 * @return EbayShoppingStructNameValueListArrayType|null
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * Set VariationSpecifics value
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecifics the VariationSpecifics
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function setVariationSpecifics($_variationSpecifics)
	{
		return ($this->VariationSpecifics = $_variationSpecifics);
	}
	/**
	 * Get QuantitySold value
	 * @return int|null
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set QuantitySold value
	 * @param int $_quantitySold the QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_quantitySold)
	{
		return ($this->QuantitySold = $_quantitySold);
	}
	/**
	 * Get SellingStatus value
	 * @return EbayShoppingStructSellingStatusType|null
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * Set SellingStatus value
	 * @param EbayShoppingStructSellingStatusType $_sellingStatus the SellingStatus
	 * @return EbayShoppingStructSellingStatusType
	 */
	public function setSellingStatus($_sellingStatus)
	{
		return ($this->SellingStatus = $_sellingStatus);
	}
	/**
	 * Get DiscountPriceInfo value
	 * @return EbayShoppingStructDiscountPriceInfoType|null
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}
	/**
	 * Set DiscountPriceInfo value
	 * @param EbayShoppingStructDiscountPriceInfoType $_discountPriceInfo the DiscountPriceInfo
	 * @return EbayShoppingStructDiscountPriceInfoType
	 */
	public function setDiscountPriceInfo($_discountPriceInfo)
	{
		return ($this->DiscountPriceInfo = $_discountPriceInfo);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructVariationType::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructVariationType
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>