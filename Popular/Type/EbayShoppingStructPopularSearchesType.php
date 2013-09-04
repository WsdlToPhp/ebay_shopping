<?php
/**
 * File for class EbayShoppingStructPopularSearchesType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructPopularSearchesType originally named PopularSearchesType
 * Documentation : Contains search word information, as it is related to a category.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructPopularSearchesType extends EbayShoppingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Numeric ID of a category on eBay.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryParentID
	 * Meta informations extracted from the WSDL
	 * - documentation : Category ID identifying a category that is the parent category of the category indicated in the request.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The QueryKeywords
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies which QueryKeywords corresponds to this PopularSearchResult. Query Keywords are returned in the output to clarify which result set corresponds to which QueryKeyword inputs (as there can be more than one set of keywords in the input).
	 * - minOccurs : 0
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The AlternativeSearches
	 * Meta informations extracted from the WSDL
	 * - documentation : Alternative search keywords for the query keywords, separated by semicolons. You can use this to find other search terms buyers and sellers may be interested in. For example, if a seller lists an item with "wedding" in the title, they may also be interested in adding "bridal" to the title because bridal is an alternative search keyword which buyers have used.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AlternativeSearches;
	/**
	 * The RelatedSearches
	 * Meta informations extracted from the WSDL
	 * - documentation : Keywords related to the query keywords, separated by semicolons. You can use this to find more detailed related keywords. For example, the query keyword "wedding" is related to searches for "wedding decorations;wedding favors;wedding supplies;wedding dresses..." which helps the seller and buyer specify their query with more detail and precision.
	 * - minOccurs : 0
	 * @var string
	 */
	public $RelatedSearches;
	/**
	 * The CategoryName
	 * Meta informations extracted from the WSDL
	 * - documentation : Category Name identifying the name of current CategoryID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of category which is a parent category to the CategoryID specified in the request.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for PopularSearchesType
	 * @see parent::__construct()
	 * @param string $_categoryID
	 * @param string $_categoryParentID
	 * @param string $_queryKeywords
	 * @param string $_alternativeSearches
	 * @param string $_relatedSearches
	 * @param string $_categoryName
	 * @param string $_categoryParentName
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructPopularSearchesType
	 */
	public function __construct($_categoryID = NULL,$_categoryParentID = NULL,$_queryKeywords = NULL,$_alternativeSearches = NULL,$_relatedSearches = NULL,$_categoryName = NULL,$_categoryParentName = NULL,$_any = NULL)
	{
		parent::__construct(array('CategoryID'=>$_categoryID,'CategoryParentID'=>$_categoryParentID,'QueryKeywords'=>$_queryKeywords,'AlternativeSearches'=>$_alternativeSearches,'RelatedSearches'=>$_relatedSearches,'CategoryName'=>$_categoryName,'CategoryParentName'=>$_categoryParentName,'any'=>$_any));
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
	 * Get QueryKeywords value
	 * @return string|null
	 */
	public function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * Set QueryKeywords value
	 * @param string $_queryKeywords the QueryKeywords
	 * @return string
	 */
	public function setQueryKeywords($_queryKeywords)
	{
		return ($this->QueryKeywords = $_queryKeywords);
	}
	/**
	 * Get AlternativeSearches value
	 * @return string|null
	 */
	public function getAlternativeSearches()
	{
		return $this->AlternativeSearches;
	}
	/**
	 * Set AlternativeSearches value
	 * @param string $_alternativeSearches the AlternativeSearches
	 * @return string
	 */
	public function setAlternativeSearches($_alternativeSearches)
	{
		return ($this->AlternativeSearches = $_alternativeSearches);
	}
	/**
	 * Get RelatedSearches value
	 * @return string|null
	 */
	public function getRelatedSearches()
	{
		return $this->RelatedSearches;
	}
	/**
	 * Set RelatedSearches value
	 * @param string $_relatedSearches the RelatedSearches
	 * @return string
	 */
	public function setRelatedSearches($_relatedSearches)
	{
		return ($this->RelatedSearches = $_relatedSearches);
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
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructPopularSearchesType::setAny()
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
	 * @return EbayShoppingStructPopularSearchesType
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