<?php
/**
 * File for class EbayShoppingEnumSortOrderCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumSortOrderCodeType originally named SortOrderCodeType
 * Documentation : Indicates the order of sorting.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumSortOrderCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Ascending'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts results in ascending (low to high) order.
	 * @return string 'Ascending'
	 */
	const VALUE_ASCENDING = 'Ascending';
	/**
	 * Constant for value 'Descending'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts results in descending (high to low) order.
	 * @return string 'Descending'
	 */
	const VALUE_DESCENDING = 'Descending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumSortOrderCodeType::VALUE_ASCENDING
	 * @uses EbayShoppingEnumSortOrderCodeType::VALUE_DESCENDING
	 * @uses EbayShoppingEnumSortOrderCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumSortOrderCodeType::VALUE_ASCENDING,EbayShoppingEnumSortOrderCodeType::VALUE_DESCENDING,EbayShoppingEnumSortOrderCodeType::VALUE_CUSTOMCODE));
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