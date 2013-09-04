<?php
/**
 * File for class EbayShoppingEnumListingTypeCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumListingTypeCodeType originally named ListingTypeCodeType
 * Documentation : Specifies the selling format used for a listing.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumListingTypeCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations extracted from the WSDL
	 * - documentation : Unknown auction type. (This is not normally used.)
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Chinese'
	 * Meta informations extracted from the WSDL
	 * - documentation : Single-quantity online auction format. A Chinese auction has a Quantity of 1. Buyers engage in competitive bidding, although Buy It Now may be offered as long as no bids have been placed. Online auctions are listed on eBay.com, and they are also listed in the seller's eBay Store if the seller is a Store owner.
	 * @return string 'Chinese'
	 */
	const VALUE_CHINESE = 'Chinese';
	/**
	 * Constant for value 'Dutch'
	 * @return string 'Dutch'
	 */
	const VALUE_DUTCH = 'Dutch';
	/**
	 * Constant for value 'Live'
	 * Meta informations extracted from the WSDL
	 * - documentation : Live auction, on-site auction that can include non-eBay bidders. Live auctions are listed on the eBay Live Auctions site, in live auction categories. They can also appear on eBay if the seller lists the lot in a secondary, eBay category.
	 * @return string 'Live'
	 */
	const VALUE_LIVE = 'Live';
	/**
	 * Constant for value 'Auction'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for future use.
	 * @return string 'Auction'
	 */
	const VALUE_AUCTION = 'Auction';
	/**
	 * Constant for value 'AdType'
	 * Meta informations extracted from the WSDL
	 * - documentation : Advertisement to solicit inquiries on listings such as real estate. Permits no bidding on that item, service, or property. To express interest, a buyer fills out a contact form that eBay forwards to the the seller as a lead. This format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for ad format listings.
	 * @return string 'AdType'
	 */
	const VALUE_ADTYPE = 'AdType';
	/**
	 * Constant for value 'StoresFixedPrice'
	 * @return string 'StoresFixedPrice'
	 */
	const VALUE_STORESFIXEDPRICE = 'StoresFixedPrice';
	/**
	 * Constant for value 'PersonalOffer'
	 * Meta informations extracted from the WSDL
	 * - documentation : Second chance offer made to a non-winning bidder on an ended listing. A seller can make an offer to a non-winning bidder when either the winning bidder has failed to pay for an item or the seller has a duplicate of the item. Second- chance offer items are on eBay, but they do not appear when browsing or searching listings. You need to already know the item ID in order to retrieve a second-chance offer.
	 * @return string 'PersonalOffer'
	 */
	const VALUE_PERSONALOFFER = 'PersonalOffer';
	/**
	 * Constant for value 'FixedPriceItem'
	 * Meta informations extracted from the WSDL
	 * - documentation : A basic fixed-price listing with a Quantity of 1. Allows no auction-style bidding. Also known as Buy It Now Only on some sites, this should not to be confused with the BuyItNow option that is available for competitive-bid auctions. Fixed-price listings appear on eBay.com. They are also listed in a seller's eBay Store if the seller is a Store owner.
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'Half'
	 * Meta informations extracted from the WSDL
	 * - documentation : Half.com listing (item is listed on Half.com, not on eBay). Reserved for future use.
	 * @return string 'Half'
	 */
	const VALUE_HALF = 'Half';
	/**
	 * Constant for value 'LeadGeneration'
	 * Meta informations extracted from the WSDL
	 * - documentation : Lead Generation format (advertisement-style listing to solicit inquiries or offers, no bidding or fixed price, listed on eBay).
	 * @return string 'LeadGeneration'
	 */
	const VALUE_LEADGENERATION = 'LeadGeneration';
	/**
	 * Constant for value 'Express'
	 * @return string 'Express'
	 */
	const VALUE_EXPRESS = 'Express';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_UNKNOWN
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_CHINESE
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_DUTCH
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_LIVE
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_AUCTION
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_ADTYPE
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_STORESFIXEDPRICE
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_PERSONALOFFER
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_FIXEDPRICEITEM
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_HALF
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_LEADGENERATION
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_EXPRESS
	 * @uses EbayShoppingEnumListingTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumListingTypeCodeType::VALUE_UNKNOWN,EbayShoppingEnumListingTypeCodeType::VALUE_CHINESE,EbayShoppingEnumListingTypeCodeType::VALUE_DUTCH,EbayShoppingEnumListingTypeCodeType::VALUE_LIVE,EbayShoppingEnumListingTypeCodeType::VALUE_AUCTION,EbayShoppingEnumListingTypeCodeType::VALUE_ADTYPE,EbayShoppingEnumListingTypeCodeType::VALUE_STORESFIXEDPRICE,EbayShoppingEnumListingTypeCodeType::VALUE_PERSONALOFFER,EbayShoppingEnumListingTypeCodeType::VALUE_FIXEDPRICEITEM,EbayShoppingEnumListingTypeCodeType::VALUE_HALF,EbayShoppingEnumListingTypeCodeType::VALUE_LEADGENERATION,EbayShoppingEnumListingTypeCodeType::VALUE_EXPRESS,EbayShoppingEnumListingTypeCodeType::VALUE_CUSTOMCODE));
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