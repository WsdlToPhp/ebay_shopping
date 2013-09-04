<?php
/**
 * File for class EbayShoppingEnumQuantityAvailableHintCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumQuantityAvailableHintCodeType originally named QuantityAvailableHintCodeType
 * Documentation : Indicates the text message type of the item's quantity availability.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumQuantityAvailableHintCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Limited'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The message "Limited quantity available" is shown in the web flow (e.g., for a flash sale or a Daily Deal).
	 * @return string 'Limited'
	 */
	const VALUE_LIMITED = 'Limited';
	/**
	 * Constant for value 'MoreThan'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The message "More than 10 available" is shown in the web flow. 10 is the value of QuantityThreshold tag based on the seller's preference.
	 * @return string 'MoreThan'
	 */
	const VALUE_MORETHAN = 'MoreThan';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_LIMITED
	 * @uses EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_MORETHAN
	 * @uses EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_LIMITED,EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_MORETHAN,EbayShoppingEnumQuantityAvailableHintCodeType::VALUE_CUSTOMCODE));
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