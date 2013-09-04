<?php
/**
 * File for class EbayShoppingStructProductIDType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructProductIDType originally named ProductIDType
 * Documentation : Product ID has an attribute of ProductIDCodeType and a string value.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructProductIDType extends EbayShoppingWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - documentation : The nature of identifier being used. For FindHalfProducts, FindProducts, and FindReviewsAndGuides, only Reference, ISBN, UPC, and EAN are supported. Required when ProductID is specified.
	 * @var EbayShoppingEnumProductIDCodeType
	 */
	public $type;
	/**
	 * Constructor method for ProductIDType
	 * @see parent::__construct()
	 * @param string $__
	 * @param EbayShoppingEnumProductIDCodeType $_type
	 * @return EbayShoppingStructProductIDType
	 */
	public function __construct($__ = NULL,$_type = NULL)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Get _ value
	 * @return string|null
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set _ value
	 * @param string $__ the _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get type value
	 * @return EbayShoppingEnumProductIDCodeType|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @uses EbayShoppingEnumProductIDCodeType::valueIsValid()
	 * @param EbayShoppingEnumProductIDCodeType $_type the type
	 * @return EbayShoppingEnumProductIDCodeType
	 */
	public function setType($_type)
	{
		if(!EbayShoppingEnumProductIDCodeType::valueIsValid($_type))
		{
			return false;
		}
		return ($this->type = $_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructProductIDType
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