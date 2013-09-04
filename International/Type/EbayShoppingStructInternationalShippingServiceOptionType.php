<?php
/**
 * File for class EbayShoppingStructInternationalShippingServiceOptionType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructInternationalShippingServiceOptionType originally named InternationalShippingServiceOptionType
 * Documentation : Shipping costs and options related to an international shipping service. When used as input, if one is provided, at least one domestic ShippingService must be provided. This type does not exist before compatibility level 383.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructInternationalShippingServiceOptionType extends EbayShoppingWsdlClass
{
	/**
	 * The ShippingInsuranceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The insurance cost associated with shipping a single item with this shipping service. If the buyer bought more than one of this item, this proportional to QuantitySold. If the item has not yet been sold, insurance information cannot be calculated and the value is 0.00. For calculated shipping only.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingInsuranceCost;
	/**
	 * The ShippingServiceName
	 * Meta informations extracted from the WSDL
	 * - documentation : An international shipping service offered for shipping the item (for example, UPS Ground). For flat and calculated shipping.
	 * - minOccurs : 0
	 * @var token
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The cost of shipping each additional item beyond the first item. For single-item listings, if this is not provided, it is defaulted to zero. For multi-quantity listings, if this is not provided, it is set to the value of (in)ShippingServiceCost (unless the request version is lower than 665, in which case ShippingServiceAdditionalCost is required and is not defaulted). For flat shipping only.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServiceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The basic shipping cost of the item. <br> <br> <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping).
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller-preferred presentation order relative to other service options. Valid values are: 1, 2 and 3 (first, second and third choices). For flat and calculated shipping.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ShippingServicePriority;
	/**
	 * The ShipsTo
	 * Meta informations extracted from the WSDL
	 * - documentation : An international location or region to which the item may be shipped via this particular shipping service. Associated with the shipping service by the seller. This is basically the same as SimpleItemType.ShipToLocations except that this is spelled out and the other is abbreviated. Returned with request version 665 or greater, if set via Trading API.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShipsTo;
	/**
	 * The EstimatedDeliveryMinTime
	 * Meta informations extracted from the WSDL
	 * - documentation : The minimum guaranteed date in which the item could reach the buyer's location. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EstimatedDeliveryMinTime;
	/**
	 * The EstimatedDeliveryMaxTime
	 * Meta informations extracted from the WSDL
	 * - documentation : The maximum guaranteed date in which the item could reach the buyer's location. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $EstimatedDeliveryMaxTime;
	/**
	 * The ImportCharge
	 * Meta informations extracted from the WSDL
	 * - documentation : The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ImportCharge;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for InternationalShippingServiceOptionType
	 * @see parent::__construct()
	 * @param EbayShoppingStructAmountType $_shippingInsuranceCost
	 * @param token $_shippingServiceName
	 * @param EbayShoppingStructAmountType $_shippingServiceAdditionalCost
	 * @param EbayShoppingStructAmountType $_shippingServiceCost
	 * @param int $_shippingServicePriority
	 * @param string $_shipsTo
	 * @param dateTime $_estimatedDeliveryMinTime
	 * @param dateTime $_estimatedDeliveryMaxTime
	 * @param EbayShoppingStructAmountType $_importCharge
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructInternationalShippingServiceOptionType
	 */
	public function __construct($_shippingInsuranceCost = NULL,$_shippingServiceName = NULL,$_shippingServiceAdditionalCost = NULL,$_shippingServiceCost = NULL,$_shippingServicePriority = NULL,$_shipsTo = NULL,$_estimatedDeliveryMinTime = NULL,$_estimatedDeliveryMaxTime = NULL,$_importCharge = NULL,$_any = NULL)
	{
		parent::__construct(array('ShippingInsuranceCost'=>$_shippingInsuranceCost,'ShippingServiceName'=>$_shippingServiceName,'ShippingServiceAdditionalCost'=>$_shippingServiceAdditionalCost,'ShippingServiceCost'=>$_shippingServiceCost,'ShippingServicePriority'=>$_shippingServicePriority,'ShipsTo'=>$_shipsTo,'EstimatedDeliveryMinTime'=>$_estimatedDeliveryMinTime,'EstimatedDeliveryMaxTime'=>$_estimatedDeliveryMaxTime,'ImportCharge'=>$_importCharge,'any'=>$_any));
	}
	/**
	 * Get ShippingInsuranceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * Set ShippingInsuranceCost value
	 * @param EbayShoppingStructAmountType $_shippingInsuranceCost the ShippingInsuranceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setShippingInsuranceCost($_shippingInsuranceCost)
	{
		return ($this->ShippingInsuranceCost = $_shippingInsuranceCost);
	}
	/**
	 * Get ShippingServiceName value
	 * @return token|null
	 */
	public function getShippingServiceName()
	{
		return $this->ShippingServiceName;
	}
	/**
	 * Set ShippingServiceName value
	 * @param token $_shippingServiceName the ShippingServiceName
	 * @return token
	 */
	public function setShippingServiceName($_shippingServiceName)
	{
		return ($this->ShippingServiceName = $_shippingServiceName);
	}
	/**
	 * Get ShippingServiceAdditionalCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
	}
	/**
	 * Set ShippingServiceAdditionalCost value
	 * @param EbayShoppingStructAmountType $_shippingServiceAdditionalCost the ShippingServiceAdditionalCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setShippingServiceAdditionalCost($_shippingServiceAdditionalCost)
	{
		return ($this->ShippingServiceAdditionalCost = $_shippingServiceAdditionalCost);
	}
	/**
	 * Get ShippingServiceCost value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * Set ShippingServiceCost value
	 * @param EbayShoppingStructAmountType $_shippingServiceCost the ShippingServiceCost
	 * @return EbayShoppingStructAmountType
	 */
	public function setShippingServiceCost($_shippingServiceCost)
	{
		return ($this->ShippingServiceCost = $_shippingServiceCost);
	}
	/**
	 * Get ShippingServicePriority value
	 * @return int|null
	 */
	public function getShippingServicePriority()
	{
		return $this->ShippingServicePriority;
	}
	/**
	 * Set ShippingServicePriority value
	 * @param int $_shippingServicePriority the ShippingServicePriority
	 * @return int
	 */
	public function setShippingServicePriority($_shippingServicePriority)
	{
		return ($this->ShippingServicePriority = $_shippingServicePriority);
	}
	/**
	 * Get ShipsTo value
	 * @return string|null
	 */
	public function getShipsTo()
	{
		return $this->ShipsTo;
	}
	/**
	 * Set ShipsTo value
	 * @param string $_shipsTo the ShipsTo
	 * @return string
	 */
	public function setShipsTo($_shipsTo)
	{
		return ($this->ShipsTo = $_shipsTo);
	}
	/**
	 * Get EstimatedDeliveryMinTime value
	 * @return dateTime|null
	 */
	public function getEstimatedDeliveryMinTime()
	{
		return $this->EstimatedDeliveryMinTime;
	}
	/**
	 * Set EstimatedDeliveryMinTime value
	 * @param dateTime $_estimatedDeliveryMinTime the EstimatedDeliveryMinTime
	 * @return dateTime
	 */
	public function setEstimatedDeliveryMinTime($_estimatedDeliveryMinTime)
	{
		return ($this->EstimatedDeliveryMinTime = $_estimatedDeliveryMinTime);
	}
	/**
	 * Get EstimatedDeliveryMaxTime value
	 * @return dateTime|null
	 */
	public function getEstimatedDeliveryMaxTime()
	{
		return $this->EstimatedDeliveryMaxTime;
	}
	/**
	 * Set EstimatedDeliveryMaxTime value
	 * @param dateTime $_estimatedDeliveryMaxTime the EstimatedDeliveryMaxTime
	 * @return dateTime
	 */
	public function setEstimatedDeliveryMaxTime($_estimatedDeliveryMaxTime)
	{
		return ($this->EstimatedDeliveryMaxTime = $_estimatedDeliveryMaxTime);
	}
	/**
	 * Get ImportCharge value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getImportCharge()
	{
		return $this->ImportCharge;
	}
	/**
	 * Set ImportCharge value
	 * @param EbayShoppingStructAmountType $_importCharge the ImportCharge
	 * @return EbayShoppingStructAmountType
	 */
	public function setImportCharge($_importCharge)
	{
		return ($this->ImportCharge = $_importCharge);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructInternationalShippingServiceOptionType::setAny()
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
	 * @return EbayShoppingStructInternationalShippingServiceOptionType
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