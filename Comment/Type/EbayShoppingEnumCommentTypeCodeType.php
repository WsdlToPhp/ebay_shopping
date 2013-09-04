<?php
/**
 * File for class EbayShoppingEnumCommentTypeCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumCommentTypeCodeType originally named CommentTypeCodeType
 * Documentation : CommentTypeCodeType - Type declaration to be used by other schema. These are the possible codes to specify the types of feedback/comment. Additional information about feedback is available in the online Help of the eBay site.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumCommentTypeCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Positive'
	 * Meta informations extracted from the WSDL
	 * - documentation : Positive feedback. Increases total feedback score.
	 * @return string 'Positive'
	 */
	const VALUE_POSITIVE = 'Positive';
	/**
	 * Constant for value 'Neutral'
	 * Meta informations extracted from the WSDL
	 * - documentation : Neutral feedback. No effect on total feedback score.
	 * @return string 'Neutral'
	 */
	const VALUE_NEUTRAL = 'Neutral';
	/**
	 * Constant for value 'Negative'
	 * Meta informations extracted from the WSDL
	 * - documentation : Negative feedback. Decreases total feedback score.
	 * @return string 'Negative'
	 */
	const VALUE_NEGATIVE = 'Negative';
	/**
	 * Constant for value 'Withdrawn'
	 * Meta informations extracted from the WSDL
	 * - documentation : Withdrawn feedback. Removes the effect of the original feedback on total feedback score. Comments from withdrawn feedback are still visible.
	 * @return string 'Withdrawn'
	 */
	const VALUE_WITHDRAWN = 'Withdrawn';
	/**
	 * Constant for value 'IndependentlyWithdrawn'
	 * Meta informations extracted from the WSDL
	 * - documentation : Applies to the eBay Motors site only. Feedback is withdrawn based on the decision of a third party.
	 * @return string 'IndependentlyWithdrawn'
	 */
	const VALUE_INDEPENDENTLYWITHDRAWN = 'IndependentlyWithdrawn';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_POSITIVE
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_NEUTRAL
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_NEGATIVE
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_WITHDRAWN
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_INDEPENDENTLYWITHDRAWN
	 * @uses EbayShoppingEnumCommentTypeCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumCommentTypeCodeType::VALUE_POSITIVE,EbayShoppingEnumCommentTypeCodeType::VALUE_NEUTRAL,EbayShoppingEnumCommentTypeCodeType::VALUE_NEGATIVE,EbayShoppingEnumCommentTypeCodeType::VALUE_WITHDRAWN,EbayShoppingEnumCommentTypeCodeType::VALUE_INDEPENDENTLYWITHDRAWN,EbayShoppingEnumCommentTypeCodeType::VALUE_CUSTOMCODE));
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