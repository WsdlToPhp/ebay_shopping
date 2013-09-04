<?php
/**
 * File for class EbayShoppingStructReturnPolicyType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructReturnPolicyType originally named ReturnPolicyType
 * Documentation : Type for the return policy details of an item.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructReturnPolicyType extends EbayShoppingWsdlClass
{
	/**
	 * The Refund
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies how a refund will be made, e.g. as an exchange.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Refund;
	/**
	 * The ReturnsWithin
	 * Meta informations extracted from the WSDL
	 * - documentation : Specifies the length of time in which the item must be returned under the return policy.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReturnsWithin;
	/**
	 * The ReturnsAccepted
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about returns accepted.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ReturnsAccepted;
	/**
	 * The Description
	 * Meta informations extracted from the WSDL
	 * - documentation : A description of the return policy for the item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The WarrantyOffered
	 * Meta informations extracted from the WSDL
	 * - documentation : Information about the warranty offered.
	 * - minOccurs : 0
	 * @var string
	 */
	public $WarrantyOffered;
	/**
	 * The WarrantyType
	 * Meta informations extracted from the WSDL
	 * - documentation : The type of warranty offered.
	 * - minOccurs : 0
	 * @var string
	 */
	public $WarrantyType;
	/**
	 * The WarrantyDuration
	 * Meta informations extracted from the WSDL
	 * - documentation : The length of the warranty offered.
	 * - minOccurs : 0
	 * @var string
	 */
	public $WarrantyDuration;
	/**
	 * The EAN
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains the EAN.
	 * - minOccurs : 0
	 * @var string
	 */
	public $EAN;
	/**
	 * The ShippingCostPaidBy
	 * Meta informations extracted from the WSDL
	 * - documentation : The party who pays the cost of shipping for a returned item.
	 * - minOccurs : 0
	 * @var string
	 */
	public $ShippingCostPaidBy;
	/**
	 * The RestockingFeeValue
	 * Meta informations extracted from the WSDL
	 * - documentation : Display string that indicates the restocking fee charged by the seller for returned items. This value is directly related to the <b>RestockingFeeValueOption</b> value, with the difference being that applications can use <b>RestockingFeeValue</b> to present the <b>RestockingFeeValueOption</b> value buttons or drop-down lists.
	 * - minOccurs : 0
	 * @var token
	 */
	public $RestockingFeeValue;
	/**
	 * The RestockingFeeValueOption
	 * Meta informations extracted from the WSDL
	 * - documentation : This enumeration value indicates the restocking fee charged by the seller for returned items. In order to charge the buyer a restocking fee when an item is returned, a US seller must input a restocking fee value as part of the return policy.
	 * - minOccurs : 0
	 * @var token
	 */
	public $RestockingFeeValueOption;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ReturnPolicyType
	 * @see parent::__construct()
	 * @param string $_refund
	 * @param string $_returnsWithin
	 * @param string $_returnsAccepted
	 * @param string $_description
	 * @param string $_warrantyOffered
	 * @param string $_warrantyType
	 * @param string $_warrantyDuration
	 * @param string $_eAN
	 * @param string $_shippingCostPaidBy
	 * @param token $_restockingFeeValue
	 * @param token $_restockingFeeValueOption
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructReturnPolicyType
	 */
	public function __construct($_refund = NULL,$_returnsWithin = NULL,$_returnsAccepted = NULL,$_description = NULL,$_warrantyOffered = NULL,$_warrantyType = NULL,$_warrantyDuration = NULL,$_eAN = NULL,$_shippingCostPaidBy = NULL,$_restockingFeeValue = NULL,$_restockingFeeValueOption = NULL,$_any = NULL)
	{
		parent::__construct(array('Refund'=>$_refund,'ReturnsWithin'=>$_returnsWithin,'ReturnsAccepted'=>$_returnsAccepted,'Description'=>$_description,'WarrantyOffered'=>$_warrantyOffered,'WarrantyType'=>$_warrantyType,'WarrantyDuration'=>$_warrantyDuration,'EAN'=>$_eAN,'ShippingCostPaidBy'=>$_shippingCostPaidBy,'RestockingFeeValue'=>$_restockingFeeValue,'RestockingFeeValueOption'=>$_restockingFeeValueOption,'any'=>$_any));
	}
	/**
	 * Get Refund value
	 * @return string|null
	 */
	public function getRefund()
	{
		return $this->Refund;
	}
	/**
	 * Set Refund value
	 * @param string $_refund the Refund
	 * @return string
	 */
	public function setRefund($_refund)
	{
		return ($this->Refund = $_refund);
	}
	/**
	 * Get ReturnsWithin value
	 * @return string|null
	 */
	public function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}
	/**
	 * Set ReturnsWithin value
	 * @param string $_returnsWithin the ReturnsWithin
	 * @return string
	 */
	public function setReturnsWithin($_returnsWithin)
	{
		return ($this->ReturnsWithin = $_returnsWithin);
	}
	/**
	 * Get ReturnsAccepted value
	 * @return string|null
	 */
	public function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}
	/**
	 * Set ReturnsAccepted value
	 * @param string $_returnsAccepted the ReturnsAccepted
	 * @return string
	 */
	public function setReturnsAccepted($_returnsAccepted)
	{
		return ($this->ReturnsAccepted = $_returnsAccepted);
	}
	/**
	 * Get Description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Description value
	 * @param string $_description the Description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->Description = $_description);
	}
	/**
	 * Get WarrantyOffered value
	 * @return string|null
	 */
	public function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}
	/**
	 * Set WarrantyOffered value
	 * @param string $_warrantyOffered the WarrantyOffered
	 * @return string
	 */
	public function setWarrantyOffered($_warrantyOffered)
	{
		return ($this->WarrantyOffered = $_warrantyOffered);
	}
	/**
	 * Get WarrantyType value
	 * @return string|null
	 */
	public function getWarrantyType()
	{
		return $this->WarrantyType;
	}
	/**
	 * Set WarrantyType value
	 * @param string $_warrantyType the WarrantyType
	 * @return string
	 */
	public function setWarrantyType($_warrantyType)
	{
		return ($this->WarrantyType = $_warrantyType);
	}
	/**
	 * Get WarrantyDuration value
	 * @return string|null
	 */
	public function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}
	/**
	 * Set WarrantyDuration value
	 * @param string $_warrantyDuration the WarrantyDuration
	 * @return string
	 */
	public function setWarrantyDuration($_warrantyDuration)
	{
		return ($this->WarrantyDuration = $_warrantyDuration);
	}
	/**
	 * Get EAN value
	 * @return string|null
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set EAN value
	 * @param string $_eAN the EAN
	 * @return string
	 */
	public function setEAN($_eAN)
	{
		return ($this->EAN = $_eAN);
	}
	/**
	 * Get ShippingCostPaidBy value
	 * @return string|null
	 */
	public function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
	}
	/**
	 * Set ShippingCostPaidBy value
	 * @param string $_shippingCostPaidBy the ShippingCostPaidBy
	 * @return string
	 */
	public function setShippingCostPaidBy($_shippingCostPaidBy)
	{
		return ($this->ShippingCostPaidBy = $_shippingCostPaidBy);
	}
	/**
	 * Get RestockingFeeValue value
	 * @return token|null
	 */
	public function getRestockingFeeValue()
	{
		return $this->RestockingFeeValue;
	}
	/**
	 * Set RestockingFeeValue value
	 * @param token $_restockingFeeValue the RestockingFeeValue
	 * @return token
	 */
	public function setRestockingFeeValue($_restockingFeeValue)
	{
		return ($this->RestockingFeeValue = $_restockingFeeValue);
	}
	/**
	 * Get RestockingFeeValueOption value
	 * @return token|null
	 */
	public function getRestockingFeeValueOption()
	{
		return $this->RestockingFeeValueOption;
	}
	/**
	 * Set RestockingFeeValueOption value
	 * @param token $_restockingFeeValueOption the RestockingFeeValueOption
	 * @return token
	 */
	public function setRestockingFeeValueOption($_restockingFeeValueOption)
	{
		return ($this->RestockingFeeValueOption = $_restockingFeeValueOption);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructReturnPolicyType::setAny()
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
	 * @return EbayShoppingStructReturnPolicyType
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