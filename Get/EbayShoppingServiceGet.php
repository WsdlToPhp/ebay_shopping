<?php
/**
 * File for class EbayShoppingServiceGet
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingServiceGet originally named Get
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingServiceGet extends EbayShoppingWsdlClass
{
	/**
	 * Method to call the operation originally named GetCategoryInfo
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetCategoryInfoRequestType::getCategoryID()
	 * @uses EbayShoppingStructGetCategoryInfoRequestType::getIncludeSelector()
	 * @param EbayShoppingStructGetCategoryInfoRequestType $_ebayShoppingStructGetCategoryInfoRequestType
	 * @return EbayShoppingStructGetCategoryInfoResponseType
	 */
	public function GetCategoryInfo(EbayShoppingStructGetCategoryInfoRequestType $_ebayShoppingStructGetCategoryInfoRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategoryInfo(array('MessageID'=>$_ebayShoppingStructGetCategoryInfoRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetCategoryInfoRequestType->getAny(),'CategoryID'=>$_ebayShoppingStructGetCategoryInfoRequestType->getCategoryID(),'IncludeSelector'=>$_ebayShoppingStructGetCategoryInfoRequestType->getIncludeSelector())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetItemStatus
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetItemStatusRequestType::getItemID()
	 * @param EbayShoppingStructGetItemStatusRequestType $_ebayShoppingStructGetItemStatusRequestType
	 * @return EbayShoppingStructGetItemStatusResponseType
	 */
	public function GetItemStatus(EbayShoppingStructGetItemStatusRequestType $_ebayShoppingStructGetItemStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemStatus(array('MessageID'=>$_ebayShoppingStructGetItemStatusRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetItemStatusRequestType->getAny(),'ItemID'=>$_ebayShoppingStructGetItemStatusRequestType->getItemID())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetMultipleItems
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetMultipleItemsRequestType::getItemID()
	 * @uses EbayShoppingStructGetMultipleItemsRequestType::getIncludeSelector()
	 * @param EbayShoppingStructGetMultipleItemsRequestType $_ebayShoppingStructGetMultipleItemsRequestType
	 * @return EbayShoppingStructGetMultipleItemsResponseType
	 */
	public function GetMultipleItems(EbayShoppingStructGetMultipleItemsRequestType $_ebayShoppingStructGetMultipleItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultipleItems(array('MessageID'=>$_ebayShoppingStructGetMultipleItemsRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetMultipleItemsRequestType->getAny(),'ItemID'=>$_ebayShoppingStructGetMultipleItemsRequestType->getItemID(),'IncludeSelector'=>$_ebayShoppingStructGetMultipleItemsRequestType->getIncludeSelector())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetShippingCosts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetShippingCostsRequestType::getItemID()
	 * @uses EbayShoppingStructGetShippingCostsRequestType::getQuantitySold()
	 * @uses EbayShoppingStructGetShippingCostsRequestType::getDestinationPostalCode()
	 * @uses EbayShoppingStructGetShippingCostsRequestType::getDestinationCountryCode()
	 * @uses EbayShoppingStructGetShippingCostsRequestType::getIncludeDetails()
	 * @param EbayShoppingStructGetShippingCostsRequestType $_ebayShoppingStructGetShippingCostsRequestType
	 * @return EbayShoppingStructGetShippingCostsResponseType
	 */
	public function GetShippingCosts(EbayShoppingStructGetShippingCostsRequestType $_ebayShoppingStructGetShippingCostsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetShippingCosts(array('MessageID'=>$_ebayShoppingStructGetShippingCostsRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetShippingCostsRequestType->getAny(),'ItemID'=>$_ebayShoppingStructGetShippingCostsRequestType->getItemID(),'QuantitySold'=>$_ebayShoppingStructGetShippingCostsRequestType->getQuantitySold(),'DestinationPostalCode'=>$_ebayShoppingStructGetShippingCostsRequestType->getDestinationPostalCode(),'DestinationCountryCode'=>$_ebayShoppingStructGetShippingCostsRequestType->getDestinationCountryCode(),'IncludeDetails'=>$_ebayShoppingStructGetShippingCostsRequestType->getIncludeDetails())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetSingleItem
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetSingleItemRequestType::getItemID()
	 * @uses EbayShoppingStructGetSingleItemRequestType::getVariationSKU()
	 * @uses EbayShoppingStructGetSingleItemRequestType::getVariationSpecifics()
	 * @uses EbayShoppingStructGetSingleItemRequestType::getIncludeSelector()
	 * @param EbayShoppingStructGetSingleItemRequestType $_ebayShoppingStructGetSingleItemRequestType
	 * @return EbayShoppingStructGetSingleItemResponseType
	 */
	public function GetSingleItem(EbayShoppingStructGetSingleItemRequestType $_ebayShoppingStructGetSingleItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSingleItem(array('MessageID'=>$_ebayShoppingStructGetSingleItemRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetSingleItemRequestType->getAny(),'ItemID'=>$_ebayShoppingStructGetSingleItemRequestType->getItemID(),'VariationSKU'=>$_ebayShoppingStructGetSingleItemRequestType->getVariationSKU(),'VariationSpecifics'=>$_ebayShoppingStructGetSingleItemRequestType->getVariationSpecifics(),'IncludeSelector'=>$_ebayShoppingStructGetSingleItemRequestType->getIncludeSelector())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named GetUserProfile
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @uses EbayShoppingStructGetUserProfileRequestType::getUserID()
	 * @uses EbayShoppingStructGetUserProfileRequestType::getIncludeSelector()
	 * @param EbayShoppingStructGetUserProfileRequestType $_ebayShoppingStructGetUserProfileRequestType
	 * @return EbayShoppingStructGetUserProfileResponseType
	 */
	public function GetUserProfile(EbayShoppingStructGetUserProfileRequestType $_ebayShoppingStructGetUserProfileRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserProfile(array('MessageID'=>$_ebayShoppingStructGetUserProfileRequestType->getMessageID(),'any'=>$_ebayShoppingStructGetUserProfileRequestType->getAny(),'UserID'=>$_ebayShoppingStructGetUserProfileRequestType->getUserID(),'IncludeSelector'=>$_ebayShoppingStructGetUserProfileRequestType->getIncludeSelector())));
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
	 * @return EbayShoppingStructGetCategoryInfoResponseType|EbayShoppingStructGetItemStatusResponseType|EbayShoppingStructGetMultipleItemsResponseType|EbayShoppingStructGetShippingCostsResponseType|EbayShoppingStructGetSingleItemResponseType|EbayShoppingStructGetUserProfileResponseType
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