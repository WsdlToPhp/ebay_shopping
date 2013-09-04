<?php
/**
 * File for class EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType originally named MinimumAdvertisedPriceExposureCodeType
 * Documentation : Defines how the buyer is to view the discounted price for MAP items. If a seller offers an item for less than the item's agreed upon Minimum Advertised Price (MAP), the discounted price of the item cannot be displayed on the page containing the item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'PreCheckout'
	 * Meta informations extracted from the WSDL
	 * - documentation : PreCheckout specifies that the buyer must click a link (or a button) to navigate to a separate page (or window) that displays the discount price.
	 * @return string 'PreCheckout'
	 */
	const VALUE_PRECHECKOUT = 'PreCheckout';
	/**
	 * Constant for value 'DuringCheckout'
	 * Meta informations extracted from the WSDL
	 * - documentation : DuringCheckout specifies that the discounted price must be shown on the eBay checkout flow page.
	 * @return string 'DuringCheckout'
	 */
	const VALUE_DURINGCHECKOUT = 'DuringCheckout';
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : None means the discount price is not shown via either PreCheckout nor DuringCheckout.
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
	 * @uses EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_PRECHECKOUT
	 * @uses EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_DURINGCHECKOUT
	 * @uses EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_NONE
	 * @uses EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_PRECHECKOUT,EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_DURINGCHECKOUT,EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_NONE,EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::VALUE_CUSTOMCODE));
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