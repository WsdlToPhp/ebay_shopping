<?php
/**
 * File for class EbayShoppingStructVariationsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructVariationsType originally named VariationsType
 * Documentation : Variations are multiple similar (but not identical) items in a single fixed-price (or Store Inventory Format) listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructVariationsType extends EbayShoppingWsdlClass
{
	/**
	 * The Variation
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains data that distinguishes one variation from another. For example, if the items vary by color and size, each Variation node specifies a combination of one of those colors and sizes.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructVariationType
	 */
	public $Variation;
	/**
	 * The Pictures
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains a set of pictures that correspond to one of the variation specifics, such as Color. For example, if a listing has blue and black color variations, a listing could specify the name Color as an organizing mechanism for all the pictures, and then include a set of pictures for the blue variations and another set of pictures for the black variations.<br> <br> <span class="tablenote"><b>Note:</b> Only one Pictures node is currently returned for a listing. However, the node has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructPicturesType
	 */
	public $Pictures;
	/**
	 * The VariationSpecificsSet
	 * Meta informations extracted from the WSDL
	 * - documentation : A list of all variation names and values that are defined on the item. This could include values that were previously defined (but no longer for sale).<br> <br> eBay uses this list to configure variation selection widgets that appear on eBay's View Item page. For example, if Color and Size are names in the list, then eBay's View Item page displays Color and Size drop-down lists to help a buyer choose a variation of interest.<br> <br> The order in which the names and values are returned matches the order in which the selection widgets appear on the View Item page. For example, if the names "Color", then "Size", and then "Sleeve Style" are returned, the View Item page shows drop-down lists with those labels in that order. For "Size", if the values returned are "S", "M", and then "L", the View Item page shows the values in that order in the Size drop-down list.
	 * - minOccurs : 0
	 * @var EbayShoppingStructNameValueListArrayType
	 */
	public $VariationSpecificsSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for VariationsType
	 * @see parent::__construct()
	 * @param EbayShoppingStructVariationType $_variation
	 * @param EbayShoppingStructPicturesType $_pictures
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecificsSet
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructVariationsType
	 */
	public function __construct($_variation = NULL,$_pictures = NULL,$_variationSpecificsSet = NULL,$_any = NULL)
	{
		parent::__construct(array('Variation'=>$_variation,'Pictures'=>$_pictures,'VariationSpecificsSet'=>($_variationSpecificsSet instanceof EbayShoppingStructNameValueListArrayType)?$_variationSpecificsSet:new EbayShoppingStructNameValueListArrayType($_variationSpecificsSet),'any'=>$_any));
	}
	/**
	 * Get Variation value
	 * @return EbayShoppingStructVariationType|null
	 */
	public function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * Set Variation value
	 * @param EbayShoppingStructVariationType $_variation the Variation
	 * @return EbayShoppingStructVariationType
	 */
	public function setVariation($_variation)
	{
		return ($this->Variation = $_variation);
	}
	/**
	 * Get Pictures value
	 * @return EbayShoppingStructPicturesType|null
	 */
	public function getPictures()
	{
		return $this->Pictures;
	}
	/**
	 * Set Pictures value
	 * @param EbayShoppingStructPicturesType $_pictures the Pictures
	 * @return EbayShoppingStructPicturesType
	 */
	public function setPictures($_pictures)
	{
		return ($this->Pictures = $_pictures);
	}
	/**
	 * Get VariationSpecificsSet value
	 * @return EbayShoppingStructNameValueListArrayType|null
	 */
	public function getVariationSpecificsSet()
	{
		return $this->VariationSpecificsSet;
	}
	/**
	 * Set VariationSpecificsSet value
	 * @param EbayShoppingStructNameValueListArrayType $_variationSpecificsSet the VariationSpecificsSet
	 * @return EbayShoppingStructNameValueListArrayType
	 */
	public function setVariationSpecificsSet($_variationSpecificsSet)
	{
		return ($this->VariationSpecificsSet = $_variationSpecificsSet);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructVariationsType::setAny()
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
	 * @return EbayShoppingStructVariationsType
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