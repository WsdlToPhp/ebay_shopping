<?php
/**
 * File for class EbayShoppingStructShippingCostSummaryType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructShippingCostSummaryType originally named ShippingCostSummaryType
 * Documentation : Type for the shipping-related details for an item or transaction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructShippingCostSummaryType extends EbayShoppingWsdlClass
{
	/**
	 * The ShippingServiceName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of a shipping service.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The basic shipping cost of the item. This reflects the domestic shipping cost or the international shipping costs, depending on which applies (that is, whether the bidder/buyer is in the same country as the listing site of the item). <br> <br> In GetSingleItem, this is always returned when ShippingCostSummary is returned, except for when the ShippingType is Freight. <br> <br> GetShippingCosts: <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping). <br> <i>Shipping surcharge:</i> With a request version of 665 or greater, shipping cost includes any surcharge, and surcharge is not returned as an individual tag. With a request version lower than 665, surcharge is not part of the total cost and is returned as its own tag.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The InsuranceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The cost of insurance. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, see EndTime or ListingStatus in GetSingleItem.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $InsuranceCost;
	/**
	 * The ShippingType
	 * Meta informations extracted from the WSDL
	 * - documentation : How the seller stated that cost of shipping is to be determined, such as flat rate or calculated.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumShippingTypeCodeType
	 */
	public $ShippingType;
	/**
	 * The LocalPickup
	 * Meta informations extracted from the WSDL
	 * - documentation : If ShippingCosts is specified for the IncludeSelector, and if the seller has specified local pickup for this item; the LocalPickup boolean is returned as true. This indicates that the seller does not ship this item. If local pickup was not specified for this item by the seller, the LocalPickup boolean is not returned.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $LocalPickup;
	/**
	 * The InsuranceOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The ListedShippingServiceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The listed shipping cost of the item. If multiple items were purchased, this includes the listed ShippingServiceAdditionalCost. <br> <br> In GetSingleItem, this is always returned when ShippingCostSummary is returned, except when the ShippingType is Freight.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ListedShippingServiceCost;
	/**
	 * The ImportCharge
	 * Meta informations extracted from the WSDL
	 * - documentation : The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ImportCharge;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ShippingCostSummaryType
	 * @see parent::__construct()
	 * @param string $_shippingServiceName
	 * @param EbayShoppingStructAmountType $_shippingServiceCost
	 * @param EbayShoppingStructAmountType $_insuranceCost
	 * @param EbayShoppingEnumShippingTypeCodeType $_shippingType
	 * @param boolean $_localPickup
	 * @param EbayShoppingEnumInsuranceOptionCodeType $_insuranceOption
	 * @param EbayShoppingStructAmountType $_listedShippingServiceCost
	 * @param EbayShoppingStructAmountType $_importCharge
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructShippingCostSummaryType
	 */
	public function __construct($_shippingServiceName = NULL,$_shippingServiceCost = NULL,$_insuranceCost = NULL,$_shippingType = NULL,$_localPickup = NULL,$_insuranceOption = NULL,$_listedShippingServiceCost = NULL,$_importCharge = NULL,$_any = NULL)
	{
		parent::__construct(array('ShippingServiceName'=>$_shippingServiceName,'ShippingServiceCost'=>$_shippingServiceCost,'InsuranceCost'=>$_insuranceCost,'ShippingType'=>$_shippingType,'LocalPickup'=>$_localPickup,'InsuranceOption'=>$_insuranceOption,'ListedShippingServiceCost'=>$_listedShippingServiceCost,'ImportCharge'=>$_importCharge,'any'=>$_any));
	}
	/**
	 * Get ShippingServiceName value
	 * @return string|null
	 */
	public function getShippingServiceName()
	{
		return $this->ShippingServiceName;
	}
	/**
	 * Set ShippingServiceName value
	 * @param string $_shippingServiceName the ShippingServiceName
	 * @return string
	 */
	public function setShippingServiceName($_shippingServiceName)
	{
		return ($this->ShippingServiceName = $_shippingServiceName);
	}
	/**
	 * Get ShippingServiceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * Set ShippingServiceCost value
	 * @param EbayShoppingStructAmountType $_shippingServiceCost the ShippingServiceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setShippingServiceCost($_shippingServiceCost)
	{
		return ($this->ShippingServiceCost = $_shippingServiceCost);
	}
	/**
	 * Get InsuranceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}
	/**
	 * Set InsuranceCost value
	 * @param EbayShoppingStructAmountType $_insuranceCost the InsuranceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setInsuranceCost($_insuranceCost)
	{
		return ($this->InsuranceCost = $_insuranceCost);
	}
	/**
	 * Get ShippingType value
	 * @return EbayShoppingEnumShippingTypeCodeType|null
	 */
	public function getShippingType()
	{
		return $this->ShippingType;
	}
	/**
	 * Set ShippingType value
	 * @uses EbayShoppingEnumShippingTypeCodeType::valueIsValid()
	 * @param EbayShoppingEnumShippingTypeCodeType $_shippingType the ShippingType
	 * @return EbayShoppingEnumShippingTypeCodeType
	 */
	public function setShippingType($_shippingType)
	{
		if(!EbayShoppingEnumShippingTypeCodeType::valueIsValid($_shippingType))
		{
			return false;
		}
		return ($this->ShippingType = $_shippingType);
	}
	/**
	 * Get LocalPickup value
	 * @return boolean|null
	 */
	public function getLocalPickup()
	{
		return $this->LocalPickup;
	}
	/**
	 * Set LocalPickup value
	 * @param boolean $_localPickup the LocalPickup
	 * @return boolean
	 */
	public function setLocalPickup($_localPickup)
	{
		return ($this->LocalPickup = $_localPickup);
	}
	/**
	 * Get InsuranceOption value
	 * @return EbayShoppingEnumInsuranceOptionCodeType|null
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set InsuranceOption value
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::valueIsValid()
	 * @param EbayShoppingEnumInsuranceOptionCodeType $_insuranceOption the InsuranceOption
	 * @return EbayShoppingEnumInsuranceOptionCodeType
	 */
	public function setInsuranceOption($_insuranceOption)
	{
		if(!EbayShoppingEnumInsuranceOptionCodeType::valueIsValid($_insuranceOption))
		{
			return false;
		}
		return ($this->InsuranceOption = $_insuranceOption);
	}
	/**
	 * Get ListedShippingServiceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getListedShippingServiceCost()
	{
		return $this->ListedShippingServiceCost;
	}
	/**
	 * Set ListedShippingServiceCost value
	 * @param EbayShoppingStructAmountType $_listedShippingServiceCost the ListedShippingServiceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setListedShippingServiceCost($_listedShippingServiceCost)
	{
		return ($this->ListedShippingServiceCost = $_listedShippingServiceCost);
	}
	/**
	 * Get ImportCharge value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getImportCharge()
	{
		return $this->ImportCharge;
	}
	/**
	 * Set ImportCharge value
	 * @param EbayShoppingStructAmountType $_importCharge the ImportCharge
	 * @return EbayShoppingStructAmountType
	 */
	public function setImportCharge($_importCharge)
	{
		return ($this->ImportCharge = $_importCharge);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructShippingCostSummaryType::setAny()
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
	 * @return EbayShoppingStructShippingCostSummaryType
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