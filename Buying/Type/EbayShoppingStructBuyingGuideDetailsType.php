<?php
/**
 * File for class EbayShoppingStructBuyingGuideDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructBuyingGuideDetailsType originally named BuyingGuideDetailsType
 * Documentation : Information about zero or more buying guides and the site's buying guide hub. Buying guides contain content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Multiple buying guides can be returned. See the eBay Web Services Guide for additional information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructBuyingGuideDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The BuyingGuide
	 * Meta informations extracted from the WSDL
	 * - documentation : Information that identifies a buying guide. A buying guide contains content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructBuyingGuideType
	 */
	public $BuyingGuide;
	/**
	 * The BuyingGuideHub
	 * Meta informations extracted from the WSDL
	 * - documentation : URL of the buying guide home page for the site being searched. Your application can present this URL as a link. Optionally, you can use a value like "See all buying guides" as the link's display name.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $BuyingGuideHub;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for BuyingGuideDetailsType
	 * @see parent::__construct()
	 * @param EbayShoppingStructBuyingGuideType $_buyingGuide
	 * @param anyURI $_buyingGuideHub
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructBuyingGuideDetailsType
	 */
	public function __construct($_buyingGuide = NULL,$_buyingGuideHub = NULL,$_any = NULL)
	{
		parent::__construct(array('BuyingGuide'=>$_buyingGuide,'BuyingGuideHub'=>$_buyingGuideHub,'any'=>$_any));
	}
	/**
	 * Get BuyingGuide value
	 * @return EbayShoppingStructBuyingGuideType|null
	 */
	public function getBuyingGuide()
	{
		return $this->BuyingGuide;
	}
	/**
	 * Set BuyingGuide value
	 * @param EbayShoppingStructBuyingGuideType $_buyingGuide the BuyingGuide
	 * @return EbayShoppingStructBuyingGuideType
	 */
	public function setBuyingGuide($_buyingGuide)
	{
		return ($this->BuyingGuide = $_buyingGuide);
	}
	/**
	 * Get BuyingGuideHub value
	 * @return anyURI|null
	 */
	public function getBuyingGuideHub()
	{
		return $this->BuyingGuideHub;
	}
	/**
	 * Set BuyingGuideHub value
	 * @param anyURI $_buyingGuideHub the BuyingGuideHub
	 * @return anyURI
	 */
	public function setBuyingGuideHub($_buyingGuideHub)
	{
		return ($this->BuyingGuideHub = $_buyingGuideHub);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructBuyingGuideDetailsType::setAny()
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
	 * @return EbayShoppingStructBuyingGuideDetailsType
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