<?php
/**
 * File for class EbayShoppingEnumSiteCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumSiteCodeType originally named SiteCodeType
 * Documentation : eBay sites (by the country in which each resides) onwhich a user is registered and on which items can be listed.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumSiteCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'US'
	 * Meta informations extracted from the WSDL
	 * - documentation : USA, site ID 0, abbreviation US, currency USD.
	 * @return string 'US'
	 */
	const VALUE_US = 'US';
	/**
	 * Constant for value 'Canada'
	 * Meta informations extracted from the WSDL
	 * - documentation : Canada, site ID 2, abbreviation CA, currencies CAD and USD.
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constant for value 'UK'
	 * Meta informations extracted from the WSDL
	 * - documentation : United Kingdom, site ID 3, abbreviation UK, currency GBP.
	 * @return string 'UK'
	 */
	const VALUE_UK = 'UK';
	/**
	 * Constant for value 'Australia'
	 * Meta informations extracted from the WSDL
	 * - documentation : Australia, site ID 15, abbreviation AU, currency AUD.
	 * @return string 'Australia'
	 */
	const VALUE_AUSTRALIA = 'Australia';
	/**
	 * Constant for value 'Austria'
	 * Meta informations extracted from the WSDL
	 * - documentation : Austria, site ID 16, abbreviation AT, currency EUR.
	 * @return string 'Austria'
	 */
	const VALUE_AUSTRIA = 'Austria';
	/**
	 * Constant for value 'Belgium_French'
	 * Meta informations extracted from the WSDL
	 * - documentation : Belgium (French), site ID 23, abbreviation BEFR, currency EUR.
	 * @return string 'Belgium_French'
	 */
	const VALUE_BELGIUM_FRENCH = 'Belgium_French';
	/**
	 * Constant for value 'France'
	 * Meta informations extracted from the WSDL
	 * - documentation : France, site ID 71, abbreviation FR, currency EUR.
	 * @return string 'France'
	 */
	const VALUE_FRANCE = 'France';
	/**
	 * Constant for value 'Germany'
	 * Meta informations extracted from the WSDL
	 * - documentation : Germany, site ID 77, abbreviation DE, currency EUR.
	 * @return string 'Germany'
	 */
	const VALUE_GERMANY = 'Germany';
	/**
	 * Constant for value 'Italy'
	 * Meta informations extracted from the WSDL
	 * - documentation : Italy, site ID 101, abbreviation IT, currency EUR.
	 * @return string 'Italy'
	 */
	const VALUE_ITALY = 'Italy';
	/**
	 * Constant for value 'Belgium_Dutch'
	 * Meta informations extracted from the WSDL
	 * - documentation : Belgium (Dutch), site ID 123, abbreviation BENL, currency EUR.
	 * @return string 'Belgium_Dutch'
	 */
	const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
	/**
	 * Constant for value 'Netherlands'
	 * Meta informations extracted from the WSDL
	 * - documentation : Netherlands, site ID 146, abbreviation NL, currency EUR.
	 * @return string 'Netherlands'
	 */
	const VALUE_NETHERLANDS = 'Netherlands';
	/**
	 * Constant for value 'Spain'
	 * Meta informations extracted from the WSDL
	 * - documentation : Spain, site ID 186, abbreviation ES, currency EUR.
	 * @return string 'Spain'
	 */
	const VALUE_SPAIN = 'Spain';
	/**
	 * Constant for value 'Switzerland'
	 * Meta informations extracted from the WSDL
	 * - documentation : Switzerland, site ID 193, abbreviation CH, currency CHF.
	 * @return string 'Switzerland'
	 */
	const VALUE_SWITZERLAND = 'Switzerland';
	/**
	 * Constant for value 'Taiwan'
	 * Meta informations extracted from the WSDL
	 * - documentation : Taiwan, site ID 196, abbreviation TW, currency TWD.
	 * @return string 'Taiwan'
	 */
	const VALUE_TAIWAN = 'Taiwan';
	/**
	 * Constant for value 'eBayMotors'
	 * Meta informations extracted from the WSDL
	 * - documentation : eBay Motors, site ID 100, currency USD.
	 * @return string 'eBayMotors'
	 */
	const VALUE_EBAYMOTORS = 'eBayMotors';
	/**
	 * Constant for value 'HongKong'
	 * Meta informations extracted from the WSDL
	 * - documentation : Hong Kong, site ID 201, abbreviation HK, currency HKD.
	 * @return string 'HongKong'
	 */
	const VALUE_HONGKONG = 'HongKong';
	/**
	 * Constant for value 'Singapore'
	 * Meta informations extracted from the WSDL
	 * - documentation : Singapore, site ID 216, abbreviation SG, currency SGD.
	 * @return string 'Singapore'
	 */
	const VALUE_SINGAPORE = 'Singapore';
	/**
	 * Constant for value 'India'
	 * Meta informations extracted from the WSDL
	 * - documentation : India, site ID 203, abbreviation IN, currency INR.
	 * @return string 'India'
	 */
	const VALUE_INDIA = 'India';
	/**
	 * Constant for value 'China'
	 * Meta informations extracted from the WSDL
	 * - documentation : China, site ID 223, abbreviation CN, currency CNY.
	 * @return string 'China'
	 */
	const VALUE_CHINA = 'China';
	/**
	 * Constant for value 'Ireland'
	 * Meta informations extracted from the WSDL
	 * - documentation : Ireland, site ID 205, abbreviation IE, currency EUR.
	 * @return string 'Ireland'
	 */
	const VALUE_IRELAND = 'Ireland';
	/**
	 * Constant for value 'Malaysia'
	 * Meta informations extracted from the WSDL
	 * - documentation : Malaysia, site ID 207, abbreviation MY, currency MYR.
	 * @return string 'Malaysia'
	 */
	const VALUE_MALAYSIA = 'Malaysia';
	/**
	 * Constant for value 'Philippines'
	 * Meta informations extracted from the WSDL
	 * - documentation : Philippines, site ID 211, abbreviation PH, currency PHP.
	 * @return string 'Philippines'
	 */
	const VALUE_PHILIPPINES = 'Philippines';
	/**
	 * Constant for value 'Poland'
	 * Meta informations extracted from the WSDL
	 * - documentation : Poland, site ID 212, abbreviation PL, currency PLN.
	 * @return string 'Poland'
	 */
	const VALUE_POLAND = 'Poland';
	/**
	 * Constant for value 'Sweden'
	 * Meta informations extracted from the WSDL
	 * - documentation : Sweden, site ID 218, abbreviation SE, currency SEK.
	 * @return string 'Sweden'
	 */
	const VALUE_SWEDEN = 'Sweden';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'CanadaFrench'
	 * Meta informations extracted from the WSDL
	 * - documentation : CanadaFrench, site ID 210, abbreviation CAFR, currencies CAD and USD.
	 * @return string 'CanadaFrench'
	 */
	const VALUE_CANADAFRENCH = 'CanadaFrench';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_US
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_CANADA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_UK
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_AUSTRALIA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_AUSTRIA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_BELGIUM_FRENCH
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_FRANCE
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_GERMANY
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_ITALY
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_BELGIUM_DUTCH
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_NETHERLANDS
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_SPAIN
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_SWITZERLAND
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_TAIWAN
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_EBAYMOTORS
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_HONGKONG
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_SINGAPORE
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_INDIA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_CHINA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_IRELAND
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_MALAYSIA
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_PHILIPPINES
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_POLAND
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_SWEDEN
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_CUSTOMCODE
	 * @uses EbayShoppingEnumSiteCodeType::VALUE_CANADAFRENCH
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumSiteCodeType::VALUE_US,EbayShoppingEnumSiteCodeType::VALUE_CANADA,EbayShoppingEnumSiteCodeType::VALUE_UK,EbayShoppingEnumSiteCodeType::VALUE_AUSTRALIA,EbayShoppingEnumSiteCodeType::VALUE_AUSTRIA,EbayShoppingEnumSiteCodeType::VALUE_BELGIUM_FRENCH,EbayShoppingEnumSiteCodeType::VALUE_FRANCE,EbayShoppingEnumSiteCodeType::VALUE_GERMANY,EbayShoppingEnumSiteCodeType::VALUE_ITALY,EbayShoppingEnumSiteCodeType::VALUE_BELGIUM_DUTCH,EbayShoppingEnumSiteCodeType::VALUE_NETHERLANDS,EbayShoppingEnumSiteCodeType::VALUE_SPAIN,EbayShoppingEnumSiteCodeType::VALUE_SWITZERLAND,EbayShoppingEnumSiteCodeType::VALUE_TAIWAN,EbayShoppingEnumSiteCodeType::VALUE_EBAYMOTORS,EbayShoppingEnumSiteCodeType::VALUE_HONGKONG,EbayShoppingEnumSiteCodeType::VALUE_SINGAPORE,EbayShoppingEnumSiteCodeType::VALUE_INDIA,EbayShoppingEnumSiteCodeType::VALUE_CHINA,EbayShoppingEnumSiteCodeType::VALUE_IRELAND,EbayShoppingEnumSiteCodeType::VALUE_MALAYSIA,EbayShoppingEnumSiteCodeType::VALUE_PHILIPPINES,EbayShoppingEnumSiteCodeType::VALUE_POLAND,EbayShoppingEnumSiteCodeType::VALUE_SWEDEN,EbayShoppingEnumSiteCodeType::VALUE_CUSTOMCODE,EbayShoppingEnumSiteCodeType::VALUE_CANADAFRENCH));
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