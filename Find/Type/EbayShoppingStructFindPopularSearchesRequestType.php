<?php
/**
 * File for class EbayShoppingStructFindPopularSearchesRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindPopularSearchesRequestType originally named FindPopularSearchesRequestType
 * Documentation : Retrieves the words most frequently used by eBay users when searching for listings. These keywords are generated weekly by eBay. Thus, calls retrieve static data. FindPopularSearches is not available for the following sites: FR, HK, MY, PH, PL, SG, SE.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindPopularSearchesRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specify CategoryID to restrict your query to a specific category. Up to 10 categories may be specified. If you are using URL parameters, and you want to specify multiple values, use a comma. For example, if you want to specify Fiction Books and Children's Books, specify CategoryID=377,279. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another <b>findItemsAdvanced</b> call with the ID of a matching category. <br> <br> CategoryID can be used in combination with QueryKeywords and IncludeChildCategories. When IncludeChildCategories is 'true' and used in conjunction with CategoryID, one and only one CategoryID is allowed. Otherwise, up to 10 CategoryIDs are allowed. To retrieve the most popular keywords for a root category, set one of the CategoryIDs to -1, or do not include CategoryID in the Request.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The QueryKeywords
	 * Meta informations extracted from the WSDL
	 * - documentation : This field allows the user to specify one or more search terms, and then retrieve up to five related search terms and up to five alternative search terms. If you are using URL parameters, use the "%20" URL encoding to represent a space. For example, use Harry%20Potter to search for items containing these words in any order. <br> <br> QueryKeywords can be used in combination with CategoryID and IncludeChildCategories.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The MaxKeywords
	 * Meta informations extracted from the WSDL
	 * - documentation : The maximum number of keywords to be retrieved per category for this call.
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxKeywords;
	/**
	 * The MaxResultsPerPage
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the maximum number of PopularSearchResults per page in the returned list. If not specified, the default returns 20 results per page.
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxResultsPerPage;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the number of the page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The IncludeChildCategories
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, only one CategoryID can be specified, and keywords are returned for that category and its subcategories. When IncludeChildCategories is true and used in conjunction with CategoryID, one and only one CategoryID is allowed. <br> <br> If false, keywords are returned only for the categories identified by CategoryID. The default is false.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $IncludeChildCategories;
	/**
	 * Constructor method for FindPopularSearchesRequestType
	 * @see parent::__construct()
	 * @param string $_categoryID
	 * @param string $_queryKeywords
	 * @param int $_maxKeywords
	 * @param int $_maxResultsPerPage
	 * @param int $_pageNumber
	 * @param boolean $_includeChildCategories
	 * @return EbayShoppingStructFindPopularSearchesRequestType
	 */
	public function __construct($_categoryID = NULL,$_queryKeywords = NULL,$_maxKeywords = NULL,$_maxResultsPerPage = NULL,$_pageNumber = NULL,$_includeChildCategories = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_categoryID,'QueryKeywords'=>$_queryKeywords,'MaxKeywords'=>$_maxKeywords,'MaxResultsPerPage'=>$_maxResultsPerPage,'PageNumber'=>$_pageNumber,'IncludeChildCategories'=>$_includeChildCategories));
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
	 * Get MaxKeywords value
	 * @return int|null
	 */
	public function getMaxKeywords()
	{
		return $this->MaxKeywords;
	}
	/**
	 * Set MaxKeywords value
	 * @param int $_maxKeywords the MaxKeywords
	 * @return int
	 */
	public function setMaxKeywords($_maxKeywords)
	{
		return ($this->MaxKeywords = $_maxKeywords);
	}
	/**
	 * Get MaxResultsPerPage value
	 * @return int|null
	 */
	public function getMaxResultsPerPage()
	{
		return $this->MaxResultsPerPage;
	}
	/**
	 * Set MaxResultsPerPage value
	 * @param int $_maxResultsPerPage the MaxResultsPerPage
	 * @return int
	 */
	public function setMaxResultsPerPage($_maxResultsPerPage)
	{
		return ($this->MaxResultsPerPage = $_maxResultsPerPage);
	}
	/**
	 * Get PageNumber value
	 * @return int|null
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set PageNumber value
	 * @param int $_pageNumber the PageNumber
	 * @return int
	 */
	public function setPageNumber($_pageNumber)
	{
		return ($this->PageNumber = $_pageNumber);
	}
	/**
	 * Get IncludeChildCategories value
	 * @return boolean|null
	 */
	public function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
	}
	/**
	 * Set IncludeChildCategories value
	 * @param boolean $_includeChildCategories the IncludeChildCategories
	 * @return boolean
	 */
	public function setIncludeChildCategories($_includeChildCategories)
	{
		return ($this->IncludeChildCategories = $_includeChildCategories);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindPopularSearchesRequestType
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