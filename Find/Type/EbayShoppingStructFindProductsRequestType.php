<?php
/**
 * File for class EbayShoppingStructFindProductsRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindProductsRequestType originally named FindProductsRequestType
 * Documentation : Searches for stock product information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindProductsRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The IncludeSelector
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields, focusing on product details only (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include all available item fields in the response. Only applicable when you are searching by ProductID. Not applicable with QueryKeywords.</p> <p class="ename">&bull;&nbsp;&nbsp; DomainHistogram</p> <p class="edef">Include the DomainHistogram in the response. The histogram lists the number of matching products found and the domains in which they were found. (A domain is like a high-level category.) When many matching products are found, you may see significantly slower response times when you include the histogram.</p> <p class="ename">&bull;&nbsp;&nbsp; Items</p> <p class="edef">Include a brief set of item fields in the response. Only applicable when you are searching by ProductID. Not applicable with QueryKeywords.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "FindProducts Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * The AvailableItemsOnly
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, only retrieve data for products that have been used to pre-fill active listings on the specified eBay site. If false, retrieve all products that match the query. This is useful when you use QueryKeywords and you only want to find products that have associated items (that is, where ItemArray would not beempty).<br> <br> This does not retrieve ItemArray; this only controls which products are returned (or counted). To retrieve ItemArray, pass Items in IncludeSelector.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $AvailableItemsOnly;
	/**
	 * The DomainName
	 * Meta informations extracted from the WSDL
	 * - documentation : A domain to search in. This is like searching a section of a catalog. If not specified, the product search is conducted across all domains. DomainName is an unbounded field. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To determine valid domain names, first use this call with QueryKeywords. Domain names are returned for each product (and summarized in the domain histogram, if you specify DomainHistogram in IncludeSelector).<br> <br> A domain is a named grouping of categories whose items share common product characteristics. For example, all bound books have a binding or format (e.g., Hardcover), but audiobooks don't. So audiobooks would have their own domain. To limit your search to audiobooks, you would specify Audiobooks as the domain.<br> <br> Only useful when QueryKeywords is specified. If you use this with ProductID, AND logic is applied. In this case, if you specify an ID that doesn't match the domain (as eBay has defined it), no matching product will be found. Therefore, we recommend that you only use DomainName with QueryKeywords.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : Use this to retrieve product details for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. <br> <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The QueryKeywords
	 * Meta informations extracted from the WSDL
	 * - documentation : One or more keywords to search for. When you use a keyword search, eBay searches the product catalogs for matching words in the product title, description, and/or Item Specifics, and it returns a list of matching products, with no items. To retrieve items, use ProductID instead. (If you don't already have a product ID, you can get product IDs from the response after conducting a keyword search.)<br> <br> If specified, you must pass in at least 3 alphanumeric characters.<br> <br> The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for products containing these words. To use AND or OR logic, use eBay's standard search string modifiers. Wildcards (+, -, or *) are also supported. Be careful when using spaces before or after modifiers and wildcards.<br> <br> Some keyword queries can result in response times of 30 seconds or longer. If more than 2000 matches are found, the call fails with an error. If this kind of error occurs, refine the search by passing in more keywords and/or by using DomainName to restrict the search to certain domains (such as DVDs). If you are searching for a particular book, DVD, CD, or video game and you already know its ISBN or EAN (for a book) or UPC, consider using ProductID instead to retrieve more precise results. <br> <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * - minOccurs : 0
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The ProductSort
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts the list of products returned. This is mostly only useful with QueryKeywords. (When you use ProductID, eBay usually only returns one product.) Also see SortOrder. If ProductSort and SortOrder are not specified, products are sorted by popularity in descending order.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumProductSortCodeType
	 */
	public $ProductSort;
	/**
	 * The SortOrder
	 * Meta informations extracted from the WSDL
	 * - documentation : Sorts search results in ascending or descending order. Only applicable with ProductSort. If you specify ProductSort without SortOrder, the order defaults to Descending for all criteria except Title (which defaults to Ascending).
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The MaxEntries
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the maximum number of products to return per page in a single call. This is mostly only useful with QueryKeywords. (When you use ProductID, eBay usually only returns one product, and up to 200 items for that product.)
	 * - minOccurs : 0
	 * @var int
	 */
	public $MaxEntries;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies which page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Include a Category ID number in your request to restrict your query to a specific category. <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The HideDuplicateItems
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies whether or not to remove duplicate items from search results. When set to true, and there are duplicate items for an item in the search results, the subsequent duplicates will not appear in the results. Item listings are considered duplicates in the following conditions: <br> <ul> <li>Items are listed by the same seller</li> <li>Items have exactly the same item title</li> <li>Items have similar listing formats</li> <ul> <li>Auctions: Auction Items, Auction BIN items, Multi-Quantity Auctions, and Multi-Quantity Auctions BIN items</li> <li>Fixed Price: Fixed Price, Multi-quantity Fixed Price, Fixed Price with Best Offer, and Store Inventory Format items</li> <li>Classified Ads</li> </ul> </ul><br> For Auctions, items must also have the same price and number of bids to be considered duplicates. <br> Filtering of duplicate item listings is not supported on all sites. For FindProducts, this filter only works when IncludeSelector is set to Items or Details.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $HideDuplicateItems;
	/**
	 * Constructor method for FindProductsRequestType
	 * @see parent::__construct()
	 * @param string $_includeSelector
	 * @param boolean $_availableItemsOnly
	 * @param string $_domainName
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param string $_queryKeywords
	 * @param EbayShoppingEnumProductSortCodeType $_productSort
	 * @param EbayShoppingEnumSortOrderCodeType $_sortOrder
	 * @param int $_maxEntries
	 * @param int $_pageNumber
	 * @param string $_categoryID
	 * @param boolean $_hideDuplicateItems
	 * @return EbayShoppingStructFindProductsRequestType
	 */
	public function __construct($_includeSelector = NULL,$_availableItemsOnly = NULL,$_domainName = NULL,$_productID = NULL,$_queryKeywords = NULL,$_productSort = NULL,$_sortOrder = NULL,$_maxEntries = NULL,$_pageNumber = NULL,$_categoryID = NULL,$_hideDuplicateItems = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('IncludeSelector'=>$_includeSelector,'AvailableItemsOnly'=>$_availableItemsOnly,'DomainName'=>$_domainName,'ProductID'=>$_productID,'QueryKeywords'=>$_queryKeywords,'ProductSort'=>$_productSort,'SortOrder'=>$_sortOrder,'MaxEntries'=>$_maxEntries,'PageNumber'=>$_pageNumber,'CategoryID'=>$_categoryID,'HideDuplicateItems'=>$_hideDuplicateItems));
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
	 * Get AvailableItemsOnly value
	 * @return boolean|null
	 */
	public function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}
	/**
	 * Set AvailableItemsOnly value
	 * @param boolean $_availableItemsOnly the AvailableItemsOnly
	 * @return boolean
	 */
	public function setAvailableItemsOnly($_availableItemsOnly)
	{
		return ($this->AvailableItemsOnly = $_availableItemsOnly);
	}
	/**
	 * Get DomainName value
	 * @return string|null
	 */
	public function getDomainName()
	{
		return $this->DomainName;
	}
	/**
	 * Set DomainName value
	 * @param string $_domainName the DomainName
	 * @return string
	 */
	public function setDomainName($_domainName)
	{
		return ($this->DomainName = $_domainName);
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
	 * Get ProductSort value
	 * @return EbayShoppingEnumProductSortCodeType|null
	 */
	public function getProductSort()
	{
		return $this->ProductSort;
	}
	/**
	 * Set ProductSort value
	 * @uses EbayShoppingEnumProductSortCodeType::valueIsValid()
	 * @param EbayShoppingEnumProductSortCodeType $_productSort the ProductSort
	 * @return EbayShoppingEnumProductSortCodeType
	 */
	public function setProductSort($_productSort)
	{
		if(!EbayShoppingEnumProductSortCodeType::valueIsValid($_productSort))
		{
			return false;
		}
		return ($this->ProductSort = $_productSort);
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
	 * Get HideDuplicateItems value
	 * @return boolean|null
	 */
	public function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
	}
	/**
	 * Set HideDuplicateItems value
	 * @param boolean $_hideDuplicateItems the HideDuplicateItems
	 * @return boolean
	 */
	public function setHideDuplicateItems($_hideDuplicateItems)
	{
		return ($this->HideDuplicateItems = $_hideDuplicateItems);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindProductsRequestType
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