<?php
/**
 * File for class EbayShoppingStructGetItemStatusResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetItemStatusResponseType originally named GetItemStatusResponseType
 * Documentation : Returns status information for all items in a list. Some of the Item information is returned in an SimpleItemArrayType object, that can include zero, one, or multiple ItemType objects.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetItemStatusResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations extracted from the WSDL
	 * - documentation : Collection of Item status objects in an SimpleItemArrayType object, that can include zero, one, or multiple ItemType objects.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor method for GetItemStatusResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructSimpleItemType $_item
	 * @return EbayShoppingStructGetItemStatusResponseType
	 */
	public function __construct($_item = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('Item'=>$_item));
	}
	/**
	 * Get Item value
	 * @return EbayShoppingStructSimpleItemType|null
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set Item value
	 * @param EbayShoppingStructSimpleItemType $_item the Item
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function setItem($_item)
	{
		return ($this->Item = $_item);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetItemStatusResponseType
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