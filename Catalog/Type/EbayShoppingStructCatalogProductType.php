<?php
/**
 * File for class EbayShoppingStructCatalogProductType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructCatalogProductType originally named CatalogProductType
 * Documentation : Information about an eBay catalog product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructCatalogProductType extends EbayShoppingWsdlClass
{
	/**
	 * The DomainName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the domain in which the product was found. If the product is mapped to multiple domains, eBay returns the most applicable domain (as determined by eBay). Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var string
	 */
	public $DomainName;
	/**
	 * The DetailsURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the eBay Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product. This is usually always returned when Product is returned, but it may be safest to check for the existence of this field.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The DisplayStockPhotos
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, your application can attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not necessarily applicable or available. An application with a graphical user interface can use this flag to determine when to hide customized stock photo widgets. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : The eBay or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The ItemCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total number of listings on the requested eBay site that use stock information from this catalog product. This value can be greater than the number of listings returned in ItemArray. To retrieve more listings, use the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a>. Only returned when you search by ProductID (and you pass Items or Details in IncludeSelector).
	 * - minOccurs : 0
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The ItemSpecifics
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of name/value pairs that are included in the product's pre-filled Item Specifics. These indicate common aspects or characteristics of the product, such as Publisher (for a book). Also see ProductID for ISBN, UPC, or EAN values, if applicable. This is usually returned. (We are not aware of any cases in which this node is not be returned. However, it may be safest to check for the existence of this node.)
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The ReviewCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The total number of reviews that are available for this product on the eBay Web site. This can be greater than the number of reviews returned by FindProducts. In a future release, we will provide the capability to retrieve details about reviews. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The StockPhotoURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it. Only returned if a URL is available for the product.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : The title of the product, as specified in the catalog. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The ProductState
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates that the product has changed or will soon change (usually due to a migration from one catalog to another catalog). Typically, this field is returned for up to 90 days for a given product. After that, the product either no longer returns this field or the product is no longer returned (depending on the state change). As of mid-2008, this data is primarily applicable to catalogs used by the US, Germany, Austria, and Switzerland sites. Other sites may undergo catalog changes in the future.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumProductStateCodeType
	 */
	public $ProductState;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for CatalogProductType
	 * @see parent::__construct()
	 * @param string $_domainName
	 * @param anyURI $_detailsURL
	 * @param boolean $_displayStockPhotos
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param int $_itemCount
	 * @param EbayShoppingStructNameValueListArrayType $_itemSpecifics
	 * @param int $_reviewCount
	 * @param anyURI $_stockPhotoURL
	 * @param string $_title
	 * @param EbayShoppingEnumProductStateCodeType $_productState
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructCatalogProductType
	 */
	public function __construct($_domainName = NULL,$_detailsURL = NULL,$_displayStockPhotos = NULL,$_productID = NULL,$_itemCount = NULL,$_itemSpecifics = NULL,$_reviewCount = NULL,$_stockPhotoURL = NULL,$_title = NULL,$_productState = NULL,$_any = NULL)
	{
		parent::__construct(array('DomainName'=>$_domainName,'DetailsURL'=>$_detailsURL,'DisplayStockPhotos'=>$_displayStockPhotos,'ProductID'=>$_productID,'ItemCount'=>$_itemCount,'ItemSpecifics'=>($_itemSpecifics instanceof EbayShoppingStructNameValueListArrayType)?$_itemSpecifics:new EbayShoppingStructNameValueListArrayType($_itemSpecifics),'ReviewCount'=>$_reviewCount,'StockPhotoURL'=>$_stockPhotoURL,'Title'=>$_title,'ProductState'=>$_productState,'any'=>$_any));
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
	 * Get ProductState value
	 * @return EbayShoppingEnumProductStateCodeType|null
	 */
	public function getProductState()
	{
		return $this->ProductState;
	}
	/**
	 * Set ProductState value
	 * @uses EbayShoppingEnumProductStateCodeType::valueIsValid()
	 * @param EbayShoppingEnumProductStateCodeType $_productState the ProductState
	 * @return EbayShoppingEnumProductStateCodeType
	 */
	public function setProductState($_productState)
	{
		if(!EbayShoppingEnumProductStateCodeType::valueIsValid($_productState))
		{
			return false;
		}
		return ($this->ProductState = $_productState);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructCatalogProductType::setAny()
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
	 * @return EbayShoppingStructCatalogProductType
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