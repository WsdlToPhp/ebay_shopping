<?php
/**
 * File for class EbayShoppingStructShippingDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructShippingDetailsType originally named ShippingDetailsType
 * Documentation : Type for the shipping-related details for an item or transaction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructShippingDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The GetItFast
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the seller has opted the listing into the Get It Fast feature. If GetItFast is true, and if at least one of the domestic shipping services offered by the seller is an expedited shipping service, every shipping service offered by the seller is considered a Get It Fast service, and the seller commits to delivering the item to the buyer-selected shipping service within one day.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The InsuranceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The cost of insurance. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $InsuranceCost;
	/**
	 * The InsuranceOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The InternationalShippingServiceOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping costs and options related to an international shipping service. For calculated shipping, postal code must be known to determine final shipping cost (and this can only be known if a transaction has been created). For GetShippingCosts, if the postal code or bidder is in the same country as the listing site for the item, it is "domestic shipping" and this container is not returned (and ShippingServiceOption is returned instead). Otherwise, it is "international shipping" and this container is returned. <br> <br> For GetShippingCosts, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructInternationalShippingServiceOptionType
	 */
	public $InternationalShippingServiceOption;
	/**
	 * The SalesTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Sales tax details. US site only. Flat and calculated shipping. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The ShippingRateErrorMessage
	 * Meta informations extracted from the WSDL
	 * - documentation : For most applicable calls, returns the words No Error or returns an error message related to an attempt to calculate shipping rates. For calculated shipping only. <br> <br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingRateErrorMessage;
	/**
	 * The ShippingServiceOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping costs and options related to a domestic shipping service. For GetShippingCosts, if the postal code or bidder is in the same country as the listing site for the item, it is "domestic shipping" and this container is returned. Otherwise, it is "international shipping" and this container is not returned (and InternationalShippingServiceOption is returned instead, if it exists). For calculated shipping, postal code must be known to determine final shipping cost (and this can only be known if a transaction has been created). For flat shipping: if the listing has not yet ended, any domestic shipping details are returned; if the listing has ended, domestic shipping details are only returned if the buyer's location is "domestic" (that is, it is the same country as the listing site). <br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructShippingServiceOptionType
	 */
	public $ShippingServiceOption;
	/**
	 * The TaxTable
	 * Meta informations extracted from the WSDL
	 * - documentation : Tax details for a jurisdiction such as a state or province. Returned empty in if no tax table was used. <br> <br> Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var EbayShoppingStructTaxTableType
	 */
	public $TaxTable;
	/**
	 * The InternationalInsuranceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The cost of insurance for items shipped internationally. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $InternationalInsuranceCost;
	/**
	 * The InternationalInsuranceOption
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether the seller offers shipping insurance for items shipped internationally and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumInsuranceOptionCodeType
	 */
	public $InternationalInsuranceOption;
	/**
	 * The CODCost
	 * Meta informations extracted from the WSDL
	 * - documentation : Italy site (site ID 101) only. Contains the cost of cash-on-delivery shipping.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $CODCost;
	/**
	 * The ExcludeShipToLocation
	 * Meta informations extracted from the WSDL
	 * - documentation : A location to which the seller will not ship. Returned only if set via Trading API. Returned only with a request version of 665 or greater.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ShippingDetailsType
	 * @see parent::__construct()
	 * @param boolean $_getItFast
	 * @param EbayShoppingStructAmountType $_insuranceCost
	 * @param EbayShoppingEnumInsuranceOptionCodeType $_insuranceOption
	 * @param EbayShoppingStructInternationalShippingServiceOptionType $_internationalShippingServiceOption
	 * @param EbayShoppingStructSalesTaxType $_salesTax
	 * @param string $_shippingRateErrorMessage
	 * @param EbayShoppingStructShippingServiceOptionType $_shippingServiceOption
	 * @param EbayShoppingStructTaxTableType $_taxTable
	 * @param EbayShoppingStructAmountType $_internationalInsuranceCost
	 * @param EbayShoppingEnumInsuranceOptionCodeType $_internationalInsuranceOption
	 * @param EbayShoppingStructAmountType $_cODCost
	 * @param string $_excludeShipToLocation
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructShippingDetailsType
	 */
	public function __construct($_getItFast = NULL,$_insuranceCost = NULL,$_insuranceOption = NULL,$_internationalShippingServiceOption = NULL,$_salesTax = NULL,$_shippingRateErrorMessage = NULL,$_shippingServiceOption = NULL,$_taxTable = NULL,$_internationalInsuranceCost = NULL,$_internationalInsuranceOption = NULL,$_cODCost = NULL,$_excludeShipToLocation = NULL,$_any = NULL)
	{
		parent::__construct(array('GetItFast'=>$_getItFast,'InsuranceCost'=>$_insuranceCost,'InsuranceOption'=>$_insuranceOption,'InternationalShippingServiceOption'=>$_internationalShippingServiceOption,'SalesTax'=>$_salesTax,'ShippingRateErrorMessage'=>$_shippingRateErrorMessage,'ShippingServiceOption'=>$_shippingServiceOption,'TaxTable'=>$_taxTable,'InternationalInsuranceCost'=>$_internationalInsuranceCost,'InternationalInsuranceOption'=>$_internationalInsuranceOption,'CODCost'=>$_cODCost,'ExcludeShipToLocation'=>$_excludeShipToLocation,'any'=>$_any));
	}
	/**
	 * Get GetItFast value
	 * @return boolean|null
	 */
	public function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * Set GetItFast value
	 * @param boolean $_getItFast the GetItFast
	 * @return boolean
	 */
	public function setGetItFast($_getItFast)
	{
		return ($this->GetItFast = $_getItFast);
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
	 * Get InternationalShippingServiceOption value
	 * @return EbayShoppingStructInternationalShippingServiceOptionType|null
	 */
	public function getInternationalShippingServiceOption()
	{
		return $this->InternationalShippingServiceOption;
	}
	/**
	 * Set InternationalShippingServiceOption value
	 * @param EbayShoppingStructInternationalShippingServiceOptionType $_internationalShippingServiceOption the InternationalShippingServiceOption
	 * @return EbayShoppingStructInternationalShippingServiceOptionType
	 */
	public function setInternationalShippingServiceOption($_internationalShippingServiceOption)
	{
		return ($this->InternationalShippingServiceOption = $_internationalShippingServiceOption);
	}
	/**
	 * Get SalesTax value
	 * @return EbayShoppingStructSalesTaxType|null
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set SalesTax value
	 * @param EbayShoppingStructSalesTaxType $_salesTax the SalesTax
	 * @return EbayShoppingStructSalesTaxType
	 */
	public function setSalesTax($_salesTax)
	{
		return ($this->SalesTax = $_salesTax);
	}
	/**
	 * Get ShippingRateErrorMessage value
	 * @return string|null
	 */
	public function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * Set ShippingRateErrorMessage value
	 * @param string $_shippingRateErrorMessage the ShippingRateErrorMessage
	 * @return string
	 */
	public function setShippingRateErrorMessage($_shippingRateErrorMessage)
	{
		return ($this->ShippingRateErrorMessage = $_shippingRateErrorMessage);
	}
	/**
	 * Get ShippingServiceOption value
	 * @return EbayShoppingStructShippingServiceOptionType|null
	 */
	public function getShippingServiceOption()
	{
		return $this->ShippingServiceOption;
	}
	/**
	 * Set ShippingServiceOption value
	 * @param EbayShoppingStructShippingServiceOptionType $_shippingServiceOption the ShippingServiceOption
	 * @return EbayShoppingStructShippingServiceOptionType
	 */
	public function setShippingServiceOption($_shippingServiceOption)
	{
		return ($this->ShippingServiceOption = $_shippingServiceOption);
	}
	/**
	 * Get TaxTable value
	 * @return EbayShoppingStructTaxTableType|null
	 */
	public function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * Set TaxTable value
	 * @param EbayShoppingStructTaxTableType $_taxTable the TaxTable
	 * @return EbayShoppingStructTaxTableType
	 */
	public function setTaxTable($_taxTable)
	{
		return ($this->TaxTable = $_taxTable);
	}
	/**
	 * Get InternationalInsuranceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getInternationalInsuranceCost()
	{
		return $this->InternationalInsuranceCost;
	}
	/**
	 * Set InternationalInsuranceCost value
	 * @param EbayShoppingStructAmountType $_internationalInsuranceCost the InternationalInsuranceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setInternationalInsuranceCost($_internationalInsuranceCost)
	{
		return ($this->InternationalInsuranceCost = $_internationalInsuranceCost);
	}
	/**
	 * Get InternationalInsuranceOption value
	 * @return EbayShoppingEnumInsuranceOptionCodeType|null
	 */
	public function getInternationalInsuranceOption()
	{
		return $this->InternationalInsuranceOption;
	}
	/**
	 * Set InternationalInsuranceOption value
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::valueIsValid()
	 * @param EbayShoppingEnumInsuranceOptionCodeType $_internationalInsuranceOption the InternationalInsuranceOption
	 * @return EbayShoppingEnumInsuranceOptionCodeType
	 */
	public function setInternationalInsuranceOption($_internationalInsuranceOption)
	{
		if(!EbayShoppingEnumInsuranceOptionCodeType::valueIsValid($_internationalInsuranceOption))
		{
			return false;
		}
		return ($this->InternationalInsuranceOption = $_internationalInsuranceOption);
	}
	/**
	 * Get CODCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * Set CODCost value
	 * @param EbayShoppingStructAmountType $_cODCost the CODCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setCODCost($_cODCost)
	{
		return ($this->CODCost = $_cODCost);
	}
	/**
	 * Get ExcludeShipToLocation value
	 * @return string|null
	 */
	public function getExcludeShipToLocation()
	{
		return $this->ExcludeShipToLocation;
	}
	/**
	 * Set ExcludeShipToLocation value
	 * @param string $_excludeShipToLocation the ExcludeShipToLocation
	 * @return string
	 */
	public function setExcludeShipToLocation($_excludeShipToLocation)
	{
		return ($this->ExcludeShipToLocation = $_excludeShipToLocation);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructShippingDetailsType::setAny()
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
	 * @return EbayShoppingStructShippingDetailsType
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