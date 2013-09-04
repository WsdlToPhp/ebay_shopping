<?php
/**
 * File for class EbayShoppingStructBusinessSellerDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructBusinessSellerDetailsType originally named BusinessSellerDetailsType
 * Documentation : Displays the seller's information (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'. Note that this option is only available for sites that have Business Seller options enabled.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructBusinessSellerDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The Address
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the Address of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAddressType
	 */
	public $Address;
	/**
	 * The Fax
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the fax number of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Fax;
	/**
	 * The Email
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the email address of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Email;
	/**
	 * The AdditionalContactInformation
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the AdditionalContactInformation of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AdditionalContactInformation;
	/**
	 * The TradeRegistrationNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the TradeRegistrationNumber of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $TradeRegistrationNumber;
	/**
	 * The LegalInvoice
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the LegalInvoice of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $LegalInvoice;
	/**
	 * The TermsAndConditions
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the TermsAndConditions of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $TermsAndConditions;
	/**
	 * The VATDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the VATDetails of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var EbayShoppingStructVATDetailsType
	 */
	public $VATDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for BusinessSellerDetailsType
	 * @see parent::__construct()
	 * @param EbayShoppingStructAddressType $_address
	 * @param string $_fax
	 * @param string $_email
	 * @param string $_additionalContactInformation
	 * @param string $_tradeRegistrationNumber
	 * @param boolean $_legalInvoice
	 * @param string $_termsAndConditions
	 * @param EbayShoppingStructVATDetailsType $_vATDetails
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructBusinessSellerDetailsType
	 */
	public function __construct($_address = NULL,$_fax = NULL,$_email = NULL,$_additionalContactInformation = NULL,$_tradeRegistrationNumber = NULL,$_legalInvoice = NULL,$_termsAndConditions = NULL,$_vATDetails = NULL,$_any = NULL)
	{
		parent::__construct(array('Address'=>$_address,'Fax'=>$_fax,'Email'=>$_email,'AdditionalContactInformation'=>$_additionalContactInformation,'TradeRegistrationNumber'=>$_tradeRegistrationNumber,'LegalInvoice'=>$_legalInvoice,'TermsAndConditions'=>$_termsAndConditions,'VATDetails'=>$_vATDetails,'any'=>$_any));
	}
	/**
	 * Get Address value
	 * @return EbayShoppingStructAddressType|null
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Address value
	 * @param EbayShoppingStructAddressType $_address the Address
	 * @return EbayShoppingStructAddressType
	 */
	public function setAddress($_address)
	{
		return ($this->Address = $_address);
	}
	/**
	 * Get Fax value
	 * @return string|null
	 */
	public function getFax()
	{
		return $this->Fax;
	}
	/**
	 * Set Fax value
	 * @param string $_fax the Fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->Fax = $_fax);
	}
	/**
	 * Get Email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Email value
	 * @param string $_email the Email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->Email = $_email);
	}
	/**
	 * Get AdditionalContactInformation value
	 * @return string|null
	 */
	public function getAdditionalContactInformation()
	{
		return $this->AdditionalContactInformation;
	}
	/**
	 * Set AdditionalContactInformation value
	 * @param string $_additionalContactInformation the AdditionalContactInformation
	 * @return string
	 */
	public function setAdditionalContactInformation($_additionalContactInformation)
	{
		return ($this->AdditionalContactInformation = $_additionalContactInformation);
	}
	/**
	 * Get TradeRegistrationNumber value
	 * @return string|null
	 */
	public function getTradeRegistrationNumber()
	{
		return $this->TradeRegistrationNumber;
	}
	/**
	 * Set TradeRegistrationNumber value
	 * @param string $_tradeRegistrationNumber the TradeRegistrationNumber
	 * @return string
	 */
	public function setTradeRegistrationNumber($_tradeRegistrationNumber)
	{
		return ($this->TradeRegistrationNumber = $_tradeRegistrationNumber);
	}
	/**
	 * Get LegalInvoice value
	 * @return boolean|null
	 */
	public function getLegalInvoice()
	{
		return $this->LegalInvoice;
	}
	/**
	 * Set LegalInvoice value
	 * @param boolean $_legalInvoice the LegalInvoice
	 * @return boolean
	 */
	public function setLegalInvoice($_legalInvoice)
	{
		return ($this->LegalInvoice = $_legalInvoice);
	}
	/**
	 * Get TermsAndConditions value
	 * @return string|null
	 */
	public function getTermsAndConditions()
	{
		return $this->TermsAndConditions;
	}
	/**
	 * Set TermsAndConditions value
	 * @param string $_termsAndConditions the TermsAndConditions
	 * @return string
	 */
	public function setTermsAndConditions($_termsAndConditions)
	{
		return ($this->TermsAndConditions = $_termsAndConditions);
	}
	/**
	 * Get VATDetails value
	 * @return EbayShoppingStructVATDetailsType|null
	 */
	public function getVATDetails()
	{
		return $this->VATDetails;
	}
	/**
	 * Set VATDetails value
	 * @param EbayShoppingStructVATDetailsType $_vATDetails the VATDetails
	 * @return EbayShoppingStructVATDetailsType
	 */
	public function setVATDetails($_vATDetails)
	{
		return ($this->VATDetails = $_vATDetails);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructBusinessSellerDetailsType::setAny()
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
	 * @return EbayShoppingStructBusinessSellerDetailsType
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