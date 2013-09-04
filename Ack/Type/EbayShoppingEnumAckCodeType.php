<?php
/**
 * File for class EbayShoppingEnumAckCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumAckCodeType originally named AckCodeType
 * Documentation : AckCodeType - Type declaration to be used by other schema. This code identifies the acknowledgement code types that eBay could use to communicate the status of processing a (request) message to an application. This code would be used as part of a response message that contains an application-level acknowledgement element.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumAckCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Request processing succeeded
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Request processing failed
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'Warning'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Request processing completed with warning information being included in the response message
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'PartialFailure'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Request processing completed with some failures. See the Errors data to determine which portions of the request failed.
	 * @return string 'PartialFailure'
	 */
	const VALUE_PARTIALFAILURE = 'PartialFailure';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumAckCodeType::VALUE_SUCCESS
	 * @uses EbayShoppingEnumAckCodeType::VALUE_FAILURE
	 * @uses EbayShoppingEnumAckCodeType::VALUE_WARNING
	 * @uses EbayShoppingEnumAckCodeType::VALUE_PARTIALFAILURE
	 * @uses EbayShoppingEnumAckCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumAckCodeType::VALUE_SUCCESS,EbayShoppingEnumAckCodeType::VALUE_FAILURE,EbayShoppingEnumAckCodeType::VALUE_WARNING,EbayShoppingEnumAckCodeType::VALUE_PARTIALFAILURE,EbayShoppingEnumAckCodeType::VALUE_CUSTOMCODE));
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