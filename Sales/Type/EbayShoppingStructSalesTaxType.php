<?php
/**
 * File for class EbayShoppingStructSalesTaxType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructSalesTaxType originally named SalesTaxType
 * Documentation : Type for expressing sales tax data.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructSalesTaxType extends EbayShoppingWsdlClass
{
	/**
	 * The SalesTaxPercent
	 * Meta informations extracted from the WSDL
	 * - documentation : Percent of an item's price to be charged as the sales tax for the transaction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
	 * - minOccurs : 0
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The SalesTaxState
	 * Meta informations extracted from the WSDL
	 * - documentation : State or jurisdiction for which the sales tax is being collected. Only returned if the seller specified a value.
	 * - minOccurs : 0
	 * @var string
	 */
	public $SalesTaxState;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations extracted from the WSDL
	 * - documentation : (US only) Whether shipping costs were part of the base amount that was taxed. Flat or calculated shipping.
	 * - minOccurs : 0
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The SalesTaxAmount
	 * Meta informations extracted from the WSDL
	 * - documentation : (US only) The amount of sales tax, calculated for a transaction based on the SalesTaxPercent and pricing information.
	 * - minOccurs : 0
	 * @var EbayShoppingStructAmountType
	 */
	public $SalesTaxAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for SalesTaxType
	 * @see parent::__construct()
	 * @param float $_salesTaxPercent
	 * @param string $_salesTaxState
	 * @param boolean $_shippingIncludedInTax
	 * @param EbayShoppingStructAmountType $_salesTaxAmount
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructSalesTaxType
	 */
	public function __construct($_salesTaxPercent = NULL,$_salesTaxState = NULL,$_shippingIncludedInTax = NULL,$_salesTaxAmount = NULL,$_any = NULL)
	{
		parent::__construct(array('SalesTaxPercent'=>$_salesTaxPercent,'SalesTaxState'=>$_salesTaxState,'ShippingIncludedInTax'=>$_shippingIncludedInTax,'SalesTaxAmount'=>$_salesTaxAmount,'any'=>$_any));
	}
	/**
	 * Get SalesTaxPercent value
	 * @return float|null
	 */
	public function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * Set SalesTaxPercent value
	 * @param float $_salesTaxPercent the SalesTaxPercent
	 * @return float
	 */
	public function setSalesTaxPercent($_salesTaxPercent)
	{
		return ($this->SalesTaxPercent = $_salesTaxPercent);
	}
	/**
	 * Get SalesTaxState value
	 * @return string|null
	 */
	public function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}
	/**
	 * Set SalesTaxState value
	 * @param string $_salesTaxState the SalesTaxState
	 * @return string
	 */
	public function setSalesTaxState($_salesTaxState)
	{
		return ($this->SalesTaxState = $_salesTaxState);
	}
	/**
	 * Get ShippingIncludedInTax value
	 * @return boolean|null
	 */
	public function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
	}
	/**
	 * Set ShippingIncludedInTax value
	 * @param boolean $_shippingIncludedInTax the ShippingIncludedInTax
	 * @return boolean
	 */
	public function setShippingIncludedInTax($_shippingIncludedInTax)
	{
		return ($this->ShippingIncludedInTax = $_shippingIncludedInTax);
	}
	/**
	 * Get SalesTaxAmount value
	 * @return EbayShoppingStructAmountType|null
	 */
	public function getSalesTaxAmount()
	{
		return $this->SalesTaxAmount;
	}
	/**
	 * Set SalesTaxAmount value
	 * @param EbayShoppingStructAmountType $_salesTaxAmount the SalesTaxAmount
	 * @return EbayShoppingStructAmountType
	 */
	public function setSalesTaxAmount($_salesTaxAmount)
	{
		return ($this->SalesTaxAmount = $_salesTaxAmount);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructSalesTaxType::setAny()
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
	 * @return EbayShoppingStructSalesTaxType
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