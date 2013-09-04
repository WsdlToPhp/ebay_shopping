<?php
/**
 * File for class EbayShoppingEnumInsuranceOptionCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumInsuranceOptionCodeType originally named InsuranceOptionCodeType
 * Documentation : The seller's requirements regarding whether the buyer pays for shipping insurance.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumInsuranceOptionCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Optional'
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller offers the buyer the choice of paying for shipping insurance or not.
	 * @return string 'Optional'
	 */
	const VALUE_OPTIONAL = 'Optional';
	/**
	 * Constant for value 'Required'
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller requires that the buyer pay for shipping insurance.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'NotOffered'
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller does not offer shipping insurance to the buyer.
	 * @return string 'NotOffered'
	 */
	const VALUE_NOTOFFERED = 'NotOffered';
	/**
	 * Constant for value 'IncludedInShippingHandling'
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller is not charging separately for shipping insurance costs; any insurance is already included in the base shipping cost.
	 * @return string 'IncludedInShippingHandling'
	 */
	const VALUE_INCLUDEDINSHIPPINGHANDLING = 'IncludedInShippingHandling';
	/**
	 * Constant for value 'NotOfferedOnSite'
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping insurance is not offered as a separate option on the site where the item is listed. (Some shipping services, such as DE_InsuredExpressOrCourier, include insurance as part of the service.) If another insurance option is specified in the listing request and the site does not support shipping insurance as a separate option, eBay will reset the insurance option to this value. At the time of this writing, this option is only meaningful for the eBay Germany, Austria, and Switzerland sites.
	 * @return string 'NotOfferedOnSite'
	 */
	const VALUE_NOTOFFEREDONSITE = 'NotOfferedOnSite';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_OPTIONAL
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_REQUIRED
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_NOTOFFERED
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_INCLUDEDINSHIPPINGHANDLING
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_NOTOFFEREDONSITE
	 * @uses EbayShoppingEnumInsuranceOptionCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumInsuranceOptionCodeType::VALUE_OPTIONAL,EbayShoppingEnumInsuranceOptionCodeType::VALUE_REQUIRED,EbayShoppingEnumInsuranceOptionCodeType::VALUE_NOTOFFERED,EbayShoppingEnumInsuranceOptionCodeType::VALUE_INCLUDEDINSHIPPINGHANDLING,EbayShoppingEnumInsuranceOptionCodeType::VALUE_NOTOFFEREDONSITE,EbayShoppingEnumInsuranceOptionCodeType::VALUE_CUSTOMCODE));
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