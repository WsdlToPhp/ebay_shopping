<?php
/**
 * File for class EbayShoppingStructFindPopularItemsResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindPopularItemsResponseType originally named FindPopularItemsResponseType
 * Documentation : Popular items, detail level is default for simple item type. addition with WatchCount.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindPopularItemsResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The ItemArray
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of active items that were listed with the requested product.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * Constructor method for FindPopularItemsResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructSimpleItemArrayType $_itemArray
	 * @return EbayShoppingStructFindPopularItemsResponseType
	 */
	public function __construct($_itemArray = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ItemArray'=>($_itemArray instanceof EbayShoppingStructSimpleItemArrayType)?$_itemArray:new EbayShoppingStructSimpleItemArrayType($_itemArray)));
	}
	/**
	 * Get ItemArray value
	 * @return EbayShoppingStructSimpleItemArrayType|null
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * Set ItemArray value
	 * @param EbayShoppingStructSimpleItemArrayType $_itemArray the ItemArray
	 * @return EbayShoppingStructSimpleItemArrayType
	 */
	public function setItemArray($_itemArray)
	{
		return ($this->ItemArray = $_itemArray);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindPopularItemsResponseType
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