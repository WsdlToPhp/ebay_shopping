<?php
/**
 * File for class EbayShoppingStructVariationSpecificPictureSetType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructVariationSpecificPictureSetType originally named VariationSpecificPictureSetType
 * Documentation : At least one container is required (minOccurs="1") if Pictures container is present in the request.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructVariationSpecificPictureSetType extends EbayShoppingWsdlClass
{
	/**
	 * The VariationSpecificValue
	 * Meta informations extracted from the WSDL
	 * - documentation : A value that is associated with VariationSpecificName. For example, suppose this set of pictures is showing blue shirts, and some of the variations include Color=Blue in their variation specifics. If VariationSpecificName is "Color", then VariationSpecificValue would be "Blue".
	 * - minOccurs : 0
	 * @var string
	 */
	public $VariationSpecificValue;
	/**
	 * The PictureURL
	 * Meta informations extracted from the WSDL
	 * - documentation : The URL of a picture that is associated with VariationSpecificValue. The first PictureURL is also used as the gallery picture for applicable variations. For example, if the picture set contains pictures of red shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the first picture is used as the gallery picture for all the red shirt variations.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The GalleryURL
	 * Meta informations extracted from the WSDL
	 * - documentation : Not applicable.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for VariationSpecificPictureSetType
	 * @see parent::__construct()
	 * @param string $_variationSpecificValue
	 * @param anyURI $_pictureURL
	 * @param anyURI $_galleryURL
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructVariationSpecificPictureSetType
	 */
	public function __construct($_variationSpecificValue = NULL,$_pictureURL = NULL,$_galleryURL = NULL,$_any = NULL)
	{
		parent::__construct(array('VariationSpecificValue'=>$_variationSpecificValue,'PictureURL'=>$_pictureURL,'GalleryURL'=>$_galleryURL,'any'=>$_any));
	}
	/**
	 * Get VariationSpecificValue value
	 * @return string|null
	 */
	public function getVariationSpecificValue()
	{
		return $this->VariationSpecificValue;
	}
	/**
	 * Set VariationSpecificValue value
	 * @param string $_variationSpecificValue the VariationSpecificValue
	 * @return string
	 */
	public function setVariationSpecificValue($_variationSpecificValue)
	{
		return ($this->VariationSpecificValue = $_variationSpecificValue);
	}
	/**
	 * Get PictureURL value
	 * @return anyURI|null
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set PictureURL value
	 * @param anyURI $_pictureURL the PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_pictureURL)
	{
		return ($this->PictureURL = $_pictureURL);
	}
	/**
	 * Get GalleryURL value
	 * @return anyURI|null
	 */
	public function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * Set GalleryURL value
	 * @param anyURI $_galleryURL the GalleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_galleryURL)
	{
		return ($this->GalleryURL = $_galleryURL);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructVariationSpecificPictureSetType::setAny()
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
	 * @return EbayShoppingStructVariationSpecificPictureSetType
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