<?php
/**
 * File for class EbayShoppingEnumReviewSortCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumReviewSortCodeType originally named ReviewSortCodeType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumReviewSortCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'CreationTime'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts reviews by creation time, in ascending or descending order.
	 * @return string 'CreationTime'
	 */
	const VALUE_CREATIONTIME = 'CreationTime';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for values that are not available in the version of the schema you are using. If eBay adds a new value to this code type as of a newer version, we return CustomCode instead when you specify a lower request version.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumReviewSortCodeType::VALUE_CREATIONTIME
	 * @uses EbayShoppingEnumReviewSortCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumReviewSortCodeType::VALUE_CREATIONTIME,EbayShoppingEnumReviewSortCodeType::VALUE_CUSTOMCODE));
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