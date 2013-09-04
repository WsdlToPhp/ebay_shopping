<?php
/**
 * File for class EbayShoppingStructUnitInfoType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructUnitInfoType originally named UnitInfoType
 * Documentation : This type provides information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit. eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructUnitInfoType extends EbayShoppingWsdlClass
{
	/**
	 * The UnitType
	 * Meta informations extracted from the WSDL
	 * - documentation : Designation of size, weight, volume or count to be used to specify the unit quantity of the item. The value can be one of the following: <br/><br/> <code>Kg 100g 10g L 100ml 10ml M M2 M3 Unit</code>
	 * - minOccurs : 0
	 * @var string
	 */
	public $UnitType;
	/**
	 * The UnitQuantity
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of units of size, weight, volume or count of the item in the specified unit type. eBay will divide the item price by this number to get the price per unit that will be displayed in the item listing for comparison purposes.
	 * - minOccurs : 0
	 * @var double
	 */
	public $UnitQuantity;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for UnitInfoType
	 * @see parent::__construct()
	 * @param string $_unitType
	 * @param double $_unitQuantity
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructUnitInfoType
	 */
	public function __construct($_unitType = NULL,$_unitQuantity = NULL,$_any = NULL)
	{
		parent::__construct(array('UnitType'=>$_unitType,'UnitQuantity'=>$_unitQuantity,'any'=>$_any));
	}
	/**
	 * Get UnitType value
	 * @return string|null
	 */
	public function getUnitType()
	{
		return $this->UnitType;
	}
	/**
	 * Set UnitType value
	 * @param string $_unitType the UnitType
	 * @return string
	 */
	public function setUnitType($_unitType)
	{
		return ($this->UnitType = $_unitType);
	}
	/**
	 * Get UnitQuantity value
	 * @return double|null
	 */
	public function getUnitQuantity()
	{
		return $this->UnitQuantity;
	}
	/**
	 * Set UnitQuantity value
	 * @param double $_unitQuantity the UnitQuantity
	 * @return double
	 */
	public function setUnitQuantity($_unitQuantity)
	{
		return ($this->UnitQuantity = $_unitQuantity);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructUnitInfoType::setAny()
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
	 * @return EbayShoppingStructUnitInfoType
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