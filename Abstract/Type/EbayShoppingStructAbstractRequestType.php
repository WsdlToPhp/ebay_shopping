<?php
/**
 * File for class EbayShoppingStructAbstractRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructAbstractRequestType originally named AbstractRequestType
 * Documentation : Base type definition of the request payload, which can carry any type of payload content plus optional versioning information and detail level requirements. All concrete request types are derived from the abstract request type. The naming convention we use for the concrete type names is the name of the service (the verb or call name) followed by "RequestType": VerbNameRequestType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructAbstractRequestType extends EbayShoppingWsdlClass
{
	/**
	 * The MessageID
	 * Meta informations extracted from the WSDL
	 * - documentation : If you pass a value in MessageID in a request, we'll return the same value in CorrelationID in the response. If you're making a lot of calls, you can use this for tracking that a response is returned for every request and to match particular responses to particular requests. (In this case, specify a different value for each request.) You can specify any value that is useful to you.
	 * - minOccurs : 0
	 * @var string
	 */
	public $MessageID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AbstractRequestType
	 * @see parent::__construct()
	 * @param string $_messageID
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructAbstractRequestType
	 */
	public function __construct($_messageID = NULL,$_any = NULL)
	{
		parent::__construct(array('MessageID'=>$_messageID,'any'=>$_any));
	}
	/**
	 * Get MessageID value
	 * @return string|null
	 */
	public function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * Set MessageID value
	 * @param string $_messageID the MessageID
	 * @return string
	 */
	public function setMessageID($_messageID)
	{
		return ($this->MessageID = $_messageID);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructAbstractRequestType::setAny()
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
	 * @return EbayShoppingStructAbstractRequestType
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