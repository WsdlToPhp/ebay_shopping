<?php
/**
 * File to load generated classes once at once time
 * @package EbayShopping
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * Includes for all generated classes files
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
require_once dirname(__FILE__) . '/EbayShoppingWsdlClass.php';
require_once dirname(__FILE__) . '/Abstract/Type/EbayShoppingStructAbstractResponseType.php';
require_once dirname(__FILE__) . '/Abstract/Type/EbayShoppingStructAbstractRequestType.php';
require_once dirname(__FILE__) . '/Listing/Type/EbayShoppingEnumListingStatusCodeType.php';
require_once dirname(__FILE__) . '/Listing/Type/EbayShoppingEnumListingTypeCodeType.php';
require_once dirname(__FILE__) . '/Item/Type/EbayShoppingStructItemCompatibilityType.php';
require_once dirname(__FILE__) . '/Item/Type/EbayShoppingStructItemCompatibilityListType.php';
require_once dirname(__FILE__) . '/Minimum/Type/EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType.php';
require_once dirname(__FILE__) . '/International/Type/EbayShoppingStructInternationalShippingServiceOptionType.php';
require_once dirname(__FILE__) . '/Name/Type/EbayShoppingStructNameValueListType.php';
require_once dirname(__FILE__) . '/Pricing/Type/EbayShoppingEnumPricingTreatmentCodeType.php';
require_once dirname(__FILE__) . '/Popular/Type/EbayShoppingStructPopularSearchesType.php';
require_once dirname(__FILE__) . '/Pictures/Type/EbayShoppingStructPicturesType.php';
require_once dirname(__FILE__) . '/Insurance/Type/EbayShoppingEnumInsuranceOptionCodeType.php';
require_once dirname(__FILE__) . '/Name/Type/EbayShoppingStructNameValueListArrayType.php';
require_once dirname(__FILE__) . '/Half/Type/EbayShoppingStructHalfProductsType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetSingleItemResponseType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetUserProfileRequestType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetSingleItemRequestType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetShippingCostsResponseType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetShippingCostsRequestType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetUserProfileResponseType.php';
require_once dirname(__FILE__) . '/Gete/Type/EbayShoppingStructGeteBayTimeRequestType.php';
require_once dirname(__FILE__) . '/Product/Type/EbayShoppingEnumProductIDCodeType.php';
require_once dirname(__FILE__) . '/Half/Type/EbayShoppingEnumHalfItemConditionCodeType.php';
require_once dirname(__FILE__) . '/Half/Type/EbayShoppingStructHalfCatalogProductType.php';
require_once dirname(__FILE__) . '/Gete/Type/EbayShoppingStructGeteBayTimeResponseType.php';
require_once dirname(__FILE__) . '/Histogram/Type/EbayShoppingStructHistogramEntryType.php';
require_once dirname(__FILE__) . '/Product/Type/EbayShoppingEnumProductSortCodeType.php';
require_once dirname(__FILE__) . '/Storefront/Type/EbayShoppingStructStorefrontType.php';
require_once dirname(__FILE__) . '/Tax/Type/EbayShoppingStructTaxJurisdictionType.php';
require_once dirname(__FILE__) . '/Simple/Type/EbayShoppingStructSimpleItemType.php';
require_once dirname(__FILE__) . '/Simple/Type/EbayShoppingStructSimpleItemArrayType.php';
require_once dirname(__FILE__) . '/Shipping/Type/EbayShoppingEnumShippingTypeCodeType.php';
require_once dirname(__FILE__) . '/Tax/Type/EbayShoppingStructTaxTableType.php';
require_once dirname(__FILE__) . '/Unit/Type/EbayShoppingStructUnitInfoType.php';
require_once dirname(__FILE__) . '/Variation/Type/EbayShoppingStructVariationType.php';
require_once dirname(__FILE__) . '/Variations/Type/EbayShoppingStructVariationsType.php';
require_once dirname(__FILE__) . '/Variation/Type/EbayShoppingStructVariationSpecificPictureSetType.php';
require_once dirname(__FILE__) . '/VATD/Type/EbayShoppingStructVATDetailsType.php';
require_once dirname(__FILE__) . '/Shipping/Type/EbayShoppingStructShippingServiceOptionType.php';
require_once dirname(__FILE__) . '/Shipping/Type/EbayShoppingStructShippingDetailsType.php';
require_once dirname(__FILE__) . '/Quantity/Info/EbayShoppingStructQuantityInfo.php';
require_once dirname(__FILE__) . '/Return/Type/EbayShoppingStructReturnPolicyType.php';
require_once dirname(__FILE__) . '/Quantity/Type/EbayShoppingEnumQuantityAvailableHintCodeType.php';
require_once dirname(__FILE__) . '/Product/Type/EbayShoppingEnumProductStateCodeType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetMultipleItemsResponseType.php';
require_once dirname(__FILE__) . '/Review/Type/EbayShoppingStructReviewDetailsType.php';
require_once dirname(__FILE__) . '/Review/Type/EbayShoppingEnumReviewSortCodeType.php';
require_once dirname(__FILE__) . '/Shipping/Type/EbayShoppingStructShippingCostSummaryType.php';
require_once dirname(__FILE__) . '/Selling/Type/EbayShoppingStructSellingStatusType.php';
require_once dirname(__FILE__) . '/Sales/Type/EbayShoppingStructSalesTaxType.php';
require_once dirname(__FILE__) . '/Review/Type/EbayShoppingStructReviewType.php';
require_once dirname(__FILE__) . '/Product/Type/EbayShoppingStructProductIDType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetItemStatusResponseType.php';
require_once dirname(__FILE__) . '/Address/Type/EbayShoppingStructAddressType.php';
require_once dirname(__FILE__) . '/Average/Type/EbayShoppingStructAverageRatingDetailsType.php';
require_once dirname(__FILE__) . '/User/Type/EbayShoppingEnumUserStatusCodeType.php';
require_once dirname(__FILE__) . '/Trading/Type/EbayShoppingEnumTradingRoleCodeType.php';
require_once dirname(__FILE__) . '/Sort/Type/EbayShoppingEnumSortOrderCodeType.php';
require_once dirname(__FILE__) . '/Business/Type/EbayShoppingStructBusinessSellerDetailsType.php';
require_once dirname(__FILE__) . '/Buyer/Type/EbayShoppingEnumBuyerPaymentMethodCodeType.php';
require_once dirname(__FILE__) . '/Category/Type/EbayShoppingStructCategoryArrayType.php';
require_once dirname(__FILE__) . '/Catalog/Type/EbayShoppingStructCatalogProductType.php';
require_once dirname(__FILE__) . '/Buying/Type/EbayShoppingStructBuyingGuideType.php';
require_once dirname(__FILE__) . '/Buying/Type/EbayShoppingStructBuyingGuideDetailsType.php';
require_once dirname(__FILE__) . '/Site/Type/EbayShoppingEnumSiteCodeType.php';
require_once dirname(__FILE__) . '/Simple/Type/EbayShoppingStructSimpleUserType.php';
require_once dirname(__FILE__) . '/Currency/Type/EbayShoppingEnumCurrencyCodeType.php';
require_once dirname(__FILE__) . '/Error/Type/EbayShoppingEnumErrorClassificationCodeType.php';
require_once dirname(__FILE__) . '/Comment/Type/EbayShoppingEnumCommentTypeCodeType.php';
require_once dirname(__FILE__) . '/Amount/Type/EbayShoppingStructAmountType.php';
require_once dirname(__FILE__) . '/Ack/Type/EbayShoppingEnumAckCodeType.php';
require_once dirname(__FILE__) . '/Error/Type/EbayShoppingStructErrorParameterType.php';
require_once dirname(__FILE__) . '/Error/Type/EbayShoppingStructErrorType.php';
require_once dirname(__FILE__) . '/Severity/Type/EbayShoppingEnumSeverityCodeType.php';
require_once dirname(__FILE__) . '/Seller/Type/EbayShoppingEnumSellerLevelCodeType.php';
require_once dirname(__FILE__) . '/Seller/Type/EbayShoppingEnumSellerBusinessCodeType.php';
require_once dirname(__FILE__) . '/Feedback/Type/EbayShoppingEnumFeedbackRatingStarCodeType.php';
require_once dirname(__FILE__) . '/Category/Type/EbayShoppingStructCategoryType.php';
require_once dirname(__FILE__) . '/Charity/Type/EbayShoppingEnumCharityStatusCodeType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindPopularSearchesResponseType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindProductsRequestType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindPopularSearchesRequestType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindPopularItemsResponseType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindPopularItemsRequestType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindProductsResponseType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindReviewsAndGuidesRequestType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetItemStatusRequestType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetCategoryInfoResponseType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetCategoryInfoRequestType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindReviewsAndGuidesResponseType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindHalfProductsResponseType.php';
require_once dirname(__FILE__) . '/Find/Type/EbayShoppingStructFindHalfProductsRequestType.php';
require_once dirname(__FILE__) . '/Distance/Type/EbayShoppingStructDistanceType.php';
require_once dirname(__FILE__) . '/Domain/Type/EbayShoppingStructDomainHistogramType.php';
require_once dirname(__FILE__) . '/Discount/Type/EbayShoppingStructDiscountPriceInfoType.php';
require_once dirname(__FILE__) . '/Country/Type/EbayShoppingEnumCountryCodeType.php';
require_once dirname(__FILE__) . '/Charity/Type/EbayShoppingStructCharityType.php';
require_once dirname(__FILE__) . '/External/Type/EbayShoppingEnumExternalProductCodeType.php';
require_once dirname(__FILE__) . '/External/Type/EbayShoppingStructExternalProductIDType.php';
require_once dirname(__FILE__) . '/Feedback/Type/EbayShoppingEnumFeedbackRatingDetailCodeType.php';
require_once dirname(__FILE__) . '/Feedback/Type/EbayShoppingStructFeedbackPeriodType.php';
require_once dirname(__FILE__) . '/Feedback/Type/EbayShoppingStructFeedbackHistoryType.php';
require_once dirname(__FILE__) . '/Feedback/Type/EbayShoppingStructFeedbackDetailType.php';
require_once dirname(__FILE__) . '/Get/Type/EbayShoppingStructGetMultipleItemsRequestType.php';
require_once dirname(__FILE__) . '/Find/EbayShoppingServiceFind.php';
require_once dirname(__FILE__) . '/Get/EbayShoppingServiceGet.php';
require_once dirname(__FILE__) . '/Gete/EbayShoppingServiceGete.php';
require_once dirname(__FILE__) . '/EbayShoppingClassMap.php';
?>