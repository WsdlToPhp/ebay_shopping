<?php
/**
 * File for class EbayShoppingStructFindHalfProductsResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindHalfProductsResponseType originally named FindHalfProductsResponseType
 * Documentation : Returns stock product information in Half.com catalogs, such as information about a particular DVD or book. Optionally, also returns items that match the product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindHalfProductsResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The DomainHistogram
	 * Meta informations extracted from the WSDL
	 * - documentation : A histogram that lists the number of matching products found and the domains in which they were found. A <i>domain</i> is essentially a set of categories that share certain common features (as determined by Half.com). Each domain has its own name and ID.
	 * - minOccurs : 0
	 * @var EbayShoppingStructDomainHistogramType
	 */
	public $DomainHistogram;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with ApproximatePages and HasMore to decide which page to retrieve next. As FindHalfProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set EntriesPerPage to 1 in the request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ApproximatePages
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of pages that can be returned, given the same query and filters in the request. As FindHalfProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $ApproximatePages;
	/**
	 * The MoreResults
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, more pages of results are available. That is, PageNumber is less than ApproximatePages.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $MoreResults;
	/**
	 * The TotalProducts
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of matching products found. (If more than 2000 products are found, the call fails with an error.)
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The Products
	 * Meta informations extracted from the WSDL
	 * - documentation : An set of Half.com catalog products. This contains stock information about a particular DVD, book, or other product. When you use QueryKeywords in the request, FindHalfProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindHalfProducts usually only returns 1 product. ItemCount is only returned if you use ProductID with IncludeSelector set to Items or Details. (If more than one product matches the same ProductID, FindHalfProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * - minOccurs : 0
	 * @var EbayShoppingStructHalfProductsType
	 */
	public $Products;
	/**
	 * The ProductSearchURL
	 * Meta informations extracted from the WSDL
	 * - documentation : A URL for product search results that corresponds to your search request. This is similar to ItemSearchURL in FindItems and FindItemsAdvanced.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $ProductSearchURL;
	/**
	 * Constructor method for FindHalfProductsResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructDomainHistogramType $_domainHistogram
	 * @param int $_pageNumber
	 * @param int $_approximatePages
	 * @param boolean $_moreResults
	 * @param int $_totalProducts
	 * @param EbayShoppingStructHalfProductsType $_products
	 * @param anyURI $_productSearchURL
	 * @return EbayShoppingStructFindHalfProductsResponseType
	 */
	public function __construct($_domainHistogram = NULL,$_pageNumber = NULL,$_approximatePages = NULL,$_moreResults = NULL,$_totalProducts = NULL,$_products = NULL,$_productSearchURL = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('DomainHistogram'=>$_domainHistogram,'PageNumber'=>$_pageNumber,'ApproximatePages'=>$_approximatePages,'MoreResults'=>$_moreResults,'TotalProducts'=>$_totalProducts,'Products'=>$_products,'ProductSearchURL'=>$_productSearchURL));
	}
	/**
	 * Get DomainHistogram value
	 * @return EbayShoppingStructDomainHistogramType|null
	 */
	public function getDomainHistogram()
	{
		return $this->DomainHistogram;
	}
	/**
	 * Set DomainHistogram value
	 * @param EbayShoppingStructDomainHistogramType $_domainHistogram the DomainHistogram
	 * @return EbayShoppingStructDomainHistogramType
	 */
	public function setDomainHistogram($_domainHistogram)
	{
		return ($this->DomainHistogram = $_domainHistogram);
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
	 * Get ApproximatePages value
	 * @return int|null
	 */
	public function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * Set ApproximatePages value
	 * @param int $_approximatePages the ApproximatePages
	 * @return int
	 */
	public function setApproximatePages($_approximatePages)
	{
		return ($this->ApproximatePages = $_approximatePages);
	}
	/**
	 * Get MoreResults value
	 * @return boolean|null
	 */
	public function getMoreResults()
	{
		return $this->MoreResults;
	}
	/**
	 * Set MoreResults value
	 * @param boolean $_moreResults the MoreResults
	 * @return boolean
	 */
	public function setMoreResults($_moreResults)
	{
		return ($this->MoreResults = $_moreResults);
	}
	/**
	 * Get TotalProducts value
	 * @return int|null
	 */
	public function getTotalProducts()
	{
		return $this->TotalProducts;
	}
	/**
	 * Set TotalProducts value
	 * @param int $_totalProducts the TotalProducts
	 * @return int
	 */
	public function setTotalProducts($_totalProducts)
	{
		return ($this->TotalProducts = $_totalProducts);
	}
	/**
	 * Get Products value
	 * @return EbayShoppingStructHalfProductsType|null
	 */
	public function getProducts()
	{
		return $this->Products;
	}
	/**
	 * Set Products value
	 * @param EbayShoppingStructHalfProductsType $_products the Products
	 * @return EbayShoppingStructHalfProductsType
	 */
	public function setProducts($_products)
	{
		return ($this->Products = $_products);
	}
	/**
	 * Get ProductSearchURL value
	 * @return anyURI|null
	 */
	public function getProductSearchURL()
	{
		return $this->ProductSearchURL;
	}
	/**
	 * Set ProductSearchURL value
	 * @param anyURI $_productSearchURL the ProductSearchURL
	 * @return anyURI
	 */
	public function setProductSearchURL($_productSearchURL)
	{
		return ($this->ProductSearchURL = $_productSearchURL);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindHalfProductsResponseType
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