<?php
/**
 * File for class EbayShoppingStructSimpleItemType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructSimpleItemType originally named SimpleItemType
 * Documentation : Contains information for an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructSimpleItemType extends EbayShoppingWsdlClass
{
	/**
	 * The BestOfferEnabled
	 * Meta informations extracted from the WSDL
	 * - documentation : Whether the seller will accept a best offer for this item. This feature enables a buyer to make a lower-priced binding offer on a fixed price item. Buyers can't see how many offers have been made (only the seller can see this information). To make a best offer on a listing, use the eBay Web site.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The BuyItNowPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The Buy It Now price of the item, returned in the currency of the site on which the item was listed. <br /> <br /> For Chinese auctions (competitive bidding online auctions), Buy It Now lets a user purchase the item at a fixed price and end the auction immediately. On most sites, after a Chinese auction has bids, the listing is no longer eligible for Buy It Now. However, calls can return BuyItNowPrice if the seller originally listed the item with a Buy It Now option. Use the Item.BidCount field to determine whether an auction with Buy It Now has bids or not, and use Item.BuyItNowAvailable to see if the Buy It Now option is still available. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br> <br /> For fixed-price (FixedPriceItem) listings, see CurrentPrice or ConvertedCurrentPrice instead. <br /> <br /> Returned only if an item was listed with a Buy It Now option.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller's description of the item, if any. This can include HTML markup and JavaScript. See <a href="types/simpleTypes.html#string">string</a> in Simple Schema Types. <br> <br> Some sellers don't specify their own listing description. Instead, they use a stock description from a catalog available through eBay. (GetSingleItem doesn't return this stock information.)
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The ID that uniquely identifies the item listing. eBay generates this ID when an item is listed. This ID is unique across all eBay sites.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * The BuyItNowAvailable
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the item has an active Buy It Now option. On most sites, the Buy It Now option is disabled once a valid bid for the item has been accepted. To see if the item was listed with a Buy It Now option, see if the response includes Item.BuyItNowPrice. <br /> <br /> This field is returned only if the value is true.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BuyItNowAvailable;
	/**
	 * The ConvertedBuyItNowPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent this request. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br /> <br /> Some eBay sites also support multi-item Buy It Now auctions, where you can buy multiple items from the same listing at a fixed price. See Item.BuyItNowAvailable. <br> <br> For fixed-price (FixedPriceItem) listings, see CurrentPrice or ConvertedCurrentPrice instead. <br> <br> Returned only if an item was listed with a Buy It Now option. <br> <br> For active items, refresh this value every 24 hours to pick up the current conversion rates (if this value has been converted).
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ConvertedBuyItNowPrice;
	/**
	 * The EndTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Time stamp (in <a href="types/simpleTypes.html#dateTime">GMT</a>) of when the listing is scheduled to end, or time stamp of the actual end time (if the item ended).
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The StartTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Time stamp (in <a href="types/simpleTypes.html#dateTime">GMT</a>) that eBay recorded as the moment that the listing was made available. The start time returned by a search call may vary from the value returned by GetSingleItem.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The ViewItemURLForNaturalSearch
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL to view this listing on eBay. This URL is optimized to support natural search. That is, this URL is designed to make items on eBay easier to find via popular Internet search engines. For example, this URL specifies the item title, and it is optimized for natural search: "_W0QQ" is like "?" (question mark), "QQ" is like "&" (ampersand), and "Z" is like "=" (equals sign). You shouldn't modify the query syntax in your application. For example, eBay won't recognize the URL if you change QQ to ?.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $ViewItemURLForNaturalSearch;
	/**
	 * The ListingType
	 * Meta informations extracted from the WSDL
	 * - documentation : The format of the listing, such as online auction, fixed price, or advertisement format.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Location
	 * Meta informations extracted from the WSDL
	 * - documentation : Physical location of the item, as specified by the seller. (This gives a general indication of where the item will be shipped or delivered from.)
	 * - minOccurs : 0
	 * @var string
	 */
	public $Location;
	/**
	 * The PaymentMethods
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifies the payment method (such as PayPal) the seller will accept when the buyer pays for the item. <br> <br> <span class="tablenote"><b>Note:</b> If the seller only accepts PayPal, the buyer can still pay with a credit card. PayPal supports major credit cards. </span> <br> Payment methods are not applicable to eBay Real Estate advertisement listings, or other Classified Ad format listings.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingEnumBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The GalleryURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for a picture used as the Gallery thumbnail, if any. The image uses one of the following graphics formats: JPEG, BMP, TIF, or GIF. Only returned if the seller chose to show a gallery image.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The PictureURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the URL for an image associated with the item, if any. Returned only if the seller included at least one picture in their listing. Note that this element does not return the URLs of pictures that the seller included in the Description via HTML IMG tags. <br> <br> Items listed the main eBay site can have a maximum of 12 picture URLs hosted by eBay Picture Services, or a maximum of 6 picture URLs hosted by a third party (such as the a photo site). Note that a listing can have up to 24 picture URLs on the US eBay Motors site (for all vehicle listings), and on the eBay Canada Motors site. <br> <br> eBay uses the seller's first picture at the top of the listing's View Item page.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The PostalCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Postal code indicating the physical location of the item, as specified by the seller. (This gives a general indication of where the item will be shipped or delivered from.)
	 * - minOccurs : 0
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The PrimaryCategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Numeric ID of the first (or only) category in which the item is listed. (Listings can appear in more than one category.)
	 * - minOccurs : 0
	 * @var string
	 */
	public $PrimaryCategoryID;
	/**
	 * The PrimaryCategoryName
	 * Meta informations extracted from the WSDL
	 * - documentation : Display name of the first (or only) category in which the item is listed. This is a fully qualified category breadcrumb (e.g., Computers & Networking:Laptops, Notebooks).
	 * - minOccurs : 0
	 * @var string
	 */
	public $PrimaryCategoryName;
	/**
	 * The Quantity
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of items the seller is offering in the listing. (Subtract Item.QuantitySold from this value to calculate the number of items currently available for sale.) <br> <br> An online, comptetitive-bidding auction with a Quantity of 1 is referred to as a < i>Chinese</i> auction. Basic fixed-price and Store Inventory listings can have a Quantity of 1 or more. <br /> <br /> The listing's current or Buy It Now price is the price of the item in the listing. <br /> <br /> <span class="tablenote"><strong>Note:</strong> A seller can also offer multiple items for sale with a single price for all the items. For example, instead of listing 10 lightbulbs for US 2.00 each, they might list 10 lightbulbs for USD 20.00 (where you have to buy all 10). This is called a "lot." <br /> <br /> If the listing includes a lot, Quantity does not specify the lot size; it reflects how many lots are being sold. For example, if the original listing included 5 lots of 10 lightbulbs each, Quantity would be 5. </span> <br />
	 * - minOccurs : 0
	 * @var int
	 */
	public $Quantity;
	/**
	 * The Seller
	 * Meta informations extracted from the WSDL
	 * - documentation : Container for information about this listing's seller.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleUserType
	 */
	public $Seller;
	/**
	 * The BidCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of bids that have been placed on the item. <br> <br> On most sites, the Buy It Now Option becomes unavailable once an auction has a valid bid. Note that the bid must be above any reserve price. <br> <br> <b>FindPopularItems: </b>For fixed-price listings, the BidCount value is the total number of items purchased so far (in the listing's lifetime).
	 * - minOccurs : 0
	 * @var int
	 */
	public $BidCount;
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent this request. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br> <br /> Some eBay sites also support multi-item Buy It Now auctions, where you can buy multiple items from the same listing at a fixed price. See Item.BuyItNowAvailable. <br> <br> For fixed-price (FixedPriceItem) listings, see CurrentPrice or ConvertedCurrentPrice instead. <br> <br> Returned only if an item was listed with a Buy It Now option. <br> <br> For active items, refresh this value every 24 hours to pick up the current conversion rates (if this value has been converted).
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The current price of the item in the original listing currency. <br><br> For auction listings, this price is the starting minimum price (if the listing has no bids) or the current highest bid (if bids have been placed) for the item. This does not reflect the BuyItNow price. <br><br> For fixed-price and ad format listings, this is the current listing price.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $CurrentPrice;
	/**
	 * The HighBidder
	 * Meta informations extracted from the WSDL
	 * - documentation : The high bidder for comptetitive-bidding auctions that have ended and have a winning bidder. This indicates the user who purchased the item. <br> <br> Not returned for auctions that have received no bids, or for fixed price and Store Inventory listings that are still active.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleUserType
	 */
	public $HighBidder;
	/**
	 * The ListingStatus
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies a listing's status in eBay's processing workflow. If an item's EndTime is in the past, but no details about the buyer or high bidder are shown (and the user is not anonymous), use this listing status information to determine whether eBay has finished processing the listing.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * The QuantitySold
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of items purchased so far from this listing. (Subtract this value from Item.Quantity to calculate the number of items currently available for sale.)
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ReserveMet
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether any bids on this item are greater than the seller's reserve price for the listing (if any). <br> <br> A reserve is the lowest price at which the seller is willing to sell the item. The reserve price is higher than the listing's opening bid (minimum bid) and lower than the Buy It Now price, if any. (The reserve price is only known to the seller.) Some sellers don't set a reserve at all. If a listing does have a reserve price, the highest bidder will only win the item if their bid is also above that price. <br> <br> Only returned for online auctions that have a reserve price. (Fixed price, Store Inventory, and classified ad listings don't have reserve prices.)
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReserveMet;
	/**
	 * The ShipToLocations
	 * Meta informations extracted from the WSDL
	 * - documentation : An international location or region to which the seller is willing to ship this item. Returned only for items that have ShipToLocations specified. <br> <br> <strong>Applicable values</strong>: <p class="ename">&bull;&nbsp;&nbsp; Americas</p> <p class="edef">(North, South, or Latin America)</p> <p class="ename">&bull;&nbsp;&nbsp; Asia</p> <p class="ename">&bull;&nbsp;&nbsp; Caribbean</p> <p class="ename">&bull;&nbsp;&nbsp; Europe</p> <p class="ename">&bull;&nbsp;&nbsp; EuropeanUnion</p> <p class="ename">&bull;&nbsp;&nbsp; LatinAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; MiddleEast</p> <p class="ename">&bull;&nbsp;&nbsp; NorthAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; Oceania</p> <p class="edef">(Pacific region other than Asia)</p> <p class="ename">&bull;&nbsp;&nbsp; SouthAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; WillNotShip</p> <p class="edef">(No shipping, buyer must pick up the item)</p> <p class="ename">&bull;&nbsp;&nbsp; Worldwide</p> <p class="edef">(Seller will ship worldwide)</p> <p class="ename">&bull;&nbsp;&nbsp; 2-letter country identifier</p> <p class="edef">(See CountryCodeType for values)</p>
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShipToLocations;
	/**
	 * The Site
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the eBay site on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be US. If it's listed on the eBay Germany site, the value would be Germany. <br> <br> The listing's original site can affect the values of converted (localized) prices (when your request specifies a site that is different from the listing's site).
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSiteCodeType
	 */
	public $Site;
	/**
	 * The TimeLeft
	 * Meta informations extracted from the WSDL
	 * - documentation : Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). For ended listings, the time left is PT0S (zero seconds).
	 * - minOccurs : 0
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of the item as it appears in the listing or in search and browse results. <br> <br> <b>For US eBay Motors vehicles only:</b> In item-retrieval calls (like GetSingleItem and GetMultipleItems), this value shows the vehicle Make and Model (e.g., "Buick : Skylark"). <br> <br> <span class="tablenote"><b>Note:</b> GetSingleItem does not return the same Item.Title value for US eBay Motors listings. Here's why: <br> <br> In general, GetSingleItem maps to eBay's View Item page. The eBay Motors Web site's View Item page shows two vehicle titles in the title bar: One title is a label based on the Year, Make, Model, and Submodel (e.g., "1996 Buick Skylark Limited"). The model is included unless it's "Other" or unspecified. The submodel is included if the seller specified a submodel. The other title is a path based on the Make and Model (e.g., "Buick : Skylark"). The Item.Title value in GetSingleItem maps to this path. </span> <br />
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The ShippingCostSummary
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains basic shipping-related costs for the item. If Item.Quantity is greater than 1, this is the shipping cost for one item. If the seller offers a choice of more than one shipping service (such as UPS Ground and USPS Media mail), this is the cost of the "first" shipping option (usually the lowest cost option). <br> <br> If a listing has shipping costs, use GetShippingCosts if you want to get more details about the services and costs that the seller is offering.
	 * - minOccurs : 0
	 * @var EbayShoppingStructShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * The ItemSpecifics
	 * Meta informations extracted from the WSDL
	 * - documentation : Category-specific fields that the seller added to describe the listing. The names of these fields are different for items in different categories, so they're returned in a generic Name/Value structure. The field names are usually very well known within the category. <br> <br> For example, a book's item specifics might include a field like Publication Year=2007 (where Publication Year is returned in Name, and 2007 is returned in Value), and a field like Format=Hardcover. But a car's item specifics would be different from a book's, with fields like Make= Toyota and Model=Prius. And a ticket's item specifics would be different from those of books and cars, with fields like EventType=Concerts and Venue=The Fillmore. <br> <br> One of the most common uses for item specifics is the item condition. <br> <br> Only returned if the seller included Item Specifics in the listing.<br> <br> <span class="tablenote"><b>Note:</b> Starting in May 2010, many categories in Production and Sandbox will start returning the item condition in ConditionID and ConditionDisplayName instead, if the seller used ConditionID instead of ItemSpecifics. Monitor the eBay Developers Program newsletter for details and timing.</span>
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The HitCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of times the listing's View Item page has been viewed (as determined by eBay). Only returned if the seller has chosen to include a hit counter in the listing, and if the seller has also chosen to make the listing's hit count publicly visible. This field is retrieved asynchronously. If you believe the item has a publicly visible hit count, but this field is not returned, retry the call. <br> <br> Not applicable to Half.com
	 * - minOccurs : 0
	 * @var long
	 */
	public $HitCount;
	/**
	 * The Subtitle
	 * Meta informations extracted from the WSDL
	 * - documentation : Subtitle of the item. Only returned if the seller included a subtitle for the listing. <br> <br> For US eBay Motors passenger vehicle, motorcycle, and "other vehicle" categories or listings in CA eBay Motors passenger vehicle and motorcycle categories, the seller's subtitle is only available in the Item.ItemSpecifics node. Call GetSingleItem with IncludeSelector=ItemSpecifics to retrieve a listing's Item Specifics.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Subtitle;
	/**
	 * The PrimaryCategoryIDPath
	 * Meta informations extracted from the WSDL
	 * - documentation : The fully qualified ID breadcrumb (path) of the first category. For example, if the primary category ID is 45678, and its parent category's ID is 123, the breadcrumb (path) would be 123:45678.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PrimaryCategoryIDPath;
	/**
	 * The SecondaryCategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID of the second category in which the item is listed. Returned only if the seller listed a second category.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SecondaryCategoryID;
	/**
	 * The SecondaryCategoryName
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of the second category in which the item is listed. Returned only if the seller listed a second category.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SecondaryCategoryName;
	/**
	 * The SecondaryCategoryIDPath
	 * Meta informations extracted from the WSDL
	 * - documentation : The fully qualified ID breadcrumb (path) of the second category. For example, if the secondary category ID is 45678, and its parent category's ID is 123, the breadcrumb (path) would be 123:45678. Returned only if the seller listed a second category.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SecondaryCategoryIDPath;
	/**
	 * The Charity
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifier for a Giving Works listing and the benefiting nonprofit charity organization.
	 * - minOccurs : 0
	 * @var EbayShoppingStructCharityType
	 */
	public $Charity;
	/**
	 * The GermanMotorsSearchable
	 * Meta informations extracted from the WSDL
	 * - documentation : The item is featured in eBay search results on the mobile.de partner site. Applicable to eBay Germany.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $GermanMotorsSearchable;
	/**
	 * The GetItFast
	 * Meta informations extracted from the WSDL
	 * - documentation : A Get It Fast listing.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The Gift
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, a generic gift icon displays next the listing's title in search and browse pages.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Gift;
	/**
	 * The PictureExists
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns true if the item has an associated picture. Not returned if value is false.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $PictureExists;
	/**
	 * The RecentListing
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns true if the item listing is no more than one day old. Not returned if value is false.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RecentListing;
	/**
	 * The Storefront
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns the seller's store information if the seller has an eBay store. Returns a blank store if the seller does not have an eBay storefront.
	 * - minOccurs : 0
	 * @var EbayShoppingStructStorefrontType
	 */
	public $Storefront;
	/**
	 * The DistanceFromBuyer
	 * Meta informations extracted from the WSDL
	 * - documentation : The distance of the item from the buyer. The DistanceFromBuyer unit (miles or kilometers) varies by site. If the country whose site you are searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is kilometers. Otherwise, e.g. if the country is US or UK, then the DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a value for PostalCode is supplied in the request.
	 * - minOccurs : 0
	 * @var EbayShoppingStructDistanceType
	 */
	public $DistanceFromBuyer;
	/**
	 * The Country
	 * Meta informations extracted from the WSDL
	 * - documentation : Two-letter ISO 3166 country code to indicate the country where the item is located.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumCountryCodeType
	 */
	public $Country;
	/**
	 * The WatchCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of users who have placed the item on their Watch list.
	 * - minOccurs : 0
	 * @var int
	 */
	public $WatchCount;
	/**
	 * The HalfItemCondition
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns the Half.com condition code for the item. For example, "brand new," "used," etc.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumHalfItemConditionCodeType
	 */
	public $HalfItemCondition;
	/**
	 * The SellerComments
	 * Meta informations extracted from the WSDL
	 * - documentation : Notes that the Seller made when they listed the item. Not returned if the Seller did not make any comments.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SellerComments;
	/**
	 * The ReturnPolicy
	 * Meta informations extracted from the WSDL
	 * - documentation : If a seller specified return policy details, then this container has fields with those details. The fields that can be returned in this container vary by site.
	 * - minOccurs : 0
	 * @var EbayShoppingStructReturnPolicyType
	 */
	public $ReturnPolicy;
	/**
	 * The MinimumToBid
	 * Meta informations extracted from the WSDL
	 * - documentation : Smallest amount the next bid on the item can be. Returns same value as Item.StartPrice (if no bids have yet been placed) or CurrentPrice plus BidIncrement (if at least one bid has been placed). Only applicable to competitive-bid auction listings. Returns null for basic Fixed Price (FixedPriceItem) and Ad type listings.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $MinimumToBid;
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : A prototype description of a well-known type of item, such as a popular book. <br> <br> When returned for GetSingleItem, is always of type Reference, and serves as a global reference ID for an eBay catalog product. <br> <br> When used as input, retrieves product details for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. <br> <br> The request requires either QueryKeywords or ProductID, but these fields cannot be used together.
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The AutoPay
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, the seller requires immediate payment for the item. If false (or not specified), immediate payment is not requested. Buyers must have a PayPal account to purchase items that require immediate payment. <br><br> A seller can choose to require immediate payment for Fixed Price and Buy It Now listings, including eBay Stores Inventory listings. If a Buy It Now item ends as an auction (that is, if the Buy It Now option is removed due to bids being placed on the listing), the immediate payment requirement does not apply. <br><br> <span class="tablenote"><strong>Note:</strong> The value of the AutoPay flag indicates the seller's stated preference only. It does not indicate whether the listing is still a candidate for purchase via immediate payment. For example, if a listing receives bids and no longer qualifies for immediate payment, the value of the AutoPay flag does not change. </span> <br> Only applicable to items listed on PayPal-enabled sites and in categories that support immediate payment. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * The BusinessSellerDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns the seller's business information. Set the SellerBusinessCodeType to 'Commercial' in the request to return the related information. This is only applicable for sites where Business Seller options are supported.
	 * - minOccurs : 0
	 * @var EbayShoppingStructBusinessSellerDetailsType
	 */
	public $BusinessSellerDetails;
	/**
	 * The PaymentAllowedSite
	 * Meta informations extracted from the WSDL
	 * - documentation : Enables you to view the sites on which an item can be purchased, based on the payment methods offered for the item.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSiteCodeType
	 */
	public $PaymentAllowedSite;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the item can be paid for through a payment gateway account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card is enabled for credit cards because the seller has a payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The Variations
	 * Meta informations extracted from the WSDL
	 * - documentation : Variations are multiple similar (but not identical) items in a single fixed-price (or Store Inventory Format) listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and price. Only returned if the listing contains multiple variations.
	 * - minOccurs : 0
	 * @var EbayShoppingStructVariationsType
	 */
	public $Variations;
	/**
	 * The HandlingTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. When listing the item the seller sets this to a positive integer value (1, 2, 3, 4, 5, 10, 15, or 20) corresponding to the number of days. This time does not include the shipping time (the carrier's transit time). <strong>GetSingleItem</strong> or <strong>GetMultipleItems</strong> returns <strong>HandlingTime</strong> only when shipping service options are specified for the item and the seller specified a handling time. <br> <br> Valid for flat and calculated shipping. Does not apply when there is no shipping, or when using local pickup only or freight shipping.
	 * - minOccurs : 0
	 * @var int
	 */
	public $HandlingTime;
	/**
	 * The LotSize
	 * Meta informations extracted from the WSDL
	 * - documentation : A lot is a set of two or more similar items that must be purchased together in a single transaction. A listing can have multiple lots (instead of multiple items). When LotSize is specified, the listing price reflects the price of each lot (not each item within the lot). In this case, Quantity indicates the number of lots being listed, and LotSize indicates the number of items in each lot. (If a listing has no lots, Quantity indicates the number of separate items being listed.) Important: Lot items can be listed only in lot-enabled categories. GetCategories returns lot size disabled with a value of true for categories that do not support lots. <br /><br /> Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var int
	 */
	public $LotSize;
	/**
	 * The ConditionID
	 * Meta informations extracted from the WSDL
	 * - documentation : <span class="tablenote"><b>Note:</b> Starting in early March 2010, this will be supported for a few test categories in the Sandbox. In May 2010, ConditionID will be supported for many categories in Production and Sandbox. Monitor the eBay Developers Program newsletter for details and timing.</span> <br> <br> The numeric ID (e.g., 1000) for the item condition. Only returned when the seller specified ConditionID in their listing. Also see ItemSpecifics in case the seller used that field for the condition instead.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ConditionID;
	/**
	 * The ConditionDisplayName
	 * Meta informations extracted from the WSDL
	 * - documentation : <span class="tablenote"><b>Note:</b> Starting in early March 2010, this will be supported for a few test categories in the Sandbox. In May 2010, ConditionDisplayName will be supported for many categories in Production and Sandbox. Monitor the eBay Developers Program newsletter for details and timing.</span> <br> <br> The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> Most categories use the same display name for the same condition ID. Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another.<br> <br> Behind the scenes, eBay's search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished.<br> <br> Only returned when ConditionID is returned. Also see ItemSpecifics in case the seller used that field for the condition instead.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ConditionDisplayName;
	/**
	 * The QuantityAvailableHint
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the type of message that will be returned describing the quantity available for the item.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumQuantityAvailableHintCodeType
	 */
	public $QuantityAvailableHint;
	/**
	 * The QuantityThreshold
	 * Meta informations extracted from the WSDL
	 * - documentation : The quantity threshold above which the seller prefers not to show the actual quantity available. Returned when the quantity available is greater than the value of quantity threshold. Currently, 10 is the only available value for this threshold.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantityThreshold;
	/**
	 * The DiscountPriceInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br > <br > Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "sepcial account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items.
	 * - minOccurs : 0
	 * @var EbayShoppingStructDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The ExcludeShipToLocation
	 * Meta informations extracted from the WSDL
	 * - documentation : Use this field to specify an international country or region, or a special domestic location (for sites supporting this feature, currently US, UK, DE) to where you will not ship the associated item. On input, repeat this element for each location that you want to exclude as a shipping destination for your item. <br><br> Set ShipToRegistrationCountry to true to have your ExcludeShipToLocation settings applied to your listing. The locations you have excluded display in the Shipping and Handling section of your item listing. <br><br> If a buyer's primary ship-to location is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on your item. <br><br> The exclude ship-to location values are eBay regions and countries. To see the valid exclude ship-to locations for a specified site, call GeteBayDetails with DetailName set to ExcludeShippingLocationDetails. Repeat GeteBayDetails for each site on which you list. <br><br> This field works in conjunction with Item.ShipToLocations to create a set of international countries and regions to where you will, and will not, ship. You can list a region in the ShipToLocations field, then exclude specific countries within that region with this field (for example, you can specify Africa in ShipToLocations, yet exclude Chad with a ExcludeShipToLocation setting). In addition, if your ShipToLocations is Worldwide, you can use this field to specify both regions and countries that you want to exclude from your shipping destinations. <br><br> You can specify a default set of locations to where you will not ship in My eBay. If you create an Exclude Ship-To List, it is, by default, in effect when you list items. However, if you specify any value in this field on input, it nullifies the default settings in your Exclude Ship-To List. (If you use ExcludeShipToLocation when you list an item, you will need to list all the locations to where you will not ship the associated item, regardless of the default settings in your Exclude Ship-To List.) <br><br> Specify NONE in this field to override the default Exclude Ship-To List you might have set up in My eBay and indicate that you do not want to exclude any shipping locations from the respective item listing. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you must enable Exclude Shipping Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href="https://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1495">HowTo: ExcludeShipToLocation</a>. </span>
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The TopRatedListing
	 * Meta informations extracted from the WSDL
	 * - documentation : This field is only applicable to the US site, and will only be returned if the US seller qualifies as a Top-Rated Seller. The current requirements for US sellers to qualify as Top-Rated Sellers are: <ul> <li>100 or more selling transactions per year</li> <li>Shipment tracking information provided to buyer within handling time for at least 90 percent of their listings</li> </ul> <br/><br/> If this flag is returned for a listing, it indicates that the listing meets the new requirements for a Top-Rated Listing. A Top-Rated Listing must meet the following requirements: <ul> <li>14-day (or longer) return policy with Money Back option</li> <li>1-day Handling Time or better</li> </ul> <br/><br/> A new <b>Top-Rated Plus</b> seal will start appearing on the View Item page for all Top-Rated Listings beginning in November 2012. This seal will replace the <b>Top-Rated Seller</b> badge. US Top-Rated Sellers get a 20 percent discount on their FVF for all listings that qualify as Top-Rated Listings.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $TopRatedListing;
	/**
	 * The VhrUrl
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL to the eBay Motors item's full Vehicle History Report. Only returned when the item has a Vehicle History Report.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $VhrUrl;
	/**
	 * The VhrAvailable
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, the eBay Motors item has a Vehicle History Report associated with it.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $VhrAvailable;
	/**
	 * The QuantityInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : This container consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from the listing. <br/><br/> This field is currently only applicable for event ticket listings in US and CA, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
	 * - minOccurs : 0
	 * @var EbayShoppingStructQuantityInfo
	 */
	public $QuantityInfo;
	/**
	 * The UnitInfo
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit. eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This information is currently required only for business sellers, and only for listings with a Buy It Now option. </span>
	 * - minOccurs : 0
	 * @var EbayShoppingStructUnitInfoType
	 */
	public $UnitInfo;
	/**
	 * The GlobalShipping
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether eBay's Global Shipping Program is offered for the listing. If the value of <strong>GlobalShipping</strong> is <code>true</code>, the Global Shipping Program is the default international shipping option for the listing, and eBay designates an appropriate international shipping service. If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying an international shipping service for the listing if desired.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $GlobalShipping;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The ConditionDescription
	 * Meta informations extracted from the WSDL
	 * - documentation : This string field is used by the seller to more clearly describe the condition of items that are not brand new. This field becomes available to sellers starting in November 2012. <br><br> The <b>ConditionDescription</b> field will be available for all categories, including categories where the condition type is not applicable (e.g., Antiques). This field will be applicable for all item conditions except "New", "Brand New", "New with tags", and "New in box". If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br> This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another. <br><br> The <b>ConditionDescription</b> field is only returned if a condition description is specified in the listing.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ConditionDescription;
	/**
	 * The ItemCompatibilityCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the number of compatible applications specified for the given item. Applies to items listed with fitment by application only (either manually or with a catalog product that supports compatibility). <br><br> Not returned if the item has no specified compatible applications. <br><br> To retrieve the list of compatibility count and compatibility information, pass <strong>IncludeSelector</strong> in the request with a value of <code>Compatibility</code>. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories, on the eBay Motors (US) site (site ID 100) only.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ItemCompatibilityCount;
	/**
	 * The ItemCompatibilityList
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of parts compatibility information specified as name and value pairs, describing an assembly with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle, the name (search name) would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values describe the specific vehicle, such as a 2006 Honda Accord. Use the Product Metadata API to retrieve valid search names and corresponding values. <br><br> Not returned if the item has no specified compatible applications. <br><br> To retrieve the list of compatibility count and compatibility information, pass <strong>IncludeSelector</strong> in the request with a value of <code>Compatibility</code>. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories, on the eBay Motors (US) site (site ID 100) only.
	 * - minOccurs : 0
	 * @var EbayShoppingStructItemCompatibilityListType
	 */
	public $ItemCompatibilityList;
	/**
	 * The QuantitySoldByPickupInStore
	 * Meta informations extracted from the WSDL
	 * - documentation : This field indicates the total quantity of items sold and picked up by buyers using the In-Store Pickup option. This value is the total number of items purchased by one or more buyers using the In-Store Pickup option, and is not the total number of In-Store Pickup orders. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these items (in same purchase), the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be '10' and not '2'. <br> <br> In the case of multi-variation, fixed-price listings, each <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value indicates the total quantity of that corresponding item variation (for example, large blue shirts) sold and picked up by buyers using the In-Store Pickup option, and the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be the total quantity of all item variations sold for the listing. <br> <br> This field will only be returned if the listing is eligible for In-Store Pickup. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Sellers who are eligible for the In-Store Pickup feature can start listing items in Production with the In-Store Pickup option beginning in late September 2013.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySoldByPickupInStore;
	/**
	 * The SKU
	 * Meta informations extracted from the WSDL
	 * - documentation : A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. A seller can specify a SKU when listing an item with AddItem and related calls. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> A SKU is not required to be unique. A seller can specify a particular SKU on one item or on multiple items. Different sellers can use the same SKUs.<br> <br> If the SKU is unique across a seller's active listings, and if the seller listed the item by using AddFixedPriceItem or RelistFixedPriceItem, the seller can also set Item.InventoryTrackingMethod to SKU in those calls. This allows the seller to use SKU instead of ItemID as a unique identifier in subsequent calls, such as GetItem and ReviseInventoryStatus. If both ItemID and SKU are specified in calls that support the use of SKU as a unique identifier, the ItemID value takes precedence.<br> <br> For multi-variation listings, the SKU can be used to uniquely identify a variation that is being revised or relisted. If InventoryTrackingMethod is ItemID, an ItemID is also required. When both SKU and VariationSpecifics are passed in the request, the variation specifics take precedence as the unique identifier. <br> <br> <span class="tablenote"><b>Note:</b> The eBay Web site UI cannot identify listings by SKU. For example, My eBay pages and Search pages all identify listings by item ID. When a buyer contacts you via eBay's messaging functionality, eBay uses the item ID as the identifier. Buyer-focused APIs (like the Shopping API) also do not support SKU as an identifier. </span> <b>For revising and relisting only:</b> To remove a SKU when you revise or relist an item, use DeletedField. (You cannot remove a SKU when Item.InventoryTrackingMethod is set to SKU.)<br> <br> For GetMyeBaySelling, this is only returned if set. <br> Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SKU;
	/**
	 * The NewBestOffer
	 * Meta informations extracted from the WSDL
	 * - documentation : This boolean field will be returned as 'true' if a fixed-price listing is requiring immediate payment, and the item's category supports Immediate Payment for Best Offers. Initially, Immediate Payment for Best Offers will be supported by the Computers & Tablets, Jewelry & Watches, and Art categories, but this feature will get enabled in more categories going forward. <br/><br/> If the Immediate Payment for Best Offers feature is enabled for a fixed-price listing, and a buyer's Best Offer for the item is accepted by the seller, that buyer will be expected to pay immediately for the item, or that buyer will run the risk of losing the item to another buyer since that item will remain on sale until payment is made.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $NewBestOffer;
	/**
	 * Constructor method for SimpleItemType
	 * @see parent::__construct()
	 * @param boolean $_bestOfferEnabled
	 * @param EbayShoppingStructAmountType $_buyItNowPrice
	 * @param string $_description
	 * @param string $_itemID
	 * @param boolean $_buyItNowAvailable
	 * @param EbayShoppingStructAmountType $_convertedBuyItNowPrice
	 * @param dateTime $_endTime
	 * @param dateTime $_startTime
	 * @param anyURI $_viewItemURLForNaturalSearch
	 * @param EbayShoppingEnumListingTypeCodeType $_listingType
	 * @param string $_location
	 * @param EbayShoppingEnumBuyerPaymentMethodCodeType $_paymentMethods
	 * @param anyURI $_galleryURL
	 * @param anyURI $_pictureURL
	 * @param string $_postalCode
	 * @param string $_primaryCategoryID
	 * @param string $_primaryCategoryName
	 * @param int $_quantity
	 * @param EbayShoppingStructSimpleUserType $_seller
	 * @param int $_bidCount
	 * @param EbayShoppingStructAmountType $_convertedCurrentPrice
	 * @param EbayShoppingStructAmountType $_currentPrice
	 * @param EbayShoppingStructSimpleUserType $_highBidder
	 * @param EbayShoppingEnumListingStatusCodeType $_listingStatus
	 * @param int $_quantitySold
	 * @param boolean $_reserveMet
	 * @param string $_shipToLocations
	 * @param EbayShoppingEnumSiteCodeType $_site
	 * @param duration $_timeLeft
	 * @param string $_title
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary
	 * @param EbayShoppingStructNameValueListArrayType $_itemSpecifics
	 * @param long $_hitCount
	 * @param string $_subtitle
	 * @param string $_primaryCategoryIDPath
	 * @param string $_secondaryCategoryID
	 * @param string $_secondaryCategoryName
	 * @param string $_secondaryCategoryIDPath
	 * @param EbayShoppingStructCharityType $_charity
	 * @param boolean $_germanMotorsSearchable
	 * @param boolean $_getItFast
	 * @param boolean $_gift
	 * @param boolean $_pictureExists
	 * @param boolean $_recentListing
	 * @param EbayShoppingStructStorefrontType $_storefront
	 * @param EbayShoppingStructDistanceType $_distanceFromBuyer
	 * @param EbayShoppingEnumCountryCodeType $_country
	 * @param int $_watchCount
	 * @param EbayShoppingEnumHalfItemConditionCodeType $_halfItemCondition
	 * @param string $_sellerComments
	 * @param EbayShoppingStructReturnPolicyType $_returnPolicy
	 * @param EbayShoppingStructAmountType $_minimumToBid
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param boolean $_autoPay
	 * @param EbayShoppingStructBusinessSellerDetailsType $_businessSellerDetails
	 * @param EbayShoppingEnumSiteCodeType $_paymentAllowedSite
	 * @param boolean $_integratedMerchantCreditCardEnabled
	 * @param EbayShoppingStructVariationsType $_variations
	 * @param int $_handlingTime
	 * @param int $_lotSize
	 * @param int $_conditionID
	 * @param string $_conditionDisplayName
	 * @param EbayShoppingEnumQuantityAvailableHintCodeType $_quantityAvailableHint
	 * @param int $_quantityThreshold
	 * @param EbayShoppingStructDiscountPriceInfoType $_discountPriceInfo
	 * @param string $_excludeShipToLocation
	 * @param boolean $_topRatedListing
	 * @param anyURI $_vhrUrl
	 * @param boolean $_vhrAvailable
	 * @param EbayShoppingStructQuantityInfo $_quantityInfo
	 * @param EbayShoppingStructUnitInfoType $_unitInfo
	 * @param boolean $_globalShipping
	 * @param DOMDocument $_any
	 * @param string $_conditionDescription
	 * @param int $_itemCompatibilityCount
	 * @param EbayShoppingStructItemCompatibilityListType $_itemCompatibilityList
	 * @param int $_quantitySoldByPickupInStore
	 * @param string $_sKU
	 * @param boolean $_newBestOffer
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function __construct($_bestOfferEnabled = NULL,$_buyItNowPrice = NULL,$_description = NULL,$_itemID = NULL,$_buyItNowAvailable = NULL,$_convertedBuyItNowPrice = NULL,$_endTime = NULL,$_startTime = NULL,$_viewItemURLForNaturalSearch = NULL,$_listingType = NULL,$_location = NULL,$_paymentMethods = NULL,$_galleryURL = NULL,$_pictureURL = NULL,$_postalCode = NULL,$_primaryCategoryID = NULL,$_primaryCategoryName = NULL,$_quantity = NULL,$_seller = NULL,$_bidCount = NULL,$_convertedCurrentPrice = NULL,$_currentPrice = NULL,$_highBidder = NULL,$_listingStatus = NULL,$_quantitySold = NULL,$_reserveMet = NULL,$_shipToLocations = NULL,$_site = NULL,$_timeLeft = NULL,$_title = NULL,$_shippingCostSummary = NULL,$_itemSpecifics = NULL,$_hitCount = NULL,$_subtitle = NULL,$_primaryCategoryIDPath = NULL,$_secondaryCategoryID = NULL,$_secondaryCategoryName = NULL,$_secondaryCategoryIDPath = NULL,$_charity = NULL,$_germanMotorsSearchable = NULL,$_getItFast = NULL,$_gift = NULL,$_pictureExists = NULL,$_recentListing = NULL,$_storefront = NULL,$_distanceFromBuyer = NULL,$_country = NULL,$_watchCount = NULL,$_halfItemCondition = NULL,$_sellerComments = NULL,$_returnPolicy = NULL,$_minimumToBid = NULL,$_productID = NULL,$_autoPay = NULL,$_businessSellerDetails = NULL,$_paymentAllowedSite = NULL,$_integratedMerchantCreditCardEnabled = NULL,$_variations = NULL,$_handlingTime = NULL,$_lotSize = NULL,$_conditionID = NULL,$_conditionDisplayName = NULL,$_quantityAvailableHint = NULL,$_quantityThreshold = NULL,$_discountPriceInfo = NULL,$_excludeShipToLocation = NULL,$_topRatedListing = NULL,$_vhrUrl = NULL,$_vhrAvailable = NULL,$_quantityInfo = NULL,$_unitInfo = NULL,$_globalShipping = NULL,$_any = NULL,$_conditionDescription = NULL,$_itemCompatibilityCount = NULL,$_itemCompatibilityList = NULL,$_quantitySoldByPickupInStore = NULL,$_sKU = NULL,$_newBestOffer = NULL)
	{
		parent::__construct(array('BestOfferEnabled'=>$_bestOfferEnabled,'BuyItNowPrice'=>$_buyItNowPrice,'Description'=>$_description,'ItemID'=>$_itemID,'BuyItNowAvailable'=>$_buyItNowAvailable,'ConvertedBuyItNowPrice'=>$_convertedBuyItNowPrice,'EndTime'=>$_endTime,'StartTime'=>$_startTime,'ViewItemURLForNaturalSearch'=>$_viewItemURLForNaturalSearch,'ListingType'=>$_listingType,'Location'=>$_location,'PaymentMethods'=>$_paymentMethods,'GalleryURL'=>$_galleryURL,'PictureURL'=>$_pictureURL,'PostalCode'=>$_postalCode,'PrimaryCategoryID'=>$_primaryCategoryID,'PrimaryCategoryName'=>$_primaryCategoryName,'Quantity'=>$_quantity,'Seller'=>$_seller,'BidCount'=>$_bidCount,'ConvertedCurrentPrice'=>$_convertedCurrentPrice,'CurrentPrice'=>$_currentPrice,'HighBidder'=>$_highBidder,'ListingStatus'=>$_listingStatus,'QuantitySold'=>$_quantitySold,'ReserveMet'=>$_reserveMet,'ShipToLocations'=>$_shipToLocations,'Site'=>$_site,'TimeLeft'=>$_timeLeft,'Title'=>$_title,'ShippingCostSummary'=>$_shippingCostSummary,'ItemSpecifics'=>($_itemSpecifics instanceof EbayShoppingStructNameValueListArrayType)?$_itemSpecifics:new EbayShoppingStructNameValueListArrayType($_itemSpecifics),'HitCount'=>$_hitCount,'Subtitle'=>$_subtitle,'PrimaryCategoryIDPath'=>$_primaryCategoryIDPath,'SecondaryCategoryID'=>$_secondaryCategoryID,'SecondaryCategoryName'=>$_secondaryCategoryName,'SecondaryCategoryIDPath'=>$_secondaryCategoryIDPath,'Charity'=>$_charity,'GermanMotorsSearchable'=>$_germanMotorsSearchable,'GetItFast'=>$_getItFast,'Gift'=>$_gift,'PictureExists'=>$_pictureExists,'RecentListing'=>$_recentListing,'Storefront'=>$_storefront,'DistanceFromBuyer'=>$_distanceFromBuyer,'Country'=>$_country,'WatchCount'=>$_watchCount,'HalfItemCondition'=>$_halfItemCondition,'SellerComments'=>$_sellerComments,'ReturnPolicy'=>$_returnPolicy,'MinimumToBid'=>$_minimumToBid,'ProductID'=>$_productID,'AutoPay'=>$_autoPay,'BusinessSellerDetails'=>$_businessSellerDetails,'PaymentAllowedSite'=>$_paymentAllowedSite,'IntegratedMerchantCreditCardEnabled'=>$_integratedMerchantCreditCardEnabled,'Variations'=>$_variations,'HandlingTime'=>$_handlingTime,'LotSize'=>$_lotSize,'ConditionID'=>$_conditionID,'ConditionDisplayName'=>$_conditionDisplayName,'QuantityAvailableHint'=>$_quantityAvailableHint,'QuantityThreshold'=>$_quantityThreshold,'DiscountPriceInfo'=>$_discountPriceInfo,'ExcludeShipToLocation'=>$_excludeShipToLocation,'TopRatedListing'=>$_topRatedListing,'VhrUrl'=>$_vhrUrl,'VhrAvailable'=>$_vhrAvailable,'QuantityInfo'=>$_quantityInfo,'UnitInfo'=>$_unitInfo,'GlobalShipping'=>$_globalShipping,'any'=>$_any,'ConditionDescription'=>$_conditionDescription,'ItemCompatibilityCount'=>$_itemCompatibilityCount,'ItemCompatibilityList'=>$_itemCompatibilityList,'QuantitySoldByPickupInStore'=>$_quantitySoldByPickupInStore,'SKU'=>$_sKU,'NewBestOffer'=>$_newBestOffer));
	}
	/**
	 * Get BestOfferEnabled value
	 * @return boolean|null
	 */
	public function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * Set BestOfferEnabled value
	 * @param boolean $_bestOfferEnabled the BestOfferEnabled
	 * @return boolean
	 */
	public function setBestOfferEnabled($_bestOfferEnabled)
	{
		return ($this->BestOfferEnabled = $_bestOfferEnabled);
	}
	/**
	 * Get BuyItNowPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * Set BuyItNowPrice value
	 * @param EbayShoppingStructAmountType $_buyItNowPrice the BuyItNowPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setBuyItNowPrice($_buyItNowPrice)
	{
		return ($this->BuyItNowPrice = $_buyItNowPrice);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get ItemID value
	 * @return string|null
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemID value
	 * @param string $_itemID the ItemID
	 * @return string
	 */
	public function setItemID($_itemID)
	{
		return ($this->ItemID = $_itemID);
	}
	/**
	 * Get BuyItNowAvailable value
	 * @return boolean|null
	 */
	public function getBuyItNowAvailable()
	{
		return $this->BuyItNowAvailable;
	}
	/**
	 * Set BuyItNowAvailable value
	 * @param boolean $_buyItNowAvailable the BuyItNowAvailable
	 * @return boolean
	 */
	public function setBuyItNowAvailable($_buyItNowAvailable)
	{
		return ($this->BuyItNowAvailable = $_buyItNowAvailable);
	}
	/**
	 * Get ConvertedBuyItNowPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * Set ConvertedBuyItNowPrice value
	 * @param EbayShoppingStructAmountType $_convertedBuyItNowPrice the ConvertedBuyItNowPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setConvertedBuyItNowPrice($_convertedBuyItNowPrice)
	{
		return ($this->ConvertedBuyItNowPrice = $_convertedBuyItNowPrice);
	}
	/**
	 * Get EndTime value
	 * @return dateTime|null
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set EndTime value
	 * @param dateTime $_endTime the EndTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->EndTime = $_endTime);
	}
	/**
	 * Get StartTime value
	 * @return dateTime|null
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set StartTime value
	 * @param dateTime $_startTime the StartTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->StartTime = $_startTime);
	}
	/**
	 * Get ViewItemURLForNaturalSearch value
	 * @return anyURI|null
	 */
	public function getViewItemURLForNaturalSearch()
	{
		return $this->ViewItemURLForNaturalSearch;
	}
	/**
	 * Set ViewItemURLForNaturalSearch value
	 * @param anyURI $_viewItemURLForNaturalSearch the ViewItemURLForNaturalSearch
	 * @return anyURI
	 */
	public function setViewItemURLForNaturalSearch($_viewItemURLForNaturalSearch)
	{
		return ($this->ViewItemURLForNaturalSearch = $_viewItemURLForNaturalSearch);
	}
	/**
	 * Get ListingType value
	 * @return EbayShoppingEnumListingTypeCodeType|null
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set ListingType value
	 * @uses EbayShoppingEnumListingTypeCodeType::valueIsValid()
	 * @param EbayShoppingEnumListingTypeCodeType $_listingType the ListingType
	 * @return EbayShoppingEnumListingTypeCodeType
	 */
	public function setListingType($_listingType)
	{
		if(!EbayShoppingEnumListingTypeCodeType::valueIsValid($_listingType))
		{
			return false;
		}
		return ($this->ListingType = $_listingType);
	}
	/**
	 * Get Location value
	 * @return string|null
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set Location value
	 * @param string $_location the Location
	 * @return string
	 */
	public function setLocation($_location)
	{
		return ($this->Location = $_location);
	}
	/**
	 * Get PaymentMethods value
	 * @return EbayShoppingEnumBuyerPaymentMethodCodeType|null
	 */
	public function getPaymentMethods()
	{
		return $this->PaymentMethods;
	}
	/**
	 * Set PaymentMethods value
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::valueIsValid()
	 * @param EbayShoppingEnumBuyerPaymentMethodCodeType $_paymentMethods the PaymentMethods
	 * @return EbayShoppingEnumBuyerPaymentMethodCodeType
	 */
	public function setPaymentMethods($_paymentMethods)
	{
		if(!EbayShoppingEnumBuyerPaymentMethodCodeType::valueIsValid($_paymentMethods))
		{
			return false;
		}
		return ($this->PaymentMethods = $_paymentMethods);
	}
	/**
	 * Get GalleryURL value
	 * @return anyURI|null
	 */
	public function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * Set GalleryURL value
	 * @param anyURI $_galleryURL the GalleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_galleryURL)
	{
		return ($this->GalleryURL = $_galleryURL);
	}
	/**
	 * Get PictureURL value
	 * @return anyURI|null
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set PictureURL value
	 * @param anyURI $_pictureURL the PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_pictureURL)
	{
		return ($this->PictureURL = $_pictureURL);
	}
	/**
	 * Get PostalCode value
	 * @return string|null
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set PostalCode value
	 * @param string $_postalCode the PostalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->PostalCode = $_postalCode);
	}
	/**
	 * Get PrimaryCategoryID value
	 * @return string|null
	 */
	public function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}
	/**
	 * Set PrimaryCategoryID value
	 * @param string $_primaryCategoryID the PrimaryCategoryID
	 * @return string
	 */
	public function setPrimaryCategoryID($_primaryCategoryID)
	{
		return ($this->PrimaryCategoryID = $_primaryCategoryID);
	}
	/**
	 * Get PrimaryCategoryName value
	 * @return string|null
	 */
	public function getPrimaryCategoryName()
	{
		return $this->PrimaryCategoryName;
	}
	/**
	 * Set PrimaryCategoryName value
	 * @param string $_primaryCategoryName the PrimaryCategoryName
	 * @return string
	 */
	public function setPrimaryCategoryName($_primaryCategoryName)
	{
		return ($this->PrimaryCategoryName = $_primaryCategoryName);
	}
	/**
	 * Get Quantity value
	 * @return int|null
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Quantity value
	 * @param int $_quantity the Quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->Quantity = $_quantity);
	}
	/**
	 * Get Seller value
	 * @return EbayShoppingStructSimpleUserType|null
	 */
	public function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * Set Seller value
	 * @param EbayShoppingStructSimpleUserType $_seller the Seller
	 * @return EbayShoppingStructSimpleUserType
	 */
	public function setSeller($_seller)
	{
		return ($this->Seller = $_seller);
	}
	/**
	 * Get BidCount value
	 * @return int|null
	 */
	public function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * Set BidCount value
	 * @param int $_bidCount the BidCount
	 * @return int
	 */
	public function setBidCount($_bidCount)
	{
		return ($this->BidCount = $_bidCount);
	}
	/**
	 * Get ConvertedCurrentPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set ConvertedCurrentPrice value
	 * @param EbayShoppingStructAmountType $_convertedCurrentPrice the ConvertedCurrentPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setConvertedCurrentPrice($_convertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_convertedCurrentPrice);
	}
	/**
	 * Get CurrentPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set CurrentPrice value
	 * @param EbayShoppingStructAmountType $_currentPrice the CurrentPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setCurrentPrice($_currentPrice)
	{
		return ($this->CurrentPrice = $_currentPrice);
	}
	/**
	 * Get HighBidder value
	 * @return EbayShoppingStructSimpleUserType|null
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set HighBidder value
	 * @param EbayShoppingStructSimpleUserType $_highBidder the HighBidder
	 * @return EbayShoppingStructSimpleUserType
	 */
	public function setHighBidder($_highBidder)
	{
		return ($this->HighBidder = $_highBidder);
	}
	/**
	 * Get ListingStatus value
	 * @return EbayShoppingEnumListingStatusCodeType|null
	 */
	public function getListingStatus()
	{
		return $this->ListingStatus;
	}
	/**
	 * Set ListingStatus value
	 * @uses EbayShoppingEnumListingStatusCodeType::valueIsValid()
	 * @param EbayShoppingEnumListingStatusCodeType $_listingStatus the ListingStatus
	 * @return EbayShoppingEnumListingStatusCodeType
	 */
	public function setListingStatus($_listingStatus)
	{
		if(!EbayShoppingEnumListingStatusCodeType::valueIsValid($_listingStatus))
		{
			return false;
		}
		return ($this->ListingStatus = $_listingStatus);
	}
	/**
	 * Get QuantitySold value
	 * @return int|null
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set QuantitySold value
	 * @param int $_quantitySold the QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_quantitySold)
	{
		return ($this->QuantitySold = $_quantitySold);
	}
	/**
	 * Get ReserveMet value
	 * @return boolean|null
	 */
	public function getReserveMet()
	{
		return $this->ReserveMet;
	}
	/**
	 * Set ReserveMet value
	 * @param boolean $_reserveMet the ReserveMet
	 * @return boolean
	 */
	public function setReserveMet($_reserveMet)
	{
		return ($this->ReserveMet = $_reserveMet);
	}
	/**
	 * Get ShipToLocations value
	 * @return string|null
	 */
	public function getShipToLocations()
	{
		return $this->ShipToLocations;
	}
	/**
	 * Set ShipToLocations value
	 * @param string $_shipToLocations the ShipToLocations
	 * @return string
	 */
	public function setShipToLocations($_shipToLocations)
	{
		return ($this->ShipToLocations = $_shipToLocations);
	}
	/**
	 * Get Site value
	 * @return EbayShoppingEnumSiteCodeType|null
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set Site value
	 * @uses EbayShoppingEnumSiteCodeType::valueIsValid()
	 * @param EbayShoppingEnumSiteCodeType $_site the Site
	 * @return EbayShoppingEnumSiteCodeType
	 */
	public function setSite($_site)
	{
		if(!EbayShoppingEnumSiteCodeType::valueIsValid($_site))
		{
			return false;
		}
		return ($this->Site = $_site);
	}
	/**
	 * Get TimeLeft value
	 * @return duration|null
	 */
	public function getTimeLeft()
	{
		return $this->TimeLeft;
	}
	/**
	 * Set TimeLeft value
	 * @param duration $_timeLeft the TimeLeft
	 * @return duration
	 */
	public function setTimeLeft($_timeLeft)
	{
		return ($this->TimeLeft = $_timeLeft);
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get ShippingCostSummary value
	 * @return EbayShoppingStructShippingCostSummaryType|null
	 */
	public function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * Set ShippingCostSummary value
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary the ShippingCostSummary
	 * @return EbayShoppingStructShippingCostSummaryType
	 */
	public function setShippingCostSummary($_shippingCostSummary)
	{
		return ($this->ShippingCostSummary = $_shippingCostSummary);
	}
	/**
	 * Get ItemSpecifics value
	 * @return EbayShoppingStructNameValueListArrayType|null
	 */
	public function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * Set ItemSpecifics value
	 * @param EbayShoppingStructNameValueListArrayType $_itemSpecifics the ItemSpecifics
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function setItemSpecifics($_itemSpecifics)
	{
		return ($this->ItemSpecifics = $_itemSpecifics);
	}
	/**
	 * Get HitCount value
	 * @return long|null
	 */
	public function getHitCount()
	{
		return $this->HitCount;
	}
	/**
	 * Set HitCount value
	 * @param long $_hitCount the HitCount
	 * @return long
	 */
	public function setHitCount($_hitCount)
	{
		return ($this->HitCount = $_hitCount);
	}
	/**
	 * Get Subtitle value
	 * @return string|null
	 */
	public function getSubtitle()
	{
		return $this->Subtitle;
	}
	/**
	 * Set Subtitle value
	 * @param string $_subtitle the Subtitle
	 * @return string
	 */
	public function setSubtitle($_subtitle)
	{
		return ($this->Subtitle = $_subtitle);
	}
	/**
	 * Get PrimaryCategoryIDPath value
	 * @return string|null
	 */
	public function getPrimaryCategoryIDPath()
	{
		return $this->PrimaryCategoryIDPath;
	}
	/**
	 * Set PrimaryCategoryIDPath value
	 * @param string $_primaryCategoryIDPath the PrimaryCategoryIDPath
	 * @return string
	 */
	public function setPrimaryCategoryIDPath($_primaryCategoryIDPath)
	{
		return ($this->PrimaryCategoryIDPath = $_primaryCategoryIDPath);
	}
	/**
	 * Get SecondaryCategoryID value
	 * @return string|null
	 */
	public function getSecondaryCategoryID()
	{
		return $this->SecondaryCategoryID;
	}
	/**
	 * Set SecondaryCategoryID value
	 * @param string $_secondaryCategoryID the SecondaryCategoryID
	 * @return string
	 */
	public function setSecondaryCategoryID($_secondaryCategoryID)
	{
		return ($this->SecondaryCategoryID = $_secondaryCategoryID);
	}
	/**
	 * Get SecondaryCategoryName value
	 * @return string|null
	 */
	public function getSecondaryCategoryName()
	{
		return $this->SecondaryCategoryName;
	}
	/**
	 * Set SecondaryCategoryName value
	 * @param string $_secondaryCategoryName the SecondaryCategoryName
	 * @return string
	 */
	public function setSecondaryCategoryName($_secondaryCategoryName)
	{
		return ($this->SecondaryCategoryName = $_secondaryCategoryName);
	}
	/**
	 * Get SecondaryCategoryIDPath value
	 * @return string|null
	 */
	public function getSecondaryCategoryIDPath()
	{
		return $this->SecondaryCategoryIDPath;
	}
	/**
	 * Set SecondaryCategoryIDPath value
	 * @param string $_secondaryCategoryIDPath the SecondaryCategoryIDPath
	 * @return string
	 */
	public function setSecondaryCategoryIDPath($_secondaryCategoryIDPath)
	{
		return ($this->SecondaryCategoryIDPath = $_secondaryCategoryIDPath);
	}
	/**
	 * Get Charity value
	 * @return EbayShoppingStructCharityType|null
	 */
	public function getCharity()
	{
		return $this->Charity;
	}
	/**
	 * Set Charity value
	 * @param EbayShoppingStructCharityType $_charity the Charity
	 * @return EbayShoppingStructCharityType
	 */
	public function setCharity($_charity)
	{
		return ($this->Charity = $_charity);
	}
	/**
	 * Get GermanMotorsSearchable value
	 * @return boolean|null
	 */
	public function getGermanMotorsSearchable()
	{
		return $this->GermanMotorsSearchable;
	}
	/**
	 * Set GermanMotorsSearchable value
	 * @param boolean $_germanMotorsSearchable the GermanMotorsSearchable
	 * @return boolean
	 */
	public function setGermanMotorsSearchable($_germanMotorsSearchable)
	{
		return ($this->GermanMotorsSearchable = $_germanMotorsSearchable);
	}
	/**
	 * Get GetItFast value
	 * @return boolean|null
	 */
	public function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * Set GetItFast value
	 * @param boolean $_getItFast the GetItFast
	 * @return boolean
	 */
	public function setGetItFast($_getItFast)
	{
		return ($this->GetItFast = $_getItFast);
	}
	/**
	 * Get Gift value
	 * @return boolean|null
	 */
	public function getGift()
	{
		return $this->Gift;
	}
	/**
	 * Set Gift value
	 * @param boolean $_gift the Gift
	 * @return boolean
	 */
	public function setGift($_gift)
	{
		return ($this->Gift = $_gift);
	}
	/**
	 * Get PictureExists value
	 * @return boolean|null
	 */
	public function getPictureExists()
	{
		return $this->PictureExists;
	}
	/**
	 * Set PictureExists value
	 * @param boolean $_pictureExists the PictureExists
	 * @return boolean
	 */
	public function setPictureExists($_pictureExists)
	{
		return ($this->PictureExists = $_pictureExists);
	}
	/**
	 * Get RecentListing value
	 * @return boolean|null
	 */
	public function getRecentListing()
	{
		return $this->RecentListing;
	}
	/**
	 * Set RecentListing value
	 * @param boolean $_recentListing the RecentListing
	 * @return boolean
	 */
	public function setRecentListing($_recentListing)
	{
		return ($this->RecentListing = $_recentListing);
	}
	/**
	 * Get Storefront value
	 * @return EbayShoppingStructStorefrontType|null
	 */
	public function getStorefront()
	{
		return $this->Storefront;
	}
	/**
	 * Set Storefront value
	 * @param EbayShoppingStructStorefrontType $_storefront the Storefront
	 * @return EbayShoppingStructStorefrontType
	 */
	public function setStorefront($_storefront)
	{
		return ($this->Storefront = $_storefront);
	}
	/**
	 * Get DistanceFromBuyer value
	 * @return EbayShoppingStructDistanceType|null
	 */
	public function getDistanceFromBuyer()
	{
		return $this->DistanceFromBuyer;
	}
	/**
	 * Set DistanceFromBuyer value
	 * @param EbayShoppingStructDistanceType $_distanceFromBuyer the DistanceFromBuyer
	 * @return EbayShoppingStructDistanceType
	 */
	public function setDistanceFromBuyer($_distanceFromBuyer)
	{
		return ($this->DistanceFromBuyer = $_distanceFromBuyer);
	}
	/**
	 * Get Country value
	 * @return EbayShoppingEnumCountryCodeType|null
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Country value
	 * @uses EbayShoppingEnumCountryCodeType::valueIsValid()
	 * @param EbayShoppingEnumCountryCodeType $_country the Country
	 * @return EbayShoppingEnumCountryCodeType
	 */
	public function setCountry($_country)
	{
		if(!EbayShoppingEnumCountryCodeType::valueIsValid($_country))
		{
			return false;
		}
		return ($this->Country = $_country);
	}
	/**
	 * Get WatchCount value
	 * @return int|null
	 */
	public function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * Set WatchCount value
	 * @param int $_watchCount the WatchCount
	 * @return int
	 */
	public function setWatchCount($_watchCount)
	{
		return ($this->WatchCount = $_watchCount);
	}
	/**
	 * Get HalfItemCondition value
	 * @return EbayShoppingEnumHalfItemConditionCodeType|null
	 */
	public function getHalfItemCondition()
	{
		return $this->HalfItemCondition;
	}
	/**
	 * Set HalfItemCondition value
	 * @uses EbayShoppingEnumHalfItemConditionCodeType::valueIsValid()
	 * @param EbayShoppingEnumHalfItemConditionCodeType $_halfItemCondition the HalfItemCondition
	 * @return EbayShoppingEnumHalfItemConditionCodeType
	 */
	public function setHalfItemCondition($_halfItemCondition)
	{
		if(!EbayShoppingEnumHalfItemConditionCodeType::valueIsValid($_halfItemCondition))
		{
			return false;
		}
		return ($this->HalfItemCondition = $_halfItemCondition);
	}
	/**
	 * Get SellerComments value
	 * @return string|null
	 */
	public function getSellerComments()
	{
		return $this->SellerComments;
	}
	/**
	 * Set SellerComments value
	 * @param string $_sellerComments the SellerComments
	 * @return string
	 */
	public function setSellerComments($_sellerComments)
	{
		return ($this->SellerComments = $_sellerComments);
	}
	/**
	 * Get ReturnPolicy value
	 * @return EbayShoppingStructReturnPolicyType|null
	 */
	public function getReturnPolicy()
	{
		return $this->ReturnPolicy;
	}
	/**
	 * Set ReturnPolicy value
	 * @param EbayShoppingStructReturnPolicyType $_returnPolicy the ReturnPolicy
	 * @return EbayShoppingStructReturnPolicyType
	 */
	public function setReturnPolicy($_returnPolicy)
	{
		return ($this->ReturnPolicy = $_returnPolicy);
	}
	/**
	 * Get MinimumToBid value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getMinimumToBid()
	{
		return $this->MinimumToBid;
	}
	/**
	 * Set MinimumToBid value
	 * @param EbayShoppingStructAmountType $_minimumToBid the MinimumToBid
	 * @return EbayShoppingStructAmountType
	 */
	public function setMinimumToBid($_minimumToBid)
	{
		return ($this->MinimumToBid = $_minimumToBid);
	}
	/**
	 * Get ProductID value
	 * @return EbayShoppingStructProductIDType|null
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set ProductID value
	 * @param EbayShoppingStructProductIDType $_productID the ProductID
	 * @return EbayShoppingStructProductIDType
	 */
	public function setProductID($_productID)
	{
		return ($this->ProductID = $_productID);
	}
	/**
	 * Get AutoPay value
	 * @return boolean|null
	 */
	public function getAutoPay()
	{
		return $this->AutoPay;
	}
	/**
	 * Set AutoPay value
	 * @param boolean $_autoPay the AutoPay
	 * @return boolean
	 */
	public function setAutoPay($_autoPay)
	{
		return ($this->AutoPay = $_autoPay);
	}
	/**
	 * Get BusinessSellerDetails value
	 * @return EbayShoppingStructBusinessSellerDetailsType|null
	 */
	public function getBusinessSellerDetails()
	{
		return $this->BusinessSellerDetails;
	}
	/**
	 * Set BusinessSellerDetails value
	 * @param EbayShoppingStructBusinessSellerDetailsType $_businessSellerDetails the BusinessSellerDetails
	 * @return EbayShoppingStructBusinessSellerDetailsType
	 */
	public function setBusinessSellerDetails($_businessSellerDetails)
	{
		return ($this->BusinessSellerDetails = $_businessSellerDetails);
	}
	/**
	 * Get PaymentAllowedSite value
	 * @return EbayShoppingEnumSiteCodeType|null
	 */
	public function getPaymentAllowedSite()
	{
		return $this->PaymentAllowedSite;
	}
	/**
	 * Set PaymentAllowedSite value
	 * @uses EbayShoppingEnumSiteCodeType::valueIsValid()
	 * @param EbayShoppingEnumSiteCodeType $_paymentAllowedSite the PaymentAllowedSite
	 * @return EbayShoppingEnumSiteCodeType
	 */
	public function setPaymentAllowedSite($_paymentAllowedSite)
	{
		if(!EbayShoppingEnumSiteCodeType::valueIsValid($_paymentAllowedSite))
		{
			return false;
		}
		return ($this->PaymentAllowedSite = $_paymentAllowedSite);
	}
	/**
	 * Get IntegratedMerchantCreditCardEnabled value
	 * @return boolean|null
	 */
	public function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * Set IntegratedMerchantCreditCardEnabled value
	 * @param boolean $_integratedMerchantCreditCardEnabled the IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function setIntegratedMerchantCreditCardEnabled($_integratedMerchantCreditCardEnabled)
	{
		return ($this->IntegratedMerchantCreditCardEnabled = $_integratedMerchantCreditCardEnabled);
	}
	/**
	 * Get Variations value
	 * @return EbayShoppingStructVariationsType|null
	 */
	public function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * Set Variations value
	 * @param EbayShoppingStructVariationsType $_variations the Variations
	 * @return EbayShoppingStructVariationsType
	 */
	public function setVariations($_variations)
	{
		return ($this->Variations = $_variations);
	}
	/**
	 * Get HandlingTime value
	 * @return int|null
	 */
	public function getHandlingTime()
	{
		return $this->HandlingTime;
	}
	/**
	 * Set HandlingTime value
	 * @param int $_handlingTime the HandlingTime
	 * @return int
	 */
	public function setHandlingTime($_handlingTime)
	{
		return ($this->HandlingTime = $_handlingTime);
	}
	/**
	 * Get LotSize value
	 * @return int|null
	 */
	public function getLotSize()
	{
		return $this->LotSize;
	}
	/**
	 * Set LotSize value
	 * @param int $_lotSize the LotSize
	 * @return int
	 */
	public function setLotSize($_lotSize)
	{
		return ($this->LotSize = $_lotSize);
	}
	/**
	 * Get ConditionID value
	 * @return int|null
	 */
	public function getConditionID()
	{
		return $this->ConditionID;
	}
	/**
	 * Set ConditionID value
	 * @param int $_conditionID the ConditionID
	 * @return int
	 */
	public function setConditionID($_conditionID)
	{
		return ($this->ConditionID = $_conditionID);
	}
	/**
	 * Get ConditionDisplayName value
	 * @return string|null
	 */
	public function getConditionDisplayName()
	{
		return $this->ConditionDisplayName;
	}
	/**
	 * Set ConditionDisplayName value
	 * @param string $_conditionDisplayName the ConditionDisplayName
	 * @return string
	 */
	public function setConditionDisplayName($_conditionDisplayName)
	{
		return ($this->ConditionDisplayName = $_conditionDisplayName);
	}
	/**
	 * Get QuantityAvailableHint value
	 * @return EbayShoppingEnumQuantityAvailableHintCodeType|null
	 */
	public function getQuantityAvailableHint()
	{
		return $this->QuantityAvailableHint;
	}
	/**
	 * Set QuantityAvailableHint value
	 * @uses EbayShoppingEnumQuantityAvailableHintCodeType::valueIsValid()
	 * @param EbayShoppingEnumQuantityAvailableHintCodeType $_quantityAvailableHint the QuantityAvailableHint
	 * @return EbayShoppingEnumQuantityAvailableHintCodeType
	 */
	public function setQuantityAvailableHint($_quantityAvailableHint)
	{
		if(!EbayShoppingEnumQuantityAvailableHintCodeType::valueIsValid($_quantityAvailableHint))
		{
			return false;
		}
		return ($this->QuantityAvailableHint = $_quantityAvailableHint);
	}
	/**
	 * Get QuantityThreshold value
	 * @return int|null
	 */
	public function getQuantityThreshold()
	{
		return $this->QuantityThreshold;
	}
	/**
	 * Set QuantityThreshold value
	 * @param int $_quantityThreshold the QuantityThreshold
	 * @return int
	 */
	public function setQuantityThreshold($_quantityThreshold)
	{
		return ($this->QuantityThreshold = $_quantityThreshold);
	}
	/**
	 * Get DiscountPriceInfo value
	 * @return EbayShoppingStructDiscountPriceInfoType|null
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}
	/**
	 * Set DiscountPriceInfo value
	 * @param EbayShoppingStructDiscountPriceInfoType $_discountPriceInfo the DiscountPriceInfo
	 * @return EbayShoppingStructDiscountPriceInfoType
	 */
	public function setDiscountPriceInfo($_discountPriceInfo)
	{
		return ($this->DiscountPriceInfo = $_discountPriceInfo);
	}
	/**
	 * Get ExcludeShipToLocation value
	 * @return string|null
	 */
	public function getExcludeShipToLocation()
	{
		return $this->ExcludeShipToLocation;
	}
	/**
	 * Set ExcludeShipToLocation value
	 * @param string $_excludeShipToLocation the ExcludeShipToLocation
	 * @return string
	 */
	public function setExcludeShipToLocation($_excludeShipToLocation)
	{
		return ($this->ExcludeShipToLocation = $_excludeShipToLocation);
	}
	/**
	 * Get TopRatedListing value
	 * @return boolean|null
	 */
	public function getTopRatedListing()
	{
		return $this->TopRatedListing;
	}
	/**
	 * Set TopRatedListing value
	 * @param boolean $_topRatedListing the TopRatedListing
	 * @return boolean
	 */
	public function setTopRatedListing($_topRatedListing)
	{
		return ($this->TopRatedListing = $_topRatedListing);
	}
	/**
	 * Get VhrUrl value
	 * @return anyURI|null
	 */
	public function getVhrUrl()
	{
		return $this->VhrUrl;
	}
	/**
	 * Set VhrUrl value
	 * @param anyURI $_vhrUrl the VhrUrl
	 * @return anyURI
	 */
	public function setVhrUrl($_vhrUrl)
	{
		return ($this->VhrUrl = $_vhrUrl);
	}
	/**
	 * Get VhrAvailable value
	 * @return boolean|null
	 */
	public function getVhrAvailable()
	{
		return $this->VhrAvailable;
	}
	/**
	 * Set VhrAvailable value
	 * @param boolean $_vhrAvailable the VhrAvailable
	 * @return boolean
	 */
	public function setVhrAvailable($_vhrAvailable)
	{
		return ($this->VhrAvailable = $_vhrAvailable);
	}
	/**
	 * Get QuantityInfo value
	 * @return EbayShoppingStructQuantityInfo|null
	 */
	public function getQuantityInfo()
	{
		return $this->QuantityInfo;
	}
	/**
	 * Set QuantityInfo value
	 * @param EbayShoppingStructQuantityInfo $_quantityInfo the QuantityInfo
	 * @return EbayShoppingStructQuantityInfo
	 */
	public function setQuantityInfo($_quantityInfo)
	{
		return ($this->QuantityInfo = $_quantityInfo);
	}
	/**
	 * Get UnitInfo value
	 * @return EbayShoppingStructUnitInfoType|null
	 */
	public function getUnitInfo()
	{
		return $this->UnitInfo;
	}
	/**
	 * Set UnitInfo value
	 * @param EbayShoppingStructUnitInfoType $_unitInfo the UnitInfo
	 * @return EbayShoppingStructUnitInfoType
	 */
	public function setUnitInfo($_unitInfo)
	{
		return ($this->UnitInfo = $_unitInfo);
	}
	/**
	 * Get GlobalShipping value
	 * @return boolean|null
	 */
	public function getGlobalShipping()
	{
		return $this->GlobalShipping;
	}
	/**
	 * Set GlobalShipping value
	 * @param boolean $_globalShipping the GlobalShipping
	 * @return boolean
	 */
	public function setGlobalShipping($_globalShipping)
	{
		return ($this->GlobalShipping = $_globalShipping);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructSimpleItemType::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get ConditionDescription value
	 * @return string|null
	 */
	public function getConditionDescription()
	{
		return $this->ConditionDescription;
	}
	/**
	 * Set ConditionDescription value
	 * @param string $_conditionDescription the ConditionDescription
	 * @return string
	 */
	public function setConditionDescription($_conditionDescription)
	{
		return ($this->ConditionDescription = $_conditionDescription);
	}
	/**
	 * Get ItemCompatibilityCount value
	 * @return int|null
	 */
	public function getItemCompatibilityCount()
	{
		return $this->ItemCompatibilityCount;
	}
	/**
	 * Set ItemCompatibilityCount value
	 * @param int $_itemCompatibilityCount the ItemCompatibilityCount
	 * @return int
	 */
	public function setItemCompatibilityCount($_itemCompatibilityCount)
	{
		return ($this->ItemCompatibilityCount = $_itemCompatibilityCount);
	}
	/**
	 * Get ItemCompatibilityList value
	 * @return EbayShoppingStructItemCompatibilityListType|null
	 */
	public function getItemCompatibilityList()
	{
		return $this->ItemCompatibilityList;
	}
	/**
	 * Set ItemCompatibilityList value
	 * @param EbayShoppingStructItemCompatibilityListType $_itemCompatibilityList the ItemCompatibilityList
	 * @return EbayShoppingStructItemCompatibilityListType
	 */
	public function setItemCompatibilityList($_itemCompatibilityList)
	{
		return ($this->ItemCompatibilityList = $_itemCompatibilityList);
	}
	/**
	 * Get QuantitySoldByPickupInStore value
	 * @return int|null
	 */
	public function getQuantitySoldByPickupInStore()
	{
		return $this->QuantitySoldByPickupInStore;
	}
	/**
	 * Set QuantitySoldByPickupInStore value
	 * @param int $_quantitySoldByPickupInStore the QuantitySoldByPickupInStore
	 * @return int
	 */
	public function setQuantitySoldByPickupInStore($_quantitySoldByPickupInStore)
	{
		return ($this->QuantitySoldByPickupInStore = $_quantitySoldByPickupInStore);
	}
	/**
	 * Get SKU value
	 * @return string|null
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set SKU value
	 * @param string $_sKU the SKU
	 * @return string
	 */
	public function setSKU($_sKU)
	{
		return ($this->SKU = $_sKU);
	}
	/**
	 * Get NewBestOffer value
	 * @return boolean|null
	 */
	public function getNewBestOffer()
	{
		return $this->NewBestOffer;
	}
	/**
	 * Set NewBestOffer value
	 * @param boolean $_newBestOffer the NewBestOffer
	 * @return boolean
	 */
	public function setNewBestOffer($_newBestOffer)
	{
		return ($this->NewBestOffer = $_newBestOffer);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructSimpleItemType
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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