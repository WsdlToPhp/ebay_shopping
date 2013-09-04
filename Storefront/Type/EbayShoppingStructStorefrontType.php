<?php
/**
 * File for class EbayShoppingStructStorefrontType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructStorefrontType originally named StorefrontType
 * Documentation : Contains information related to the item in the context of a seller's eBay Store. Applicable for auction format, Basic Fixed Price, and Store Inventory format items listed by eBay Stores sellers.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructStorefrontType extends EbayShoppingWsdlClass
{
	/**
	 * The StoreURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of the seller's eBay Store page. Not returned if the seller does not have an eBay store. <br><br> FindProducts only returned a default URL at the time of this writing. FindHalfProducts returns the URL of the seller's Half.com Shop page.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The StoreName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the seller's eBay Store. Not returned if the seller does not have an eBay store. <br><br> FindProducts returns an empty value for all items at the time of this writing. FindHalfProducts returns the name of seller's Half.com Shop, which is the SellerID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $StoreName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for StorefrontType
	 * @see parent::__construct()
	 * @param anyURI $_storeURL
	 * @param string $_storeName
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructStorefrontType
	 */
	public function __construct($_storeURL = NULL,$_storeName = NULL,$_any = NULL)
	{
		parent::__construct(array('StoreURL'=>$_storeURL,'StoreName'=>$_storeName,'any'=>$_any));
	}
	/**
	 * Get StoreURL value
	 * @return anyURI|null
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreURL value
	 * @param anyURI $_storeURL the StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_storeURL)
	{
		return ($this->StoreURL = $_storeURL);
	}
	/**
	 * Get StoreName value
	 * @return string|null
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set StoreName value
	 * @param string $_storeName the StoreName
	 * @return string
	 */
	public function setStoreName($_storeName)
	{
		return ($this->StoreName = $_storeName);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructStorefrontType::setAny()
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
	 * @return EbayShoppingStructStorefrontType
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