<?php
/**
 * File for class EbayShoppingEnumProductIDCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumProductIDCodeType originally named ProductIDCodeType
 * Documentation : ProductID type for product searches.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumProductIDCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'ISBN'
	 * Meta informations extracted from the WSDL
	 * - documentation : ISBN-10 or ISBN-13 value for books. (The string length of ProductID indicates whether the ID is 10 or 13 characters.) If you know a book's ISBN, you can use this instead of the eBay CatalogItem or Reference ID to search for that book. Max length of corresponding value: 13
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'EAN'
	 * Meta informations extracted from the WSDL
	 * - documentation : EAN value for books. (This is used more commonly in European countries.) If you know a book's EAN, you can use this instead of the eBay CatalogItem or Reference ID to search for that book. Max length of corresponding value: 13
	 * @return string 'EAN'
	 */
	const VALUE_EAN = 'EAN';
	/**
	 * Constant for value 'UPC'
	 * Meta informations extracted from the WSDL
	 * - documentation : UPC value for products in Music (e.g., CDs), DVDs & Movies, and Video Games categories (or domains). If you know a product's UPC, you can use this instead of the eBay CatalogItem or Reference ID to search for that product. Max length of corresponding value: 12
	 * @return string 'UPC'
	 */
	const VALUE_UPC = 'UPC';
	/**
	 * Constant for value 'MPN'
	 * Meta informations extracted from the WSDL
	 * - documentation : Manufacturer's part number for products like electronics.
	 * @return string 'MPN'
	 */
	const VALUE_MPN = 'MPN';
	/**
	 * Constant for value 'Keywords'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use.
	 * @return string 'Keywords'
	 */
	const VALUE_KEYWORDS = 'Keywords';
	/**
	 * Constant for value 'CatalogItem'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use.
	 * @return string 'CatalogItem'
	 */
	const VALUE_CATALOGITEM = 'CatalogItem';
	/**
	 * Constant for value 'Reference'
	 * Meta informations extracted from the WSDL
	 * - documentation : The global reference ID for an eBay catalog product. A reference ID is a fixed reference to a product (regardless of version). One reference ID can be associated with multiple CatalogItem IDs. To determine valid reference IDs for products to use as input to FindProducts, first call FindProducts with QueryKeywords (or ProductID). Each product in the response includes a reference ID.<br> <br> As of mid-2008, some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products in a request, the call may return the product with a warning, or it may return an error if the product has been deleted.
	 * @return string 'Reference'
	 */
	const VALUE_REFERENCE = 'Reference';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_ISBN
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_EAN
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_UPC
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_MPN
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_KEYWORDS
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_CATALOGITEM
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_REFERENCE
	 * @uses EbayShoppingEnumProductIDCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumProductIDCodeType::VALUE_ISBN,EbayShoppingEnumProductIDCodeType::VALUE_EAN,EbayShoppingEnumProductIDCodeType::VALUE_UPC,EbayShoppingEnumProductIDCodeType::VALUE_MPN,EbayShoppingEnumProductIDCodeType::VALUE_KEYWORDS,EbayShoppingEnumProductIDCodeType::VALUE_CATALOGITEM,EbayShoppingEnumProductIDCodeType::VALUE_REFERENCE,EbayShoppingEnumProductIDCodeType::VALUE_CUSTOMCODE));
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