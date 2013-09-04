<?php
/**
 * File for class EbayShoppingStructTaxTableType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructTaxTableType originally named TaxTableType
 * Documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc).
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructTaxTableType extends EbayShoppingWsdlClass
{
	/**
	 * The TaxJurisdiction
	 * Meta informations extracted from the WSDL
	 * - documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc). Information is only returned for the jurisdictions for which the user provided tax information. ShippingIncludedInTax and SalesTaxPercent are returned but are empty.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructTaxJurisdictionType
	 */
	public $TaxJurisdiction;
	/**
	 * Constructor method for TaxTableType
	 * @see parent::__construct()
	 * @param EbayShoppingStructTaxJurisdictionType $_taxJurisdiction
	 * @return EbayShoppingStructTaxTableType
	 */
	public function __construct($_taxJurisdiction = NULL)
	{
		parent::__construct(array('TaxJurisdiction'=>$_taxJurisdiction));
	}
	/**
	 * Get TaxJurisdiction value
	 * @return EbayShoppingStructTaxJurisdictionType|null
	 */
	public function getTaxJurisdiction()
	{
		return $this->TaxJurisdiction;
	}
	/**
	 * Set TaxJurisdiction value
	 * @param EbayShoppingStructTaxJurisdictionType $_taxJurisdiction the TaxJurisdiction
	 * @return EbayShoppingStructTaxJurisdictionType
	 */
	public function setTaxJurisdiction($_taxJurisdiction)
	{
		return ($this->TaxJurisdiction = $_taxJurisdiction);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructTaxTableType
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