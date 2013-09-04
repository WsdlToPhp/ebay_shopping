<?php
/**
 * File for class EbayShoppingStructFeedbackPeriodType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFeedbackPeriodType originally named FeedbackPeriodType
 * Documentation : Contains the data for one type of feedback for one predefined time period. Parent FeedbackPeriodArrayType object indicates the type of feedback counted: positive, neutral, negative, or total.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFeedbackPeriodType extends EbayShoppingWsdlClass
{
	/**
	 * The PeriodInDays
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the time period for the feedback count. Returns a value indicating the number of days prior to the call for which feedbacks of the particular type are counted.
	 * - minOccurs : 0
	 * @var int
	 */
	public $PeriodInDays;
	/**
	 * The Count
	 * Meta informations extracted from the WSDL
	 * - documentation : Count of the feedbacks received by the user for the time period prior to the call indicated in PeriodInDays.
	 * - minOccurs : 0
	 * @var long
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for FeedbackPeriodType
	 * @see parent::__construct()
	 * @param int $_periodInDays
	 * @param long $_count
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructFeedbackPeriodType
	 */
	public function __construct($_periodInDays = NULL,$_count = NULL,$_any = NULL)
	{
		parent::__construct(array('PeriodInDays'=>$_periodInDays,'Count'=>$_count,'any'=>$_any));
	}
	/**
	 * Get PeriodInDays value
	 * @return int|null
	 */
	public function getPeriodInDays()
	{
		return $this->PeriodInDays;
	}
	/**
	 * Set PeriodInDays value
	 * @param int $_periodInDays the PeriodInDays
	 * @return int
	 */
	public function setPeriodInDays($_periodInDays)
	{
		return ($this->PeriodInDays = $_periodInDays);
	}
	/**
	 * Get Count value
	 * @return long|null
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Count value
	 * @param long $_count the Count
	 * @return long
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
	 * @uses EbayShoppingStructFeedbackPeriodType::setAny()
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
	 * @return EbayShoppingStructFeedbackPeriodType
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