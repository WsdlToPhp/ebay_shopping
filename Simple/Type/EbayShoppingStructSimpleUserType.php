<?php
/**
 * File for class EbayShoppingStructSimpleUserType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructSimpleUserType originally named SimpleUserType
 * Documentation : Type to contain the data for one eBay user. Depending on the context, the user might be the seller or the buyer in a transaction, or the bidder or winning bidder in a listing. An object of this type is returned by a number of calls, including the GetUser call.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructSimpleUserType extends EbayShoppingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - documentation : The user's unique eBay user ID. <br /> <br /> When reporting UserIDs in bidding situations (such was when listing the high bidder in an auction), eBay replaces the UserID value with an anonymous bidder name value, such as "a***o".
	 * - minOccurs : 0
	 * @var string
	 */
	public $UserID;
	/**
	 * The FeedbackPrivate
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the user has chosen to make their feedback score and feedback details private (hidden from other users). Note that the percentage of positive feedback can still be returned, even if other feedback details are private. If a bidder's user information is made anonymous, the value -99 is returned.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $FeedbackPrivate;
	/**
	 * The FeedbackRatingStar
	 * Meta informations extracted from the WSDL
	 * - documentation : Visual indicator of user's feedback score.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumFeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;
	/**
	 * The FeedbackScore
	 * Meta informations extracted from the WSDL
	 * - documentation : The aggregate feedback score of a user. A user's feedback score is the net positive feedback minus the net negative feedback left for the user. <br> <br> Feedback scores are a quantitative expression of the desirability of dealing with a user as a buyer or a seller in transactions. Each transaction can result in one feedback entry for a given user. (The buyer can leave feedback for the seller, and the seller can leave feedback for the buyer.) That one feedback can be positive, negative, or neutral. The aggregate feedback score of a user represents that user's overall feedback score (referred to as a "feedback rating" on the eBay site). If the user has chosen to make their feedback private, then FeedbackScore is not returned and FeedbackPrivate is returned with a value of true. <br> <br> If a bidder's user information is made anonymous, the value -99 is returned.
	 * - minOccurs : 0
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The UserAnonymized
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether eBay has made this user's information anonymous. This occurs when the listing prices (reserve, current, or Buy It Now) reach or exceed a certain amount (such as $200 USD at the time of this writing). <br> <br> If true, certain other fields about this user are not returned, or their values include no identifying characteristics. (The rules are explained in the description of each field.) If false, all user-specific fields contain the user's actual data.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $UserAnonymized;
	/**
	 * The NewUser
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, identifies a new user who has been a registered eBay user for 30 days or less. Always false after the user has been registered for more than 30 days. Does not indicate an ID change.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $NewUser;
	/**
	 * The RegistrationDate
	 * Meta informations extracted from the WSDL
	 * - documentation : The date the specified user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The RegistrationSite
	 * Meta informations extracted from the WSDL
	 * - documentation : The eBay site with which the user is registered. If a bidder's user information is made anonymous, the value -99 is returned.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSiteCodeType
	 */
	public $RegistrationSite;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : The registration-related status of the user.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumUserStatusCodeType
	 */
	public $Status;
	/**
	 * The SellerBusinessType
	 * Meta informations extracted from the WSDL
	 * - documentation : Type of seller account.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSellerBusinessCodeType
	 */
	public $SellerBusinessType;
	/**
	 * The StoreURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of the seller's eBay Store page.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The StoreName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the seller's eBay Store.
	 * - minOccurs : 0
	 * @var string
	 */
	public $StoreName;
	/**
	 * The SellerItemsURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for seller's other items.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $SellerItemsURL;
	/**
	 * The AboutMeURL
	 * Meta informations extracted from the WSDL
	 * - documentation : A link to the user's AboutMe page.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $AboutMeURL;
	/**
	 * The MyWorldURL
	 * Meta informations extracted from the WSDL
	 * - documentation : A link to the URL of the user's MyWorld page.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $MyWorldURL;
	/**
	 * The MyWorldSmallImage
	 * Meta informations extracted from the WSDL
	 * - documentation : Location of a user's image on the MyWorld page (small version).
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $MyWorldSmallImage;
	/**
	 * The MyWorldLargeImage
	 * Meta informations extracted from the WSDL
	 * - documentation : Location of a user's image on the MyWorld page (large version).
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $MyWorldLargeImage;
	/**
	 * The ReviewsAndGuidesURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of reviews and guides.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $ReviewsAndGuidesURL;
	/**
	 * The FeedbackDetailsURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of feedback details.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $FeedbackDetailsURL;
	/**
	 * The PositiveFeedbackPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : A seller's positive feedback score. The percentage value of a seller's positive feedback is calculated by dividing the seller's positive feedback score by their negative feedback score. The last 12 months of feedback scores are taken into consideration for this calculation.
	 * - minOccurs : 0
	 * @var float
	 */
	public $PositiveFeedbackPercent;
	/**
	 * The SellerLevel
	 * Meta informations extracted from the WSDL
	 * - documentation : The user's eBay PowerSeller tier. No longer returned for the US, DE/AT/CH, and UK/IE sites. Note that SellerLevel may be suppressed for other sites, as well.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumSellerLevelCodeType
	 */
	public $SellerLevel;
	/**
	 * The TopRatedSeller
	 * Meta informations extracted from the WSDL
	 * - documentation : Returned when seller is certified as a top-rated seller, and is qualified for benefits such as final value fee discount and increased visibility in fixed-price searches.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $TopRatedSeller;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for SimpleUserType
	 * @see parent::__construct()
	 * @param string $_userID
	 * @param boolean $_feedbackPrivate
	 * @param EbayShoppingEnumFeedbackRatingStarCodeType $_feedbackRatingStar
	 * @param int $_feedbackScore
	 * @param boolean $_userAnonymized
	 * @param boolean $_newUser
	 * @param dateTime $_registrationDate
	 * @param EbayShoppingEnumSiteCodeType $_registrationSite
	 * @param EbayShoppingEnumUserStatusCodeType $_status
	 * @param EbayShoppingEnumSellerBusinessCodeType $_sellerBusinessType
	 * @param anyURI $_storeURL
	 * @param string $_storeName
	 * @param anyURI $_sellerItemsURL
	 * @param anyURI $_aboutMeURL
	 * @param anyURI $_myWorldURL
	 * @param anyURI $_myWorldSmallImage
	 * @param anyURI $_myWorldLargeImage
	 * @param anyURI $_reviewsAndGuidesURL
	 * @param anyURI $_feedbackDetailsURL
	 * @param float $_positiveFeedbackPercent
	 * @param EbayShoppingEnumSellerLevelCodeType $_sellerLevel
	 * @param boolean $_topRatedSeller
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructSimpleUserType
	 */
	public function __construct($_userID = NULL,$_feedbackPrivate = NULL,$_feedbackRatingStar = NULL,$_feedbackScore = NULL,$_userAnonymized = NULL,$_newUser = NULL,$_registrationDate = NULL,$_registrationSite = NULL,$_status = NULL,$_sellerBusinessType = NULL,$_storeURL = NULL,$_storeName = NULL,$_sellerItemsURL = NULL,$_aboutMeURL = NULL,$_myWorldURL = NULL,$_myWorldSmallImage = NULL,$_myWorldLargeImage = NULL,$_reviewsAndGuidesURL = NULL,$_feedbackDetailsURL = NULL,$_positiveFeedbackPercent = NULL,$_sellerLevel = NULL,$_topRatedSeller = NULL,$_any = NULL)
	{
		parent::__construct(array('UserID'=>$_userID,'FeedbackPrivate'=>$_feedbackPrivate,'FeedbackRatingStar'=>$_feedbackRatingStar,'FeedbackScore'=>$_feedbackScore,'UserAnonymized'=>$_userAnonymized,'NewUser'=>$_newUser,'RegistrationDate'=>$_registrationDate,'RegistrationSite'=>$_registrationSite,'Status'=>$_status,'SellerBusinessType'=>$_sellerBusinessType,'StoreURL'=>$_storeURL,'StoreName'=>$_storeName,'SellerItemsURL'=>$_sellerItemsURL,'AboutMeURL'=>$_aboutMeURL,'MyWorldURL'=>$_myWorldURL,'MyWorldSmallImage'=>$_myWorldSmallImage,'MyWorldLargeImage'=>$_myWorldLargeImage,'ReviewsAndGuidesURL'=>$_reviewsAndGuidesURL,'FeedbackDetailsURL'=>$_feedbackDetailsURL,'PositiveFeedbackPercent'=>$_positiveFeedbackPercent,'SellerLevel'=>$_sellerLevel,'TopRatedSeller'=>$_topRatedSeller,'any'=>$_any));
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
	 * Get FeedbackPrivate value
	 * @return boolean|null
	 */
	public function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}
	/**
	 * Set FeedbackPrivate value
	 * @param boolean $_feedbackPrivate the FeedbackPrivate
	 * @return boolean
	 */
	public function setFeedbackPrivate($_feedbackPrivate)
	{
		return ($this->FeedbackPrivate = $_feedbackPrivate);
	}
	/**
	 * Get FeedbackRatingStar value
	 * @return EbayShoppingEnumFeedbackRatingStarCodeType|null
	 */
	public function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}
	/**
	 * Set FeedbackRatingStar value
	 * @uses EbayShoppingEnumFeedbackRatingStarCodeType::valueIsValid()
	 * @param EbayShoppingEnumFeedbackRatingStarCodeType $_feedbackRatingStar the FeedbackRatingStar
	 * @return EbayShoppingEnumFeedbackRatingStarCodeType
	 */
	public function setFeedbackRatingStar($_feedbackRatingStar)
	{
		if(!EbayShoppingEnumFeedbackRatingStarCodeType::valueIsValid($_feedbackRatingStar))
		{
			return false;
		}
		return ($this->FeedbackRatingStar = $_feedbackRatingStar);
	}
	/**
	 * Get FeedbackScore value
	 * @return int|null
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set FeedbackScore value
	 * @param int $_feedbackScore the FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_feedbackScore)
	{
		return ($this->FeedbackScore = $_feedbackScore);
	}
	/**
	 * Get UserAnonymized value
	 * @return boolean|null
	 */
	public function getUserAnonymized()
	{
		return $this->UserAnonymized;
	}
	/**
	 * Set UserAnonymized value
	 * @param boolean $_userAnonymized the UserAnonymized
	 * @return boolean
	 */
	public function setUserAnonymized($_userAnonymized)
	{
		return ($this->UserAnonymized = $_userAnonymized);
	}
	/**
	 * Get NewUser value
	 * @return boolean|null
	 */
	public function getNewUser()
	{
		return $this->NewUser;
	}
	/**
	 * Set NewUser value
	 * @param boolean $_newUser the NewUser
	 * @return boolean
	 */
	public function setNewUser($_newUser)
	{
		return ($this->NewUser = $_newUser);
	}
	/**
	 * Get RegistrationDate value
	 * @return dateTime|null
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * Set RegistrationDate value
	 * @param dateTime $_registrationDate the RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_registrationDate)
	{
		return ($this->RegistrationDate = $_registrationDate);
	}
	/**
	 * Get RegistrationSite value
	 * @return EbayShoppingEnumSiteCodeType|null
	 */
	public function getRegistrationSite()
	{
		return $this->RegistrationSite;
	}
	/**
	 * Set RegistrationSite value
	 * @uses EbayShoppingEnumSiteCodeType::valueIsValid()
	 * @param EbayShoppingEnumSiteCodeType $_registrationSite the RegistrationSite
	 * @return EbayShoppingEnumSiteCodeType
	 */
	public function setRegistrationSite($_registrationSite)
	{
		if(!EbayShoppingEnumSiteCodeType::valueIsValid($_registrationSite))
		{
			return false;
		}
		return ($this->RegistrationSite = $_registrationSite);
	}
	/**
	 * Get Status value
	 * @return EbayShoppingEnumUserStatusCodeType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses EbayShoppingEnumUserStatusCodeType::valueIsValid()
	 * @param EbayShoppingEnumUserStatusCodeType $_status the Status
	 * @return EbayShoppingEnumUserStatusCodeType
	 */
	public function setStatus($_status)
	{
		if(!EbayShoppingEnumUserStatusCodeType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get SellerBusinessType value
	 * @return EbayShoppingEnumSellerBusinessCodeType|null
	 */
	public function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * Set SellerBusinessType value
	 * @uses EbayShoppingEnumSellerBusinessCodeType::valueIsValid()
	 * @param EbayShoppingEnumSellerBusinessCodeType $_sellerBusinessType the SellerBusinessType
	 * @return EbayShoppingEnumSellerBusinessCodeType
	 */
	public function setSellerBusinessType($_sellerBusinessType)
	{
		if(!EbayShoppingEnumSellerBusinessCodeType::valueIsValid($_sellerBusinessType))
		{
			return false;
		}
		return ($this->SellerBusinessType = $_sellerBusinessType);
	}
	/**
	 * Get StoreURL value
	 * @return anyURI|null
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreURL value
	 * @param anyURI $_storeURL the StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_storeURL)
	{
		return ($this->StoreURL = $_storeURL);
	}
	/**
	 * Get StoreName value
	 * @return string|null
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set StoreName value
	 * @param string $_storeName the StoreName
	 * @return string
	 */
	public function setStoreName($_storeName)
	{
		return ($this->StoreName = $_storeName);
	}
	/**
	 * Get SellerItemsURL value
	 * @return anyURI|null
	 */
	public function getSellerItemsURL()
	{
		return $this->SellerItemsURL;
	}
	/**
	 * Set SellerItemsURL value
	 * @param anyURI $_sellerItemsURL the SellerItemsURL
	 * @return anyURI
	 */
	public function setSellerItemsURL($_sellerItemsURL)
	{
		return ($this->SellerItemsURL = $_sellerItemsURL);
	}
	/**
	 * Get AboutMeURL value
	 * @return anyURI|null
	 */
	public function getAboutMeURL()
	{
		return $this->AboutMeURL;
	}
	/**
	 * Set AboutMeURL value
	 * @param anyURI $_aboutMeURL the AboutMeURL
	 * @return anyURI
	 */
	public function setAboutMeURL($_aboutMeURL)
	{
		return ($this->AboutMeURL = $_aboutMeURL);
	}
	/**
	 * Get MyWorldURL value
	 * @return anyURI|null
	 */
	public function getMyWorldURL()
	{
		return $this->MyWorldURL;
	}
	/**
	 * Set MyWorldURL value
	 * @param anyURI $_myWorldURL the MyWorldURL
	 * @return anyURI
	 */
	public function setMyWorldURL($_myWorldURL)
	{
		return ($this->MyWorldURL = $_myWorldURL);
	}
	/**
	 * Get MyWorldSmallImage value
	 * @return anyURI|null
	 */
	public function getMyWorldSmallImage()
	{
		return $this->MyWorldSmallImage;
	}
	/**
	 * Set MyWorldSmallImage value
	 * @param anyURI $_myWorldSmallImage the MyWorldSmallImage
	 * @return anyURI
	 */
	public function setMyWorldSmallImage($_myWorldSmallImage)
	{
		return ($this->MyWorldSmallImage = $_myWorldSmallImage);
	}
	/**
	 * Get MyWorldLargeImage value
	 * @return anyURI|null
	 */
	public function getMyWorldLargeImage()
	{
		return $this->MyWorldLargeImage;
	}
	/**
	 * Set MyWorldLargeImage value
	 * @param anyURI $_myWorldLargeImage the MyWorldLargeImage
	 * @return anyURI
	 */
	public function setMyWorldLargeImage($_myWorldLargeImage)
	{
		return ($this->MyWorldLargeImage = $_myWorldLargeImage);
	}
	/**
	 * Get ReviewsAndGuidesURL value
	 * @return anyURI|null
	 */
	public function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
	}
	/**
	 * Set ReviewsAndGuidesURL value
	 * @param anyURI $_reviewsAndGuidesURL the ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function setReviewsAndGuidesURL($_reviewsAndGuidesURL)
	{
		return ($this->ReviewsAndGuidesURL = $_reviewsAndGuidesURL);
	}
	/**
	 * Get FeedbackDetailsURL value
	 * @return anyURI|null
	 */
	public function getFeedbackDetailsURL()
	{
		return $this->FeedbackDetailsURL;
	}
	/**
	 * Set FeedbackDetailsURL value
	 * @param anyURI $_feedbackDetailsURL the FeedbackDetailsURL
	 * @return anyURI
	 */
	public function setFeedbackDetailsURL($_feedbackDetailsURL)
	{
		return ($this->FeedbackDetailsURL = $_feedbackDetailsURL);
	}
	/**
	 * Get PositiveFeedbackPercent value
	 * @return float|null
	 */
	public function getPositiveFeedbackPercent()
	{
		return $this->PositiveFeedbackPercent;
	}
	/**
	 * Set PositiveFeedbackPercent value
	 * @param float $_positiveFeedbackPercent the PositiveFeedbackPercent
	 * @return float
	 */
	public function setPositiveFeedbackPercent($_positiveFeedbackPercent)
	{
		return ($this->PositiveFeedbackPercent = $_positiveFeedbackPercent);
	}
	/**
	 * Get SellerLevel value
	 * @return EbayShoppingEnumSellerLevelCodeType|null
	 */
	public function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * Set SellerLevel value
	 * @uses EbayShoppingEnumSellerLevelCodeType::valueIsValid()
	 * @param EbayShoppingEnumSellerLevelCodeType $_sellerLevel the SellerLevel
	 * @return EbayShoppingEnumSellerLevelCodeType
	 */
	public function setSellerLevel($_sellerLevel)
	{
		if(!EbayShoppingEnumSellerLevelCodeType::valueIsValid($_sellerLevel))
		{
			return false;
		}
		return ($this->SellerLevel = $_sellerLevel);
	}
	/**
	 * Get TopRatedSeller value
	 * @return boolean|null
	 */
	public function getTopRatedSeller()
	{
		return $this->TopRatedSeller;
	}
	/**
	 * Set TopRatedSeller value
	 * @param boolean $_topRatedSeller the TopRatedSeller
	 * @return boolean
	 */
	public function setTopRatedSeller($_topRatedSeller)
	{
		return ($this->TopRatedSeller = $_topRatedSeller);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructSimpleUserType::setAny()
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
	 * @return EbayShoppingStructSimpleUserType
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