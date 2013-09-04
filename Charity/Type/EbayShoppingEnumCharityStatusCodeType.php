<?php
/**
 * File for class EbayShoppingEnumCharityStatusCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumCharityStatusCodeType originally named CharityStatusCodeType
 * Documentation : CharityStatusCodeType - Type declaration to be used by other schema. Indicates the nonprofit status of the nonprofit charity organization registered with the dedicated eBay Giving Works provider.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumCharityStatusCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Valid'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The specified nonprofit charity organization is a valid nonprofit charity organization according to the requirements of the dedicated eBay Giving Works provider.
	 * @return string 'Valid'
	 */
	const VALUE_VALID = 'Valid';
	/**
	 * Constant for value 'NoLongerValid'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The specified nonprofit charity organization is no longer a valid nonprofit charity organization according to the requirements of the dedicated eBay Giving Works provider.
	 * @return string 'NoLongerValid'
	 */
	const VALUE_NOLONGERVALID = 'NoLongerValid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumCharityStatusCodeType::VALUE_VALID
	 * @uses EbayShoppingEnumCharityStatusCodeType::VALUE_NOLONGERVALID
	 * @uses EbayShoppingEnumCharityStatusCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumCharityStatusCodeType::VALUE_VALID,EbayShoppingEnumCharityStatusCodeType::VALUE_NOLONGERVALID,EbayShoppingEnumCharityStatusCodeType::VALUE_CUSTOMCODE));
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