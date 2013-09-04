<?php
/**
 * File for class EbayShoppingStructShippingServiceOptionType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructShippingServiceOptionType originally named ShippingServiceOptionType
 * Documentation : Shipping costs and options related to a domestic shipping service.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructShippingServiceOptionType extends EbayShoppingWsdlClass
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
	 * - documentation : A domestic shipping service offered for shipping the item (for example, UPS Ground). For flat and calculated shipping.
	 * - minOccurs : 0
	 * @var token
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The basic shipping cost of the item. <br> <br> <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping).
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations extracted from the WSDL
	 * - documentation : The cost of shipping each additional item beyond the first item (flat shipping). For single-item listings, if this is not provided, it is defaulted to zero. For multi-quantity listings, if this is not provided, it is set to the value of (in)ShippingServiceCost (unless the request version is lower than 665, in which case ShippingServiceAdditionalCost is required and is not defaulted). Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations extracted from the WSDL
	 * - documentation : Seller-preferred presentation order relative to other service options. Valid values: 1 (1st choice), 2 (2nd choice), 3 (3rd choice). For flat and calculated shipping. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ShippingServicePriority;
	/**
	 * The ExpeditedService
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the service is an expedited shipping service. See Enabling Get It Fast. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ExpeditedService;
	/**
	 * The ShippingTimeMin
	 * Meta informations extracted from the WSDL
	 * - documentation : The minimum guaranteed number of business days in which the shipping carrier can ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ShippingTimeMin;
	/**
	 * The ShippingTimeMax
	 * Meta informations extracted from the WSDL
	 * - documentation : The maximum guaranteed number of business days the shipping carrier will take to ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ShippingTimeMax;
	/**
	 * The ShippingSurcharge
	 * Meta informations extracted from the WSDL
	 * - documentation : An additional fee to charge US buyers who ship via UPS to Alaska, Hawaii or Puerto Rico. Can only be assigned a value for Parts and Accessories items on the eBay US and Motors sites. Only returned if set. If some transactions in an order have a surcharge, surcharge is added only for those transactions. Flat rate shipping only. <br> <br> With a request version of 665 or greater, total shipping cost includes any surcharge, and ShippingSurcharge is no longer returned as an individual tag.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ShippingSurcharge;
	/**
	 * The ShipsTo
	 * Meta informations extracted from the WSDL
	 * - documentation : An international location or region to which the item may be shipped via this particular shipping service. Associated with the shipping service by the seller. Use GeteBayDetails to determine which locations are valid per site. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType. Returned with request version 665 or greater, if set via Trading API.
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
	 * The FastAndFree
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates whether the service is fast in delivery to the end user (less than 4 days) and free for buyer.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $FastAndFree;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ShippingServiceOptionType
	 * @see parent::__construct()
	 * @param EbayShoppingStructAmountType $_shippingInsuranceCost
	 * @param token $_shippingServiceName
	 * @param EbayShoppingStructAmountType $_shippingServiceCost
	 * @param EbayShoppingStructAmountType $_shippingServiceAdditionalCost
	 * @param int $_shippingServicePriority
	 * @param boolean $_expeditedService
	 * @param int $_shippingTimeMin
	 * @param int $_shippingTimeMax
	 * @param EbayShoppingStructAmountType $_shippingSurcharge
	 * @param string $_shipsTo
	 * @param dateTime $_estimatedDeliveryMinTime
	 * @param dateTime $_estimatedDeliveryMaxTime
	 * @param boolean $_fastAndFree
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructShippingServiceOptionType
	 */
	public function __construct($_shippingInsuranceCost = NULL,$_shippingServiceName = NULL,$_shippingServiceCost = NULL,$_shippingServiceAdditionalCost = NULL,$_shippingServicePriority = NULL,$_expeditedService = NULL,$_shippingTimeMin = NULL,$_shippingTimeMax = NULL,$_shippingSurcharge = NULL,$_shipsTo = NULL,$_estimatedDeliveryMinTime = NULL,$_estimatedDeliveryMaxTime = NULL,$_fastAndFree = NULL,$_any = NULL)
	{
		parent::__construct(array('ShippingInsuranceCost'=>$_shippingInsuranceCost,'ShippingServiceName'=>$_shippingServiceName,'ShippingServiceCost'=>$_shippingServiceCost,'ShippingServiceAdditionalCost'=>$_shippingServiceAdditionalCost,'ShippingServicePriority'=>$_shippingServicePriority,'ExpeditedService'=>$_expeditedService,'ShippingTimeMin'=>$_shippingTimeMin,'ShippingTimeMax'=>$_shippingTimeMax,'ShippingSurcharge'=>$_shippingSurcharge,'ShipsTo'=>$_shipsTo,'EstimatedDeliveryMinTime'=>$_estimatedDeliveryMinTime,'EstimatedDeliveryMaxTime'=>$_estimatedDeliveryMaxTime,'FastAndFree'=>$_fastAndFree,'any'=>$_any));
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
	 * Get ExpeditedService value
	 * @return boolean|null
	 */
	public function getExpeditedService()
	{
		return $this->ExpeditedService;
	}
	/**
	 * Set ExpeditedService value
	 * @param boolean $_expeditedService the ExpeditedService
	 * @return boolean
	 */
	public function setExpeditedService($_expeditedService)
	{
		return ($this->ExpeditedService = $_expeditedService);
	}
	/**
	 * Get ShippingTimeMin value
	 * @return int|null
	 */
	public function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}
	/**
	 * Set ShippingTimeMin value
	 * @param int $_shippingTimeMin the ShippingTimeMin
	 * @return int
	 */
	public function setShippingTimeMin($_shippingTimeMin)
	{
		return ($this->ShippingTimeMin = $_shippingTimeMin);
	}
	/**
	 * Get ShippingTimeMax value
	 * @return int|null
	 */
	public function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}
	/**
	 * Set ShippingTimeMax value
	 * @param int $_shippingTimeMax the ShippingTimeMax
	 * @return int
	 */
	public function setShippingTimeMax($_shippingTimeMax)
	{
		return ($this->ShippingTimeMax = $_shippingTimeMax);
	}
	/**
	 * Get ShippingSurcharge value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getShippingSurcharge()
	{
		return $this->ShippingSurcharge;
	}
	/**
	 * Set ShippingSurcharge value
	 * @param EbayShoppingStructAmountType $_shippingSurcharge the ShippingSurcharge
	 * @return EbayShoppingStructAmountType
	 */
	public function setShippingSurcharge($_shippingSurcharge)
	{
		return ($this->ShippingSurcharge = $_shippingSurcharge);
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
	 * Get FastAndFree value
	 * @return boolean|null
	 */
	public function getFastAndFree()
	{
		return $this->FastAndFree;
	}
	/**
	 * Set FastAndFree value
	 * @param boolean $_fastAndFree the FastAndFree
	 * @return boolean
	 */
	public function setFastAndFree($_fastAndFree)
	{
		return ($this->FastAndFree = $_fastAndFree);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructShippingServiceOptionType::setAny()
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
	 * @return EbayShoppingStructShippingServiceOptionType
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