<?php
/**
 * File for class EbayShoppingStructSellingStatusType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructSellingStatusType originally named SellingStatusType
 * Documentation : Contains various details about the current status of a listing. These values are computed by eBay and cannot be specified at listing time.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructSellingStatusType extends EbayShoppingWsdlClass
{
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Not used. See Item.ConvertedCurrentPrice.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations extracted from the WSDL
	 * - documentation : Not used. See Item.CurrentPrice and Variation.StartPrice.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $CurrentPrice;
	/**
	 * The QuantitySold
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of items sold from this variation. Subtract from Quantity to determine the number of items available.
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The QuantitySoldByPickupInStore
	 * Meta informations extracted from the WSDL
	 * - documentation : This field indicates the total quantity of that corresponding item variation (for example, large blue shirts) sold and picked up by buyers using the In-Store Pickup option. This value is the total quantity of this item variation purchased by one or more buyers using the In-Store Pickup option, and is not the total number of In-Store Pickup orders for that item variation. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these item variations (in same purchase), the <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be '10' and not '2'. <br> <br> This field will only be returned if the listing is eligible for In-Store Pickup. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Sellers who are eligible for the In-Store Pickup feature can start listing items in Production with the In-Store Pickup option beginning in late September 2013. </span>
	 * - minOccurs : 0
	 * @var int
	 */
	public $QuantitySoldByPickupInStore;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for SellingStatusType
	 * @see parent::__construct()
	 * @param EbayShoppingStructAmountType $_convertedCurrentPrice
	 * @param EbayShoppingStructAmountType $_currentPrice
	 * @param int $_quantitySold
	 * @param int $_quantitySoldByPickupInStore
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructSellingStatusType
	 */
	public function __construct($_convertedCurrentPrice = NULL,$_currentPrice = NULL,$_quantitySold = NULL,$_quantitySoldByPickupInStore = NULL,$_any = NULL)
	{
		parent::__construct(array('ConvertedCurrentPrice'=>$_convertedCurrentPrice,'CurrentPrice'=>$_currentPrice,'QuantitySold'=>$_quantitySold,'QuantitySoldByPickupInStore'=>$_quantitySoldByPickupInStore,'any'=>$_any));
	}
	/**
	 * Get ConvertedCurrentPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set ConvertedCurrentPrice value
	 * @param EbayShoppingStructAmountType $_convertedCurrentPrice the ConvertedCurrentPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setConvertedCurrentPrice($_convertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_convertedCurrentPrice);
	}
	/**
	 * Get CurrentPrice value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set CurrentPrice value
	 * @param EbayShoppingStructAmountType $_currentPrice the CurrentPrice
	 * @return EbayShoppingStructAmountType
	 */
	public function setCurrentPrice($_currentPrice)
	{
		return ($this->CurrentPrice = $_currentPrice);
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
	 * Get QuantitySoldByPickupInStore value
	 * @return int|null
	 */
	public function getQuantitySoldByPickupInStore()
	{
		return $this->QuantitySoldByPickupInStore;
	}
	/**
	 * Set QuantitySoldByPickupInStore value
	 * @param int $_quantitySoldByPickupInStore the QuantitySoldByPickupInStore
	 * @return int
	 */
	public function setQuantitySoldByPickupInStore($_quantitySoldByPickupInStore)
	{
		return ($this->QuantitySoldByPickupInStore = $_quantitySoldByPickupInStore);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructSellingStatusType::setAny()
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
	 * @return EbayShoppingStructSellingStatusType
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