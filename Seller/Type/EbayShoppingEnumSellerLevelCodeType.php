<?php
/**
 * File for class EbayShoppingEnumSellerLevelCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumSellerLevelCodeType originally named SellerLevelCodeType
 * Documentation : SellerLevelCodeType - Type declaration to be used by other schema. Indicates the user's eBay PowerSeller tier.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumSellerLevelCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Bronze'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Bronze
	 * @return string 'Bronze'
	 */
	const VALUE_BRONZE = 'Bronze';
	/**
	 * Constant for value 'Silver'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Silver
	 * @return string 'Silver'
	 */
	const VALUE_SILVER = 'Silver';
	/**
	 * Constant for value 'Gold'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Gold
	 * @return string 'Gold'
	 */
	const VALUE_GOLD = 'Gold';
	/**
	 * Constant for value 'Platinum'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Platinum
	 * @return string 'Platinum'
	 */
	const VALUE_PLATINUM = 'Platinum';
	/**
	 * Constant for value 'Titanium'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Titanium
	 * @return string 'Titanium'
	 */
	const VALUE_TITANIUM = 'Titanium';
	/**
	 * Constant for value 'Diamond'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Diamond
	 * @return string 'Diamond'
	 */
	const VALUE_DIAMOND = 'Diamond';
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_BRONZE
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_SILVER
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_GOLD
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_PLATINUM
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_TITANIUM
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_DIAMOND
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_NONE
	 * @uses EbayShoppingEnumSellerLevelCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumSellerLevelCodeType::VALUE_BRONZE,EbayShoppingEnumSellerLevelCodeType::VALUE_SILVER,EbayShoppingEnumSellerLevelCodeType::VALUE_GOLD,EbayShoppingEnumSellerLevelCodeType::VALUE_PLATINUM,EbayShoppingEnumSellerLevelCodeType::VALUE_TITANIUM,EbayShoppingEnumSellerLevelCodeType::VALUE_DIAMOND,EbayShoppingEnumSellerLevelCodeType::VALUE_NONE,EbayShoppingEnumSellerLevelCodeType::VALUE_CUSTOMCODE));
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