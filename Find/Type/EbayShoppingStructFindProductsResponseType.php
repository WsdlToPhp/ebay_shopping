<?php
/**
 * File for class EbayShoppingStructFindProductsResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindProductsResponseType originally named FindProductsResponseType
 * Documentation : Returns stock product information in eBay catalogs, such as information about a particular DVD or camera. Optionally, also returns items that match the product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindProductsResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The ApproximatePages
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of pages that can be returned, given the same query and filters in the request. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
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
	 * The DomainHistogram
	 * Meta informations extracted from the WSDL
	 * - documentation : A histogram that lists the number of matching products found and the domains in which they were found. A <i>domain</i> describes a set of categories that share certain common characteristics (as determined by eBay). Each domain has its own name and ID. Only returned when you specify DomainHistogram in IncludeSelector.
	 * - minOccurs : 0
	 * @var EbayShoppingStructDomainHistogramType
	 */
	public $DomainHistogram;
	/**
	 * The ItemArray
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of active items that were listed with the requested product. <br /> <br /> <span class="tablenote"><strong>Note:</strong> ItemArray is returned only when you use ProductID in the search request (not QueryKeywords) and you set IncludeSelector to Details or Items. Returned only if eBay has currently matching items. </span> <br />
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with ApproximatePages and MoreResults to decide which page to retrieve next. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The Product
	 * Meta informations extracted from the WSDL
	 * - documentation : An eBay catalog product. This contains stock information about a particular DVD, camera, set of golf clubs, or other product. When you use QueryKeywords in the request, FindProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindProducts usually only returns 1 product by default. (If more than one product matches the same ProductID, FindProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructCatalogProductType
	 */
	public $Product;
	/**
	 * The TotalProducts
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of matching products found. (If more than 2000 products are found, the call fails with an error.)
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The DuplicateItems
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether there are duplicated items not returned by this response when HideDuplicateItems is true in the request.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $DuplicateItems;
	/**
	 * Constructor method for FindProductsResponseType
	 * @see parent::__construct()
	 * @param int $_approximatePages
	 * @param boolean $_moreResults
	 * @param EbayShoppingStructDomainHistogramType $_domainHistogram
	 * @param EbayShoppingStructSimpleItemArrayType $_itemArray
	 * @param int $_pageNumber
	 * @param EbayShoppingStructCatalogProductType $_product
	 * @param int $_totalProducts
	 * @param boolean $_duplicateItems
	 * @return EbayShoppingStructFindProductsResponseType
	 */
	public function __construct($_approximatePages = NULL,$_moreResults = NULL,$_domainHistogram = NULL,$_itemArray = NULL,$_pageNumber = NULL,$_product = NULL,$_totalProducts = NULL,$_duplicateItems = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ApproximatePages'=>$_approximatePages,'MoreResults'=>$_moreResults,'DomainHistogram'=>$_domainHistogram,'ItemArray'=>($_itemArray instanceof EbayShoppingStructSimpleItemArrayType)?$_itemArray:new EbayShoppingStructSimpleItemArrayType($_itemArray),'PageNumber'=>$_pageNumber,'Product'=>$_product,'TotalProducts'=>$_totalProducts,'DuplicateItems'=>$_duplicateItems));
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
	 * Get ItemArray value
	 * @return EbayShoppingStructSimpleItemArrayType|null
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * Set ItemArray value
	 * @param EbayShoppingStructSimpleItemArrayType $_itemArray the ItemArray
	 * @return EbayShoppingStructSimpleItemArrayType
	 */
	public function setItemArray($_itemArray)
	{
		return ($this->ItemArray = $_itemArray);
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
	 * Get Product value
	 * @return EbayShoppingStructCatalogProductType|null
	 */
	public function getProduct()
	{
		return $this->Product;
	}
	/**
	 * Set Product value
	 * @param EbayShoppingStructCatalogProductType $_product the Product
	 * @return EbayShoppingStructCatalogProductType
	 */
	public function setProduct($_product)
	{
		return ($this->Product = $_product);
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
	 * Get DuplicateItems value
	 * @return boolean|null
	 */
	public function getDuplicateItems()
	{
		return $this->DuplicateItems;
	}
	/**
	 * Set DuplicateItems value
	 * @param boolean $_duplicateItems the DuplicateItems
	 * @return boolean
	 */
	public function setDuplicateItems($_duplicateItems)
	{
		return ($this->DuplicateItems = $_duplicateItems);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindProductsResponseType
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