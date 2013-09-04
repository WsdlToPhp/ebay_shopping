<?php
/**
 * File for class EbayShoppingEnumFeedbackRatingDetailCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumFeedbackRatingDetailCodeType originally named FeedbackRatingDetailCodeType
 * Documentation : Applicable to sites that support the Detailed Seller Ratings feature. The FeedbackRatingDetailCodeType is the list of areas for detailed seller ratings. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumFeedbackRatingDetailCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'ItemAsDescribed'
	 * Meta informations extracted from the WSDL
	 * - documentation : Detailed seller rating in the area of "item as described."
	 * @return string 'ItemAsDescribed'
	 */
	const VALUE_ITEMASDESCRIBED = 'ItemAsDescribed';
	/**
	 * Constant for value 'Communication'
	 * Meta informations extracted from the WSDL
	 * - documentation : Detailed seller rating in the area of "communication."
	 * @return string 'Communication'
	 */
	const VALUE_COMMUNICATION = 'Communication';
	/**
	 * Constant for value 'ShippingTime'
	 * Meta informations extracted from the WSDL
	 * - documentation : Detailed seller rating in the area of "shipping time." Inapplicable to motor vehicle items.
	 * @return string 'ShippingTime'
	 */
	const VALUE_SHIPPINGTIME = 'ShippingTime';
	/**
	 * Constant for value 'ShippingAndHandlingCharges'
	 * Meta informations extracted from the WSDL
	 * - documentation : Detailed seller rating in the area of "charges for shipping and handling." Inapplicable to motor vehicle items.
	 * @return string 'ShippingAndHandlingCharges'
	 */
	const VALUE_SHIPPINGANDHANDLINGCHARGES = 'ShippingAndHandlingCharges';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_ITEMASDESCRIBED
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_COMMUNICATION
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_SHIPPINGTIME
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_SHIPPINGANDHANDLINGCHARGES
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_ITEMASDESCRIBED,EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_COMMUNICATION,EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_SHIPPINGTIME,EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_SHIPPINGANDHANDLINGCHARGES,EbayShoppingEnumFeedbackRatingDetailCodeType::VALUE_CUSTOMCODE));
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