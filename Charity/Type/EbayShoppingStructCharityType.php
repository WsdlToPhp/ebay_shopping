<?php
/**
 * File for class EbayShoppingStructCharityType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructCharityType originally named CharityType
 * Documentation : Identifies a Giving Works listing and benefiting nonprofit charity organization. Currently supported through the US and eBay Motors sites only. The Ad Format and Mature Audiences categories are not supported. Not applicable for US eBay Motors, international, Real Estate, and Tickets.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructCharityType extends EbayShoppingWsdlClass
{
	/**
	 * The CharityID
	 * Meta informations extracted from the WSDL
	 * - documentation : A unique identification number assigned by eBay to registered nonprofit charity organizations.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CharityID;
	/**
	 * The CharityName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the benefiting nonprofit charity organization selected by the charity seller.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CharityName;
	/**
	 * The CharityNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : A unique identification number assigned to a nonprofit charity organization by the dedicated provider of eBay Giving Works. Being superseded by CharityID. Max 10 digits.
	 * - minOccurs : 0
	 * @var int
	 */
	public $CharityNumber;
	/**
	 * The DonationPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is displayed in the Giving Works item listing. Possible values: 10.0 to 100.0. Percentages must increment by 5.0. Minimum donation percentages may be required for Giving Works listings, see http://pages.ebay.com/help/sell/selling-nonprofit.html for details. DonationPercent is required input when listing Giving Works items.
	 * - minOccurs : 0
	 * @var float
	 */
	public $DonationPercent;
	/**
	 * The Mission
	 * Meta informations extracted from the WSDL
	 * - documentation : The stated mission of the nonprofit charity organization. This mission is displayed in the Giving Works item listing.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Mission;
	/**
	 * The LogoURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of the nonprofit charity organization. This URL is displayed in the Giving Works item listing.
	 * - minOccurs : 0
	 * @var string
	 */
	public $LogoURL;
	/**
	 * The CharityListing
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, indicates that the seller has chosen to use eBay Giving Works to donate a percentage of the item's purchase price to a selected nonprofit organization.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $CharityListing;
	/**
	 * The Status
	 * Meta informations extracted from the WSDL
	 * - documentation : The status of the nonprofit charity organization.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumCharityStatusCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for CharityType
	 * @see parent::__construct()
	 * @param string $_charityID
	 * @param string $_charityName
	 * @param int $_charityNumber
	 * @param float $_donationPercent
	 * @param string $_mission
	 * @param string $_logoURL
	 * @param boolean $_charityListing
	 * @param EbayShoppingEnumCharityStatusCodeType $_status
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructCharityType
	 */
	public function __construct($_charityID = NULL,$_charityName = NULL,$_charityNumber = NULL,$_donationPercent = NULL,$_mission = NULL,$_logoURL = NULL,$_charityListing = NULL,$_status = NULL,$_any = NULL)
	{
		parent::__construct(array('CharityID'=>$_charityID,'CharityName'=>$_charityName,'CharityNumber'=>$_charityNumber,'DonationPercent'=>$_donationPercent,'Mission'=>$_mission,'LogoURL'=>$_logoURL,'CharityListing'=>$_charityListing,'Status'=>$_status,'any'=>$_any));
	}
	/**
	 * Get CharityID value
	 * @return string|null
	 */
	public function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * Set CharityID value
	 * @param string $_charityID the CharityID
	 * @return string
	 */
	public function setCharityID($_charityID)
	{
		return ($this->CharityID = $_charityID);
	}
	/**
	 * Get CharityName value
	 * @return string|null
	 */
	public function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * Set CharityName value
	 * @param string $_charityName the CharityName
	 * @return string
	 */
	public function setCharityName($_charityName)
	{
		return ($this->CharityName = $_charityName);
	}
	/**
	 * Get CharityNumber value
	 * @return int|null
	 */
	public function getCharityNumber()
	{
		return $this->CharityNumber;
	}
	/**
	 * Set CharityNumber value
	 * @param int $_charityNumber the CharityNumber
	 * @return int
	 */
	public function setCharityNumber($_charityNumber)
	{
		return ($this->CharityNumber = $_charityNumber);
	}
	/**
	 * Get DonationPercent value
	 * @return float|null
	 */
	public function getDonationPercent()
	{
		return $this->DonationPercent;
	}
	/**
	 * Set DonationPercent value
	 * @param float $_donationPercent the DonationPercent
	 * @return float
	 */
	public function setDonationPercent($_donationPercent)
	{
		return ($this->DonationPercent = $_donationPercent);
	}
	/**
	 * Get Mission value
	 * @return string|null
	 */
	public function getMission()
	{
		return $this->Mission;
	}
	/**
	 * Set Mission value
	 * @param string $_mission the Mission
	 * @return string
	 */
	public function setMission($_mission)
	{
		return ($this->Mission = $_mission);
	}
	/**
	 * Get LogoURL value
	 * @return string|null
	 */
	public function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * Set LogoURL value
	 * @param string $_logoURL the LogoURL
	 * @return string
	 */
	public function setLogoURL($_logoURL)
	{
		return ($this->LogoURL = $_logoURL);
	}
	/**
	 * Get CharityListing value
	 * @return boolean|null
	 */
	public function getCharityListing()
	{
		return $this->CharityListing;
	}
	/**
	 * Set CharityListing value
	 * @param boolean $_charityListing the CharityListing
	 * @return boolean
	 */
	public function setCharityListing($_charityListing)
	{
		return ($this->CharityListing = $_charityListing);
	}
	/**
	 * Get Status value
	 * @return EbayShoppingEnumCharityStatusCodeType|null
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Status value
	 * @uses EbayShoppingEnumCharityStatusCodeType::valueIsValid()
	 * @param EbayShoppingEnumCharityStatusCodeType $_status the Status
	 * @return EbayShoppingEnumCharityStatusCodeType
	 */
	public function setStatus($_status)
	{
		if(!EbayShoppingEnumCharityStatusCodeType::valueIsValid($_status))
		{
			return false;
		}
		return ($this->Status = $_status);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructCharityType::setAny()
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
	 * @return EbayShoppingStructCharityType
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