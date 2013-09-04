<?php
/**
 * File for class EbayShoppingStructDiscountPriceInfoType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructDiscountPriceInfoType originally named DiscountPriceInfoType
 * Documentation : Contains the discount pricing details for an item, including the original retail price and the display treatment to be used for the item. The pricing treatment displayed for a discounted item depends on the values specified in this container when the item is listed. Discount pricing treatments (Strikethrough Pricing and Minimum Advertised Price) apply to only fixed price, BIN items. Sellers can apply Discount Pricing to both MSKU and Non-MSKU items.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructDiscountPriceInfoType extends EbayShoppingWsdlClass
{
	/**
	 * The OriginalRetailPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : This field specifies the price to which the discounted-price display treatment will be applied (for example, a strikethrough price). The discounted price of an item (specified in the CurrentPrice field) is the BIN price and is less than the OriginalRetailPrice of the item.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $OriginalRetailPrice;
	/**
	 * The MinimumAdvertisedPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : A value equal to the agreed upon minimum advertised price. <br><br> The minimum advertised price is an agreed upon price that is set by the suppliers/OEMs and the retailers/sellers. The minimum advertised price is the lowest price for which an item can be advertised. Large volume sellers can negotiate with the suppliers/OEMs to offer certain items below the set minimum advertised price. eBay does not maintain or validate the agreed upon minimum advertised price; the seller is responsible for setting this value in accordance with their agreement with the supplier/OEMs. MAP pricing treatments apply to only fixed price, BIN items listed on the eBay US site.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $MinimumAdvertisedPrice;
	/**
	 * The MinimumAdvertisedPriceExposure
	 * Meta informations extracted from the WSDL
	 * - documentation : If an item listing qualifies it to be listed as a MAP item (PricingTreatment returns MAP), the item price cannot be directly displayed on the page containing the item. When listing a MAP item, the seller stipulates how they want the buyer to view the price of the item by setting this field to either PreCheckout or DuringCheckout. If this feild is not set for a MAP item, the treatment defaults to PreCheckout. <br /><br /> If this field is set to PreCheckout, the buyer must click a link (or button) to view the item price on a different page (such as in a pop-up window). If this field is set to DuringCheckout, the StartPrice must be shown only when the buyer in the eBay checkout flow. <br /><br /> MAP items are supported only on the eBay US site.
	 * - minOccurs : 0
	 * @var EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType
	 */
	public $MinimumAdvertisedPriceExposure;
	/**
	 * The PricingTreatment
	 * Meta informations extracted from the WSDL
	 * - documentation : This field denotes whether or not an item qualifies for a discount pricing treatment display. If a seller lists an item with DiscountPriceInfo values, the item response container will include a DiscountPriceInfo container with this field set to either STP, MAP, or None. If this field is set to MAP, you must abide by the rules for displaying MAP items, as described in MinimumAdvertisedPriceExposure. <br /> <br /> <span class="tablenote"><b>Important:</b> For listings that return PricingTreatment set to MAP, you are legally required to follow the rules for displaying the price of the item to potential buyers. You are bound by the terms of the API License Agreement to follow these rules. Refer to the API License Agreement for consequences of non-compliance. </span>
	 * - minOccurs : 0
	 * @var EbayShoppingEnumPricingTreatmentCodeType
	 */
	public $PricingTreatment;
	/**
	 * The SoldOneBay
	 * Meta informations extracted from the WSDL
	 * - default : false
	 * - documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as CurrentPrice) is the price for which the seller offered the same (or similar) item for sale on eBay within the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffeBay and soldOneBay fields are set, soldOneBay takes precedence.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $SoldOneBay;
	/**
	 * The SoldOffeBay
	 * Meta informations extracted from the WSDL
	 * - default : false
	 * - documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as currentPrice) is the price for which the seller offered the same item for sale on a web site or offline store other than eBay in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffeBay and soldOneBay fields are set, soldOneBay takes precedence.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $SoldOffeBay;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for DiscountPriceInfoType
	 * @see parent::__construct()
	 * @param EbayShoppingStructAmountType $_originalRetailPrice
	 * @param EbayShoppingStructAmountType $_minimumAdvertisedPrice
	 * @param EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType $_minimumAdvertisedPriceExposure
	 * @param EbayShoppingEnumPricingTreatmentCodeType $_pricingTreatment
	 * @param boolean $_soldOneBay
	 * @param boolean $_soldOffeBay
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructDiscountPriceInfoType
	 */
	public function __construct($_originalRetailPrice = NULL,$_minimumAdvertisedPrice = NULL,$_minimumAdvertisedPriceExposure = NULL,$_pricingTreatment = NULL,$_soldOneBay = false,$_soldOffeBay = false,$_any = NULL)
	{
		parent::__construct(array('OriginalRetailPrice'=>$_originalRetailPrice,'MinimumAdvertisedPrice'=>$_minimumAdvertisedPrice,'MinimumAdvertisedPriceExposure'=>$_minimumAdvertisedPriceExposure,'PricingTreatment'=>$_pricingTreatment,'SoldOneBay'=>$_soldOneBay,'SoldOffeBay'=>$_soldOffeBay,'any'=>$_any));
	}
	/**
	 * Get OriginalRetailPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getOriginalRetailPrice()
	{
		return $this->OriginalRetailPrice;
	}
	/**
	 * Set OriginalRetailPrice value
	 * @param EbayShoppingStructAmountType $_originalRetailPrice the OriginalRetailPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setOriginalRetailPrice($_originalRetailPrice)
	{
		return ($this->OriginalRetailPrice = $_originalRetailPrice);
	}
	/**
	 * Get MinimumAdvertisedPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getMinimumAdvertisedPrice()
	{
		return $this->MinimumAdvertisedPrice;
	}
	/**
	 * Set MinimumAdvertisedPrice value
	 * @param EbayShoppingStructAmountType $_minimumAdvertisedPrice the MinimumAdvertisedPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setMinimumAdvertisedPrice($_minimumAdvertisedPrice)
	{
		return ($this->MinimumAdvertisedPrice = $_minimumAdvertisedPrice);
	}
	/**
	 * Get MinimumAdvertisedPriceExposure value
	 * @return EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType|null
	 */
	public function getMinimumAdvertisedPriceExposure()
	{
		return $this->MinimumAdvertisedPriceExposure;
	}
	/**
	 * Set MinimumAdvertisedPriceExposure value
	 * @uses EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::valueIsValid()
	 * @param EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType $_minimumAdvertisedPriceExposure the MinimumAdvertisedPriceExposure
	 * @return EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType
	 */
	public function setMinimumAdvertisedPriceExposure($_minimumAdvertisedPriceExposure)
	{
		if(!EbayShoppingEnumMinimumAdvertisedPriceExposureCodeType::valueIsValid($_minimumAdvertisedPriceExposure))
		{
			return false;
		}
		return ($this->MinimumAdvertisedPriceExposure = $_minimumAdvertisedPriceExposure);
	}
	/**
	 * Get PricingTreatment value
	 * @return EbayShoppingEnumPricingTreatmentCodeType|null
	 */
	public function getPricingTreatment()
	{
		return $this->PricingTreatment;
	}
	/**
	 * Set PricingTreatment value
	 * @uses EbayShoppingEnumPricingTreatmentCodeType::valueIsValid()
	 * @param EbayShoppingEnumPricingTreatmentCodeType $_pricingTreatment the PricingTreatment
	 * @return EbayShoppingEnumPricingTreatmentCodeType
	 */
	public function setPricingTreatment($_pricingTreatment)
	{
		if(!EbayShoppingEnumPricingTreatmentCodeType::valueIsValid($_pricingTreatment))
		{
			return false;
		}
		return ($this->PricingTreatment = $_pricingTreatment);
	}
	/**
	 * Get SoldOneBay value
	 * @return boolean|null
	 */
	public function getSoldOneBay()
	{
		return $this->SoldOneBay;
	}
	/**
	 * Set SoldOneBay value
	 * @param boolean $_soldOneBay the SoldOneBay
	 * @return boolean
	 */
	public function setSoldOneBay($_soldOneBay)
	{
		return ($this->SoldOneBay = $_soldOneBay);
	}
	/**
	 * Get SoldOffeBay value
	 * @return boolean|null
	 */
	public function getSoldOffeBay()
	{
		return $this->SoldOffeBay;
	}
	/**
	 * Set SoldOffeBay value
	 * @param boolean $_soldOffeBay the SoldOffeBay
	 * @return boolean
	 */
	public function setSoldOffeBay($_soldOffeBay)
	{
		return ($this->SoldOffeBay = $_soldOffeBay);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructDiscountPriceInfoType::setAny()
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
	 * @return EbayShoppingStructDiscountPriceInfoType
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