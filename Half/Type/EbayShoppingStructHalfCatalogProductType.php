<?php
/**
 * File for class EbayShoppingStructHalfCatalogProductType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructHalfCatalogProductType originally named HalfCatalogProductType
 * Documentation : Information about an Half.com catalog product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructHalfCatalogProductType extends EbayShoppingWsdlClass
{
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : The title of the product, as specified in the catalog. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The DetailsURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the Half.com Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product. This is usually always returned when Product is returned, but it may be safest to check for the existence of this field.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The StockPhotoURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Fully qualified URL for a stock image (if any) that is associated with the Half.com catalog product. The URL is for the image Half.com usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it. Only returned if a URL is available for the product.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The ShippingCostSummary
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains basic shipping-related costs for the item. If Item.Quantity is greater than 1, this is the shipping cost for one item. If the seller offers a choice of more than one shipping service (such as USPS Ground or Expediated), this is the cost of the "first" shipping option (usually the lowest cost option).
	 * - minOccurs : 0
	 * @var EbayShoppingStructShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * The DisplayStockPhotos
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, your application can attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not necessarily applicable or available. An application with a graphical user interface can use this flag to determine when to hide customized stock photo widgets. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The ItemCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total number of listings on the Half.com site that use stock information from this catalog product. This value can be greater than the number of listings returned in ItemArray. <br /> <br /> <span class="tablenote"><strong>Note:</strong> ItemCount is always returned, however, it's value will be zero unless you use ProductID in the search request and you set IncludeSelector to Items. Although ItemCount always returns 0 if you search using QueryKeyword, check for the presence of MinPrice; if the response contains MinPrice, you can retrieve a value for ItemCount as described. </span>
	 * - minOccurs : 0
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : The Half.com or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The DomainName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the domain in which the product was found. If the product is mapped to multiple domains, Half.com returns the most applicable domain (as determined by Half.com). Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ItemSpecifics
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of name/value pairs that are included in the product's pre-filled Item Specifics. These indicate common aspects or characteristics of the product, such as Publisher (for a book). Also see ProductID for ISBN, UPC, or EAN values, if applicable. This is usually returned. (We are not aware of any cases in which this node is not be returned. However, it may be safest to check for the existence of this node.)
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The ItemArray
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of active items that were listed with the requested product. Results are sorted by current price (lowest first), then by recent positive feedback (highest first). <br> <br> Only returned when you specify Items in IncludeSelector, and the product has matching items that are currently active on Half.com.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * The ReviewCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of reviews that are available for this product on the Half.com Web site. This can be greater than the number of reviews returned by FindProducts. In a future release, we will provide the capability to retrieve details about reviews. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The MinPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The minimum price for all active items listed under this product. This field is only returned when QueryKeywords is specified in the request.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $MinPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for HalfCatalogProductType
	 * @see parent::__construct()
	 * @param string $_title
	 * @param anyURI $_detailsURL
	 * @param anyURI $_stockPhotoURL
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary
	 * @param boolean $_displayStockPhotos
	 * @param int $_itemCount
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param string $_domainName
	 * @param EbayShoppingStructNameValueListArrayType $_itemSpecifics
	 * @param EbayShoppingStructSimpleItemArrayType $_itemArray
	 * @param int $_reviewCount
	 * @param EbayShoppingStructAmountType $_minPrice
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructHalfCatalogProductType
	 */
	public function __construct($_title = NULL,$_detailsURL = NULL,$_stockPhotoURL = NULL,$_shippingCostSummary = NULL,$_displayStockPhotos = NULL,$_itemCount = NULL,$_productID = NULL,$_domainName = NULL,$_itemSpecifics = NULL,$_itemArray = NULL,$_reviewCount = NULL,$_minPrice = NULL,$_any = NULL)
	{
		parent::__construct(array('Title'=>$_title,'DetailsURL'=>$_detailsURL,'StockPhotoURL'=>$_stockPhotoURL,'ShippingCostSummary'=>$_shippingCostSummary,'DisplayStockPhotos'=>$_displayStockPhotos,'ItemCount'=>$_itemCount,'ProductID'=>$_productID,'DomainName'=>$_domainName,'ItemSpecifics'=>($_itemSpecifics instanceof EbayShoppingStructNameValueListArrayType)?$_itemSpecifics:new EbayShoppingStructNameValueListArrayType($_itemSpecifics),'ItemArray'=>($_itemArray instanceof EbayShoppingStructSimpleItemArrayType)?$_itemArray:new EbayShoppingStructSimpleItemArrayType($_itemArray),'ReviewCount'=>$_reviewCount,'MinPrice'=>$_minPrice,'any'=>$_any));
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get DetailsURL value
	 * @return anyURI|null
	 */
	public function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * Set DetailsURL value
	 * @param anyURI $_detailsURL the DetailsURL
	 * @return anyURI
	 */
	public function setDetailsURL($_detailsURL)
	{
		return ($this->DetailsURL = $_detailsURL);
	}
	/**
	 * Get StockPhotoURL value
	 * @return anyURI|null
	 */
	public function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * Set StockPhotoURL value
	 * @param anyURI $_stockPhotoURL the StockPhotoURL
	 * @return anyURI
	 */
	public function setStockPhotoURL($_stockPhotoURL)
	{
		return ($this->StockPhotoURL = $_stockPhotoURL);
	}
	/**
	 * Get ShippingCostSummary value
	 * @return EbayShoppingStructShippingCostSummaryType|null
	 */
	public function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * Set ShippingCostSummary value
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary the ShippingCostSummary
	 * @return EbayShoppingStructShippingCostSummaryType
	 */
	public function setShippingCostSummary($_shippingCostSummary)
	{
		return ($this->ShippingCostSummary = $_shippingCostSummary);
	}
	/**
	 * Get DisplayStockPhotos value
	 * @return boolean|null
	 */
	public function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * Set DisplayStockPhotos value
	 * @param boolean $_displayStockPhotos the DisplayStockPhotos
	 * @return boolean
	 */
	public function setDisplayStockPhotos($_displayStockPhotos)
	{
		return ($this->DisplayStockPhotos = $_displayStockPhotos);
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
	 * Get ItemSpecifics value
	 * @return EbayShoppingStructNameValueListArrayType|null
	 */
	public function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * Set ItemSpecifics value
	 * @param EbayShoppingStructNameValueListArrayType $_itemSpecifics the ItemSpecifics
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function setItemSpecifics($_itemSpecifics)
	{
		return ($this->ItemSpecifics = $_itemSpecifics);
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
	 * Get ReviewCount value
	 * @return int|null
	 */
	public function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * Set ReviewCount value
	 * @param int $_reviewCount the ReviewCount
	 * @return int
	 */
	public function setReviewCount($_reviewCount)
	{
		return ($this->ReviewCount = $_reviewCount);
	}
	/**
	 * Get MinPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getMinPrice()
	{
		return $this->MinPrice;
	}
	/**
	 * Set MinPrice value
	 * @param EbayShoppingStructAmountType $_minPrice the MinPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setMinPrice($_minPrice)
	{
		return ($this->MinPrice = $_minPrice);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructHalfCatalogProductType::setAny()
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
	 * @return EbayShoppingStructHalfCatalogProductType
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