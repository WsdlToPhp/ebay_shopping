<?php
/**
 * File for class EbayShoppingStructPicturesType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructPicturesType originally named PicturesType
 * Documentation : Defines variation-specific pictures associated with one VariationSpecificName (e.g., Color) whose values differ across variations.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructPicturesType extends EbayShoppingWsdlClass
{
	/**
	 * The VariationSpecificName
	 * Meta informations extracted from the WSDL
	 * - documentation : One aspect of the variations that will be illustrated in the pictures for all variations. For example, if each variation is visually distinguished by color and the pictures show the different colors available, then specify "Color" as the name. The name must match one of the names specified in the variation specifics.
	 * - minOccurs : 0
	 * @var string
	 */
	public $VariationSpecificName;
	/**
	 * The VariationSpecificPictureSet
	 * Meta informations extracted from the WSDL
	 * - documentation : One or more pictures that help buyers distinguish the Variations. Multiple picture sets can be specified. For example, suppose a listing contains blue and black color variations, and VariationSpecificName=Color. In this case, one picture set could contain pictures of the blue shirts (e.g., front view, back view, and close-up of a trim detail), and another picture set could contain pictures of the black shirts.<br> <br> Sellers do not necessarily provide pictures for all values that correspond to the variation specific name. For example, a listing could have pictures depicting the blue and black color variations, but not the pink variations.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructVariationSpecificPictureSetType
	 */
	public $VariationSpecificPictureSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for PicturesType
	 * @see parent::__construct()
	 * @param string $_variationSpecificName
	 * @param EbayShoppingStructVariationSpecificPictureSetType $_variationSpecificPictureSet
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructPicturesType
	 */
	public function __construct($_variationSpecificName = NULL,$_variationSpecificPictureSet = NULL,$_any = NULL)
	{
		parent::__construct(array('VariationSpecificName'=>$_variationSpecificName,'VariationSpecificPictureSet'=>$_variationSpecificPictureSet,'any'=>$_any));
	}
	/**
	 * Get VariationSpecificName value
	 * @return string|null
	 */
	public function getVariationSpecificName()
	{
		return $this->VariationSpecificName;
	}
	/**
	 * Set VariationSpecificName value
	 * @param string $_variationSpecificName the VariationSpecificName
	 * @return string
	 */
	public function setVariationSpecificName($_variationSpecificName)
	{
		return ($this->VariationSpecificName = $_variationSpecificName);
	}
	/**
	 * Get VariationSpecificPictureSet value
	 * @return EbayShoppingStructVariationSpecificPictureSetType|null
	 */
	public function getVariationSpecificPictureSet()
	{
		return $this->VariationSpecificPictureSet;
	}
	/**
	 * Set VariationSpecificPictureSet value
	 * @param EbayShoppingStructVariationSpecificPictureSetType $_variationSpecificPictureSet the VariationSpecificPictureSet
	 * @return EbayShoppingStructVariationSpecificPictureSetType
	 */
	public function setVariationSpecificPictureSet($_variationSpecificPictureSet)
	{
		return ($this->VariationSpecificPictureSet = $_variationSpecificPictureSet);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructPicturesType::setAny()
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
	 * @return EbayShoppingStructPicturesType
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