<?php
/**
 * File for class EbayShoppingStructNameValueListArrayType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructNameValueListArrayType originally named NameValueListArrayType
 * Documentation : A list of one or more valid names and corresponding values.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructNameValueListArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The NameValueList
	 * Meta informations extracted from the WSDL
	 * - documentation : This list is an array of Item Specifics, which are category-specific fields that the seller added to describe the listing. The names of these fields are different for items in different categories, so they're returned in a generic name/value structure. <br><br> For example, Item Specifics for a car might include a field like Make=Toyota (where Make is returned in Name, and Toyota is returned in Value) and Model=Prius (where Model is returned in Name, and Prius is returned in Value).<br> <br> In multi-variation listings, the same name cannot appear in both the VariationSpecifics node and in the ItemSpecifics node. <br><br> For FindProducts, this can also be an Item Specific that is defined for a product. That is, Item Specifics can be returned both for items and products in FindProducts.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListType
	 */
	public $NameValueList;
	/**
	 * Constructor method for NameValueListArrayType
	 * @see parent::__construct()
	 * @param EbayShoppingStructNameValueListType $_nameValueList
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function __construct($_nameValueList = NULL)
	{
		parent::__construct(array('NameValueList'=>$_nameValueList));
	}
	/**
	 * Get NameValueList value
	 * @return EbayShoppingStructNameValueListType|null
	 */
	public function getNameValueList()
	{
		return $this->NameValueList;
	}
	/**
	 * Set NameValueList value
	 * @param EbayShoppingStructNameValueListType $_nameValueList the NameValueList
	 * @return EbayShoppingStructNameValueListType
	 */
	public function setNameValueList($_nameValueList)
	{
		return ($this->NameValueList = $_nameValueList);
	}
	/**
	 * Returns the current element
	 * @see EbayShoppingWsdlClass::current()
	 * @return EbayShoppingStructNameValueListType
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the indexed element
	 * @see EbayShoppingWsdlClass::item()
	 * @param int $_index
	 * @return EbayShoppingStructNameValueListType
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EbayShoppingWsdlClass::first()
	 * @return EbayShoppingStructNameValueListType
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the last element
	 * @see EbayShoppingWsdlClass::last()
	 * @return EbayShoppingStructNameValueListType
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the element at the offset
	 * @see EbayShoppingWsdlClass::last()
	 * @param int $_offset
	 * @return EbayShoppingStructNameValueListType
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @see EbayShoppingWsdlClass::getAttributeName()
	 * @return string NameValueList
	 */
	public function getAttributeName()
	{
		return 'NameValueList';
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructNameValueListArrayType
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