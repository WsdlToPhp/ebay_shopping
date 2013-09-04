<?php
/**
 * File for class EbayShoppingEnumPricingTreatmentCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumPricingTreatmentCodeType originally named PricingTreatmentCodeType
 * Documentation : Defines the type of treatment applied to a discounted item, either Strikethrough Pricing or Minimum Advertised Price.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumPricingTreatmentCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'STP'
	 * Meta informations extracted from the WSDL
	 * - documentation : STP stands for Strikethrough Pricing.
	 * @return string 'STP'
	 */
	const VALUE_STP = 'STP';
	/**
	 * Constant for value 'MAP'
	 * Meta informations extracted from the WSDL
	 * - documentation : MAP stands for Minimum Advertised Price.
	 * @return string 'MAP'
	 */
	const VALUE_MAP = 'MAP';
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None means the item does not qualify for either STP or MAP pricing.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumPricingTreatmentCodeType::VALUE_STP
	 * @uses EbayShoppingEnumPricingTreatmentCodeType::VALUE_MAP
	 * @uses EbayShoppingEnumPricingTreatmentCodeType::VALUE_NONE
	 * @uses EbayShoppingEnumPricingTreatmentCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumPricingTreatmentCodeType::VALUE_STP,EbayShoppingEnumPricingTreatmentCodeType::VALUE_MAP,EbayShoppingEnumPricingTreatmentCodeType::VALUE_NONE,EbayShoppingEnumPricingTreatmentCodeType::VALUE_CUSTOMCODE));
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