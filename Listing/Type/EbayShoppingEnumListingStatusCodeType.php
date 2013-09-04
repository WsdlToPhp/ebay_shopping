<?php
/**
 * File for class EbayShoppingEnumListingStatusCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumListingStatusCodeType originally named ListingStatusCodeType
 * Documentation : Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned, use this listing status information to determine whether eBay has finished processing the listing.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumListingStatusCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The listing is still live, or it has recently ended but eBay has not completed processing the listing (e.g., we're still determining the high bidder). A multi-item listing is considered active until all items have winning bids or purchases or the listing's end time has passed. (That is, if the listing has a Quantity of 10, the sale of 1 of those items doesn't end the listing.) If the listing has ended but this Active status is returned, please allow several minutes for eBay to finish processing the listing.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Ended'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The listing has ended and eBay has completed processing of the sale (if any), such as determining the high bidder.
	 * @return string 'Ended'
	 */
	const VALUE_ENDED = 'Ended';
	/**
	 * Constant for value 'Completed'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) The listing has ended and eBay has completed processing of the sale (if any), such as determining the high bidder. You can think of Completed and Ended as essentially equivalent. (The difference is only meaningful to the seller of the item, as Completed indicates whether eBay has finished calculating certain selling fees.)
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : (out) Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumListingStatusCodeType::VALUE_ACTIVE
	 * @uses EbayShoppingEnumListingStatusCodeType::VALUE_ENDED
	 * @uses EbayShoppingEnumListingStatusCodeType::VALUE_COMPLETED
	 * @uses EbayShoppingEnumListingStatusCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumListingStatusCodeType::VALUE_ACTIVE,EbayShoppingEnumListingStatusCodeType::VALUE_ENDED,EbayShoppingEnumListingStatusCodeType::VALUE_COMPLETED,EbayShoppingEnumListingStatusCodeType::VALUE_CUSTOMCODE));
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