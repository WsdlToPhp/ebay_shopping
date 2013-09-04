<?php
/**
 * File for class EbayShoppingStructSimpleItemArrayType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructSimpleItemArrayType originally named SimpleItemArrayType
 * Documentation : Container for a list of items. Can contain zero, one, or multiple SimpleItemType objects, each of which conveys the data for one item listing.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructSimpleItemArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The Item
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains data for an item listing.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemType
	 */
	public $Item;
	/**
	 * Constructor method for SimpleItemArrayType
	 * @see parent::__construct()
	 * @param EbayShoppingStructSimpleItemType $_item
	 * @return EbayShoppingStructSimpleItemArrayType
	 */
	public function __construct($_item = NULL)
	{
		parent::__construct(array('Item'=>$_item));
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
	 * Returns the current element
	 * @see EbayShoppingWsdlClass::current()
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see EbayShoppingWsdlClass::item()
	 * @param int $_index
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EbayShoppingWsdlClass::first()
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see EbayShoppingWsdlClass::last()
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see EbayShoppingWsdlClass::last()
	 * @param int $_offset
	 * @return EbayShoppingStructSimpleItemType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see EbayShoppingWsdlClass::getAttributeName()
	 * @return string Item
	 */
	public function getAttributeName()
	{
		return 'Item';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructSimpleItemArrayType
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