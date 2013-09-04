<?php
/**
 * File for class EbayShoppingStructGetMultipleItemsRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetMultipleItemsRequestType originally named GetMultipleItemsRequestType
 * Documentation : Retrieves publicly available data for one or more listings. Use this call to retrieve much of the information that is visible on a listing's View Item page on the eBay Web site, such as title, prices, and basic shipping costs. Provide ItemID for every item for which you want information. This call returns the same minimal information that is returned by GetSingleItem, for each item with no IncludeSelector specified. (Use GetShippingCosts to retrieve more detailed shipping cost information for a given item.) Duplicated items are returned as a single item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetMultipleItemsRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The item ID that uniquely identifies the item listing for which to retrieve the data. You can provide a maximum of 20 item IDs. When making a URL request, repeating ItemID parameters must be specified as an indexed array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)= 300321408208& ItemID(2)=370214653822...</code>). <br><br> Alternatively, as a shortcut for URL requests, you can specify the item IDs as a comma-separated list in a single ItemID parameter (e.g., ...< code>&ItemID=130310421484,300321408208,370214653822...</code> ) for convenience. <br><br> You can determine an item's ID by calling findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site. Provide ItemID for every item for which you want information.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * The IncludeSelector
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p> <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p class="edef">Include Variations in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetSingleItem Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor method for GetMultipleItemsRequestType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @param string $_includeSelector
	 * @return EbayShoppingStructGetMultipleItemsRequestType
	 */
	public function __construct($_itemID = NULL,$_includeSelector = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_itemID,'IncludeSelector'=>$_includeSelector));
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
	 * Get IncludeSelector value
	 * @return string|null
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * Set IncludeSelector value
	 * @param string $_includeSelector the IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_includeSelector)
	{
		return ($this->IncludeSelector = $_includeSelector);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructGetMultipleItemsRequestType
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