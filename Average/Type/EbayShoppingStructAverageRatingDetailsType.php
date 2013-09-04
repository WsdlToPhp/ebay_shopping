<?php
/**
 * File for class EbayShoppingStructAverageRatingDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructAverageRatingDetailsType originally named AverageRatingDetailsType
 * Documentation : Applicable to sites that support the Detailed Seller Ratings feature. The AverageRatingDetailsType contains the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructAverageRatingDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The RatingDetail
	 * Meta informations extracted from the WSDL
	 * - documentation : The area of a specific average detailed seller rating. Users retrieve detailed ratings as averages of the ratings left by buyers. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumFeedbackRatingDetailCodeType
	 */
	public $RatingDetail;
	/**
	 * The Rating
	 * Meta informations extracted from the WSDL
	 * - documentation : An average detailed seller rating applying to the area in the corresponding RatingDetail field.
	 * - minOccurs : 0
	 * @var double
	 */
	public $Rating;
	/**
	 * The RatingCount
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of detailed seller ratings in the area in the corresponding RatingDetail field.
	 * - minOccurs : 0
	 * @var long
	 */
	public $RatingCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AverageRatingDetailsType
	 * @see parent::__construct()
	 * @param EbayShoppingEnumFeedbackRatingDetailCodeType $_ratingDetail
	 * @param double $_rating
	 * @param long $_ratingCount
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructAverageRatingDetailsType
	 */
	public function __construct($_ratingDetail = NULL,$_rating = NULL,$_ratingCount = NULL,$_any = NULL)
	{
		parent::__construct(array('RatingDetail'=>$_ratingDetail,'Rating'=>$_rating,'RatingCount'=>$_ratingCount,'any'=>$_any));
	}
	/**
	 * Get RatingDetail value
	 * @return EbayShoppingEnumFeedbackRatingDetailCodeType|null
	 */
	public function getRatingDetail()
	{
		return $this->RatingDetail;
	}
	/**
	 * Set RatingDetail value
	 * @uses EbayShoppingEnumFeedbackRatingDetailCodeType::valueIsValid()
	 * @param EbayShoppingEnumFeedbackRatingDetailCodeType $_ratingDetail the RatingDetail
	 * @return EbayShoppingEnumFeedbackRatingDetailCodeType
	 */
	public function setRatingDetail($_ratingDetail)
	{
		if(!EbayShoppingEnumFeedbackRatingDetailCodeType::valueIsValid($_ratingDetail))
		{
			return false;
		}
		return ($this->RatingDetail = $_ratingDetail);
	}
	/**
	 * Get Rating value
	 * @return double|null
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Rating value
	 * @param double $_rating the Rating
	 * @return double
	 */
	public function setRating($_rating)
	{
		return ($this->Rating = $_rating);
	}
	/**
	 * Get RatingCount value
	 * @return long|null
	 */
	public function getRatingCount()
	{
		return $this->RatingCount;
	}
	/**
	 * Set RatingCount value
	 * @param long $_ratingCount the RatingCount
	 * @return long
	 */
	public function setRatingCount($_ratingCount)
	{
		return ($this->RatingCount = $_ratingCount);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructAverageRatingDetailsType::setAny()
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
	 * @return EbayShoppingStructAverageRatingDetailsType
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