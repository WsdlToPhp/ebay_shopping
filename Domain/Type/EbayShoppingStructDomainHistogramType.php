<?php
/**
 * File for class EbayShoppingStructDomainHistogramType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructDomainHistogramType originally named DomainHistogramType
 * Documentation : A generic type used for histograms.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructDomainHistogramType extends EbayShoppingWsdlClass
{
	/**
	 * The Domain
	 * Meta informations extracted from the WSDL
	 * - documentation : Each histogram entry shows how many matching products were found in each matching domain. A domain is like a high-level category, or a group of categories whose items share the same basic product characteristics.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructHistogramEntryType
	 */
	public $Domain;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for DomainHistogramType
	 * @see parent::__construct()
	 * @param EbayShoppingStructHistogramEntryType $_domain
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructDomainHistogramType
	 */
	public function __construct($_domain = NULL,$_any = NULL)
	{
		parent::__construct(array('Domain'=>$_domain,'any'=>$_any));
	}
	/**
	 * Get Domain value
	 * @return EbayShoppingStructHistogramEntryType|null
	 */
	public function getDomain()
	{
		return $this->Domain;
	}
	/**
	 * Set Domain value
	 * @param EbayShoppingStructHistogramEntryType $_domain the Domain
	 * @return EbayShoppingStructHistogramEntryType
	 */
	public function setDomain($_domain)
	{
		return ($this->Domain = $_domain);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructDomainHistogramType::setAny()
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
	 * @return EbayShoppingStructDomainHistogramType
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