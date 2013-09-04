<?php
/**
 * File for class EbayShoppingStructHalfProductsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructHalfProductsType originally named HalfProductsType
 * Documentation : Information about an eBay catalog product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructHalfProductsType extends EbayShoppingWsdlClass
{
	/**
	 * The Product
	 * Meta informations extracted from the WSDL
	 * - documentation : A set of Half.com catalog products. This contains stock information about a particular DVD, book, or other product. When you use QueryKeywords in the request, FindHalfProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindHalfProducts usually only returns 1 product. ItemCount is only returned when ProductID is used in the request and the IncludeSelector is set to Items or Details. (If more than one product matches the same ProductID, FindProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructHalfCatalogProductType
	 */
	public $Product;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for HalfProductsType
	 * @see parent::__construct()
	 * @param EbayShoppingStructHalfCatalogProductType $_product
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructHalfProductsType
	 */
	public function __construct($_product = NULL,$_any = NULL)
	{
		parent::__construct(array('Product'=>$_product,'any'=>$_any));
	}
	/**
	 * Get Product value
	 * @return EbayShoppingStructHalfCatalogProductType|null
	 */
	public function getProduct()
	{
		return $this->Product;
	}
	/**
	 * Set Product value
	 * @param EbayShoppingStructHalfCatalogProductType $_product the Product
	 * @return EbayShoppingStructHalfCatalogProductType
	 */
	public function setProduct($_product)
	{
		return ($this->Product = $_product);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructHalfProductsType::setAny()
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
	 * @return EbayShoppingStructHalfProductsType
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