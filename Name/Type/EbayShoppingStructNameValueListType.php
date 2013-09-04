<?php
/**
 * File for class EbayShoppingStructNameValueListType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructNameValueListType originally named NameValueListType
 * Documentation : A name and corresponding value (a name/value pair).
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructNameValueListType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the item specific. <br> <br> This field is returned only in responses if the seller included an item specific Name in the listing. However, if the seller didn't also include a corresponding value for the item specific, it is best to not display the name to name to avoid confusing users. <br> <br> For the item condition, this usually includes the word "Condition" for eBay US, UK, Australia, and India listings; and "Artikelzustand" for eBay Germany, Austria, and Switzerland listings. <br> <br> <span class="tablenote"><b>Note:</b> Ignore item specifics with SIFFTAS in the name. These are for internal use by eBay and aren't meaningful to users. </span>
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : A value for the item specific. <br> <br> This field is only returned in responses if the seller included a value for an item specific. In the GetSingleItem response, this field is always returned for each item specific that is returned (if any). However, if the seller didn't select a value for the item specific, this field may return empty, or it may return a value like "-", "Not Selected", or "Unspecified" (or the equivalent in the language of the site). <br> <br> For the item condition, this usually includes the word "New" or "Used" for eBay US, UK, Australia, and India listings; and "Neu" or "Gebraucht" for eBay Germany, Austria, and Switzerland listings.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for NameValueListType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_value
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructNameValueListType
	 */
	public function __construct($_name = NULL,$_value = NULL,$_any = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Value'=>$_value,'any'=>$_any));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Value value
	 * @param string $_value the Value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->Value = $_value);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructNameValueListType::setAny()
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
	 * @return EbayShoppingStructNameValueListType
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