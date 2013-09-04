<?php
/**
 * File for class EbayShoppingServiceGete
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingServiceGete originally named Gete
 * @package EbayShopping
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingServiceGete extends EbayShoppingWsdlClass
{
	/**
	 * Method to call the operation originally named GeteBayTime
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingStructAbstractRequestType::getMessageID()
	 * @uses EbayShoppingStructAbstractRequestType::getAny()
	 * @param EbayShoppingStructGeteBayTimeRequestType $_ebayShoppingStructGeteBayTimeRequestType
	 * @return EbayShoppingStructGeteBayTimeResponseType
	 */
	public function GeteBayTime(EbayShoppingStructGeteBayTimeRequestType $_ebayShoppingStructGeteBayTimeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GeteBayTime(array('MessageID'=>$_ebayShoppingStructGeteBayTimeRequestType->getMessageID(),'any'=>$_ebayShoppingStructGeteBayTimeRequestType->getAny())));
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
	 * @return EbayShoppingStructGeteBayTimeResponseType
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