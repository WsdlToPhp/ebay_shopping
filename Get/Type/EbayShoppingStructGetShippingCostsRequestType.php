<?php
/**
 * File for class EbayShoppingStructGetShippingCostsRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetShippingCostsRequestType originally named GetShippingCostsRequestType
 * Documentation : Gets shipping costs for an item. This is one of the ways a buyer or seller can obtain shipping cost information for an existing item (for which the caller is either the buyer or seller) at any point in the life of of the listing, before or after a buyer has committed to purchasing the item(s). This call works for both flat rate shipping and calculated shipping. Flat rate shipping costs are established by the seller before bidding occurs. Calculated shipping costs are calculated by eBay with its shipping partners based on postal code, but note that insurance cost can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. It is best to call GetShippingCosts only after determining via GetSingleItem or findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) that the item actually has shipping cost information.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetShippingCostsRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The item ID that uniquely identifies the item listing for which to retrieve the data.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * The QuantitySold
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of items sold to a single buyer and to be shipped together.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The DestinationPostalCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Destination country postal code (or zipcode, for US). Ignored if no country code is provided. Optional tag for some countries. More likely to be required for large countries. Ignored for flat rate shipping.
	 * - minOccurs : 0
	 * @var string
	 */
	public $DestinationPostalCode;
	/**
	 * The DestinationCountryCode
	 * Meta informations extracted from the WSDL
	 * - documentation : Destination country code. If DestinationCountryCode is US, postal code is required and represents US zip code.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumCountryCodeType
	 */
	public $DestinationCountryCode;
	/**
	 * The IncludeDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether to return the ShippingDetails container in the response.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $IncludeDetails;
	/**
	 * Constructor method for GetShippingCostsRequestType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @param int $_quantitySold
	 * @param string $_destinationPostalCode
	 * @param EbayShoppingEnumCountryCodeType $_destinationCountryCode
	 * @param boolean $_includeDetails
	 * @return EbayShoppingStructGetShippingCostsRequestType
	 */
	public function __construct($_itemID = NULL,$_quantitySold = NULL,$_destinationPostalCode = NULL,$_destinationCountryCode = NULL,$_includeDetails = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_itemID,'QuantitySold'=>$_quantitySold,'DestinationPostalCode'=>$_destinationPostalCode,'DestinationCountryCode'=>$_destinationCountryCode,'IncludeDetails'=>$_includeDetails));
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
	 * Get QuantitySold value
	 * @return int|null
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set QuantitySold value
	 * @param int $_quantitySold the QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_quantitySold)
	{
		return ($this->QuantitySold = $_quantitySold);
	}
	/**
	 * Get DestinationPostalCode value
	 * @return string|null
	 */
	public function getDestinationPostalCode()
	{
		return $this->DestinationPostalCode;
	}
	/**
	 * Set DestinationPostalCode value
	 * @param string $_destinationPostalCode the DestinationPostalCode
	 * @return string
	 */
	public function setDestinationPostalCode($_destinationPostalCode)
	{
		return ($this->DestinationPostalCode = $_destinationPostalCode);
	}
	/**
	 * Get DestinationCountryCode value
	 * @return EbayShoppingEnumCountryCodeType|null
	 */
	public function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
	}
	/**
	 * Set DestinationCountryCode value
	 * @uses EbayShoppingEnumCountryCodeType::valueIsValid()
	 * @param EbayShoppingEnumCountryCodeType $_destinationCountryCode the DestinationCountryCode
	 * @return EbayShoppingEnumCountryCodeType
	 */
	public function setDestinationCountryCode($_destinationCountryCode)
	{
		if(!EbayShoppingEnumCountryCodeType::valueIsValid($_destinationCountryCode))
		{
			return false;
		}
		return ($this->DestinationCountryCode = $_destinationCountryCode);
	}
	/**
	 * Get IncludeDetails value
	 * @return boolean|null
	 */
	public function getIncludeDetails()
	{
		return $this->IncludeDetails;
	}
	/**
	 * Set IncludeDetails value
	 * @param boolean $_includeDetails the IncludeDetails
	 * @return boolean
	 */
	public function setIncludeDetails($_includeDetails)
	{
		return ($this->IncludeDetails = $_includeDetails);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetShippingCostsRequestType
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