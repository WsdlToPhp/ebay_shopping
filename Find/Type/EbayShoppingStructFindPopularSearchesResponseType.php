<?php
/**
 * File for class EbayShoppingStructFindPopularSearchesResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindPopularSearchesResponseType originally named FindPopularSearchesResponseType
 * Documentation : Contains the keyword data for the requested categories. A category's data are contained in a CategoryArrayType object if there is no error (one or more CategoryType objects). Returns category data as well as related search data.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindPopularSearchesResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The PopularSearchResult
	 * Meta informations extracted from the WSDL
	 * - documentation : Returns most popular search words by category. For each category, the CategoryID, CategoryName, CategoryParentID, and CategoryParentName, are returned, as well as QueryKeywords, related, and alternate searches.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructPopularSearchesType
	 */
	public $PopularSearchResult;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one.
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The TotalPages
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalPages;
	/**
	 * Constructor method for FindPopularSearchesResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructPopularSearchesType $_popularSearchResult
	 * @param int $_pageNumber
	 * @param int $_totalPages
	 * @return EbayShoppingStructFindPopularSearchesResponseType
	 */
	public function __construct($_popularSearchResult = NULL,$_pageNumber = NULL,$_totalPages = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('PopularSearchResult'=>$_popularSearchResult,'PageNumber'=>$_pageNumber,'TotalPages'=>$_totalPages));
	}
	/**
	 * Get PopularSearchResult value
	 * @return EbayShoppingStructPopularSearchesType|null
	 */
	public function getPopularSearchResult()
	{
		return $this->PopularSearchResult;
	}
	/**
	 * Set PopularSearchResult value
	 * @param EbayShoppingStructPopularSearchesType $_popularSearchResult the PopularSearchResult
	 * @return EbayShoppingStructPopularSearchesType
	 */
	public function setPopularSearchResult($_popularSearchResult)
	{
		return ($this->PopularSearchResult = $_popularSearchResult);
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
	 * Get TotalPages value
	 * @return int|null
	 */
	public function getTotalPages()
	{
		return $this->TotalPages;
	}
	/**
	 * Set TotalPages value
	 * @param int $_totalPages the TotalPages
	 * @return int
	 */
	public function setTotalPages($_totalPages)
	{
		return ($this->TotalPages = $_totalPages);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindPopularSearchesResponseType
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