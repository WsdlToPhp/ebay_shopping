<?php
/**
 * File for class EbayShoppingStructExternalProductIDType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructExternalProductIDType originally named ExternalProductIDType
 * Documentation : Contains an ISBN value, EAN value, UPC value, ticket keywords, or eBay catalog product ID, plus other meta-data. For event tickets, this type can contain a set of keywords that uniquely identify the product. Only applicable to certain categories that support Pre-filled Item Information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructExternalProductIDType extends EbayShoppingWsdlClass
{
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : An industry-standard value that uniquely identifies the product. The valid values are dictated by the Type property. Required if Type is specified. Max length 13 for ISBN, 13 for EAN, 12 for UPC, and 4000 for ProductID. No max length for ticket keywords (but passing too much data can result in "no match found" errors).<br> <br> <b>For AddItem and related calls:</b> If the primary and secondary categories are both catalog-enabled, the value must apply to the primary category. Event tickets listings support a set of keywords that uniquely identify the listing. The ticket keywords specify the event name (the title shown on the ticket), venue name, and event date and time. See the eBay Web Services guide for more information and validation rules. For convenience, you can pass an eBay product ID as input (not limited to media categories).<br> <br> Required for Half.com listing use cases, and this can only be an ISBN, UPC, or EAN value.<br> <br> <b>For FindProducts input only:</b> Only ISBN, EAN, and UPC values are currently supported as input.<br> <br> <b>For FindProducts and GetSellerPayments output only:</b> Also see AlternateValue, which is returned if the catalog defines multiple ISBN values (e.g., one for ISBN-13 and one for ISBN-10). Please note that some catalogs return ISBN values that are not 10 or 13 characters, and some values contain non-alphanumeric symbols (e.g., $).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Value;
	/**
	 * The ReturnSearchResultOnDuplicates
	 * Meta informations extracted from the WSDL
	 * - documentation : Applicable for listing use cases only (not buy-side searching). Indicates what eBay should do if more than one product matches the value passed in Value. Only takes effect when more than one match is found. If true, the response should include an error and all matching product IDs. If false, the response should include an error but should not return the matching product IDs. This field is also applicable when listing Half.com items.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ReturnSearchResultOnDuplicates;
	/**
	 * The Type
	 * Meta informations extracted from the WSDL
	 * - documentation : The kind of identifier being used. The choices listed are for requests, are are required if Value is specified. For Half.com listing use cases, only ISBN, UPC, and EAN are supported.<br> <br> FindProducts supports ISBN, UPC, and EAN.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumExternalProductCodeType
	 */
	public $Type;
	/**
	 * The AlternateValue
	 * Meta informations extracted from the WSDL
	 * - documentation : An industry-standard value that provides an alternate identification for the product, if any. Currently, this only returns an alternate ISBN value. If the catalog defines both an ISBN-13 and ISBN-10, then the ISBN-13 is returned in Value and the ISBN-10 is returned in AlternateValue. (That is, the ISBN-13 is considered to be the preferred identifier.) If the catalog only defines one ISBN, it is returned in Value (and AlternateValue is not returned). Please note that some catalogs return ISBN values that are not 10 or 13 characters, and some values contain non-alphanumeric symbols (e.g., $).
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $AlternateValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ExternalProductIDType
	 * @see parent::__construct()
	 * @param string $_value
	 * @param boolean $_returnSearchResultOnDuplicates
	 * @param EbayShoppingEnumExternalProductCodeType $_type
	 * @param string $_alternateValue
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructExternalProductIDType
	 */
	public function __construct($_value = NULL,$_returnSearchResultOnDuplicates = NULL,$_type = NULL,$_alternateValue = NULL,$_any = NULL)
	{
		parent::__construct(array('Value'=>$_value,'ReturnSearchResultOnDuplicates'=>$_returnSearchResultOnDuplicates,'Type'=>$_type,'AlternateValue'=>$_alternateValue,'any'=>$_any));
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
	 * Get ReturnSearchResultOnDuplicates value
	 * @return boolean|null
	 */
	public function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}
	/**
	 * Set ReturnSearchResultOnDuplicates value
	 * @param boolean $_returnSearchResultOnDuplicates the ReturnSearchResultOnDuplicates
	 * @return boolean
	 */
	public function setReturnSearchResultOnDuplicates($_returnSearchResultOnDuplicates)
	{
		return ($this->ReturnSearchResultOnDuplicates = $_returnSearchResultOnDuplicates);
	}
	/**
	 * Get Type value
	 * @return EbayShoppingEnumExternalProductCodeType|null
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Type value
	 * @uses EbayShoppingEnumExternalProductCodeType::valueIsValid()
	 * @param EbayShoppingEnumExternalProductCodeType $_type the Type
	 * @return EbayShoppingEnumExternalProductCodeType
	 */
	public function setType($_type)
	{
		if(!EbayShoppingEnumExternalProductCodeType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->Type = $_type);
	}
	/**
	 * Get AlternateValue value
	 * @return string|null
	 */
	public function getAlternateValue()
	{
		return $this->AlternateValue;
	}
	/**
	 * Set AlternateValue value
	 * @param string $_alternateValue the AlternateValue
	 * @return string
	 */
	public function setAlternateValue($_alternateValue)
	{
		return ($this->AlternateValue = $_alternateValue);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructExternalProductIDType::setAny()
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
	 * @return EbayShoppingStructExternalProductIDType
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