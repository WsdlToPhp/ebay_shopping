<?php
/**
 * File for class EbayShoppingStructErrorType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructErrorType originally named ErrorType
 * Documentation : These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructErrorType extends EbayShoppingWsdlClass
{
	/**
	 * The ShortMessage
	 * Meta informations extracted from the WSDL
	 * - documentation : A brief description of the condition that raised the error.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShortMessage;
	/**
	 * The LongMessage
	 * Meta informations extracted from the WSDL
	 * - documentation : A more detailed description of the condition that raised the error.
	 * - minOccurs : 0
	 * @var string
	 */
	public $LongMessage;
	/**
	 * The ErrorCode
	 * Meta informations extracted from the WSDL
	 * - documentation : A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
	 * - minOccurs : 0
	 * @var token
	 */
	public $ErrorCode;
	/**
	 * The UserDisplayHint
	 * Meta informations extracted from the WSDL
	 * - documentation : This field is not currently in use for eBay Shopping Web Services. Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for the application, and the application should translate the error into a more appropriate message.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $UserDisplayHint;
	/**
	 * The SeverityCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the error caused the request to fail.<br> <br> If the request fails and the source of the problem is within the application (such as a missing required element), please change the application before you retry the request. If the problem is due to end-user input data, please alert the end-user to the problem and provide the means for them to correct the data. Once the problem in the application or data is resolved, you can attempt to re-send the request to eBay.<br> <br> If the source of the problem is on eBay's side, you can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.<br> <br> When a warning occurs, the error is returned in addition to the business data. In this case, you do not need to retry the request (as the original request was successful). However, depending on the cause or nature of the warning, you might need to contact either the end user or eBay to effect a long term solution to the problem to prevent it from reoccurring in the future.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSeverityCodeType
	 */
	public $SeverityCode;
	/**
	 * The ErrorParameters
	 * Meta informations extracted from the WSDL
	 * - documentation : Some warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error. You can usually predict where these will occur by looking at the "replaceable_value" indicators in our Errors by Number page.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructErrorParameterType
	 */
	public $ErrorParameters;
	/**
	 * The ErrorClassification
	 * Meta informations extracted from the WSDL
	 * - documentation : API errors are divided between two classes: system errors and request errors.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumErrorClassificationCodeType
	 */
	public $ErrorClassification;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ErrorType
	 * @see parent::__construct()
	 * @param string $_shortMessage
	 * @param string $_longMessage
	 * @param token $_errorCode
	 * @param boolean $_userDisplayHint
	 * @param EbayShoppingEnumSeverityCodeType $_severityCode
	 * @param EbayShoppingStructErrorParameterType $_errorParameters
	 * @param EbayShoppingEnumErrorClassificationCodeType $_errorClassification
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructErrorType
	 */
	public function __construct($_shortMessage = NULL,$_longMessage = NULL,$_errorCode = NULL,$_userDisplayHint = NULL,$_severityCode = NULL,$_errorParameters = NULL,$_errorClassification = NULL,$_any = NULL)
	{
		parent::__construct(array('ShortMessage'=>$_shortMessage,'LongMessage'=>$_longMessage,'ErrorCode'=>$_errorCode,'UserDisplayHint'=>$_userDisplayHint,'SeverityCode'=>$_severityCode,'ErrorParameters'=>$_errorParameters,'ErrorClassification'=>$_errorClassification,'any'=>$_any));
	}
	/**
	 * Get ShortMessage value
	 * @return string|null
	 */
	public function getShortMessage()
	{
		return $this->ShortMessage;
	}
	/**
	 * Set ShortMessage value
	 * @param string $_shortMessage the ShortMessage
	 * @return string
	 */
	public function setShortMessage($_shortMessage)
	{
		return ($this->ShortMessage = $_shortMessage);
	}
	/**
	 * Get LongMessage value
	 * @return string|null
	 */
	public function getLongMessage()
	{
		return $this->LongMessage;
	}
	/**
	 * Set LongMessage value
	 * @param string $_longMessage the LongMessage
	 * @return string
	 */
	public function setLongMessage($_longMessage)
	{
		return ($this->LongMessage = $_longMessage);
	}
	/**
	 * Get ErrorCode value
	 * @return token|null
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set ErrorCode value
	 * @param token $_errorCode the ErrorCode
	 * @return token
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->ErrorCode = $_errorCode);
	}
	/**
	 * Get UserDisplayHint value
	 * @return boolean|null
	 */
	public function getUserDisplayHint()
	{
		return $this->UserDisplayHint;
	}
	/**
	 * Set UserDisplayHint value
	 * @param boolean $_userDisplayHint the UserDisplayHint
	 * @return boolean
	 */
	public function setUserDisplayHint($_userDisplayHint)
	{
		return ($this->UserDisplayHint = $_userDisplayHint);
	}
	/**
	 * Get SeverityCode value
	 * @return EbayShoppingEnumSeverityCodeType|null
	 */
	public function getSeverityCode()
	{
		return $this->SeverityCode;
	}
	/**
	 * Set SeverityCode value
	 * @uses EbayShoppingEnumSeverityCodeType::valueIsValid()
	 * @param EbayShoppingEnumSeverityCodeType $_severityCode the SeverityCode
	 * @return EbayShoppingEnumSeverityCodeType
	 */
	public function setSeverityCode($_severityCode)
	{
		if(!EbayShoppingEnumSeverityCodeType::valueIsValid($_severityCode))
		{
			return false;
		}
		return ($this->SeverityCode = $_severityCode);
	}
	/**
	 * Get ErrorParameters value
	 * @return EbayShoppingStructErrorParameterType|null
	 */
	public function getErrorParameters()
	{
		return $this->ErrorParameters;
	}
	/**
	 * Set ErrorParameters value
	 * @param EbayShoppingStructErrorParameterType $_errorParameters the ErrorParameters
	 * @return EbayShoppingStructErrorParameterType
	 */
	public function setErrorParameters($_errorParameters)
	{
		return ($this->ErrorParameters = $_errorParameters);
	}
	/**
	 * Get ErrorClassification value
	 * @return EbayShoppingEnumErrorClassificationCodeType|null
	 */
	public function getErrorClassification()
	{
		return $this->ErrorClassification;
	}
	/**
	 * Set ErrorClassification value
	 * @uses EbayShoppingEnumErrorClassificationCodeType::valueIsValid()
	 * @param EbayShoppingEnumErrorClassificationCodeType $_errorClassification the ErrorClassification
	 * @return EbayShoppingEnumErrorClassificationCodeType
	 */
	public function setErrorClassification($_errorClassification)
	{
		if(!EbayShoppingEnumErrorClassificationCodeType::valueIsValid($_errorClassification))
		{
			return false;
		}
		return ($this->ErrorClassification = $_errorClassification);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructErrorType::setAny()
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
	 * @return EbayShoppingStructErrorType
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