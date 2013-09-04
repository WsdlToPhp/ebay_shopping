<?php
/**
 * File for class EbayShoppingStructGetSingleItemRequestType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructGetSingleItemRequestType originally named GetSingleItemRequestType
 * Documentation : Retrieves publicly available data for a single listing. Use this call to retrieve most of the information that is visible on a listing's View Item page on the eBay Web site, such as title, description, prices, basic seller and bidder information, and other details about the listing.Also returns basic shipping costs. For more shipping details, use GetShippingCosts.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructGetSingleItemRequestType extends EbayShoppingStructAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations extracted from the WSDL
	 * - documentation : The item ID that uniquely identifies the item listing for which to retrieve the data.<br> <br> You can determine an item's ID by calling findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ItemID;
	/**
	 * The VariationSKU
	 * Meta informations extracted from the WSDL
	 * - documentation : Variation-level SKU that uniquely identifes a variation within the listing identified by ItemID. Only applicable when the seller included variation-level SKU (Variation.SKU) values. Retrieves all the usual Item fields, but limits the Variations content to the specified variation. If not specified, the response includes all variations.
	 * - minOccurs : 0
	 * @var string
	 */
	public $VariationSKU;
	/**
	 * The VariationSpecifics
	 * Meta informations extracted from the WSDL
	 * - documentation : Name-value pairs that identify one or more variations within the listing identified by ItemID. Only applicable when the seller listed the item with variations. Retrieves all the usual Item fields, but limits the Variations content to the specified variation(s). If the specified pairs do not match any variation, eBay returns all variations.<br> <br> To retrieve only one variation, specify the full set of name/value pairs that match all the name-value pairs of one variation. <br> <br> To retrieve multiple variations (using a wildcard), specify one or more name/value pairs that partially match the desired variations. For example, if the listing contains variations for shirts in different colors and sizes, specify Color as Red (and no other name/value pairs) to retrieve all the red shirts in all sizes (but no other colors).
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The IncludeSelector
	 * Meta informations extracted from the WSDL
	 * - documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p> <p class="edef">Include the text Description(no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p> <p class="edef">Include basic shipping costs in the response. (Use GetShippingCosts to retrieve more details.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p class="edef">Include Variations in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Compatibility</p> <p class="edef">Include Compatibility in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetSingleItem Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * - minOccurs : 0
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor method for GetSingleItemRequestType
	 * @see parent::__construct()
	 * @param string $_itemID
	 * @param string $_variationSKU
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecifics
	 * @param string $_includeSelector
	 * @return EbayShoppingStructGetSingleItemRequestType
	 */
	public function __construct($_itemID = NULL,$_variationSKU = NULL,$_variationSpecifics = NULL,$_includeSelector = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_itemID,'VariationSKU'=>$_variationSKU,'VariationSpecifics'=>($_variationSpecifics instanceof EbayShoppingStructNameValueListArrayType)?$_variationSpecifics:new EbayShoppingStructNameValueListArrayType($_variationSpecifics),'IncludeSelector'=>$_includeSelector));
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
	 * Get VariationSKU value
	 * @return string|null
	 */
	public function getVariationSKU()
	{
		return $this->VariationSKU;
	}
	/**
	 * Set VariationSKU value
	 * @param string $_variationSKU the VariationSKU
	 * @return string
	 */
	public function setVariationSKU($_variationSKU)
	{
		return ($this->VariationSKU = $_variationSKU);
	}
	/**
	 * Get VariationSpecifics value
	 * @return EbayShoppingStructNameValueListArrayType|null
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * Set VariationSpecifics value
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecifics the VariationSpecifics
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function setVariationSpecifics($_variationSpecifics)
	{
		return ($this->VariationSpecifics = $_variationSpecifics);
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
	 * @return EbayShoppingStructGetSingleItemRequestType
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