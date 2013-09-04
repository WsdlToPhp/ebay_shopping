<?php
/**
 * File for class EbayShoppingStructAbstractResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructAbstractResponseType originally named AbstractResponseType
 * Documentation : Base type definition of a response payload that can carry any type of payload content with following optional elements:<br> - timestamp of response message<br> - application-level acknowledgement<br> - application-level (business-level) errors and warnings
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructAbstractResponseType extends EbayShoppingWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations extracted from the WSDL
	 * - documentation : This value represents the date and time when eBay processed the request. The time zone of this value is <a href="types/simpleTypes.html#dateTime">GMT</a> and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about this time format and converting to and from the GMT time zone.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Ack
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the call was successfully processed by eBay.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumAckCodeType
	 */
	public $Ack;
	/**
	 * The Errors
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructErrorType
	 */
	public $Errors;
	/**
	 * The Build
	 * Meta informations extracted from the WSDL
	 * - documentation : This refers to the particular software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build information when helping you resolve technical issues.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Build;
	/**
	 * The Version
	 * Meta informations extracted from the WSDL
	 * - documentation : The release version that eBay used to process the request. <br> <br> <span class="tablenote"><b>Note:</b> This is usually the latest release version, as specified in the release notes. (eBay releases the API to international sites about a week after we release it to the US site.) </span><br> <br> If a field in the response returns the token "CustomCode", it usually means that the field is a code type (a token or enumeration), and that in your request URL (or HTTP header) you specified a version that is older than the version in which the token was added to the call.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Version;
	/**
	 * The CorrelationID
	 * Meta informations extracted from the WSDL
	 * - documentation : If you pass a value in MessageID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to particular requests. Only returned if MessageID was used.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AbstractResponseType
	 * @see parent::__construct()
	 * @param dateTime $_timestamp
	 * @param EbayShoppingEnumAckCodeType $_ack
	 * @param EbayShoppingStructErrorType $_errors
	 * @param string $_build
	 * @param string $_version
	 * @param string $_correlationID
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructAbstractResponseType
	 */
	public function __construct($_timestamp = NULL,$_ack = NULL,$_errors = NULL,$_build = NULL,$_version = NULL,$_correlationID = NULL,$_any = NULL)
	{
		parent::__construct(array('Timestamp'=>$_timestamp,'Ack'=>$_ack,'Errors'=>$_errors,'Build'=>$_build,'Version'=>$_version,'CorrelationID'=>$_correlationID,'any'=>$_any));
	}
	/**
	 * Get Timestamp value
	 * @return dateTime|null
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Timestamp value
	 * @param dateTime $_timestamp the Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->Timestamp = $_timestamp);
	}
	/**
	 * Get Ack value
	 * @return EbayShoppingEnumAckCodeType|null
	 */
	public function getAck()
	{
		return $this->Ack;
	}
	/**
	 * Set Ack value
	 * @uses EbayShoppingEnumAckCodeType::valueIsValid()
	 * @param EbayShoppingEnumAckCodeType $_ack the Ack
	 * @return EbayShoppingEnumAckCodeType
	 */
	public function setAck($_ack)
	{
		if(!EbayShoppingEnumAckCodeType::valueIsValid($_ack))
		{
			return false;
		}
		return ($this->Ack = $_ack);
	}
	/**
	 * Get Errors value
	 * @return EbayShoppingStructErrorType|null
	 */
	public function getErrors()
	{
		return $this->Errors;
	}
	/**
	 * Set Errors value
	 * @param EbayShoppingStructErrorType $_errors the Errors
	 * @return EbayShoppingStructErrorType
	 */
	public function setErrors($_errors)
	{
		return ($this->Errors = $_errors);
	}
	/**
	 * Get Build value
	 * @return string|null
	 */
	public function getBuild()
	{
		return $this->Build;
	}
	/**
	 * Set Build value
	 * @param string $_build the Build
	 * @return string
	 */
	public function setBuild($_build)
	{
		return ($this->Build = $_build);
	}
	/**
	 * Get Version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Version value
	 * @param string $_version the Version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->Version = $_version);
	}
	/**
	 * Get CorrelationID value
	 * @return string|null
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * Set CorrelationID value
	 * @param string $_correlationID the CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_correlationID)
	{
		return ($this->CorrelationID = $_correlationID);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructAbstractResponseType::setAny()
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
	 * @return EbayShoppingStructAbstractResponseType
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