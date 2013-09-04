<?php
/**
 * File for class EbayShoppingStructGetCategoryInfoRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetCategoryInfoRequestType originally named GetCategoryInfoRequestType
 * Documentation : This call will give you the ability to retrieve high level Category information, relevant for a buy-side application.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetCategoryInfoRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Use an ID of -1 to retrieve the root category and the top-level (level 1) meta categories. You can determine other CategoryIDs from the response from this call, or from a specific item (retrieved from another call like GetSingleItem), or from the eBay website.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The IncludeSelector
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines standard subsets of fields to return within the response. If you don't specify this field, the call returns a default set of fields. If you specify this field, the additional fields (child categories) you retrieve can affect the call's response time (decrease performance). <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; ChildCategories</p> <p class="edef">Include the first level of child categories for the specified parent.</p>
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor method for GetCategoryInfoRequestType
	 * @see parent::__construct()
	 * @param string $_categoryID
	 * @param string $_includeSelector
	 * @return EbayShoppingStructGetCategoryInfoRequestType
	 */
	public function __construct($_categoryID = NULL,$_includeSelector = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_categoryID,'IncludeSelector'=>$_includeSelector));
	}
	/**
	 * Get CategoryID value
	 * @return string|null
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryID value
	 * @param string $_categoryID the CategoryID
	 * @return string
	 */
	public function setCategoryID($_categoryID)
	{
		return ($this->CategoryID = $_categoryID);
	}
	/**
	 * Get IncludeSelector value
	 * @return string|null
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * Set IncludeSelector value
	 * @param string $_includeSelector the IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_includeSelector)
	{
		return ($this->IncludeSelector = $_includeSelector);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetCategoryInfoRequestType
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