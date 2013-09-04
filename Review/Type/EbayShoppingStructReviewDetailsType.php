<?php
/**
 * File for class EbayShoppingStructReviewDetailsType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructReviewDetailsType originally named ReviewDetailsType
 * Documentation : Contains product reviews written by eBay members.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructReviewDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The AverageRating
	 * Meta informations extracted from the WSDL
	 * - documentation : The product's average rating (out of 5) based on all reviews. For example, a value like 4.5 would mean the average rating is 4.5 out of 5. (See ReviewCount for the total number of reviews.)
	 * - minOccurs : 0
	 * @var float
	 */
	public $AverageRating;
	/**
	 * The Review
	 * Meta informations extracted from the WSDL
	 * - documentation : An eBay member's review of the product.
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var EbayShoppingStructReviewType
	 */
	public $Review;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for ReviewDetailsType
	 * @see parent::__construct()
	 * @param float $_averageRating
	 * @param EbayShoppingStructReviewType $_review
	 * @param DOMDocument $_any
	 * @return EbayShoppingStructReviewDetailsType
	 */
	public function __construct($_averageRating = NULL,$_review = NULL,$_any = NULL)
	{
		parent::__construct(array('AverageRating'=>$_averageRating,'Review'=>$_review,'any'=>$_any));
	}
	/**
	 * Get AverageRating value
	 * @return float|null
	 */
	public function getAverageRating()
	{
		return $this->AverageRating;
	}
	/**
	 * Set AverageRating value
	 * @param float $_averageRating the AverageRating
	 * @return float
	 */
	public function setAverageRating($_averageRating)
	{
		return ($this->AverageRating = $_averageRating);
	}
	/**
	 * Get Review value
	 * @return EbayShoppingStructReviewType|null
	 */
	public function getReview()
	{
		return $this->Review;
	}
	/**
	 * Set Review value
	 * @param EbayShoppingStructReviewType $_review the Review
	 * @return EbayShoppingStructReviewType
	 */
	public function setReview($_review)
	{
		return ($this->Review = $_review);
	}
	/**
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses EbayShoppingStructReviewDetailsType::setAny()
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
	 * @return EbayShoppingStructReviewDetailsType
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