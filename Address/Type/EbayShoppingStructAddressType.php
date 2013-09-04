<?php
/**
 * File for class EbayShoppingStructAddressType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructAddressType originally named AddressType
 * Documentation : Contains the data for one user address. This is the base type for a number of user addresses, including seller payment address, buyer shipping address and buyer and seller registration address.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructAddressType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : User's name for the address. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Street
	 * Meta informations extracted from the WSDL
	 * - documentation : A concatenation of Street1 and Street2, primarily for RegistrationAddress. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Street;
	/**
	 * The Street1
	 * Meta informations extracted from the WSDL
	 * - documentation : Line 1 of the user's street address. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations extracted from the WSDL
	 * - documentation : Line 2 of the user's address (such as an apartment number). Returned if the user specified a second street value for their address. Also applicable to Half.com (for GetOrders).<br> In case of Item.SellerContactDetails, Street2 can be used to provide City, Address, State, and Zip code (if applicable).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Street2;
	/**
	 * The CityName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the user's city. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $CityName;
	/**
	 * The County
	 * Meta informations extracted from the WSDL
	 * - documentation : County information for the user. This field applies to Classified Ad format listings and to the UK only. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $County;
	/**
	 * The StateOrProvince
	 * Meta informations extracted from the WSDL
	 * - documentation : The region of the user's address. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $StateOrProvince;
	/**
	 * The CountryName
	 * Meta informations extracted from the WSDL
	 * - documentation : The name of the user's country. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $CountryName;
	/**
	 * The Phone
	 * Meta informations extracted from the WSDL
	 * - documentation : User's primary phone number. This may return a value of "Invalid Request" if you are not authorized to see the user's phone number. Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Phone;
	/**
	 * The PhoneCountryPrefix
	 * Meta informations extracted from the WSDL
	 * - documentation : Country Prefix of the secondary phone number. This value is derived from inputs supplied for PhoneCountryCode. This field applies to Classified Ad format listings only.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PhoneCountryPrefix;
	/**
	 * The PhoneAreaOrCityCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Area or City Code of a user's primary phone number. This field applies to Classified Ad format listings only.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PhoneAreaOrCityCode;
	/**
	 * The PhoneLocalNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : The local number portion of the user's primary phone number. This field applies to Classified Ad format listings only. <br> <b>Note:</b> The full primary phone number is constructed by combining PhoneLocalNumber with PhoneAreaOrCityCode and PhoneCountryPrefix. Starting with API release 497, the full phone number can be entered in PhoneLocalNumber. Refer to the release notes for additional information.
	 * - minOccurs : 0
	 * @var string
	 */
	public $PhoneLocalNumber;
	/**
	 * The Phone2CountryPrefix
	 * Meta informations extracted from the WSDL
	 * - documentation : Country prefix of a user's secondary phone number. This value is derived from inputs supplied for Phone2CountryCode. This field applies to Classified Ad format listings only.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Phone2CountryPrefix;
	/**
	 * The Phone2AreaOrCityCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Area or City Code of a user's secondary phone number. This field applies to Classified Ad format listings only.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Phone2AreaOrCityCode;
	/**
	 * The Phone2LocalNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : The local number portion of the user's secondary phone number. This field applies to Classified Ad format listings only. <br> <b>Note:</b> The full secondary phone number is constructed by combining Phone2LocalNumber with Phone2AreaOrCityCode and Phone2CountryPrefix. Starting with API release 497, the full phone number can be entered in Phone2LocalNumber. Refer to the release notes for additional information.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Phone2LocalNumber;
	/**
	 * The PostalCode
	 * Meta informations extracted from the WSDL
	 * - documentation : User's postal code. <br> <br> If not provided as input for GetCart or SetCart, eBay uses the country associated with the SiteID in effect when the call is made. <br> <br> Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The AddressID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID assigned to the address in the eBay database. For GetOrders, applies only to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $AddressID;
	/**
	 * The ExternalAddressID
	 * Meta informations extracted from the WSDL
	 * - documentation : ID assigned to the address by the owner of the address (fitting only if the address is owned by PayPal; see AddressOwner). Also applicable to Half.com (for GetOrders).
	 * - minOccurs : 0
	 * @var string
	 */
	public $ExternalAddressID;
	/**
	 * The InternationalName
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller's international name that is associated with the payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalName;
	/**
	 * The InternationalStateAndCity
	 * Meta informations extracted from the WSDL
	 * - documentation : International state and city for the seller's payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalStateAndCity;
	/**
	 * The InternationalStreet
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller's international street address that is associated with the payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $InternationalStreet;
	/**
	 * The CompanyName
	 * Meta informations extracted from the WSDL
	 * - documentation : User's company name. Only returned if available. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var string
	 */
	public $CompanyName;
	/**
	 * The FirstName
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the first name of the seller (in a business card format) if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations extracted from the WSDL
	 * - documentation : Displays the last name of the seller (in a business card format) if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * - minOccurs : 0
	 * @var string
	 */
	public $LastName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for AddressType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_street
	 * @param string $_street1
	 * @param string $_street2
	 * @param string $_cityName
	 * @param string $_county
	 * @param string $_stateOrProvince
	 * @param string $_countryName
	 * @param string $_phone
	 * @param string $_phoneCountryPrefix
	 * @param string $_phoneAreaOrCityCode
	 * @param string $_phoneLocalNumber
	 * @param string $_phone2CountryPrefix
	 * @param string $_phone2AreaOrCityCode
	 * @param string $_phone2LocalNumber
	 * @param string $_postalCode
	 * @param string $_addressID
	 * @param string $_externalAddressID
	 * @param string $_internationalName
	 * @param string $_internationalStateAndCity
	 * @param string $_internationalStreet
	 * @param string $_companyName
	 * @param string $_firstName
	 * @param string $_lastName
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructAddressType
	 */
	public function __construct($_name = NULL,$_street = NULL,$_street1 = NULL,$_street2 = NULL,$_cityName = NULL,$_county = NULL,$_stateOrProvince = NULL,$_countryName = NULL,$_phone = NULL,$_phoneCountryPrefix = NULL,$_phoneAreaOrCityCode = NULL,$_phoneLocalNumber = NULL,$_phone2CountryPrefix = NULL,$_phone2AreaOrCityCode = NULL,$_phone2LocalNumber = NULL,$_postalCode = NULL,$_addressID = NULL,$_externalAddressID = NULL,$_internationalName = NULL,$_internationalStateAndCity = NULL,$_internationalStreet = NULL,$_companyName = NULL,$_firstName = NULL,$_lastName = NULL,$_any = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Street'=>$_street,'Street1'=>$_street1,'Street2'=>$_street2,'CityName'=>$_cityName,'County'=>$_county,'StateOrProvince'=>$_stateOrProvince,'CountryName'=>$_countryName,'Phone'=>$_phone,'PhoneCountryPrefix'=>$_phoneCountryPrefix,'PhoneAreaOrCityCode'=>$_phoneAreaOrCityCode,'PhoneLocalNumber'=>$_phoneLocalNumber,'Phone2CountryPrefix'=>$_phone2CountryPrefix,'Phone2AreaOrCityCode'=>$_phone2AreaOrCityCode,'Phone2LocalNumber'=>$_phone2LocalNumber,'PostalCode'=>$_postalCode,'AddressID'=>$_addressID,'ExternalAddressID'=>$_externalAddressID,'InternationalName'=>$_internationalName,'InternationalStateAndCity'=>$_internationalStateAndCity,'InternationalStreet'=>$_internationalStreet,'CompanyName'=>$_companyName,'FirstName'=>$_firstName,'LastName'=>$_lastName,'any'=>$_any));
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
	 * Get Street value
	 * @return string|null
	 */
	public function getStreet()
	{
		return $this->Street;
	}
	/**
	 * Set Street value
	 * @param string $_street the Street
	 * @return string
	 */
	public function setStreet($_street)
	{
		return ($this->Street = $_street);
	}
	/**
	 * Get Street1 value
	 * @return string|null
	 */
	public function getStreet1()
	{
		return $this->Street1;
	}
	/**
	 * Set Street1 value
	 * @param string $_street1 the Street1
	 * @return string
	 */
	public function setStreet1($_street1)
	{
		return ($this->Street1 = $_street1);
	}
	/**
	 * Get Street2 value
	 * @return string|null
	 */
	public function getStreet2()
	{
		return $this->Street2;
	}
	/**
	 * Set Street2 value
	 * @param string $_street2 the Street2
	 * @return string
	 */
	public function setStreet2($_street2)
	{
		return ($this->Street2 = $_street2);
	}
	/**
	 * Get CityName value
	 * @return string|null
	 */
	public function getCityName()
	{
		return $this->CityName;
	}
	/**
	 * Set CityName value
	 * @param string $_cityName the CityName
	 * @return string
	 */
	public function setCityName($_cityName)
	{
		return ($this->CityName = $_cityName);
	}
	/**
	 * Get County value
	 * @return string|null
	 */
	public function getCounty()
	{
		return $this->County;
	}
	/**
	 * Set County value
	 * @param string $_county the County
	 * @return string
	 */
	public function setCounty($_county)
	{
		return ($this->County = $_county);
	}
	/**
	 * Get StateOrProvince value
	 * @return string|null
	 */
	public function getStateOrProvince()
	{
		return $this->StateOrProvince;
	}
	/**
	 * Set StateOrProvince value
	 * @param string $_stateOrProvince the StateOrProvince
	 * @return string
	 */
	public function setStateOrProvince($_stateOrProvince)
	{
		return ($this->StateOrProvince = $_stateOrProvince);
	}
	/**
	 * Get CountryName value
	 * @return string|null
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set CountryName value
	 * @param string $_countryName the CountryName
	 * @return string
	 */
	public function setCountryName($_countryName)
	{
		return ($this->CountryName = $_countryName);
	}
	/**
	 * Get Phone value
	 * @return string|null
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Phone value
	 * @param string $_phone the Phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->Phone = $_phone);
	}
	/**
	 * Get PhoneCountryPrefix value
	 * @return string|null
	 */
	public function getPhoneCountryPrefix()
	{
		return $this->PhoneCountryPrefix;
	}
	/**
	 * Set PhoneCountryPrefix value
	 * @param string $_phoneCountryPrefix the PhoneCountryPrefix
	 * @return string
	 */
	public function setPhoneCountryPrefix($_phoneCountryPrefix)
	{
		return ($this->PhoneCountryPrefix = $_phoneCountryPrefix);
	}
	/**
	 * Get PhoneAreaOrCityCode value
	 * @return string|null
	 */
	public function getPhoneAreaOrCityCode()
	{
		return $this->PhoneAreaOrCityCode;
	}
	/**
	 * Set PhoneAreaOrCityCode value
	 * @param string $_phoneAreaOrCityCode the PhoneAreaOrCityCode
	 * @return string
	 */
	public function setPhoneAreaOrCityCode($_phoneAreaOrCityCode)
	{
		return ($this->PhoneAreaOrCityCode = $_phoneAreaOrCityCode);
	}
	/**
	 * Get PhoneLocalNumber value
	 * @return string|null
	 */
	public function getPhoneLocalNumber()
	{
		return $this->PhoneLocalNumber;
	}
	/**
	 * Set PhoneLocalNumber value
	 * @param string $_phoneLocalNumber the PhoneLocalNumber
	 * @return string
	 */
	public function setPhoneLocalNumber($_phoneLocalNumber)
	{
		return ($this->PhoneLocalNumber = $_phoneLocalNumber);
	}
	/**
	 * Get Phone2CountryPrefix value
	 * @return string|null
	 */
	public function getPhone2CountryPrefix()
	{
		return $this->Phone2CountryPrefix;
	}
	/**
	 * Set Phone2CountryPrefix value
	 * @param string $_phone2CountryPrefix the Phone2CountryPrefix
	 * @return string
	 */
	public function setPhone2CountryPrefix($_phone2CountryPrefix)
	{
		return ($this->Phone2CountryPrefix = $_phone2CountryPrefix);
	}
	/**
	 * Get Phone2AreaOrCityCode value
	 * @return string|null
	 */
	public function getPhone2AreaOrCityCode()
	{
		return $this->Phone2AreaOrCityCode;
	}
	/**
	 * Set Phone2AreaOrCityCode value
	 * @param string $_phone2AreaOrCityCode the Phone2AreaOrCityCode
	 * @return string
	 */
	public function setPhone2AreaOrCityCode($_phone2AreaOrCityCode)
	{
		return ($this->Phone2AreaOrCityCode = $_phone2AreaOrCityCode);
	}
	/**
	 * Get Phone2LocalNumber value
	 * @return string|null
	 */
	public function getPhone2LocalNumber()
	{
		return $this->Phone2LocalNumber;
	}
	/**
	 * Set Phone2LocalNumber value
	 * @param string $_phone2LocalNumber the Phone2LocalNumber
	 * @return string
	 */
	public function setPhone2LocalNumber($_phone2LocalNumber)
	{
		return ($this->Phone2LocalNumber = $_phone2LocalNumber);
	}
	/**
	 * Get PostalCode value
	 * @return string|null
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set PostalCode value
	 * @param string $_postalCode the PostalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->PostalCode = $_postalCode);
	}
	/**
	 * Get AddressID value
	 * @return string|null
	 */
	public function getAddressID()
	{
		return $this->AddressID;
	}
	/**
	 * Set AddressID value
	 * @param string $_addressID the AddressID
	 * @return string
	 */
	public function setAddressID($_addressID)
	{
		return ($this->AddressID = $_addressID);
	}
	/**
	 * Get ExternalAddressID value
	 * @return string|null
	 */
	public function getExternalAddressID()
	{
		return $this->ExternalAddressID;
	}
	/**
	 * Set ExternalAddressID value
	 * @param string $_externalAddressID the ExternalAddressID
	 * @return string
	 */
	public function setExternalAddressID($_externalAddressID)
	{
		return ($this->ExternalAddressID = $_externalAddressID);
	}
	/**
	 * Get InternationalName value
	 * @return string|null
	 */
	public function getInternationalName()
	{
		return $this->InternationalName;
	}
	/**
	 * Set InternationalName value
	 * @param string $_internationalName the InternationalName
	 * @return string
	 */
	public function setInternationalName($_internationalName)
	{
		return ($this->InternationalName = $_internationalName);
	}
	/**
	 * Get InternationalStateAndCity value
	 * @return string|null
	 */
	public function getInternationalStateAndCity()
	{
		return $this->InternationalStateAndCity;
	}
	/**
	 * Set InternationalStateAndCity value
	 * @param string $_internationalStateAndCity the InternationalStateAndCity
	 * @return string
	 */
	public function setInternationalStateAndCity($_internationalStateAndCity)
	{
		return ($this->InternationalStateAndCity = $_internationalStateAndCity);
	}
	/**
	 * Get InternationalStreet value
	 * @return string|null
	 */
	public function getInternationalStreet()
	{
		return $this->InternationalStreet;
	}
	/**
	 * Set InternationalStreet value
	 * @param string $_internationalStreet the InternationalStreet
	 * @return string
	 */
	public function setInternationalStreet($_internationalStreet)
	{
		return ($this->InternationalStreet = $_internationalStreet);
	}
	/**
	 * Get CompanyName value
	 * @return string|null
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
	}
	/**
	 * Set CompanyName value
	 * @param string $_companyName the CompanyName
	 * @return string
	 */
	public function setCompanyName($_companyName)
	{
		return ($this->CompanyName = $_companyName);
	}
	/**
	 * Get FirstName value
	 * @return string|null
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set FirstName value
	 * @param string $_firstName the FirstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->FirstName = $_firstName);
	}
	/**
	 * Get LastName value
	 * @return string|null
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set LastName value
	 * @param string $_lastName the LastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->LastName = $_lastName);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructAddressType::setAny()
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
	 * @return EbayShoppingStructAddressType
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