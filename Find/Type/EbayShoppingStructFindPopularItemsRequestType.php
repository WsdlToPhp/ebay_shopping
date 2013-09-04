<?php
/**
 * File for class EbayShoppingStructFindPopularItemsRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindPopularItemsRequestType originally named FindPopularItemsRequestType
 * Documentation : Find popular items
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindPopularItemsRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specify CategoryID to restrict your query to a specific category. Up to 10 categories may be specified. If you are using a URL, and you want to specify more than one CategoryID, separate the values with a comma. For example, to specify Fiction Books and Children's Books, specify CategoryID=377,279. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another <b>findItemsAdvanced</b> call with the ID of a matching category. <br> <br> CategoryID can be used in combination with QueryKeywords and CategoryIDExclude. To retrieve the most popular items across all categorys, do not submit a CategoryID.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The QueryKeywords
	 * Meta informations extracted from the WSDL
	 * - documentation : A query that specifies a string for searching titles of items on eBay. If you are using a URL, then to search for multiple words, use "%20". For example, use Harry%20Potter to search for items containing those words in any order. You can incorporate wildcards into a multi-word search, as in the following: ap*%20ip*. The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for listings containing these words. QueryKeywords can be used in combination with CategoryID and CategoryIDExclude.
	 * - minOccurs : 0
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The CategoryIDExclude
	 * Meta informations extracted from the WSDL
	 * - documentation : Specify this value if you want search results to be filtered so that the popular items returned do not include items that belong to a specific category. <br> <br> CategoryIDExclude is an unbounded field. If you are using a URL, you can separate multiple values with a comma. For example, if you want to specify Records and SuperAudio CDs, specify CategoryIDExclude=306,46354. <br> <br> If you use CategoryIDExclude, it must be used in with QueryKeywords or CategoryID. The CategoryIDExclude input field need not be used if you specified the CategoryID input field.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryIDExclude;
	/**
	 * The MaxEntries
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the maximum number of entries to return in a single call.
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxEntries;
	/**
	 * Constructor method for FindPopularItemsRequestType
	 * @see parent::__construct()
	 * @param string $_categoryID
	 * @param string $_queryKeywords
	 * @param string $_categoryIDExclude
	 * @param int $_maxEntries
	 * @return EbayShoppingStructFindPopularItemsRequestType
	 */
	public function __construct($_categoryID = NULL,$_queryKeywords = NULL,$_categoryIDExclude = NULL,$_maxEntries = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_categoryID,'QueryKeywords'=>$_queryKeywords,'CategoryIDExclude'=>$_categoryIDExclude,'MaxEntries'=>$_maxEntries));
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
	 * Get CategoryIDExclude value
	 * @return string|null
	 */
	public function getCategoryIDExclude()
	{
		return $this->CategoryIDExclude;
	}
	/**
	 * Set CategoryIDExclude value
	 * @param string $_categoryIDExclude the CategoryIDExclude
	 * @return string
	 */
	public function setCategoryIDExclude($_categoryIDExclude)
	{
		return ($this->CategoryIDExclude = $_categoryIDExclude);
	}
	/**
	 * Get MaxEntries value
	 * @return int|null
	 */
	public function getMaxEntries()
	{
		return $this->MaxEntries;
	}
	/**
	 * Set MaxEntries value
	 * @param int $_maxEntries the MaxEntries
	 * @return int
	 */
	public function setMaxEntries($_maxEntries)
	{
		return ($this->MaxEntries = $_maxEntries);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindPopularItemsRequestType
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