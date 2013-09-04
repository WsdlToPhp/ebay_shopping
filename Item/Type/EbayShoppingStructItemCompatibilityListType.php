<?php
/**
 * File for class EbayShoppingStructItemCompatibilityListType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructItemCompatibilityListType originally named ItemCompatibilityListType
 * Documentation : A list of compatible applications specified as name and value pairs. Describes assemblies with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle, the name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values describe the specific vehicle, such as a 2006 Honda Accord. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories, on the eBay Motors (US) site (site ID 100) only.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructItemCompatibilityListType extends EbayShoppingWsdlClass
{
	/**
	 * The Compatibility
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains details for an individual compatible application, consisting of a list of name-value pairs and related compatibility notes. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories, on the eBay Motors (US) site (site ID 100) only.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructItemCompatibilityType
	 */
	public $Compatibility;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ItemCompatibilityListType
	 * @see parent::__construct()
	 * @param EbayShoppingStructItemCompatibilityType $_compatibility
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructItemCompatibilityListType
	 */
	public function __construct($_compatibility = NULL,$_any = NULL)
	{
		parent::__construct(array('Compatibility'=>$_compatibility,'any'=>$_any));
	}
	/**
	 * Get Compatibility value
	 * @return EbayShoppingStructItemCompatibilityType|null
	 */
	public function getCompatibility()
	{
		return $this->Compatibility;
	}
	/**
	 * Set Compatibility value
	 * @param EbayShoppingStructItemCompatibilityType $_compatibility the Compatibility
	 * @return EbayShoppingStructItemCompatibilityType
	 */
	public function setCompatibility($_compatibility)
	{
		return ($this->Compatibility = $_compatibility);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructItemCompatibilityListType::setAny()
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
	 * @return EbayShoppingStructItemCompatibilityListType
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