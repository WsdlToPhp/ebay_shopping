<?php
/**
 * File for class EbayShoppingStructGetItemStatusRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetItemStatusRequestType originally named GetItemStatusRequestType
 * Documentation : Contains a single ItemID or an array of ItemIDs.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetItemStatusRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The item ID that uniquely identifies the item listing for which to retrieve the data. You can provide a maximum of 20 ItemIDs. Use a comma to separate ItemIDs.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * Constructor method for GetItemStatusRequestType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @return EbayShoppingStructGetItemStatusRequestType
	 */
	public function __construct($_itemID = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_itemID));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetItemStatusRequestType
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