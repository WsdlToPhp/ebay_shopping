<?php
/**
 * File for class EbayShoppingStructErrorParameterType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructErrorParameterType originally named ErrorParameterType
 * Documentation : A variable that contains specific information about the context of this error. For example, if you pass in an attribute set ID that does not match the specified category, the attribute set ID might be returned as an error parameter. Use error parameters to flag fields that users need to correct. Also use error parameters to distinguish between errors when multiple errors are returned.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructErrorParameterType extends EbayShoppingWsdlClass
{
	/**
	 * The Value
	 * Meta informations extracted from the WSDL
	 * - documentation : The value of the variable.
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
	 * The ParamID
	 * Meta informations extracted from the WSDL
	 * - documentation : The index of the parameter in the error.
	 * @var string
	 */
	public $ParamID;
	/**
	 * Constructor method for ErrorParameterType
	 * @see parent::__construct()
	 * @param string $_value
	 * @param DOMDocument $_any
	 * @param string $_paramID
	 * @return EbayShoppingStructErrorParameterType
	 */
	public function __construct($_value = NULL,$_any = NULL,$_paramID = NULL)
	{
		parent::__construct(array('Value'=>$_value,'any'=>$_any,'ParamID'=>$_paramID));
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
	 * @uses EbayShoppingStructErrorParameterType::setAny()
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
	 * Get ParamID value
	 * @return string|null
	 */
	public function getParamID()
	{
		return $this->ParamID;
	}
	/**
	 * Set ParamID value
	 * @param string $_paramID the ParamID
	 * @return string
	 */
	public function setParamID($_paramID)
	{
		return ($this->ParamID = $_paramID);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructErrorParameterType
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