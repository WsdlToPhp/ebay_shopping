<?php
/**
 * File for class EbayShoppingServiceFind
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingServiceFind originally named Find
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingServiceFind extends EbayShoppingWsdlClass
{
	/**
	 * Method to call the operation originally named FindHalfProducts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getIncludeSelector()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getAvailableItemsOnly()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getDomainName()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getProductID()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getQueryKeywords()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getSellerID()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getProductSort()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getSortOrder()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getMaxEntries()
	 * @uses EbayShoppingStructFindHalfProductsRequestType::getPageNumber()
	 * @param EbayShoppingStructFindHalfProductsRequestType $_ebayShoppingStructFindHalfProductsRequestType
	 * @return EbayShoppingStructFindHalfProductsResponseType
	 */
	public function FindHalfProducts(EbayShoppingStructFindHalfProductsRequestType $_ebayShoppingStructFindHalfProductsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindHalfProducts(array('MessageID'=>$_ebayShoppingStructFindHalfProductsRequestType->getMessageID(),'any'=>$_ebayShoppingStructFindHalfProductsRequestType->getAny(),'IncludeSelector'=>$_ebayShoppingStructFindHalfProductsRequestType->getIncludeSelector(),'AvailableItemsOnly'=>$_ebayShoppingStructFindHalfProductsRequestType->getAvailableItemsOnly(),'DomainName'=>$_ebayShoppingStructFindHalfProductsRequestType->getDomainName(),'ProductID'=>$_ebayShoppingStructFindHalfProductsRequestType->getProductID(),'QueryKeywords'=>$_ebayShoppingStructFindHalfProductsRequestType->getQueryKeywords(),'SellerID'=>$_ebayShoppingStructFindHalfProductsRequestType->getSellerID(),'ProductSort'=>$_ebayShoppingStructFindHalfProductsRequestType->getProductSort(),'SortOrder'=>$_ebayShoppingStructFindHalfProductsRequestType->getSortOrder(),'MaxEntries'=>$_ebayShoppingStructFindHalfProductsRequestType->getMaxEntries(),'PageNumber'=>$_ebayShoppingStructFindHalfProductsRequestType->getPageNumber())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named FindPopularItems
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructFindPopularItemsRequestType::getCategoryID()
	 * @uses EbayShoppingStructFindPopularItemsRequestType::getQueryKeywords()
	 * @uses EbayShoppingStructFindPopularItemsRequestType::getCategoryIDExclude()
	 * @uses EbayShoppingStructFindPopularItemsRequestType::getMaxEntries()
	 * @param EbayShoppingStructFindPopularItemsRequestType $_ebayShoppingStructFindPopularItemsRequestType
	 * @return EbayShoppingStructFindPopularItemsResponseType
	 */
	public function FindPopularItems(EbayShoppingStructFindPopularItemsRequestType $_ebayShoppingStructFindPopularItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindPopularItems(array('MessageID'=>$_ebayShoppingStructFindPopularItemsRequestType->getMessageID(),'any'=>$_ebayShoppingStructFindPopularItemsRequestType->getAny(),'CategoryID'=>$_ebayShoppingStructFindPopularItemsRequestType->getCategoryID(),'QueryKeywords'=>$_ebayShoppingStructFindPopularItemsRequestType->getQueryKeywords(),'CategoryIDExclude'=>$_ebayShoppingStructFindPopularItemsRequestType->getCategoryIDExclude(),'MaxEntries'=>$_ebayShoppingStructFindPopularItemsRequestType->getMaxEntries())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named FindPopularSearches
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getCategoryID()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getQueryKeywords()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getMaxKeywords()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getMaxResultsPerPage()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getPageNumber()
	 * @uses EbayShoppingStructFindPopularSearchesRequestType::getIncludeChildCategories()
	 * @param EbayShoppingStructFindPopularSearchesRequestType $_ebayShoppingStructFindPopularSearchesRequestType
	 * @return EbayShoppingStructFindPopularSearchesResponseType
	 */
	public function FindPopularSearches(EbayShoppingStructFindPopularSearchesRequestType $_ebayShoppingStructFindPopularSearchesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindPopularSearches(array('MessageID'=>$_ebayShoppingStructFindPopularSearchesRequestType->getMessageID(),'any'=>$_ebayShoppingStructFindPopularSearchesRequestType->getAny(),'CategoryID'=>$_ebayShoppingStructFindPopularSearchesRequestType->getCategoryID(),'QueryKeywords'=>$_ebayShoppingStructFindPopularSearchesRequestType->getQueryKeywords(),'MaxKeywords'=>$_ebayShoppingStructFindPopularSearchesRequestType->getMaxKeywords(),'MaxResultsPerPage'=>$_ebayShoppingStructFindPopularSearchesRequestType->getMaxResultsPerPage(),'PageNumber'=>$_ebayShoppingStructFindPopularSearchesRequestType->getPageNumber(),'IncludeChildCategories'=>$_ebayShoppingStructFindPopularSearchesRequestType->getIncludeChildCategories())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named FindProducts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructFindProductsRequestType::getIncludeSelector()
	 * @uses EbayShoppingStructFindProductsRequestType::getAvailableItemsOnly()
	 * @uses EbayShoppingStructFindProductsRequestType::getDomainName()
	 * @uses EbayShoppingStructFindProductsRequestType::getProductID()
	 * @uses EbayShoppingStructFindProductsRequestType::getQueryKeywords()
	 * @uses EbayShoppingStructFindProductsRequestType::getProductSort()
	 * @uses EbayShoppingStructFindProductsRequestType::getSortOrder()
	 * @uses EbayShoppingStructFindProductsRequestType::getMaxEntries()
	 * @uses EbayShoppingStructFindProductsRequestType::getPageNumber()
	 * @uses EbayShoppingStructFindProductsRequestType::getCategoryID()
	 * @uses EbayShoppingStructFindProductsRequestType::getHideDuplicateItems()
	 * @param EbayShoppingStructFindProductsRequestType $_ebayShoppingStructFindProductsRequestType
	 * @return EbayShoppingStructFindProductsResponseType
	 */
	public function FindProducts(EbayShoppingStructFindProductsRequestType $_ebayShoppingStructFindProductsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindProducts(array('MessageID'=>$_ebayShoppingStructFindProductsRequestType->getMessageID(),'any'=>$_ebayShoppingStructFindProductsRequestType->getAny(),'IncludeSelector'=>$_ebayShoppingStructFindProductsRequestType->getIncludeSelector(),'AvailableItemsOnly'=>$_ebayShoppingStructFindProductsRequestType->getAvailableItemsOnly(),'DomainName'=>$_ebayShoppingStructFindProductsRequestType->getDomainName(),'ProductID'=>$_ebayShoppingStructFindProductsRequestType->getProductID(),'QueryKeywords'=>$_ebayShoppingStructFindProductsRequestType->getQueryKeywords(),'ProductSort'=>$_ebayShoppingStructFindProductsRequestType->getProductSort(),'SortOrder'=>$_ebayShoppingStructFindProductsRequestType->getSortOrder(),'MaxEntries'=>$_ebayShoppingStructFindProductsRequestType->getMaxEntries(),'PageNumber'=>$_ebayShoppingStructFindProductsRequestType->getPageNumber(),'CategoryID'=>$_ebayShoppingStructFindProductsRequestType->getCategoryID(),'HideDuplicateItems'=>$_ebayShoppingStructFindProductsRequestType->getHideDuplicateItems())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named FindReviewsAndGuides
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getProductID()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getUserID()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getCategoryID()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getMaxResultsPerPage()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getPageNumber()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getReviewSort()
	 * @uses EbayShoppingStructFindReviewsAndGuidesRequestType::getSortOrder()
	 * @param EbayShoppingStructFindReviewsAndGuidesRequestType $_ebayShoppingStructFindReviewsAndGuidesRequestType
	 * @return EbayShoppingStructFindReviewsAndGuidesResponseType
	 */
	public function FindReviewsAndGuides(EbayShoppingStructFindReviewsAndGuidesRequestType $_ebayShoppingStructFindReviewsAndGuidesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindReviewsAndGuides(array('MessageID'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getMessageID(),'any'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getAny(),'ProductID'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getProductID(),'UserID'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getUserID(),'CategoryID'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getCategoryID(),'MaxResultsPerPage'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getMaxResultsPerPage(),'PageNumber'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getPageNumber(),'ReviewSort'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getReviewSort(),'SortOrder'=>$_ebayShoppingStructFindReviewsAndGuidesRequestType->getSortOrder())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see EbayShoppingWsdlClass::getResult()
	 * @return EbayShoppingStructFindHalfProductsResponseType|EbayShoppingStructFindPopularItemsResponseType|EbayShoppingStructFindPopularSearchesResponseType|EbayShoppingStructFindProductsResponseType|EbayShoppingStructFindReviewsAndGuidesResponseType
	 */
	public function getResult()
	{
		return parent::getResult();
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