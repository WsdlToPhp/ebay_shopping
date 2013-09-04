<?php
/**
 * File for class EbayShoppingStructFindReviewsAndGuidesRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindReviewsAndGuidesRequestType originally named FindReviewsAndGuidesRequestType
 * Documentation : Splitting include reviews and guides from GetProducts.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindReviewsAndGuidesRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : Use this to retrieve reviews (not guides) for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. Same as FindProducts, supports Reference, ISBN, UPC, EAN. <br> <br> ProductID can be used in combination with UserID to return Reviews and Guides. ProductID and CategoryID cannot be used together.
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - documentation : Retrieves reviews and guides written by the specified user. <br> <br> UserID can be combined with either ProductID or CategoryID but not both (as ProductID and CategoryID cannot be used together).
	 * - minOccurs : 0
	 * @var string
	 */
	public $UserID;
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specify a single CategoryID to restrict your query to a specific Guide category. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another FindReviewsAndGuides call with the ID of a matching category. <br> <br> CategoryID can be used in combination with UserID to return Reviews and Guides. ProductID and CategoryID cannot be used together.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The MaxResultsPerPage
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the maximum number of reviews per page (not guides) in the returned list. If not specified, the default returns 5 results per page.
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
	 * The ReviewSort
	 * Meta informations extracted from the WSDL
	 * - documentation : Include ReviewSort in your request if you want to sort by a parameter, such as CreationTime. See the SortOrder field for values for specifying that results are returned in ascending or descending order. (By default, results are returned in descending order.)
	 * - minOccurs : 0
	 * @var EbayShoppingEnumReviewSortCodeType
	 */
	public $ReviewSort;
	/**
	 * The SortOrder
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts search results in ascending or descending order, in conjunction with the value you specify in ReviewsSort. The default is descending order. <br> <br> For example, for the ReviewsSort value of CreationTime, and a SortOrder value of Descending, the most recently created reviews are returned first.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * Constructor method for FindReviewsAndGuidesRequestType
	 * @see parent::__construct()
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param string $_userID
	 * @param string $_categoryID
	 * @param int $_maxResultsPerPage
	 * @param int $_pageNumber
	 * @param EbayShoppingEnumReviewSortCodeType $_reviewSort
	 * @param EbayShoppingEnumSortOrderCodeType $_sortOrder
	 * @return EbayShoppingStructFindReviewsAndGuidesRequestType
	 */
	public function __construct($_productID = NULL,$_userID = NULL,$_categoryID = NULL,$_maxResultsPerPage = NULL,$_pageNumber = NULL,$_reviewSort = NULL,$_sortOrder = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ProductID'=>$_productID,'UserID'=>$_userID,'CategoryID'=>$_categoryID,'MaxResultsPerPage'=>$_maxResultsPerPage,'PageNumber'=>$_pageNumber,'ReviewSort'=>$_reviewSort,'SortOrder'=>$_sortOrder));
	}
	/**
	 * Get ProductID value
	 * @return EbayShoppingStructProductIDType|null
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set ProductID value
	 * @param EbayShoppingStructProductIDType $_productID the ProductID
	 * @return EbayShoppingStructProductIDType
	 */
	public function setProductID($_productID)
	{
		return ($this->ProductID = $_productID);
	}
	/**
	 * Get UserID value
	 * @return string|null
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set UserID value
	 * @param string $_userID the UserID
	 * @return string
	 */
	public function setUserID($_userID)
	{
		return ($this->UserID = $_userID);
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
	 * Get ReviewSort value
	 * @return EbayShoppingEnumReviewSortCodeType|null
	 */
	public function getReviewSort()
	{
		return $this->ReviewSort;
	}
	/**
	 * Set ReviewSort value
	 * @uses EbayShoppingEnumReviewSortCodeType::valueIsValid()
	 * @param EbayShoppingEnumReviewSortCodeType $_reviewSort the ReviewSort
	 * @return EbayShoppingEnumReviewSortCodeType
	 */
	public function setReviewSort($_reviewSort)
	{
		if(!EbayShoppingEnumReviewSortCodeType::valueIsValid($_reviewSort))
		{
			return false;
		}
		return ($this->ReviewSort = $_reviewSort);
	}
	/**
	 * Get SortOrder value
	 * @return EbayShoppingEnumSortOrderCodeType|null
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * Set SortOrder value
	 * @uses EbayShoppingEnumSortOrderCodeType::valueIsValid()
	 * @param EbayShoppingEnumSortOrderCodeType $_sortOrder the SortOrder
	 * @return EbayShoppingEnumSortOrderCodeType
	 */
	public function setSortOrder($_sortOrder)
	{
		if(!EbayShoppingEnumSortOrderCodeType::valueIsValid($_sortOrder))
		{
			return false;
		}
		return ($this->SortOrder = $_sortOrder);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindReviewsAndGuidesRequestType
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