<?php
/**
 * File for class EbayShoppingEnumTradingRoleCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumTradingRoleCodeType originally named TradingRoleCodeType
 * Documentation : A means for identifying a person's role in doing business on eBay.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumTradingRoleCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Buyer'
	 * Meta informations extracted from the WSDL
	 * - documentation : Acting as buyer.
	 * @return string 'Buyer'
	 */
	const VALUE_BUYER = 'Buyer';
	/**
	 * Constant for value 'Seller'
	 * Meta informations extracted from the WSDL
	 * - documentation : Acting as seller.
	 * @return string 'Seller'
	 */
	const VALUE_SELLER = 'Seller';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumTradingRoleCodeType::VALUE_BUYER
	 * @uses EbayShoppingEnumTradingRoleCodeType::VALUE_SELLER
	 * @uses EbayShoppingEnumTradingRoleCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumTradingRoleCodeType::VALUE_BUYER,EbayShoppingEnumTradingRoleCodeType::VALUE_SELLER,EbayShoppingEnumTradingRoleCodeType::VALUE_CUSTOMCODE));
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