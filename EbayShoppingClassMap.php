<?php
/**
 * File for the class which returns the class map definition
 * @package EbayShopping
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * Class which returns the class map definition by the static method EbayShoppingClassMap::classMap()
 * @package EbayShopping
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'AbstractRequestType' => 'EbayShoppingStructAbstractRequestType',
  'AbstractResponseType' => 'EbayShoppingStructAbstractResponseType',
  'AckCodeType' => 'EbayShoppingEnumAckCodeType',
  'AddressType' => 'EbayShoppingStructAddressType',
  'AmountType' => 'EbayShoppingStructAmountType',
  'AverageRatingDetailsType' => 'EbayShoppingStructAverageRatingDetailsType',
  'BusinessSellerDetailsType' => 'EbayShoppingStructBusinessSellerDetailsType',
  'BuyerPaymentMethodCodeType' => 'EbayShoppingEnumBuyerPaymentMethodCodeType',
  'BuyingGuideDetailsType' => 'EbayShoppingStructBuyingGuideDetailsType',
  'BuyingGuideType' => 'EbayShoppingStructBuyingGuideType',
  'CatalogProductType' => 'EbayShoppingStructCatalogProductType',
  'CategoryArrayType' => 'EbayShoppingStructCategoryArrayType',
  'CategoryType' => 'EbayShoppingStructCategoryType',
  'CharityStatusCodeType' => 'EbayShoppingEnumCharityStatusCodeType',
  'CharityType' => 'EbayShoppingStructCharityType',
  'CommentTypeCodeType' => 'EbayShoppingEnumCommentTypeCodeType',
  'CountryCodeType' => 'EbayShoppingEnumCountryCodeType',
  'CurrencyCodeType' => 'EbayShoppingEnumCurrencyCodeType',
  'DiscountPriceInfoType' => 'EbayShoppingStructDiscountPriceInfoType',
  'DistanceType' => 'EbayShoppingStructDistanceType',
  'DomainHistogramType' => 'EbayShoppingStructDomainHistogramType',
  'ErrorClassificationCodeType' => 'EbayShoppingEnumErrorClassificationCodeType',
  'ErrorParameterType' => 'EbayShoppingStructErrorParameterType',
  'ErrorType' => 'EbayShoppingStructErrorType',
  'ExternalProductCodeType' => 'EbayShoppingEnumExternalProductCodeType',
  'ExternalProductIDType' => 'EbayShoppingStructExternalProductIDType',
  'FeedbackDetailType' => 'EbayShoppingStructFeedbackDetailType',
  'FeedbackHistoryType' => 'EbayShoppingStructFeedbackHistoryType',
  'FeedbackPeriodType' => 'EbayShoppingStructFeedbackPeriodType',
  'FeedbackRatingDetailCodeType' => 'EbayShoppingEnumFeedbackRatingDetailCodeType',
  'FeedbackRatingStarCodeType' => 'EbayShoppingEnumFeedbackRatingStarCodeType',
  'FindHalfProductsRequestType' => 'EbayShoppingStructFindHalfProductsRequestType',
  'FindHalfProductsResponseType' => 'EbayShoppingStructFindHalfProductsResponseType',
  'FindPopularItemsRequestType' => 'EbayShoppingStructFindPopularItemsRequestType',
  'FindPopularItemsResponseType' => 'EbayShoppingStructFindPopularItemsResponseType',
  'FindPopularSearchesRequestType' => 'EbayShoppingStructFindPopularSearchesRequestType',
  'FindPopularSearchesResponseType' => 'EbayShoppingStructFindPopularSearchesResponseType',
  'FindProductsRequestType' => 'EbayShoppingStructFindProductsRequestType',
  'FindProductsResponseType' => 'EbayShoppingStructFindProductsResponseType',
  'FindReviewsAndGuidesRequestType' => 'EbayShoppingStructFindReviewsAndGuidesRequestType',
  'FindReviewsAndGuidesResponseType' => 'EbayShoppingStructFindReviewsAndGuidesResponseType',
  'GetCategoryInfoRequestType' => 'EbayShoppingStructGetCategoryInfoRequestType',
  'GetCategoryInfoResponseType' => 'EbayShoppingStructGetCategoryInfoResponseType',
  'GetItemStatusRequestType' => 'EbayShoppingStructGetItemStatusRequestType',
  'GetItemStatusResponseType' => 'EbayShoppingStructGetItemStatusResponseType',
  'GetMultipleItemsRequestType' => 'EbayShoppingStructGetMultipleItemsRequestType',
  'GetMultipleItemsResponseType' => 'EbayShoppingStructGetMultipleItemsResponseType',
  'GetShippingCostsRequestType' => 'EbayShoppingStructGetShippingCostsRequestType',
  'GetShippingCostsResponseType' => 'EbayShoppingStructGetShippingCostsResponseType',
  'GetSingleItemRequestType' => 'EbayShoppingStructGetSingleItemRequestType',
  'GetSingleItemResponseType' => 'EbayShoppingStructGetSingleItemResponseType',
  'GetUserProfileRequestType' => 'EbayShoppingStructGetUserProfileRequestType',
  'GetUserProfileResponseType' => 'EbayShoppingStructGetUserProfileResponseType',
  'GeteBayTimeRequestType' => 'EbayShoppingStructGeteBayTimeRequestType',
  'GeteBayTimeResponseType' => 'EbayShoppingStructGeteBayTimeResponseType',
  'HalfCatalogProductType' => 'EbayShoppingStructHalfCatalogProductType',
  'HalfItemConditionCodeType' => 'EbayShoppingEnumHalfItemConditionCodeType',
  'HalfProductsType' => 'EbayShoppingStructHalfProductsType',
  'HistogramEntryType' => 'EbayShoppingStructHistogramEntryType',
  'InsuranceOptionCodeType' => 'EbayShoppingEnumInsuranceOptionCodeType',
  'InternationalShippingServiceOptionType' => 'EbayShoppingStructInternationalShippingServiceOptionType',
  'ItemCompatibilityListType' => 'EbayShoppingStructItemCompatibilityListType',
  'ItemCompatibilityType' => 'EbayShoppingStructItemCompatibilityType',
  'ListingStatusCodeType' => 'EbayShoppingEnumListingStatusCodeType',
  'ListingTypeCodeType' => 'EbayShoppingEnumListingTypeCodeType',
  'MinimumAdvertisedPriceExposureCodeType' => 'EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType',
  'NameValueListArrayType' => 'EbayShoppingStructNameValueListArrayType',
  'NameValueListType' => 'EbayShoppingStructNameValueListType',
  'PicturesType' => 'EbayShoppingStructPicturesType',
  'PopularSearchesType' => 'EbayShoppingStructPopularSearchesType',
  'PricingTreatmentCodeType' => 'EbayShoppingEnumPricingTreatmentCodeType',
  'ProductIDCodeType' => 'EbayShoppingEnumProductIDCodeType',
  'ProductIDType' => 'EbayShoppingStructProductIDType',
  'ProductSortCodeType' => 'EbayShoppingEnumProductSortCodeType',
  'ProductStateCodeType' => 'EbayShoppingEnumProductStateCodeType',
  'QuantityAvailableHintCodeType' => 'EbayShoppingEnumQuantityAvailableHintCodeType',
  'QuantityInfo' => 'EbayShoppingStructQuantityInfo',
  'ReturnPolicyType' => 'EbayShoppingStructReturnPolicyType',
  'ReviewDetailsType' => 'EbayShoppingStructReviewDetailsType',
  'ReviewSortCodeType' => 'EbayShoppingEnumReviewSortCodeType',
  'ReviewType' => 'EbayShoppingStructReviewType',
  'SalesTaxType' => 'EbayShoppingStructSalesTaxType',
  'SellerBusinessCodeType' => 'EbayShoppingEnumSellerBusinessCodeType',
  'SellerLevelCodeType' => 'EbayShoppingEnumSellerLevelCodeType',
  'SellingStatusType' => 'EbayShoppingStructSellingStatusType',
  'SeverityCodeType' => 'EbayShoppingEnumSeverityCodeType',
  'ShippingCostSummaryType' => 'EbayShoppingStructShippingCostSummaryType',
  'ShippingDetailsType' => 'EbayShoppingStructShippingDetailsType',
  'ShippingServiceOptionType' => 'EbayShoppingStructShippingServiceOptionType',
  'ShippingTypeCodeType' => 'EbayShoppingEnumShippingTypeCodeType',
  'SimpleItemArrayType' => 'EbayShoppingStructSimpleItemArrayType',
  'SimpleItemType' => 'EbayShoppingStructSimpleItemType',
  'SimpleUserType' => 'EbayShoppingStructSimpleUserType',
  'SiteCodeType' => 'EbayShoppingEnumSiteCodeType',
  'SortOrderCodeType' => 'EbayShoppingEnumSortOrderCodeType',
  'StorefrontType' => 'EbayShoppingStructStorefrontType',
  'TaxJurisdictionType' => 'EbayShoppingStructTaxJurisdictionType',
  'TaxTableType' => 'EbayShoppingStructTaxTableType',
  'TradingRoleCodeType' => 'EbayShoppingEnumTradingRoleCodeType',
  'UnitInfoType' => 'EbayShoppingStructUnitInfoType',
  'UserStatusCodeType' => 'EbayShoppingEnumUserStatusCodeType',
  'VATDetailsType' => 'EbayShoppingStructVATDetailsType',
  'VariationSpecificPictureSetType' => 'EbayShoppingStructVariationSpecificPictureSetType',
  'VariationType' => 'EbayShoppingStructVariationType',
  'VariationsType' => 'EbayShoppingStructVariationsType',
);
	}
}
?>