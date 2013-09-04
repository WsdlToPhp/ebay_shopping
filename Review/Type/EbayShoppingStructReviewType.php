<?php
/**
 * File for class EbayShoppingStructReviewType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructReviewType originally named ReviewType
 * Documentation : A product review written by an eBay member.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructReviewType extends EbayShoppingWsdlClass
{
	/**
	 * The URL
	 * Meta informations extracted from the WSDL
	 * - documentation : A link to the full review on the eBay Web site. This URL optimized for natural search: "_W0QQ" is like "?" (question mark), "QQ" is like "&" (ampersand), and "Z" is like "=" (equals sign).<br> <br> <span class="tablenote"><b>Note:</b> For a link to all reviews for the product, remove the upvr parameter from this URL. See the eBay Web Services guide for an example. </span>
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : The title of the review.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The Rating
	 * Meta informations extracted from the WSDL
	 * - documentation : The eBay member's rating of the product.
	 * - minOccurs : 0
	 * @var int
	 */
	public $Rating;
	/**
	 * The Text
	 * Meta informations extracted from the WSDL
	 * - documentation : The text of the review. If the review is longer than 2000 characters, the text is cut off and it ends with "...". See Review.URL for a link to the full text of the review.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Text;
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - documentation : The reviewer's eBay user ID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $UserID;
	/**
	 * The CreationTime
	 * Meta informations extracted from the WSDL
	 * - documentation : The time and date when the reviewer posted the review.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CreationTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ReviewType
	 * @see parent::__construct()
	 * @param anyURI $_uRL
	 * @param string $_title
	 * @param int $_rating
	 * @param string $_text
	 * @param string $_userID
	 * @param dateTime $_creationTime
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructReviewType
	 */
	public function __construct($_uRL = NULL,$_title = NULL,$_rating = NULL,$_text = NULL,$_userID = NULL,$_creationTime = NULL,$_any = NULL)
	{
		parent::__construct(array('URL'=>$_uRL,'Title'=>$_title,'Rating'=>$_rating,'Text'=>$_text,'UserID'=>$_userID,'CreationTime'=>$_creationTime,'any'=>$_any));
	}
	/**
	 * Get URL value
	 * @return anyURI|null
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set URL value
	 * @param anyURI $_uRL the URL
	 * @return anyURI
	 */
	public function setURL($_uRL)
	{
		return ($this->URL = $_uRL);
	}
	/**
	 * Get Title value
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Title value
	 * @param string $_title the Title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->Title = $_title);
	}
	/**
	 * Get Rating value
	 * @return int|null
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Rating value
	 * @param int $_rating the Rating
	 * @return int
	 */
	public function setRating($_rating)
	{
		return ($this->Rating = $_rating);
	}
	/**
	 * Get Text value
	 * @return string|null
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set Text value
	 * @param string $_text the Text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->Text = $_text);
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
	 * Get CreationTime value
	 * @return dateTime|null
	 */
	public function getCreationTime()
	{
		return $this->CreationTime;
	}
	/**
	 * Set CreationTime value
	 * @param dateTime $_creationTime the CreationTime
	 * @return dateTime
	 */
	public function setCreationTime($_creationTime)
	{
		return ($this->CreationTime = $_creationTime);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructReviewType::setAny()
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
	 * @return EbayShoppingStructReviewType
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