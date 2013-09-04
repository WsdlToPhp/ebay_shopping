<?php
/**
 * File for class EbayShoppingEnumSellerBusinessCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumSellerBusinessCodeType originally named SellerBusinessCodeType
 * Documentation : Type of seller account. This value can be returned if the German site (site ID 77) or eBay Motors site (site ID 100) is specified.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumSellerBusinessCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Undefined'
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of seller account not defined.
	 * @return string 'Undefined'
	 */
	const VALUE_UNDEFINED = 'Undefined';
	/**
	 * Constant for value 'Private'
	 * Meta informations extracted from the WSDL
	 * - documentation : Private seller account.
	 * @return string 'Private'
	 */
	const VALUE_PRIVATE = 'Private';
	/**
	 * Constant for value 'Commercial'
	 * Meta informations extracted from the WSDL
	 * - documentation : Commercial seller account.
	 * @return string 'Commercial'
	 */
	const VALUE_COMMERCIAL = 'Commercial';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumSellerBusinessCodeType::VALUE_UNDEFINED
	 * @uses EbayShoppingEnumSellerBusinessCodeType::VALUE_PRIVATE
	 * @uses EbayShoppingEnumSellerBusinessCodeType::VALUE_COMMERCIAL
	 * @uses EbayShoppingEnumSellerBusinessCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumSellerBusinessCodeType::VALUE_UNDEFINED,EbayShoppingEnumSellerBusinessCodeType::VALUE_PRIVATE,EbayShoppingEnumSellerBusinessCodeType::VALUE_COMMERCIAL,EbayShoppingEnumSellerBusinessCodeType::VALUE_CUSTOMCODE));
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