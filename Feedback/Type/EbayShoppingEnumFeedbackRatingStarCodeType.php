<?php
/**
 * File for class EbayShoppingEnumFeedbackRatingStarCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumFeedbackRatingStarCodeType originally named FeedbackRatingStarCodeType
 * Documentation : FeedbackRatingStarCodeType - Type declaration to be used by other schema. The color of a feedback score star visually denotes the range in which the member's summary feedback score falls. The score is the net positive feedback minus the net negative feedback left for the member.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumFeedbackRatingStarCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : No graphic displayed, feedback score 0-9.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Yellow'
	 * Meta informations extracted from the WSDL
	 * - documentation : Yellow Star, feedback score 10-49.
	 * @return string 'Yellow'
	 */
	const VALUE_YELLOW = 'Yellow';
	/**
	 * Constant for value 'Blue'
	 * Meta informations extracted from the WSDL
	 * - documentation : Blue Star, feedback score 50-99.
	 * @return string 'Blue'
	 */
	const VALUE_BLUE = 'Blue';
	/**
	 * Constant for value 'Turquoise'
	 * Meta informations extracted from the WSDL
	 * - documentation : Turquoise Star, feedback score 100-499.
	 * @return string 'Turquoise'
	 */
	const VALUE_TURQUOISE = 'Turquoise';
	/**
	 * Constant for value 'Purple'
	 * Meta informations extracted from the WSDL
	 * - documentation : Purple Star, feedback score 500-999.
	 * @return string 'Purple'
	 */
	const VALUE_PURPLE = 'Purple';
	/**
	 * Constant for value 'Red'
	 * Meta informations extracted from the WSDL
	 * - documentation : Red Star, feedback score 1,000-4,999
	 * @return string 'Red'
	 */
	const VALUE_RED = 'Red';
	/**
	 * Constant for value 'Green'
	 * Meta informations extracted from the WSDL
	 * - documentation : Green Star, feedback score 5,000-9,999.
	 * @return string 'Green'
	 */
	const VALUE_GREEN = 'Green';
	/**
	 * Constant for value 'YellowShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Yellow Shooting Star, feedback score 10,000-24,999.
	 * @return string 'YellowShooting'
	 */
	const VALUE_YELLOWSHOOTING = 'YellowShooting';
	/**
	 * Constant for value 'TurquoiseShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Turquoise Shooting Star, feedback score 25,000-49,999.
	 * @return string 'TurquoiseShooting'
	 */
	const VALUE_TURQUOISESHOOTING = 'TurquoiseShooting';
	/**
	 * Constant for value 'PurpleShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Purple Shooting Star, feedback score 50,000-99,999.
	 * @return string 'PurpleShooting'
	 */
	const VALUE_PURPLESHOOTING = 'PurpleShooting';
	/**
	 * Constant for value 'RedShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Red Shooting Star, feedback score 100,000-499,999.
	 * @return string 'RedShooting'
	 */
	const VALUE_REDSHOOTING = 'RedShooting';
	/**
	 * Constant for value 'GreenShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Green Shooting Star, feedback score 500,000-900,000.
	 * @return string 'GreenShooting'
	 */
	const VALUE_GREENSHOOTING = 'GreenShooting';
	/**
	 * Constant for value 'SilverShooting'
	 * Meta informations extracted from the WSDL
	 * - documentation : Silver Shooting Star, feedback score 1,000,000 and above.
	 * @return string 'SilverShooting'
	 */
	const VALUE_SILVERSHOOTING = 'SilverShooting';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_NONE
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_YELLOW
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_BLUE
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_TURQUOISE
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_PURPLE
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_RED
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_GREEN
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_YELLOWSHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_TURQUOISESHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_PURPLESHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_REDSHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_GREENSHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_SILVERSHOOTING
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_NONE,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_YELLOW,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_BLUE,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_TURQUOISE,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_PURPLE,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_RED,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_GREEN,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_YELLOWSHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_TURQUOISESHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_PURPLESHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_REDSHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_GREENSHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_SILVERSHOOTING,EbayShoppingEnumFeedbackRatingStarCodeType::VALUE_CUSTOMCODE));
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