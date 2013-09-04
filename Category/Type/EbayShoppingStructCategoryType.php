<?php
/**
 * File for class EbayShoppingStructCategoryType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructCategoryType originally named CategoryType
 * Documentation : Contains details about a category.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructCategoryType extends EbayShoppingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : The numeric ID of a category on eBay. <br> <br> Use an ID of -1 to retrieve the root category and the top-level (level 1) meta categories. You can determine other CategoryIDs from the response from this call, or from a specific item (retrieved from another call like GetSingleItem), or from the eBay website.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryLevel
	 * Meta informations extracted from the WSDL
	 * - documentation : The level where the category fits in the site's category hierarchy. For example, if this field has a value of 2, then the category is 2 levels below the root category. <br> <br> Note that the value of CategoryLevel will always be 1 level below the level of the requested category. To retrieve a category's children, pass its CategoryID back into the request. <br>
	 * - minOccurs : 0
	 * @var int
	 */
	public $CategoryLevel;
	/**
	 * The CategoryName
	 * Meta informations extracted from the WSDL
	 * - documentation : Display name of the category as it would appear on the eBay Web site.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentID
	 * Meta informations extracted from the WSDL
	 * - documentation : Category ID identifying a category that is an ancestor of the category indicated in CategoryID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The CategoryParentName
	 * Meta informations extracted from the WSDL
	 * - documentation : Display name of the category indicated in CategoryParentID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The ItemCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The total quantity of matching items in the category. In the FindItemsAdvanced response, matching categories at the same level (i.e., sibling categories) are sorted by ItemCount. That is, if the request specifies that fewer categories or subcategories should be returned, the ones with the most matching items are returned first.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The CategoryNamePath
	 * Meta informations extracted from the WSDL
	 * - documentation : The fully qualified category display name as it would appear on the eBay site (e.g., Home & Garden:Kitchen:Tools & Gadgets).
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryNamePath;
	/**
	 * The CategoryIDPath
	 * Meta informations extracted from the WSDL
	 * - documentation : The fully qualified category ID (e.g., 11700:20625:20635 for Home & Garden:Kitchen:Tools & Gadgets).
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryIDPath;
	/**
	 * The LeafCategory
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, indicates that the category indicated in CategoryID is a leaf category, in which items may be listed (if the category is not also expired or virtual).
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $LeafCategory;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for CategoryType
	 * @see parent::__construct()
	 * @param string $_categoryID
	 * @param int $_categoryLevel
	 * @param string $_categoryName
	 * @param string $_categoryParentID
	 * @param string $_categoryParentName
	 * @param int $_itemCount
	 * @param string $_categoryNamePath
	 * @param string $_categoryIDPath
	 * @param boolean $_leafCategory
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructCategoryType
	 */
	public function __construct($_categoryID = NULL,$_categoryLevel = NULL,$_categoryName = NULL,$_categoryParentID = NULL,$_categoryParentName = NULL,$_itemCount = NULL,$_categoryNamePath = NULL,$_categoryIDPath = NULL,$_leafCategory = NULL,$_any = NULL)
	{
		parent::__construct(array('CategoryID'=>$_categoryID,'CategoryLevel'=>$_categoryLevel,'CategoryName'=>$_categoryName,'CategoryParentID'=>$_categoryParentID,'CategoryParentName'=>$_categoryParentName,'ItemCount'=>$_itemCount,'CategoryNamePath'=>$_categoryNamePath,'CategoryIDPath'=>$_categoryIDPath,'LeafCategory'=>$_leafCategory,'any'=>$_any));
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
	 * Get CategoryLevel value
	 * @return int|null
	 */
	public function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * Set CategoryLevel value
	 * @param int $_categoryLevel the CategoryLevel
	 * @return int
	 */
	public function setCategoryLevel($_categoryLevel)
	{
		return ($this->CategoryLevel = $_categoryLevel);
	}
	/**
	 * Get CategoryName value
	 * @return string|null
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryName value
	 * @param string $_categoryName the CategoryName
	 * @return string
	 */
	public function setCategoryName($_categoryName)
	{
		return ($this->CategoryName = $_categoryName);
	}
	/**
	 * Get CategoryParentID value
	 * @return string|null
	 */
	public function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * Set CategoryParentID value
	 * @param string $_categoryParentID the CategoryParentID
	 * @return string
	 */
	public function setCategoryParentID($_categoryParentID)
	{
		return ($this->CategoryParentID = $_categoryParentID);
	}
	/**
	 * Get CategoryParentName value
	 * @return string|null
	 */
	public function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * Set CategoryParentName value
	 * @param string $_categoryParentName the CategoryParentName
	 * @return string
	 */
	public function setCategoryParentName($_categoryParentName)
	{
		return ($this->CategoryParentName = $_categoryParentName);
	}
	/**
	 * Get ItemCount value
	 * @return int|null
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set ItemCount value
	 * @param int $_itemCount the ItemCount
	 * @return int
	 */
	public function setItemCount($_itemCount)
	{
		return ($this->ItemCount = $_itemCount);
	}
	/**
	 * Get CategoryNamePath value
	 * @return string|null
	 */
	public function getCategoryNamePath()
	{
		return $this->CategoryNamePath;
	}
	/**
	 * Set CategoryNamePath value
	 * @param string $_categoryNamePath the CategoryNamePath
	 * @return string
	 */
	public function setCategoryNamePath($_categoryNamePath)
	{
		return ($this->CategoryNamePath = $_categoryNamePath);
	}
	/**
	 * Get CategoryIDPath value
	 * @return string|null
	 */
	public function getCategoryIDPath()
	{
		return $this->CategoryIDPath;
	}
	/**
	 * Set CategoryIDPath value
	 * @param string $_categoryIDPath the CategoryIDPath
	 * @return string
	 */
	public function setCategoryIDPath($_categoryIDPath)
	{
		return ($this->CategoryIDPath = $_categoryIDPath);
	}
	/**
	 * Get LeafCategory value
	 * @return boolean|null
	 */
	public function getLeafCategory()
	{
		return $this->LeafCategory;
	}
	/**
	 * Set LeafCategory value
	 * @param boolean $_leafCategory the LeafCategory
	 * @return boolean
	 */
	public function setLeafCategory($_leafCategory)
	{
		return ($this->LeafCategory = $_leafCategory);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructCategoryType::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructCategoryType
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