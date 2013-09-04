<?php
/**
 * File for class EbayShoppingEnumErrorClassificationCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumErrorClassificationCodeType originally named ErrorClassificationCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumErrorClassificationCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'RequestError'
	 * Meta informations extracted from the WSDL
	 * - documentation : An error has occurred either as a result of a problem in the sending application or because the application's end-user has attempted to submit invalid data (or missing data). In these cases, do not retry the request. The problem must be corrected before the request can be made again. If the problem is due to something in the application (such as a missing required field), the application must be changed. If the problem is a result of end-user data, the application must alert the end-user to the problem and provide the means for the end-user to correct the data. Once the problem in the application or data is resolved, resend the request to eBay with the corrected data.
	 * @return string 'RequestError'
	 */
	const VALUE_REQUESTERROR = 'RequestError';
	/**
	 * Constant for value 'SystemError'
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates that an error has occurred on the eBay system side, such as a database or server down. An application can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.
	 * @return string 'SystemError'
	 */
	const VALUE_SYSTEMERROR = 'SystemError';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumErrorClassificationCodeType::VALUE_REQUESTERROR
	 * @uses EbayShoppingEnumErrorClassificationCodeType::VALUE_SYSTEMERROR
	 * @uses EbayShoppingEnumErrorClassificationCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumErrorClassificationCodeType::VALUE_REQUESTERROR,EbayShoppingEnumErrorClassificationCodeType::VALUE_SYSTEMERROR,EbayShoppingEnumErrorClassificationCodeType::VALUE_CUSTOMCODE));
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