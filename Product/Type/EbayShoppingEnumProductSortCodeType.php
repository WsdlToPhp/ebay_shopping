<?php
/**
 * File for class EbayShoppingEnumProductSortCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumProductSortCodeType originally named ProductSortCodeType
 * Documentation : Controls the order of product (not item) searches.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumProductSortCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Popularity'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sort by product popularity (as determined by eBay). (This is the default sort order.)
	 * @return string 'Popularity'
	 */
	const VALUE_POPULARITY = 'Popularity';
	/**
	 * Constant for value 'Rating'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sort by average rating.
	 * @return string 'Rating'
	 */
	const VALUE_RATING = 'Rating';
	/**
	 * Constant for value 'ReviewCount'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sort by the number of reviews on eBay.
	 * @return string 'ReviewCount'
	 */
	const VALUE_REVIEWCOUNT = 'ReviewCount';
	/**
	 * Constant for value 'ItemCount'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sort by the number of active items listed with this product.
	 * @return string 'ItemCount'
	 */
	const VALUE_ITEMCOUNT = 'ItemCount';
	/**
	 * Constant for value 'Title'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sort by the product title.
	 * @return string 'Title'
	 */
	const VALUE_TITLE = 'Title';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for values that are not available in the version of the schema you are using. If eBay adds a new value to this code type as of a newer version, we return CustomCode instead when you specify a lower request version.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_POPULARITY
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_RATING
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_REVIEWCOUNT
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_ITEMCOUNT
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_TITLE
	 * @uses EbayShoppingEnumProductSortCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumProductSortCodeType::VALUE_POPULARITY,EbayShoppingEnumProductSortCodeType::VALUE_RATING,EbayShoppingEnumProductSortCodeType::VALUE_REVIEWCOUNT,EbayShoppingEnumProductSortCodeType::VALUE_ITEMCOUNT,EbayShoppingEnumProductSortCodeType::VALUE_TITLE,EbayShoppingEnumProductSortCodeType::VALUE_CUSTOMCODE));
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