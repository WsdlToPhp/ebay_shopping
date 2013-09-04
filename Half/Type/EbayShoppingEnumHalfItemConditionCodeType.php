<?php
/**
 * File for class EbayShoppingEnumHalfItemConditionCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumHalfItemConditionCodeType originally named HalfItemConditionCodeType
 * Documentation : Controls values for item condition, especially for Books catalog.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumHalfItemConditionCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'BrandNew'
	 * Meta informations extracted from the WSDL
	 * - documentation : New, unread, unused and in perfect condition.
	 * @return string 'BrandNew'
	 */
	const VALUE_BRANDNEW = 'BrandNew';
	/**
	 * Constant for value 'LikeNew'
	 * Meta informations extracted from the WSDL
	 * - documentation : Item still in original packaging, no wear and tear, all facets of the product are intact. (Could easily be mistaken for brand new.)
	 * @return string 'LikeNew'
	 */
	const VALUE_LIKENEW = 'LikeNew';
	/**
	 * Constant for value 'VeryGood'
	 * Meta informations extracted from the WSDL
	 * - documentation : Doesn't look brand new but has no easily noticeable damage and very minimal wear and tear. (You would give it to a good friend as a gift)
	 * @return string 'VeryGood'
	 */
	const VALUE_VERYGOOD = 'VeryGood';
	/**
	 * Constant for value 'Good'
	 * Meta informations extracted from the WSDL
	 * - documentation : Very minimal damage to the item and still includes all accessories such as dust jackets, liner notes, and cases. (You would use it yourself, but wouldn't necessarily give it as a gift)
	 * @return string 'Good'
	 */
	const VALUE_GOOD = 'Good';
	/**
	 * Constant for value 'Acceptable'
	 * Meta informations extracted from the WSDL
	 * - documentation : Some damage to the item but integrity still intact. May be missing an accessory. (Item beaten up a bit but it works)
	 * @return string 'Acceptable'
	 */
	const VALUE_ACCEPTABLE = 'Acceptable';
	/**
	 * Constant for value 'Used'
	 * Meta informations extracted from the WSDL
	 * - documentation : Some damage to the item and visibly used.
	 * @return string 'Used'
	 */
	const VALUE_USED = 'Used';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_BRANDNEW
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_LIKENEW
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_VERYGOOD
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_GOOD
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_ACCEPTABLE
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_USED
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumHalfItemConditionCodeType::VALUE_BRANDNEW,EbayShoppingEnumHalfItemConditionCodeType::VALUE_LIKENEW,EbayShoppingEnumHalfItemConditionCodeType::VALUE_VERYGOOD,EbayShoppingEnumHalfItemConditionCodeType::VALUE_GOOD,EbayShoppingEnumHalfItemConditionCodeType::VALUE_ACCEPTABLE,EbayShoppingEnumHalfItemConditionCodeType::VALUE_USED,EbayShoppingEnumHalfItemConditionCodeType::VALUE_CUSTOMCODE));
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