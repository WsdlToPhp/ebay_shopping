<?php
/**
 * File for class EbayShoppingStructFindReviewsAndGuidesResponseType
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingStructFindReviewsAndGuidesResponseType originally named FindReviewsAndGuidesResponseType
 * Documentation : Find reviews and guides response type.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingStructFindReviewsAndGuidesResponseType extends EbayShoppingStructAbstractResponseType
{
	/**
	 * The ReviewCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of returned reviews.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The BuyingGuideCount
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of returned buying guides.
	 * - minOccurs : 0
	 * @var int
	 */
	public $BuyingGuideCount;
	/**
	 * The ReviewerRank
	 * Meta informations extracted from the WSDL
	 * - documentation : Rank of reviewer if using user search.
	 * - minOccurs : 0
	 * @var int
	 */
	public $ReviewerRank;
	/**
	 * The TotalHelpfulnessVotes
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of helpfulness votes if using user search.
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalHelpfulnessVotes;
	/**
	 * The ProductID
	 * Meta informations extracted from the WSDL
	 * - documentation : The eBay or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * - minOccurs : 0
	 * @var EbayShoppingStructProductIDType
	 */
	public $ProductID;
	/**
	 * The ReviewsAndGuidesURL
	 * Meta informations extracted from the WSDL
	 * - documentation : URL to the reviews and guides page.
	 * - minOccurs : 0
	 * @var anyURI
	 */
	public $ReviewsAndGuidesURL;
	/**
	 * The PageNumber
	 * Meta informations extracted from the WSDL
	 * - documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with TotalPages to decide which page to retrieve next. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxResultsPerPage to 1 in the request).
	 * - minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The TotalPages
	 * Meta informations extracted from the WSDL
	 * - documentation : Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
	 * - minOccurs : 0
	 * @var int
	 */
	public $TotalPages;
	/**
	 * The BuyingGuideDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains information for up to 5 buying guides that match the query. Buying guides provide useful information about shopping in a particular domain, like Digital Cameras. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them. If no buying guides are associated with the product, this only returns a link to the buying guide hub (the main Guides page). Count limited by MaxResultsPerPage in request.
	 * - minOccurs : 0
	 * @var EbayShoppingStructBuyingGuideDetailsType
	 */
	public $BuyingGuideDetails;
	/**
	 * The ReviewDetails
	 * Meta informations extracted from the WSDL
	 * - documentation : Contains information about review details. Count limited by MaxResultsPerPage in request.
	 * - minOccurs : 0
	 * @var EbayShoppingStructReviewDetailsType
	 */
	public $ReviewDetails;
	/**
	 * The PositiveHelpfulnessVotes
	 * Meta informations extracted from the WSDL
	 * - documentation : Number of helpfulness votes if using user search.
	 * - minOccurs : 0
	 * @var int
	 */
	public $PositiveHelpfulnessVotes;
	/**
	 * Constructor method for FindReviewsAndGuidesResponseType
	 * @see parent::__construct()
	 * @param int $_reviewCount
	 * @param int $_buyingGuideCount
	 * @param int $_reviewerRank
	 * @param int $_totalHelpfulnessVotes
	 * @param EbayShoppingStructProductIDType $_productID
	 * @param anyURI $_reviewsAndGuidesURL
	 * @param int $_pageNumber
	 * @param int $_totalPages
	 * @param EbayShoppingStructBuyingGuideDetailsType $_buyingGuideDetails
	 * @param EbayShoppingStructReviewDetailsType $_reviewDetails
	 * @param int $_positiveHelpfulnessVotes
	 * @return EbayShoppingStructFindReviewsAndGuidesResponseType
	 */
	public function __construct($_reviewCount = NULL,$_buyingGuideCount = NULL,$_reviewerRank = NULL,$_totalHelpfulnessVotes = NULL,$_productID = NULL,$_reviewsAndGuidesURL = NULL,$_pageNumber = NULL,$_totalPages = NULL,$_buyingGuideDetails = NULL,$_reviewDetails = NULL,$_positiveHelpfulnessVotes = NULL)
	{
		EbayShoppingWsdlClass::__construct(array('ReviewCount'=>$_reviewCount,'BuyingGuideCount'=>$_buyingGuideCount,'ReviewerRank'=>$_reviewerRank,'TotalHelpfulnessVotes'=>$_totalHelpfulnessVotes,'ProductID'=>$_productID,'ReviewsAndGuidesURL'=>$_reviewsAndGuidesURL,'PageNumber'=>$_pageNumber,'TotalPages'=>$_totalPages,'BuyingGuideDetails'=>$_buyingGuideDetails,'ReviewDetails'=>$_reviewDetails,'PositiveHelpfulnessVotes'=>$_positiveHelpfulnessVotes));
	}
	/**
	 * Get ReviewCount value
	 * @return int|null
	 */
	public function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * Set ReviewCount value
	 * @param int $_reviewCount the ReviewCount
	 * @return int
	 */
	public function setReviewCount($_reviewCount)
	{
		return ($this->ReviewCount = $_reviewCount);
	}
	/**
	 * Get BuyingGuideCount value
	 * @return int|null
	 */
	public function getBuyingGuideCount()
	{
		return $this->BuyingGuideCount;
	}
	/**
	 * Set BuyingGuideCount value
	 * @param int $_buyingGuideCount the BuyingGuideCount
	 * @return int
	 */
	public function setBuyingGuideCount($_buyingGuideCount)
	{
		return ($this->BuyingGuideCount = $_buyingGuideCount);
	}
	/**
	 * Get ReviewerRank value
	 * @return int|null
	 */
	public function getReviewerRank()
	{
		return $this->ReviewerRank;
	}
	/**
	 * Set ReviewerRank value
	 * @param int $_reviewerRank the ReviewerRank
	 * @return int
	 */
	public function setReviewerRank($_reviewerRank)
	{
		return ($this->ReviewerRank = $_reviewerRank);
	}
	/**
	 * Get TotalHelpfulnessVotes value
	 * @return int|null
	 */
	public function getTotalHelpfulnessVotes()
	{
		return $this->TotalHelpfulnessVotes;
	}
	/**
	 * Set TotalHelpfulnessVotes value
	 * @param int $_totalHelpfulnessVotes the TotalHelpfulnessVotes
	 * @return int
	 */
	public function setTotalHelpfulnessVotes($_totalHelpfulnessVotes)
	{
		return ($this->TotalHelpfulnessVotes = $_totalHelpfulnessVotes);
	}
	/**
	 * Get ProductID value
	 * @return EbayShoppingStructProductIDType|null
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set ProductID value
	 * @param EbayShoppingStructProductIDType $_productID the ProductID
	 * @return EbayShoppingStructProductIDType
	 */
	public function setProductID($_productID)
	{
		return ($this->ProductID = $_productID);
	}
	/**
	 * Get ReviewsAndGuidesURL value
	 * @return anyURI|null
	 */
	public function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
	}
	/**
	 * Set ReviewsAndGuidesURL value
	 * @param anyURI $_reviewsAndGuidesURL the ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function setReviewsAndGuidesURL($_reviewsAndGuidesURL)
	{
		return ($this->ReviewsAndGuidesURL = $_reviewsAndGuidesURL);
	}
	/**
	 * Get PageNumber value
	 * @return int|null
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set PageNumber value
	 * @param int $_pageNumber the PageNumber
	 * @return int
	 */
	public function setPageNumber($_pageNumber)
	{
		return ($this->PageNumber = $_pageNumber);
	}
	/**
	 * Get TotalPages value
	 * @return int|null
	 */
	public function getTotalPages()
	{
		return $this->TotalPages;
	}
	/**
	 * Set TotalPages value
	 * @param int $_totalPages the TotalPages
	 * @return int
	 */
	public function setTotalPages($_totalPages)
	{
		return ($this->TotalPages = $_totalPages);
	}
	/**
	 * Get BuyingGuideDetails value
	 * @return EbayShoppingStructBuyingGuideDetailsType|null
	 */
	public function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
	}
	/**
	 * Set BuyingGuideDetails value
	 * @param EbayShoppingStructBuyingGuideDetailsType $_buyingGuideDetails the BuyingGuideDetails
	 * @return EbayShoppingStructBuyingGuideDetailsType
	 */
	public function setBuyingGuideDetails($_buyingGuideDetails)
	{
		return ($this->BuyingGuideDetails = $_buyingGuideDetails);
	}
	/**
	 * Get ReviewDetails value
	 * @return EbayShoppingStructReviewDetailsType|null
	 */
	public function getReviewDetails()
	{
		return $this->ReviewDetails;
	}
	/**
	 * Set ReviewDetails value
	 * @param EbayShoppingStructReviewDetailsType $_reviewDetails the ReviewDetails
	 * @return EbayShoppingStructReviewDetailsType
	 */
	public function setReviewDetails($_reviewDetails)
	{
		return ($this->ReviewDetails = $_reviewDetails);
	}
	/**
	 * Get PositiveHelpfulnessVotes value
	 * @return int|null
	 */
	public function getPositiveHelpfulnessVotes()
	{
		return $this->PositiveHelpfulnessVotes;
	}
	/**
	 * Set PositiveHelpfulnessVotes value
	 * @param int $_positiveHelpfulnessVotes the PositiveHelpfulnessVotes
	 * @return int
	 */
	public function setPositiveHelpfulnessVotes($_positiveHelpfulnessVotes)
	{
		return ($this->PositiveHelpfulnessVotes = $_positiveHelpfulnessVotes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see EbayShoppingWsdlClass::__set_state()
	 * @uses EbayShoppingWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return EbayShoppingStructFindReviewsAndGuidesResponseType
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