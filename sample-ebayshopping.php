<?php
/**
 * Test with EbayShopping
 * @package EbayShopping
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/EbayShoppingAutoload.php';
/**
 * EbayShopping Informations
 */
define('EBAYSHOPPING_WSDL_URL','http://developer.ebay.com/webservices/latest/ShoppingService.wsdl');
define('EBAYSHOPPING_USER_LOGIN','');
define('EBAYSHOPPING_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[EbayShoppingWsdlClass::WSDL_URL] = EBAYSHOPPING_WSDL_URL;
$wsdl[EbayShoppingWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[EbayShoppingWsdlClass::WSDL_TRACE] = true;
if(EBAYSHOPPING_USER_LOGIN !== '')
	$wsdl[EbayShoppingWsdlClass::WSDL_LOGIN] = EBAYSHOPPING_USER_LOGIN;
if(EBAYSHOPPING_USER_PASSWORD !== '')
	$wsdl[EbayShoppingWsdlClass::WSDL_PASSWD] = EBAYSHOPPING_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*************************************
 * Example for EbayShoppingServiceFind
 */
$ebayShoppingServiceFind = new EbayShoppingServiceFind($wsdl);
// sample call for EbayShoppingServiceFind::FindHalfProducts()
if($ebayShoppingServiceFind->FindHalfProducts(new EbayShoppingStructFindHalfProductsRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceFind->getResult());
else
	print_r($ebayShoppingServiceFind->getLastError());
// sample call for EbayShoppingServiceFind::FindPopularItems()
if($ebayShoppingServiceFind->FindPopularItems(new EbayShoppingStructFindPopularItemsRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceFind->getResult());
else
	print_r($ebayShoppingServiceFind->getLastError());
// sample call for EbayShoppingServiceFind::FindPopularSearches()
if($ebayShoppingServiceFind->FindPopularSearches(new EbayShoppingStructFindPopularSearchesRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceFind->getResult());
else
	print_r($ebayShoppingServiceFind->getLastError());
// sample call for EbayShoppingServiceFind::FindProducts()
if($ebayShoppingServiceFind->FindProducts(new EbayShoppingStructFindProductsRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceFind->getResult());
else
	print_r($ebayShoppingServiceFind->getLastError());
// sample call for EbayShoppingServiceFind::FindReviewsAndGuides()
if($ebayShoppingServiceFind->FindReviewsAndGuides(new EbayShoppingStructFindReviewsAndGuidesRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceFind->getResult());
else
	print_r($ebayShoppingServiceFind->getLastError());

/************************************
 * Example for EbayShoppingServiceGet
 */
$ebayShoppingServiceGet = new EbayShoppingServiceGet($wsdl);
// sample call for EbayShoppingServiceGet::GetCategoryInfo()
if($ebayShoppingServiceGet->GetCategoryInfo(new EbayShoppingStructGetCategoryInfoRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());
// sample call for EbayShoppingServiceGet::GetItemStatus()
if($ebayShoppingServiceGet->GetItemStatus(new EbayShoppingStructGetItemStatusRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());
// sample call for EbayShoppingServiceGet::GetMultipleItems()
if($ebayShoppingServiceGet->GetMultipleItems(new EbayShoppingStructGetMultipleItemsRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());
// sample call for EbayShoppingServiceGet::GetShippingCosts()
if($ebayShoppingServiceGet->GetShippingCosts(new EbayShoppingStructGetShippingCostsRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());
// sample call for EbayShoppingServiceGet::GetSingleItem()
if($ebayShoppingServiceGet->GetSingleItem(new EbayShoppingStructGetSingleItemRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());
// sample call for EbayShoppingServiceGet::GetUserProfile()
if($ebayShoppingServiceGet->GetUserProfile(new EbayShoppingStructGetUserProfileRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGet->getResult());
else
	print_r($ebayShoppingServiceGet->getLastError());

/*************************************
 * Example for EbayShoppingServiceGete
 */
$ebayShoppingServiceGete = new EbayShoppingServiceGete($wsdl);
// sample call for EbayShoppingServiceGete::GeteBayTime()
if($ebayShoppingServiceGete->GeteBayTime(new EbayShoppingStructGeteBayTimeRequestType(/*** update parameters list ***/)))
	print_r($ebayShoppingServiceGete->getResult());
else
	print_r($ebayShoppingServiceGete->getLastError());
?>