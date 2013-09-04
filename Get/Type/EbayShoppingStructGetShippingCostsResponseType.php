<?php
/**
 * File for class EbayShoppingStructGetShippingCostsResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetShippingCostsResponseType originally named GetShippingCostsResponseType
 * Documentation : Response to call of GetShippingCosts.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetShippingCostsResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The ShippingDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping-related details for the specified item. This container is only returned if IncludeDetails is true on input. Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in ShippingRateErrorMessage. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
	 * - minOccurs : 0
	 * @var EbayShoppingStructShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ShippingCostSummary
	 * Meta informations extracted from the WSDL
	 * - documentation : Shipping-related details for the specified item. Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in ShippingRateErrorMessage. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
	 * - minOccurs : 0
	 * @var EbayShoppingStructShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * Constructor method for GetShippingCostsResponseType
	 * @see parent::__construct()
	 * @param EbayShoppingStructShippingDetailsType $_shippingDetails
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary
	 * @return EbayShoppingStructGetShippingCostsResponseType
	 */
	public function __construct($_shippingDetails = NULL,$_shippingCostSummary = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ShippingDetails'=>$_shippingDetails,'ShippingCostSummary'=>$_shippingCostSummary));
	}
	/**
	 * Get ShippingDetails value
	 * @return EbayShoppingStructShippingDetailsType|null
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShippingDetails value
	 * @param EbayShoppingStructShippingDetailsType $_shippingDetails the ShippingDetails
	 * @return EbayShoppingStructShippingDetailsType
	 */
	public function setShippingDetails($_shippingDetails)
	{
		return ($this->ShippingDetails = $_shippingDetails);
	}
	/**
	 * Get ShippingCostSummary value
	 * @return EbayShoppingStructShippingCostSummaryType|null
	 */
	public function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * Set ShippingCostSummary value
	 * @param EbayShoppingStructShippingCostSummaryType $_shippingCostSummary the ShippingCostSummary
	 * @return EbayShoppingStructShippingCostSummaryType
	 */
	public function setShippingCostSummary($_shippingCostSummary)
	{
		return ($this->ShippingCostSummary = $_shippingCostSummary);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetShippingCostsResponseType
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