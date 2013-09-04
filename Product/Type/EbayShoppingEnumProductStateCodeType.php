<?php
/**
 * File for class EbayShoppingEnumProductStateCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumProductStateCodeType originally named ProductStateCodeType
 * Documentation : State of a catalog product that may have been updated, replaced, marked for deletion, or merged with another product.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumProductStateCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Update'
	 * Meta informations extracted from the WSDL
	 * - documentation : The product details have been updated. If your application currently uses the product for listing or searching, we recommend that you check to make sure the product data still meets your needs.
	 * @return string 'Update'
	 */
	const VALUE_UPDATE = 'Update';
	/**
	 * Constant for value 'UpdateMajor'
	 * Meta informations extracted from the WSDL
	 * - documentation : This product has changed. This product has been mapped to a newer product in the catalog that eBay (or Half.com) is currently using, and its details have been updated based on the new catalog data. The product reference ID remains the same (but the longer product ID string may have changed). If your application currently uses the product for searching, we recommend that you check to make sure the product data still meets your needs.
	 * @return string 'UpdateMajor'
	 */
	const VALUE_UPDATEMAJOR = 'UpdateMajor';
	/**
	 * Constant for value 'UpdateNoDetails'
	 * Meta informations extracted from the WSDL
	 * - documentation : This product was previously available in an earlier catalog, but it has not been mapped to a product in the catalog that eBay is currently using. It can still be used for searching, but it may contain fewer details than other products. If your application currently uses the product for searching, we recommend that you check to make sure the product data still meets your needs. Not applicable to Half.com.
	 * @return string 'UpdateNoDetails'
	 */
	const VALUE_UPDATENODETAILS = 'UpdateNoDetails';
	/**
	 * Constant for value 'Merge'
	 * Meta informations extracted from the WSDL
	 * - documentation : Some information in this product is scheduled to be merged into another product in the catalog that eBay (or Half.com) is currently using. This product may be removed from the system at any time. If your application currently uses the product for searching, we recommend that you update your application to use a product that is not scheduled to be merged or deleted.
	 * @return string 'Merge'
	 */
	const VALUE_MERGE = 'Merge';
	/**
	 * Constant for value 'Delete'
	 * Meta informations extracted from the WSDL
	 * - documentation : This product is marked for deletion, and it will not be mapped to another product. If your application currently uses the product for searching, we recommend that you update your application to use a product that is not scheduled to be merged or deleted.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_UPDATE
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_UPDATEMAJOR
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_UPDATENODETAILS
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_MERGE
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_DELETE
	 * @uses EbayShoppingEnumProductStateCodeType::VALUE_CUSTOMCODE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumProductStateCodeType::VALUE_UPDATE,EbayShoppingEnumProductStateCodeType::VALUE_UPDATEMAJOR,EbayShoppingEnumProductStateCodeType::VALUE_UPDATENODETAILS,EbayShoppingEnumProductStateCodeType::VALUE_MERGE,EbayShoppingEnumProductStateCodeType::VALUE_DELETE,EbayShoppingEnumProductStateCodeType::VALUE_CUSTOMCODE));
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