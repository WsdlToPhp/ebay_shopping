<?php
/**
 * File for class EbayShoppingStructCategoryArrayType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructCategoryArrayType originally named CategoryArrayType
 * Documentation : Container for a list of categories.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructCategoryArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The Category
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains details about a category.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructCategoryType
	 */
	public $Category;
	/**
	 * Constructor method for CategoryArrayType
	 * @see parent::__construct()
	 * @param EbayShoppingStructCategoryType $_category
	 * @return EbayShoppingStructCategoryArrayType
	 */
	public function __construct($_category = NULL)
	{
		parent::__construct(array('Category'=>$_category));
	}
	/**
	 * Get Category value
	 * @return EbayShoppingStructCategoryType|null
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Category value
	 * @param EbayShoppingStructCategoryType $_category the Category
	 * @return EbayShoppingStructCategoryType
	 */
	public function setCategory($_category)
	{
		return ($this->Category = $_category);
	}
	/**
	 * Returns the current element
	 * @see EbayShoppingWsdlClass::current()
	 * @return EbayShoppingStructCategoryType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see EbayShoppingWsdlClass::item()
	 * @param int $_index
	 * @return EbayShoppingStructCategoryType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EbayShoppingWsdlClass::first()
	 * @return EbayShoppingStructCategoryType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see EbayShoppingWsdlClass::last()
	 * @return EbayShoppingStructCategoryType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see EbayShoppingWsdlClass::last()
	 * @param int $_offset
	 * @return EbayShoppingStructCategoryType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see EbayShoppingWsdlClass::getAttributeName()
	 * @return string Category
	 */
	public function getAttributeName()
	{
		return 'Category';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructCategoryArrayType
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