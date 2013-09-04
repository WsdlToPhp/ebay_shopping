<?php
/**
 * File for class EbayShoppingStructVATDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructVATDetailsType originally named VATDetailsType
 * Documentation : Container for eBay's Business User features. A business seller can choose to offer an item exclusively to bidders and buyers that also represent businesses. Only applicable when the item is listed in a B2B-enabled category. Currently, the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites support B2B business features.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructVATDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The BusinessSeller
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, this indicates that the seller is a business user and intends to use listing features that are offered to business users only. Applicable only to business sellers residing in Germany, Austria, or Switzerland who are listing in a B2B VAT- enabled category on the eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. The seller must have a valid VAT ID registered with eBay. This must be set to true if RestrictedToBusiness is true. It has no effect (and it's not returned) if RestrictedToBusiness is false. If an item was not qualified as a business item when originally listed, but meets the conditions for business items when the item is revised or relisted, the seller can convert the item to a business item by specifying the appropriate VAT details. See the eBay Web Services guide for more information and additional rules.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $BusinessSeller;
	/**
	 * The RestrictedToBusiness
	 * Meta informations extracted from the WSDL
	 * - documentation : If true, this indicates that the seller elects to offer the item exclusively to business users. If false (or not returned), this indicates that the seller elects to offer the item to all users. Applicable only to business sellers residing in Germany, Austria, or Switzerland who are listing in a B2B VAT-enabled category on the eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. If this argument is true, the seller must have a valid VAT-ID registered with eBay, and BusinessSeller must also be true.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $RestrictedToBusiness;
	/**
	 * The VATPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : VAT rate for the item, if any. When the VATPercent is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a VATPercent, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
	 * - minOccurs : 0
	 * @var float
	 */
	public $VATPercent;
	/**
	 * The VATSite
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the VatSite Id of the seller (in a business card format) as part of the data returned in GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $VATSite;
	/**
	 * The VATID
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the VatSite Id of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $VATID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for VATDetailsType
	 * @see parent::__construct()
	 * @param boolean $_businessSeller
	 * @param boolean $_restrictedToBusiness
	 * @param float $_vATPercent
	 * @param string $_vATSite
	 * @param string $_vATID
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructVATDetailsType
	 */
	public function __construct($_businessSeller = NULL,$_restrictedToBusiness = NULL,$_vATPercent = NULL,$_vATSite = NULL,$_vATID = NULL,$_any = NULL)
	{
		parent::__construct(array('BusinessSeller'=>$_businessSeller,'RestrictedToBusiness'=>$_restrictedToBusiness,'VATPercent'=>$_vATPercent,'VATSite'=>$_vATSite,'VATID'=>$_vATID,'any'=>$_any));
	}
	/**
	 * Get BusinessSeller value
	 * @return boolean|null
	 */
	public function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * Set BusinessSeller value
	 * @param boolean $_businessSeller the BusinessSeller
	 * @return boolean
	 */
	public function setBusinessSeller($_businessSeller)
	{
		return ($this->BusinessSeller = $_businessSeller);
	}
	/**
	 * Get RestrictedToBusiness value
	 * @return boolean|null
	 */
	public function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}
	/**
	 * Set RestrictedToBusiness value
	 * @param boolean $_restrictedToBusiness the RestrictedToBusiness
	 * @return boolean
	 */
	public function setRestrictedToBusiness($_restrictedToBusiness)
	{
		return ($this->RestrictedToBusiness = $_restrictedToBusiness);
	}
	/**
	 * Get VATPercent value
	 * @return float|null
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * Set VATPercent value
	 * @param float $_vATPercent the VATPercent
	 * @return float
	 */
	public function setVATPercent($_vATPercent)
	{
		return ($this->VATPercent = $_vATPercent);
	}
	/**
	 * Get VATSite value
	 * @return string|null
	 */
	public function getVATSite()
	{
		return $this->VATSite;
	}
	/**
	 * Set VATSite value
	 * @param string $_vATSite the VATSite
	 * @return string
	 */
	public function setVATSite($_vATSite)
	{
		return ($this->VATSite = $_vATSite);
	}
	/**
	 * Get VATID value
	 * @return string|null
	 */
	public function getVATID()
	{
		return $this->VATID;
	}
	/**
	 * Set VATID value
	 * @param string $_vATID the VATID
	 * @return string
	 */
	public function setVATID($_vATID)
	{
		return ($this->VATID = $_vATID);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructVATDetailsType::setAny()
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
	 * @return EbayShoppingStructVATDetailsType
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