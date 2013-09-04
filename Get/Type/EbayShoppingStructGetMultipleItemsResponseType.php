<?php
/**
 * File for class EbayShoppingStructGetMultipleItemsResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetMultipleItemsResponseType originally named GetMultipleItemsResponseType
 * Documentation : Response to request of GetMultipleItems.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetMultipleItemsResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The Item
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor method for GetMultipleItemsResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructSimpleItemType $_item
	 * @return EbayShoppingStructGetMultipleItemsResponseType
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
	 * @return EbayShoppingStructGetMultipleItemsResponseType
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