<?php
/**
 * File for class EbayShoppingStructItemCompatibilityType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructItemCompatibilityType originally named ItemCompatibilityType
 * Documentation : All information corresponding to an individual compatibility by application. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories, on the eBay Motors (US) site (site ID 100) only. If a
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructItemCompatibilityType extends EbayShoppingWsdlClass
{
	/**
	 * The NameValueList
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains a list of name-value pairs which together describe a single compatible application. The allowed names and values are specific to the primary category in which the item is listed. For example, when listing in a Parts & Accessories category, where the applications are vehicles, the allowed names might include Year, Make, and Model, and the values correspond to specific vehicles in eBay's catalog.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListType
	 */
	public $NameValueList;
	/**
	 * The CompatibilityNotes
	 * Meta informations extracted from the WSDL
	 * - documentation : The seller may optionally enter any notes pertaining to the compatibility being specified. Use this field to specify the placement of the part on a vehicle or the type of vehicle that a part fits.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CompatibilityNotes;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ItemCompatibilityType
	 * @see parent::__construct()
	 * @param EbayShoppingStructNameValueListType $_nameValueList
	 * @param string $_compatibilityNotes
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructItemCompatibilityType
	 */
	public function __construct($_nameValueList = NULL,$_compatibilityNotes = NULL,$_any = NULL)
	{
		parent::__construct(array('NameValueList'=>$_nameValueList,'CompatibilityNotes'=>$_compatibilityNotes,'any'=>$_any));
	}
	/**
	 * Get NameValueList value
	 * @return EbayShoppingStructNameValueListType|null
	 */
	public function getNameValueList()
	{
		return $this->NameValueList;
	}
	/**
	 * Set NameValueList value
	 * @param EbayShoppingStructNameValueListType $_nameValueList the NameValueList
	 * @return EbayShoppingStructNameValueListType
	 */
	public function setNameValueList($_nameValueList)
	{
		return ($this->NameValueList = $_nameValueList);
	}
	/**
	 * Get CompatibilityNotes value
	 * @return string|null
	 */
	public function getCompatibilityNotes()
	{
		return $this->CompatibilityNotes;
	}
	/**
	 * Set CompatibilityNotes value
	 * @param string $_compatibilityNotes the CompatibilityNotes
	 * @return string
	 */
	public function setCompatibilityNotes($_compatibilityNotes)
	{
		return ($this->CompatibilityNotes = $_compatibilityNotes);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructItemCompatibilityType::setAny()
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
	 * @return EbayShoppingStructItemCompatibilityType
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