<?php
/**
 * File for class EbayShoppingEnumSeverityCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumSeverityCodeType originally named SeverityCodeType
 * Documentation : SeverityCodeType - Type declaration to be used by other schema. This code identifies the severity of an API error. A code indicates whether there is an API- level error or warning that needs to be communicated to the client.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumSeverityCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Warning'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The request was processed successfully, but something occurred that may affect your application or the user. For example, eBay may have changed a value the user sent in. In this case, eBay returns a normal, successful response and also returns the warning.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'Error'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The request that triggered the error was not processed successfully. When a serious application-level error occurs, the error is returned instead of the business data.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumSeverityCodeType::VALUE_WARNING
	 * @uses EbayShoppingEnumSeverityCodeType::VALUE_ERROR
	 * @uses EbayShoppingEnumSeverityCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumSeverityCodeType::VALUE_WARNING,EbayShoppingEnumSeverityCodeType::VALUE_ERROR,EbayShoppingEnumSeverityCodeType::VALUE_CUSTOMCODE));
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