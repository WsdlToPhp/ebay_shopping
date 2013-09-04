<?php
/**
 * File for class EbayShoppingEnumExternalProductCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumExternalProductCodeType originally named ExternalProductCodeType
 * Documentation : Indicates the type of external product ID being used to identify a stock product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumExternalProductCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'ISBN'
	 * Meta informations extracted from the WSDL
	 * - documentation : ExternalProductID.Value contains an ISBN value. Required when you pass an ISBN as the external product ID. (This value is also applicable to Half.com listings.)
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'UPC'
	 * Meta informations extracted from the WSDL
	 * - documentation : ExternalProductID.Value contains a UPC value. Required when you pass a UPC as the external product ID. (This value is also applicable to Half.com listings.)
	 * @return string 'UPC'
	 */
	const VALUE_UPC = 'UPC';
	/**
	 * Constant for value 'ProductID'
	 * Meta informations extracted from the WSDL
	 * - documentation : ExternalProductID.Value contains an eBay catalog product ID. Required when you pass an eBay product ID as the external product ID. Not applicable with FindItemsAdvanced or FindProducts.
	 * @return string 'ProductID'
	 */
	const VALUE_PRODUCTID = 'ProductID';
	/**
	 * Constant for value 'EAN'
	 * Meta informations extracted from the WSDL
	 * - documentation : ExternalProductID.Value contains an EAN value. Required when you pass an EAN as the external product ID.
	 * @return string 'EAN'
	 */
	const VALUE_EAN = 'EAN';
	/**
	 * Constant for value 'Keywords'
	 * Meta informations extracted from the WSDL
	 * - documentation : ExternalProductID.Value contains a set of keywords that uniquely identify the product. Only applicable when listing event ticket. See the eBay Web Services guide for information about valid ticket keywords for an external product ID. Required when you pass a set of keywords as the external product ID. Not applicable with FindItemsAdvanced or FindProducts. With FindItemsAdvanced, use TicketFinder instead.
	 * @return string 'Keywords'
	 */
	const VALUE_KEYWORDS = 'Keywords';
	/**
	 * Constant for value 'MPN'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use.
	 * @return string 'MPN'
	 */
	const VALUE_MPN = 'MPN';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_ISBN
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_UPC
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_PRODUCTID
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_EAN
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_KEYWORDS
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_MPN
	 * @uses EbayShoppingEnumExternalProductCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumExternalProductCodeType::VALUE_ISBN,EbayShoppingEnumExternalProductCodeType::VALUE_UPC,EbayShoppingEnumExternalProductCodeType::VALUE_PRODUCTID,EbayShoppingEnumExternalProductCodeType::VALUE_EAN,EbayShoppingEnumExternalProductCodeType::VALUE_KEYWORDS,EbayShoppingEnumExternalProductCodeType::VALUE_MPN,EbayShoppingEnumExternalProductCodeType::VALUE_CUSTOMCODE));
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