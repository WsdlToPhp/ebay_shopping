<?php
/**
 * File for class EbayShoppingStructTaxJurisdictionType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructTaxJurisdictionType originally named TaxJurisdictionType
 * Documentation : Tax-related details for a region or jurisdiction.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructTaxJurisdictionType extends EbayShoppingWsdlClass
{
	/**
	 * The JurisdictionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Representative identifier for the jurisdiction. Typically an abbreviation (e.g. CA for California).
	 * - minOccurs : 0
	 * @var string
	 */
	public $JurisdictionID;
	/**
	 * The SalesTaxPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : The tax percent to apply for a listing shipped to this jurisdiction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). GetTaxTable: this tag has no value if the user's tax table has not been set.
	 * - minOccurs : 0
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable: This tag is empty if the user did not previously provide information.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for TaxJurisdictionType
	 * @see parent::__construct()
	 * @param string $_jurisdictionID
	 * @param float $_salesTaxPercent
	 * @param boolean $_shippingIncludedInTax
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructTaxJurisdictionType
	 */
	public function __construct($_jurisdictionID = NULL,$_salesTaxPercent = NULL,$_shippingIncludedInTax = NULL,$_any = NULL)
	{
		parent::__construct(array('JurisdictionID'=>$_jurisdictionID,'SalesTaxPercent'=>$_salesTaxPercent,'ShippingIncludedInTax'=>$_shippingIncludedInTax,'any'=>$_any));
	}
	/**
	 * Get JurisdictionID value
	 * @return string|null
	 */
	public function getJurisdictionID()
	{
		return $this->JurisdictionID;
	}
	/**
	 * Set JurisdictionID value
	 * @param string $_jurisdictionID the JurisdictionID
	 * @return string
	 */
	public function setJurisdictionID($_jurisdictionID)
	{
		return ($this->JurisdictionID = $_jurisdictionID);
	}
	/**
	 * Get SalesTaxPercent value
	 * @return float|null
	 */
	public function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * Set SalesTaxPercent value
	 * @param float $_salesTaxPercent the SalesTaxPercent
	 * @return float
	 */
	public function setSalesTaxPercent($_salesTaxPercent)
	{
		return ($this->SalesTaxPercent = $_salesTaxPercent);
	}
	/**
	 * Get ShippingIncludedInTax value
	 * @return boolean|null
	 */
	public function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * Set ShippingIncludedInTax value
	 * @param boolean $_shippingIncludedInTax the ShippingIncludedInTax
	 * @return boolean
	 */
	public function setShippingIncludedInTax($_shippingIncludedInTax)
	{
		return ($this->ShippingIncludedInTax = $_shippingIncludedInTax);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructTaxJurisdictionType::setAny()
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
	 * @return EbayShoppingStructTaxJurisdictionType
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