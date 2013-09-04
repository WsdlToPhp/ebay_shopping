<?php
/**
 * File for class EbayShoppingStructHistogramEntryType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructHistogramEntryType originally named HistogramEntryType
 * Documentation : A generic histogram entry type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructHistogramEntryType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations extracted from the WSDL
	 * - documentation : This is the domain name.<br> <br> A product can be mapped to more than one domain. This means that even if a name appears in this histogram and the Count is greater than 1, you won't necessarily see the same name returned for each returned product (in the Product node of the response). That is, Product.DomainName only returns the most applicable domain name (as determined by eBay).
	 * - minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Count
	 * Meta informations extracted from the WSDL
	 * - documentation : This is the number of products found in the domain. If a product is mapped to more than one domain, it is counted separately for each domain. (For example, if the same product name appears in both Children's Books and Fiction Books, the count for both of these domains will include that product.) This means you cannot sum the product counts to determine the total number of matching products across all domains. The histogram is only intended to show the number of matching products in each individual domain.
	 * - minOccurs : 0
	 * @var int
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for HistogramEntryType
	 * @see parent::__construct()
	 * @param string $_name
	 * @param int $_count
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructHistogramEntryType
	 */
	public function __construct($_name = NULL,$_count = NULL,$_any = NULL)
	{
		parent::__construct(array('Name'=>$_name,'Count'=>$_count,'any'=>$_any));
	}
	/**
	 * Get Name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Name value
	 * @param string $_name the Name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->Name = $_name);
	}
	/**
	 * Get Count value
	 * @return int|null
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Count value
	 * @param int $_count the Count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->Count = $_count);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructHistogramEntryType::setAny()
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
	 * @return EbayShoppingStructHistogramEntryType
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