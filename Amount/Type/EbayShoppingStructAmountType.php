<?php
/**
 * File for class EbayShoppingStructAmountType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructAmountType originally named AmountType
 * Documentation : Basic type for specifying monetary amounts. A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of the currency, in which case the value specifies the amount in that currency. An AmountType expresses both the value (a double) and the currency. Details such as prices, fees, costs, and payments are specified as amount types.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructAmountType extends EbayShoppingWsdlClass
{
	/**
	 * The currencyID
	 * Meta informations extracted from the WSDL
	 * - documentation : Currency in which the monetary amount is specified. See CurrencyCodeType for applicable values.
	 * - use : required
	 * @var EbayShoppingEnumCurrencyCodeType
	 */
	public $currencyID;
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * Constructor method for AmountType
	 * @see parent::__construct()
	 * @param EbayShoppingEnumCurrencyCodeType $_currencyID
	 * @param double $__
	 * @return EbayShoppingStructAmountType
	 */
	public function __construct($_currencyID,$__ = NULL)
	{
		parent::__construct(array('currencyID'=>$_currencyID,'_'=>$__));
	}
	/**
	 * Get currencyID value
	 * @return EbayShoppingEnumCurrencyCodeType
	 */
	public function getCurrencyID()
	{
		return $this->currencyID;
	}
	/**
	 * Set currencyID value
	 * @uses EbayShoppingEnumCurrencyCodeType::valueIsValid()
	 * @param EbayShoppingEnumCurrencyCodeType $_currencyID the currencyID
	 * @return EbayShoppingEnumCurrencyCodeType
	 */
	public function setCurrencyID($_currencyID)
	{
		if(!EbayShoppingEnumCurrencyCodeType::valueIsValid($_currencyID))
		{
			return false;
		}
		return ($this->currencyID = $_currencyID);
	}
	/**
	 * Get _ value
	 * @return double|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param double $__ the _
	 * @return double
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructAmountType
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