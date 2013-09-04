<?php
/**
 * File for class EbayShoppingStructFeedbackDetailType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFeedbackDetailType originally named FeedbackDetailType
 * Documentation : Detailed feedback information for a user. Conveys the score for the feedback, the textual comment, and other information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFeedbackDetailType extends EbayShoppingWsdlClass
{
	/**
	 * The CommentingUser
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay user ID for the user who left the feedback.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CommentingUser;
	/**
	 * The CommentingUserScore
	 * Meta informations extracted from the WSDL
	 * - documentation : Feedback score of the user in CommentingUser.
	 * - minOccurs : 0
	 * @var int
	 */
	public $CommentingUserScore;
	/**
	 * The CommentText
	 * Meta informations extracted from the WSDL
	 * - documentation : Text message left by the user in CommentingUser. Used to provide a more in-depth description of the user's opinion of the transaction. Returned as text in the language that the comment was originally left in.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CommentText;
	/**
	 * The CommentTime
	 * Meta informations extracted from the WSDL
	 * - documentation : Date and time (in GMT) that the feedback was submitted to eBay.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CommentTime;
	/**
	 * The CommentType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of feedback. Can be Positive, Neutral, Negative, or Withdrawn (see the CommentTypeCodeType code list). Positive feedbacks add to the user's total feedback score, negative feedbacks lower the score, and neutral feedbacks do not affect the score (but do affect the overall picture of the user's online reputation).
	 * - minOccurs : 0
	 * @var EbayShoppingEnumCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The FeedbackResponse
	 * Meta informations extracted from the WSDL
	 * - documentation : Textual comment that the user targeted by feedback may leave in response or rebuttal to the feedback.
	 * - minOccurs : 0
	 * @var string
	 */
	public $FeedbackResponse;
	/**
	 * The FollowUp
	 * Meta informations extracted from the WSDL
	 * - documentation : Explanation a user can give to a response.
	 * - minOccurs : 0
	 * @var string
	 */
	public $FollowUp;
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The ID that uniquely identifies the item listing.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * The Role
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the user who was the feedback recipient was a Buyer or the Seller for that transaction.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumTradingRoleCodeType
	 */
	public $Role;
	/**
	 * The ItemTitle
	 * Meta informations extracted from the WSDL
	 * - documentation : Name of the listing for which feedback was provided. Returned as CDATA. Not returned if a listing ended more than 90 days ago.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The ItemPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : The final price for the item, associated with the currency identified by the currencyId attribute of the AmountType. Not returned if a listing ended more than 90 days ago.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ItemPrice;
	/**
	 * The FeedbackID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier for the feedback entry.
	 * - minOccurs : 0
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * The TransactionID
	 * Meta informations extracted from the WSDL
	 * - documentation : Unique identifier for the transaction about which this feedback entry was left. This field is not returned in the case of TransactionIDs from Chinese auction listings, because a value of zero is used for TransactionIDs in such cases.
	 * - minOccurs : 0
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The CommentReplaced
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether eBay replaced the comment with a message that the comment was removed.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $CommentReplaced;
	/**
	 * The ResponseReplaced
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether eBay replaced the response with a message that the response was removed.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ResponseReplaced;
	/**
	 * The FollowUpReplaced
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether eBay replaced the follow-up with a message that the follow-up was removed.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $FollowUpReplaced;
	/**
	 * The Countable
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies if a user's feedback score is or is not countable. This field is returned only when a user's feedback score is not countable (value is false).
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $Countable;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for FeedbackDetailType
	 * @see parent::__construct()
	 * @param string $_commentingUser
	 * @param int $_commentingUserScore
	 * @param string $_commentText
	 * @param dateTime $_commentTime
	 * @param EbayShoppingEnumCommentTypeCodeType $_commentType
	 * @param string $_feedbackResponse
	 * @param string $_followUp
	 * @param string $_itemID
	 * @param EbayShoppingEnumTradingRoleCodeType $_role
	 * @param string $_itemTitle
	 * @param EbayShoppingStructAmountType $_itemPrice
	 * @param string $_feedbackID
	 * @param string $_transactionID
	 * @param boolean $_commentReplaced
	 * @param boolean $_responseReplaced
	 * @param boolean $_followUpReplaced
	 * @param boolean $_countable
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructFeedbackDetailType
	 */
	public function __construct($_commentingUser = NULL,$_commentingUserScore = NULL,$_commentText = NULL,$_commentTime = NULL,$_commentType = NULL,$_feedbackResponse = NULL,$_followUp = NULL,$_itemID = NULL,$_role = NULL,$_itemTitle = NULL,$_itemPrice = NULL,$_feedbackID = NULL,$_transactionID = NULL,$_commentReplaced = NULL,$_responseReplaced = NULL,$_followUpReplaced = NULL,$_countable = NULL,$_any = NULL)
	{
		parent::__construct(array('CommentingUser'=>$_commentingUser,'CommentingUserScore'=>$_commentingUserScore,'CommentText'=>$_commentText,'CommentTime'=>$_commentTime,'CommentType'=>$_commentType,'FeedbackResponse'=>$_feedbackResponse,'FollowUp'=>$_followUp,'ItemID'=>$_itemID,'Role'=>$_role,'ItemTitle'=>$_itemTitle,'ItemPrice'=>$_itemPrice,'FeedbackID'=>$_feedbackID,'TransactionID'=>$_transactionID,'CommentReplaced'=>$_commentReplaced,'ResponseReplaced'=>$_responseReplaced,'FollowUpReplaced'=>$_followUpReplaced,'Countable'=>$_countable,'any'=>$_any));
	}
	/**
	 * Get CommentingUser value
	 * @return string|null
	 */
	public function getCommentingUser()
	{
		return $this->CommentingUser;
	}
	/**
	 * Set CommentingUser value
	 * @param string $_commentingUser the CommentingUser
	 * @return string
	 */
	public function setCommentingUser($_commentingUser)
	{
		return ($this->CommentingUser = $_commentingUser);
	}
	/**
	 * Get CommentingUserScore value
	 * @return int|null
	 */
	public function getCommentingUserScore()
	{
		return $this->CommentingUserScore;
	}
	/**
	 * Set CommentingUserScore value
	 * @param int $_commentingUserScore the CommentingUserScore
	 * @return int
	 */
	public function setCommentingUserScore($_commentingUserScore)
	{
		return ($this->CommentingUserScore = $_commentingUserScore);
	}
	/**
	 * Get CommentText value
	 * @return string|null
	 */
	public function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * Set CommentText value
	 * @param string $_commentText the CommentText
	 * @return string
	 */
	public function setCommentText($_commentText)
	{
		return ($this->CommentText = $_commentText);
	}
	/**
	 * Get CommentTime value
	 * @return dateTime|null
	 */
	public function getCommentTime()
	{
		return $this->CommentTime;
	}
	/**
	 * Set CommentTime value
	 * @param dateTime $_commentTime the CommentTime
	 * @return dateTime
	 */
	public function setCommentTime($_commentTime)
	{
		return ($this->CommentTime = $_commentTime);
	}
	/**
	 * Get CommentType value
	 * @return EbayShoppingEnumCommentTypeCodeType|null
	 */
	public function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * Set CommentType value
	 * @uses EbayShoppingEnumCommentTypeCodeType::valueIsValid()
	 * @param EbayShoppingEnumCommentTypeCodeType $_commentType the CommentType
	 * @return EbayShoppingEnumCommentTypeCodeType
	 */
	public function setCommentType($_commentType)
	{
		if(!EbayShoppingEnumCommentTypeCodeType::valueIsValid($_commentType))
		{
			return false;
		}
		return ($this->CommentType = $_commentType);
	}
	/**
	 * Get FeedbackResponse value
	 * @return string|null
	 */
	public function getFeedbackResponse()
	{
		return $this->FeedbackResponse;
	}
	/**
	 * Set FeedbackResponse value
	 * @param string $_feedbackResponse the FeedbackResponse
	 * @return string
	 */
	public function setFeedbackResponse($_feedbackResponse)
	{
		return ($this->FeedbackResponse = $_feedbackResponse);
	}
	/**
	 * Get FollowUp value
	 * @return string|null
	 */
	public function getFollowUp()
	{
		return $this->FollowUp;
	}
	/**
	 * Set FollowUp value
	 * @param string $_followUp the FollowUp
	 * @return string
	 */
	public function setFollowUp($_followUp)
	{
		return ($this->FollowUp = $_followUp);
	}
	/**
	 * Get ItemID value
	 * @return string|null
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemID value
	 * @param string $_itemID the ItemID
	 * @return string
	 */
	public function setItemID($_itemID)
	{
		return ($this->ItemID = $_itemID);
	}
	/**
	 * Get Role value
	 * @return EbayShoppingEnumTradingRoleCodeType|null
	 */
	public function getRole()
	{
		return $this->Role;
	}
	/**
	 * Set Role value
	 * @uses EbayShoppingEnumTradingRoleCodeType::valueIsValid()
	 * @param EbayShoppingEnumTradingRoleCodeType $_role the Role
	 * @return EbayShoppingEnumTradingRoleCodeType
	 */
	public function setRole($_role)
	{
		if(!EbayShoppingEnumTradingRoleCodeType::valueIsValid($_role))
		{
			return false;
		}
		return ($this->Role = $_role);
	}
	/**
	 * Get ItemTitle value
	 * @return string|null
	 */
	public function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * Set ItemTitle value
	 * @param string $_itemTitle the ItemTitle
	 * @return string
	 */
	public function setItemTitle($_itemTitle)
	{
		return ($this->ItemTitle = $_itemTitle);
	}
	/**
	 * Get ItemPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set ItemPrice value
	 * @param EbayShoppingStructAmountType $_itemPrice the ItemPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setItemPrice($_itemPrice)
	{
		return ($this->ItemPrice = $_itemPrice);
	}
	/**
	 * Get FeedbackID value
	 * @return string|null
	 */
	public function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * Set FeedbackID value
	 * @param string $_feedbackID the FeedbackID
	 * @return string
	 */
	public function setFeedbackID($_feedbackID)
	{
		return ($this->FeedbackID = $_feedbackID);
	}
	/**
	 * Get TransactionID value
	 * @return string|null
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionID value
	 * @param string $_transactionID the TransactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->TransactionID = $_transactionID);
	}
	/**
	 * Get CommentReplaced value
	 * @return boolean|null
	 */
	public function getCommentReplaced()
	{
		return $this->CommentReplaced;
	}
	/**
	 * Set CommentReplaced value
	 * @param boolean $_commentReplaced the CommentReplaced
	 * @return boolean
	 */
	public function setCommentReplaced($_commentReplaced)
	{
		return ($this->CommentReplaced = $_commentReplaced);
	}
	/**
	 * Get ResponseReplaced value
	 * @return boolean|null
	 */
	public function getResponseReplaced()
	{
		return $this->ResponseReplaced;
	}
	/**
	 * Set ResponseReplaced value
	 * @param boolean $_responseReplaced the ResponseReplaced
	 * @return boolean
	 */
	public function setResponseReplaced($_responseReplaced)
	{
		return ($this->ResponseReplaced = $_responseReplaced);
	}
	/**
	 * Get FollowUpReplaced value
	 * @return boolean|null
	 */
	public function getFollowUpReplaced()
	{
		return $this->FollowUpReplaced;
	}
	/**
	 * Set FollowUpReplaced value
	 * @param boolean $_followUpReplaced the FollowUpReplaced
	 * @return boolean
	 */
	public function setFollowUpReplaced($_followUpReplaced)
	{
		return ($this->FollowUpReplaced = $_followUpReplaced);
	}
	/**
	 * Get Countable value
	 * @return boolean|null
	 */
	public function getCountable()
	{
		return $this->Countable;
	}
	/**
	 * Set Countable value
	 * @param boolean $_countable the Countable
	 * @return boolean
	 */
	public function setCountable($_countable)
	{
		return ($this->Countable = $_countable);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructFeedbackDetailType::setAny()
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
	 * @return EbayShoppingStructFeedbackDetailType
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