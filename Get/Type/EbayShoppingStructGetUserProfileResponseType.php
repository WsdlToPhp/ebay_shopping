<?php
/**
 * File for class EbayShoppingStructGetUserProfileResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetUserProfileResponseType originally named GetUserProfileResponseType
 * Documentation : Response to GetUserProfile request.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetUserProfileResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The User
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the returned user data for the specified eBay user.
	 * - minOccurs : 0
	 * @var EbayShoppingStructSimpleUserType
	 */
	public $User;
	/**
	 * The FeedbackHistory
	 * Meta informations extracted from the WSDL
	 * - documentation : Summary feedback data for a user. Contains counts of positive, neutral, and negative feedback for predefined time periods.
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackHistoryType
	 */
	public $FeedbackHistory;
	/**
	 * The FeedbackDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : The FeedbackDetails container has fields (ItemID, etc.) with information about one feedback entry. When you call GetUserProfile, the 5 (maximum) most recent feedback records are returned in FeedbackDetails containers.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackDetailType
	 */
	public $FeedbackDetails;
	/**
	 * Constructor method for GetUserProfileResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructSimpleUserType $_user
	 * @param EbayShoppingStructFeedbackHistoryType $_feedbackHistory
	 * @param EbayShoppingStructFeedbackDetailType $_feedbackDetails
	 * @return EbayShoppingStructGetUserProfileResponseType
	 */
	public function __construct($_user = NULL,$_feedbackHistory = NULL,$_feedbackDetails = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('User'=>$_user,'FeedbackHistory'=>$_feedbackHistory,'FeedbackDetails'=>$_feedbackDetails));
	}
	/**
	 * Get User value
	 * @return EbayShoppingStructSimpleUserType|null
	 */
	public function getUser()
	{
		return $this->User;
	}
	/**
	 * Set User value
	 * @param EbayShoppingStructSimpleUserType $_user the User
	 * @return EbayShoppingStructSimpleUserType
	 */
	public function setUser($_user)
	{
		return ($this->User = $_user);
	}
	/**
	 * Get FeedbackHistory value
	 * @return EbayShoppingStructFeedbackHistoryType|null
	 */
	public function getFeedbackHistory()
	{
		return $this->FeedbackHistory;
	}
	/**
	 * Set FeedbackHistory value
	 * @param EbayShoppingStructFeedbackHistoryType $_feedbackHistory the FeedbackHistory
	 * @return EbayShoppingStructFeedbackHistoryType
	 */
	public function setFeedbackHistory($_feedbackHistory)
	{
		return ($this->FeedbackHistory = $_feedbackHistory);
	}
	/**
	 * Get FeedbackDetails value
	 * @return EbayShoppingStructFeedbackDetailType|null
	 */
	public function getFeedbackDetails()
	{
		return $this->FeedbackDetails;
	}
	/**
	 * Set FeedbackDetails value
	 * @param EbayShoppingStructFeedbackDetailType $_feedbackDetails the FeedbackDetails
	 * @return EbayShoppingStructFeedbackDetailType
	 */
	public function setFeedbackDetails($_feedbackDetails)
	{
		return ($this->FeedbackDetails = $_feedbackDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetUserProfileResponseType
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