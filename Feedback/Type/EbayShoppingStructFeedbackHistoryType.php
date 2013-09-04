<?php
/**
 * File for class EbayShoppingStructFeedbackHistoryType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFeedbackHistoryType originally named FeedbackHistoryType
 * Documentation : Specifies all feedback summary information (except Score). Contains objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also conveys counts of bid retractions for the predefined time periods.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFeedbackHistoryType extends EbayShoppingWsdlClass
{
	/**
	 * The BidRetractionFeedbackPeriods
	 * Meta informations extracted from the WSDL
	 * - documentation : Bid retractions count, for multiple predefined time periods preceding the call.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackPeriodType
	 */
	public $BidRetractionFeedbackPeriods;
	/**
	 * The NegativeFeedbackPeriods
	 * Meta informations extracted from the WSDL
	 * - documentation : Negative feedback entries count, for multiple predefined time periods preceding the call.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackPeriodType
	 */
	public $NegativeFeedbackPeriods;
	/**
	 * The NeutralFeedbackPeriods
	 * Meta informations extracted from the WSDL
	 * - documentation : Neutral feedback entries count, for multiple predefined time periods preceding the call.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackPeriodType
	 */
	public $NeutralFeedbackPeriods;
	/**
	 * The PositiveFeedbackPeriods
	 * Meta informations extracted from the WSDL
	 * - documentation : Positive feedback entries count, for multiple predefined time periods preceding the call.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackPeriodType
	 */
	public $PositiveFeedbackPeriods;
	/**
	 * The TotalFeedbackPeriods
	 * Meta informations extracted from the WSDL
	 * - documentation : Total feedback score, for multiple predefined time periods preceding the call.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructFeedbackPeriodType
	 */
	public $TotalFeedbackPeriods;
	/**
	 * The UniqueNegativeFeedbackCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total number of negative Feedback comments received by the user, including weekly repeats.
	 * - minOccurs : 0
	 * @var long
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * The UniquePositiveFeedbackCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total number of positive Feedback comments received by the user, including weekly repeats.
	 * - minOccurs : 0
	 * @var long
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * The AverageRatingDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructAverageRatingDetailsType
	 */
	public $AverageRatingDetails;
	/**
	 * The NeutralCommentCountFromSuspendedUsers
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of neutral comments received from suspended users.
	 * - minOccurs : 0
	 * @var long
	 */
	public $NeutralCommentCountFromSuspendedUsers;
	/**
	 * The UniqueNeutralFeedbackCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Total number of neutral Feedback comments received by the user, including weekly repeats.
	 * - minOccurs : 0
	 * @var long
	 */
	public $UniqueNeutralFeedbackCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for FeedbackHistoryType
	 * @see parent::__construct()
	 * @param EbayShoppingStructFeedbackPeriodType $_bidRetractionFeedbackPeriods
	 * @param EbayShoppingStructFeedbackPeriodType $_negativeFeedbackPeriods
	 * @param EbayShoppingStructFeedbackPeriodType $_neutralFeedbackPeriods
	 * @param EbayShoppingStructFeedbackPeriodType $_positiveFeedbackPeriods
	 * @param EbayShoppingStructFeedbackPeriodType $_totalFeedbackPeriods
	 * @param long $_uniqueNegativeFeedbackCount
	 * @param long $_uniquePositiveFeedbackCount
	 * @param EbayShoppingStructAverageRatingDetailsType $_averageRatingDetails
	 * @param long $_neutralCommentCountFromSuspendedUsers
	 * @param long $_uniqueNeutralFeedbackCount
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructFeedbackHistoryType
	 */
	public function __construct($_bidRetractionFeedbackPeriods = NULL,$_negativeFeedbackPeriods = NULL,$_neutralFeedbackPeriods = NULL,$_positiveFeedbackPeriods = NULL,$_totalFeedbackPeriods = NULL,$_uniqueNegativeFeedbackCount = NULL,$_uniquePositiveFeedbackCount = NULL,$_averageRatingDetails = NULL,$_neutralCommentCountFromSuspendedUsers = NULL,$_uniqueNeutralFeedbackCount = NULL,$_any = NULL)
	{
		parent::__construct(array('BidRetractionFeedbackPeriods'=>$_bidRetractionFeedbackPeriods,'NegativeFeedbackPeriods'=>$_negativeFeedbackPeriods,'NeutralFeedbackPeriods'=>$_neutralFeedbackPeriods,'PositiveFeedbackPeriods'=>$_positiveFeedbackPeriods,'TotalFeedbackPeriods'=>$_totalFeedbackPeriods,'UniqueNegativeFeedbackCount'=>$_uniqueNegativeFeedbackCount,'UniquePositiveFeedbackCount'=>$_uniquePositiveFeedbackCount,'AverageRatingDetails'=>$_averageRatingDetails,'NeutralCommentCountFromSuspendedUsers'=>$_neutralCommentCountFromSuspendedUsers,'UniqueNeutralFeedbackCount'=>$_uniqueNeutralFeedbackCount,'any'=>$_any));
	}
	/**
	 * Get BidRetractionFeedbackPeriods value
	 * @return EbayShoppingStructFeedbackPeriodType|null
	 */
	public function getBidRetractionFeedbackPeriods()
	{
		return $this->BidRetractionFeedbackPeriods;
	}
	/**
	 * Set BidRetractionFeedbackPeriods value
	 * @param EbayShoppingStructFeedbackPeriodType $_bidRetractionFeedbackPeriods the BidRetractionFeedbackPeriods
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function setBidRetractionFeedbackPeriods($_bidRetractionFeedbackPeriods)
	{
		return ($this->BidRetractionFeedbackPeriods = $_bidRetractionFeedbackPeriods);
	}
	/**
	 * Get NegativeFeedbackPeriods value
	 * @return EbayShoppingStructFeedbackPeriodType|null
	 */
	public function getNegativeFeedbackPeriods()
	{
		return $this->NegativeFeedbackPeriods;
	}
	/**
	 * Set NegativeFeedbackPeriods value
	 * @param EbayShoppingStructFeedbackPeriodType $_negativeFeedbackPeriods the NegativeFeedbackPeriods
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function setNegativeFeedbackPeriods($_negativeFeedbackPeriods)
	{
		return ($this->NegativeFeedbackPeriods = $_negativeFeedbackPeriods);
	}
	/**
	 * Get NeutralFeedbackPeriods value
	 * @return EbayShoppingStructFeedbackPeriodType|null
	 */
	public function getNeutralFeedbackPeriods()
	{
		return $this->NeutralFeedbackPeriods;
	}
	/**
	 * Set NeutralFeedbackPeriods value
	 * @param EbayShoppingStructFeedbackPeriodType $_neutralFeedbackPeriods the NeutralFeedbackPeriods
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function setNeutralFeedbackPeriods($_neutralFeedbackPeriods)
	{
		return ($this->NeutralFeedbackPeriods = $_neutralFeedbackPeriods);
	}
	/**
	 * Get PositiveFeedbackPeriods value
	 * @return EbayShoppingStructFeedbackPeriodType|null
	 */
	public function getPositiveFeedbackPeriods()
	{
		return $this->PositiveFeedbackPeriods;
	}
	/**
	 * Set PositiveFeedbackPeriods value
	 * @param EbayShoppingStructFeedbackPeriodType $_positiveFeedbackPeriods the PositiveFeedbackPeriods
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function setPositiveFeedbackPeriods($_positiveFeedbackPeriods)
	{
		return ($this->PositiveFeedbackPeriods = $_positiveFeedbackPeriods);
	}
	/**
	 * Get TotalFeedbackPeriods value
	 * @return EbayShoppingStructFeedbackPeriodType|null
	 */
	public function getTotalFeedbackPeriods()
	{
		return $this->TotalFeedbackPeriods;
	}
	/**
	 * Set TotalFeedbackPeriods value
	 * @param EbayShoppingStructFeedbackPeriodType $_totalFeedbackPeriods the TotalFeedbackPeriods
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function setTotalFeedbackPeriods($_totalFeedbackPeriods)
	{
		return ($this->TotalFeedbackPeriods = $_totalFeedbackPeriods);
	}
	/**
	 * Get UniqueNegativeFeedbackCount value
	 * @return long|null
	 */
	public function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * Set UniqueNegativeFeedbackCount value
	 * @param long $_uniqueNegativeFeedbackCount the UniqueNegativeFeedbackCount
	 * @return long
	 */
	public function setUniqueNegativeFeedbackCount($_uniqueNegativeFeedbackCount)
	{
		return ($this->UniqueNegativeFeedbackCount = $_uniqueNegativeFeedbackCount);
	}
	/**
	 * Get UniquePositiveFeedbackCount value
	 * @return long|null
	 */
	public function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * Set UniquePositiveFeedbackCount value
	 * @param long $_uniquePositiveFeedbackCount the UniquePositiveFeedbackCount
	 * @return long
	 */
	public function setUniquePositiveFeedbackCount($_uniquePositiveFeedbackCount)
	{
		return ($this->UniquePositiveFeedbackCount = $_uniquePositiveFeedbackCount);
	}
	/**
	 * Get AverageRatingDetails value
	 * @return EbayShoppingStructAverageRatingDetailsType|null
	 */
	public function getAverageRatingDetails()
	{
		return $this->AverageRatingDetails;
	}
	/**
	 * Set AverageRatingDetails value
	 * @param EbayShoppingStructAverageRatingDetailsType $_averageRatingDetails the AverageRatingDetails
	 * @return EbayShoppingStructAverageRatingDetailsType
	 */
	public function setAverageRatingDetails($_averageRatingDetails)
	{
		return ($this->AverageRatingDetails = $_averageRatingDetails);
	}
	/**
	 * Get NeutralCommentCountFromSuspendedUsers value
	 * @return long|null
	 */
	public function getNeutralCommentCountFromSuspendedUsers()
	{
		return $this->NeutralCommentCountFromSuspendedUsers;
	}
	/**
	 * Set NeutralCommentCountFromSuspendedUsers value
	 * @param long $_neutralCommentCountFromSuspendedUsers the NeutralCommentCountFromSuspendedUsers
	 * @return long
	 */
	public function setNeutralCommentCountFromSuspendedUsers($_neutralCommentCountFromSuspendedUsers)
	{
		return ($this->NeutralCommentCountFromSuspendedUsers = $_neutralCommentCountFromSuspendedUsers);
	}
	/**
	 * Get UniqueNeutralFeedbackCount value
	 * @return long|null
	 */
	public function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}
	/**
	 * Set UniqueNeutralFeedbackCount value
	 * @param long $_uniqueNeutralFeedbackCount the UniqueNeutralFeedbackCount
	 * @return long
	 */
	public function setUniqueNeutralFeedbackCount($_uniqueNeutralFeedbackCount)
	{
		return ($this->UniqueNeutralFeedbackCount = $_uniqueNeutralFeedbackCount);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructFeedbackHistoryType::setAny()
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
	 * @return EbayShoppingStructFeedbackHistoryType
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