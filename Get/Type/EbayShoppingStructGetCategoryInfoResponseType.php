<?php
/**
 * File for class EbayShoppingStructGetCategoryInfoResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetCategoryInfoResponseType originally named GetCategoryInfoResponseType
 * Documentation : Contains the category data for the eBay site specified as input. The category data is returned as a CategoryArrayType object, that contains zero, one, or multiple CategoryType objects. Each CategoryType object contains the detail data for one category. Other fields indicate how many categories are returned in a call, when the category hierarchy was last updated, and the version of the category hierarchy (all three of which can differ from one eBay site to the next).
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetCategoryInfoResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The CategoryArray
	 * Meta informations extracted from the WSDL
	 * - documentation : List of the returned categories. The category array contains one CategoryType object for each returned category. Returns empty if no detail level is specified.
	 * - minOccurs : 0
	 * @var EbayShoppingStructCategoryArrayType
	 */
	public $CategoryArray;
	/**
	 * The CategoryCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the number of categories returned (i.e., the number of CategoryType objects in CategoryArray).
	 * - minOccurs : 0
	 * @var int
	 */
	public $CategoryCount;
	/**
	 * The UpdateTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The CategoryVersion
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the version of the category hierarchy on the specified eBay site.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * Constructor method for GetCategoryInfoResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructCategoryArrayType $_categoryArray
	 * @param int $_categoryCount
	 * @param dateTime $_updateTime
	 * @param string $_categoryVersion
	 * @return EbayShoppingStructGetCategoryInfoResponseType
	 */
	public function __construct($_categoryArray = NULL,$_categoryCount = NULL,$_updateTime = NULL,$_categoryVersion = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryArray'=>($_categoryArray instanceof EbayShoppingStructCategoryArrayType)?$_categoryArray:new EbayShoppingStructCategoryArrayType($_categoryArray),'CategoryCount'=>$_categoryCount,'UpdateTime'=>$_updateTime,'CategoryVersion'=>$_categoryVersion));
	}
	/**
	 * Get CategoryArray value
	 * @return EbayShoppingStructCategoryArrayType|null
	 */
	public function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * Set CategoryArray value
	 * @param EbayShoppingStructCategoryArrayType $_categoryArray the CategoryArray
	 * @return EbayShoppingStructCategoryArrayType
	 */
	public function setCategoryArray($_categoryArray)
	{
		return ($this->CategoryArray = $_categoryArray);
	}
	/**
	 * Get CategoryCount value
	 * @return int|null
	 */
	public function getCategoryCount()
	{
		return $this->CategoryCount;
	}
	/**
	 * Set CategoryCount value
	 * @param int $_categoryCount the CategoryCount
	 * @return int
	 */
	public function setCategoryCount($_categoryCount)
	{
		return ($this->CategoryCount = $_categoryCount);
	}
	/**
	 * Get UpdateTime value
	 * @return dateTime|null
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set UpdateTime value
	 * @param dateTime $_updateTime the UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_updateTime)
	{
		return ($this->UpdateTime = $_updateTime);
	}
	/**
	 * Get CategoryVersion value
	 * @return string|null
	 */
	public function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
	/**
	 * Set CategoryVersion value
	 * @param string $_categoryVersion the CategoryVersion
	 * @return string
	 */
	public function setCategoryVersion($_categoryVersion)
	{
		return ($this->CategoryVersion = $_categoryVersion);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetCategoryInfoResponseType
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