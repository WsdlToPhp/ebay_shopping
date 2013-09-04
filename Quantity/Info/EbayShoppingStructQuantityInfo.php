<?php
/**
 * File for class EbayShoppingStructQuantityInfo
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructQuantityInfo originally named QuantityInfo
 * Documentation : Type defining the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from the listing.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructQuantityInfo extends EbayShoppingWsdlClass
{
	/**
	 * The MinimumRemnantSet
	 * Meta informations extracted from the WSDL
	 * - documentation : This field enables the seller to avoid being left with 1 item in a multi-quanity, fixed- priced event ticket listing. A typical use case is event tickets in reserved, adjacent seats, or items that typically only sell if more than 1 can be purchased at once. <br> <br> At listing time, sellers specify the minimum number of items that should remain if a buyer doesn't purchase all the items. Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (Quantity-QuantitySold), eBay calculates the quantity of tickets a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).<br> <br> To remove this restriction when revising or relisting item, the seller would set the <b>MinimumRemnantSet</b> value to '1'.<br> <br> This field is currently only applicable for event ticket listings in US and CA, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
	 * - minOccurs : 0
	 * @var int
	 */
	public $MinimumRemnantSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for QuantityInfo
	 * @see parent::__construct()
	 * @param int $_minimumRemnantSet
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructQuantityInfo
	 */
	public function __construct($_minimumRemnantSet = NULL,$_any = NULL)
	{
		parent::__construct(array('MinimumRemnantSet'=>$_minimumRemnantSet,'any'=>$_any));
	}
	/**
	 * Get MinimumRemnantSet value
	 * @return int|null
	 */
	public function getMinimumRemnantSet()
	{
		return $this->MinimumRemnantSet;
	}
	/**
	 * Set MinimumRemnantSet value
	 * @param int $_minimumRemnantSet the MinimumRemnantSet
	 * @return int
	 */
	public function setMinimumRemnantSet($_minimumRemnantSet)
	{
		return ($this->MinimumRemnantSet = $_minimumRemnantSet);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructQuantityInfo::setAny()
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
	 * @return EbayShoppingStructQuantityInfo
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