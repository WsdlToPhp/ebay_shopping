<?php
/**
 * File for class EbayShoppingStructBuyingGuideType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructBuyingGuideType originally named BuyingGuideType
 * Documentation : Information that identifies a buying guide. A buying guide provides content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructBuyingGuideType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : Display name of the buying guide. <br> <br> FindReviewsAndGuides only returns 20 characters, followed by "..." if the name is longer than 20 characters. For the full title, see BuyingGuide.Title instead.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The URL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL for the buying guide. Your application can present this as a link. Use the value of Name or Title as the link's display name.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The CategoryID
	 * Meta informations extracted from the WSDL
	 * - documentation : Identifies the category (if any) that is associated with the buying guide. For FindReviewsAndGuides, this can be a category that is higher or lower in the hierarchy than the category specified in the request. For a matching categories search, you can use this information to determine the order that the buying guides are returned in when multiple guides are found. Optionally, you can use this information to determine where to present the buying guide link in your application.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Title
	 * Meta informations extracted from the WSDL
	 * - documentation : The title of the buying guide.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The Text
	 * Meta informations extracted from the WSDL
	 * - documentation : The text of the guide. If the guide is longer than 2000 characters, the text is cut off and it ends with "...". See BuyingGuide.URL for a link to the full text of the review.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Text;
	/**
	 * The CreationTime
	 * Meta informations extracted from the WSDL
	 * - documentation : The time and date when the guide was posted.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $CreationTime;
	/**
	 * The UserID
	 * Meta informations extracted from the WSDL
	 * - documentation : The author's eBay user ID.
	 * - minOccurs : 0
	 * @var string
	 */
	public $UserID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for BuyingGuideType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param anyURI $_uRL
	 * @param string $_categoryID
	 * @param string $_title
	 * @param string $_text
	 * @param dateTime $_creationTime
	 * @param string $_userID
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructBuyingGuideType
	 */
	public function __construct($_name = NULL,$_uRL = NULL,$_categoryID = NULL,$_title = NULL,$_text = NULL,$_creationTime = NULL,$_userID = NULL,$_any = NULL)
	{
		parent::__construct(array('Name'=>$_name,'URL'=>$_uRL,'CategoryID'=>$_categoryID,'Title'=>$_title,'Text'=>$_text,'CreationTime'=>$_creationTime,'UserID'=>$_userID,'any'=>$_any));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
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
	 * Get CategoryID value
	 * @return string|null
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryID value
	 * @param string $_categoryID the CategoryID
	 * @return string
	 */
	public function setCategoryID($_categoryID)
	{
		return ($this->CategoryID = $_categoryID);
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
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructBuyingGuideType::setAny()
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
	 * @return EbayShoppingStructBuyingGuideType
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