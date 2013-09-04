<?php
/**
 * File for class EbayShoppingStructGeteBayTimeResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGeteBayTimeResponseType originally named GeteBayTimeResponseType
 * Documentation : The Timestamp field indicates the official eBay system time in GMT. The value returned represents the date and time when eBay processed the request. The value is in the ISO 8601 date-time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGeteBayTimeResponseType extends EbayShoppingStructAbstractResponseType
{
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