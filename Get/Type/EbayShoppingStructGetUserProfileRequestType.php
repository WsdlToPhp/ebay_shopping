<?php
/**
 * File for class EbayShoppingStructGetUserProfileRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetUserProfileRequestType originally named GetUserProfileRequestType
 * Documentation : Retrieves user information based on the user ID you specify. The response contains detailed information about a user. You can specify the types of user information you want in the response.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetUserProfileRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the user whose data will returned by the call.
	 * - minOccurs : 0
	 * @var string
	 */
	public $UserID;
	/**
	 * The IncludeSelector
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, a default set of fields is returned. Click "Detail Controls" below and see "none" for the default fields. If you specify this field, then the set of fields returned includes the default fields. If you specify this field, the additional fields returned can affect the call's response time (performance), including in the case of feedback data.<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields (such as StoreURL) in the response (except fields that can affect the call's response time).</p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p> <p class="edef">Include a container for information about one feedback entry. </p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p> <p class="edef">Include a container for summary feedback data for a user. </p> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetUserProfile Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor method for GetUserProfileRequestType
	 * @see parent::__construct()
	 * @param string $_userID
	 * @param string $_includeSelector
	 * @return EbayShoppingStructGetUserProfileRequestType
	 */
	public function __construct($_userID = NULL,$_includeSelector = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('UserID'=>$_userID,'IncludeSelector'=>$_includeSelector));
	}
	/**
	 * Get UserID value
	 * @return string|null
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set UserID value
	 * @param string $_userID the UserID
	 * @return string
	 */
	public function setUserID($_userID)
	{
		return ($this->UserID = $_userID);
	}
	/**
	 * Get IncludeSelector value
	 * @return string|null
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * Set IncludeSelector value
	 * @param string $_includeSelector the IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_includeSelector)
	{
		return ($this->IncludeSelector = $_includeSelector);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetUserProfileRequestType
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