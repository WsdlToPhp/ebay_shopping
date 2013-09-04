<?php
/**
 * File for class EbayShoppingEnumBuyerPaymentMethodCodeType
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for EbayShoppingEnumBuyerPaymentMethodCodeType originally named BuyerPaymentMethodCodeType
 * Documentation : Identifies payment methods used by a buyer to pay a seller. On item listings, identifies one of the payment methods seller will accept for the item. Available payment methods can differ by site and item. Payment methods are not applicable to eBay Real Estate ad format listings.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://developer.ebay.com/webservices/latest/ShoppingService.wsdl}
 * @package EbayShopping
 * @subpackage Enumerations
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class EbayShoppingEnumBuyerPaymentMethodCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations extracted from the WSDL
	 * - documentation : No payment method specified. For example, no payment methods would be specified for Ad format listings.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MOCC'
	 * Meta informations extracted from the WSDL
	 * - documentation : Money order/cashiers check. Not applicable to US/CA eBay Motors listings.
	 * @return string 'MOCC'
	 */
	const VALUE_MOCC = 'MOCC';
	/**
	 * Constant for value 'AmEx'
	 * Meta informations extracted from the WSDL
	 * - documentation : American Express. Not applicable to US/CA eBay Motors listings.
	 * @return string 'AmEx'
	 */
	const VALUE_AMEX = 'AmEx';
	/**
	 * Constant for value 'PaymentSeeDescription'
	 * Meta informations extracted from the WSDL
	 * - documentation : Payment instructions are contained in the item's description.
	 * @return string 'PaymentSeeDescription'
	 */
	const VALUE_PAYMENTSEEDESCRIPTION = 'PaymentSeeDescription';
	/**
	 * Constant for value 'CCAccepted'
	 * Meta informations extracted from the WSDL
	 * - documentation : Credit card. Not applicable to Real Estate or US/CA eBay Motors listings.
	 * @return string 'CCAccepted'
	 */
	const VALUE_CCACCEPTED = 'CCAccepted';
	/**
	 * Constant for value 'PersonalCheck'
	 * Meta informations extracted from the WSDL
	 * - documentation : Personal check.
	 * @return string 'PersonalCheck'
	 */
	const VALUE_PERSONALCHECK = 'PersonalCheck';
	/**
	 * Constant for value 'COD'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cash on delivery. Only applicable to the following eBay sites: AT (16), BEFR (24), BENL (123), CH (193), DE (77), ES (186), FR (71), HK (201), IN (203), IT (101), PL (212), and SG (216). Not applicable to Real Estate listings.
	 * @return string 'COD'
	 */
	const VALUE_COD = 'COD';
	/**
	 * Constant for value 'VisaMC'
	 * Meta informations extracted from the WSDL
	 * - documentation : Visa/Mastercard. These qualify as safe payment methods. Not applicable to US/CA eBay Motors listings.
	 * @return string 'VisaMC'
	 */
	const VALUE_VISAMC = 'VisaMC';
	/**
	 * Constant for value 'PaisaPayAccepted'
	 * Meta informations extracted from the WSDL
	 * - documentation : PaisaPay (for India site only). This qualifies as a safe payment method.
	 * @return string 'PaisaPayAccepted'
	 */
	const VALUE_PAISAPAYACCEPTED = 'PaisaPayAccepted';
	/**
	 * Constant for value 'Other'
	 * Meta informations extracted from the WSDL
	 * - documentation : Other forms of payment. Not applicable to US/CA eBay Motors listings (see PaymentSeeDescription instead).
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations extracted from the WSDL
	 * - documentation : PayPal is accepted as a payment method. This qualifies as a safe payment method. <br> <br> If PayPal is specified for US/CA eBay Motors vehicles, it is for the vehicle deposit (not for purchasing the vehicle).
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'Discover'
	 * Meta informations extracted from the WSDL
	 * - documentation : Discover card. Not applicable to US/CA eBay Motors listings.
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'CashOnPickup'
	 * Meta informations extracted from the WSDL
	 * - documentation : This payment method is equivalent to the PayOnPickup payment method. CashOnPickup applies even for listings on the eBay US site that refer to "Pay on pickup."
	 * @return string 'CashOnPickup'
	 */
	const VALUE_CASHONPICKUP = 'CashOnPickup';
	/**
	 * Constant for value 'MoneyXferAccepted'
	 * Meta informations extracted from the WSDL
	 * - documentation : Direct transfer of money. Not applicable to US/CA eBay Motors listings.
	 * @return string 'MoneyXferAccepted'
	 */
	const VALUE_MONEYXFERACCEPTED = 'MoneyXferAccepted';
	/**
	 * Constant for value 'MoneyXferAcceptedInCheckout'
	 * Meta informations extracted from the WSDL
	 * - documentation : If the seller has bank account information on file, and MoneyXferAcceptedInCheckout = true, then the bank account information will be displayed in Checkout.
	 * @return string 'MoneyXferAcceptedInCheckout'
	 */
	const VALUE_MONEYXFERACCEPTEDINCHECKOUT = 'MoneyXferAcceptedInCheckout';
	/**
	 * Constant for value 'OtherOnlinePayments'
	 * Meta informations extracted from the WSDL
	 * - documentation : All other online payments. Not applicable to US/CA eBay Motors listings.
	 * @return string 'OtherOnlinePayments'
	 */
	const VALUE_OTHERONLINEPAYMENTS = 'OtherOnlinePayments';
	/**
	 * Constant for value 'Escrow'
	 * @return string 'Escrow'
	 */
	const VALUE_ESCROW = 'Escrow';
	/**
	 * Constant for value 'PrePayDelivery'
	 * @return string 'PrePayDelivery'
	 */
	const VALUE_PREPAYDELIVERY = 'PrePayDelivery';
	/**
	 * Constant for value 'CODPrePayDelivery'
	 * @return string 'CODPrePayDelivery'
	 */
	const VALUE_CODPREPAYDELIVERY = 'CODPrePayDelivery';
	/**
	 * Constant for value 'PostalTransfer'
	 * @return string 'PostalTransfer'
	 */
	const VALUE_POSTALTRANSFER = 'PostalTransfer';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations extracted from the WSDL
	 * - documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'LoanCheck'
	 * Meta informations extracted from the WSDL
	 * - documentation : Loan check option (applicable only to the US eBay Motors site, except in the Parts and Accessories category, and the eBay Canada site for motors).
	 * @return string 'LoanCheck'
	 */
	const VALUE_LOANCHECK = 'LoanCheck';
	/**
	 * Constant for value 'CashInPerson'
	 * Meta informations extracted from the WSDL
	 * - documentation : Cash-in-person option. Applicable only to US and Canada eBay Motors vehicles, (not the Parts and Accessories category).
	 * @return string 'CashInPerson'
	 */
	const VALUE_CASHINPERSON = 'CashInPerson';
	/**
	 * Constant for value 'ELV'
	 * Meta informations extracted from the WSDL
	 * - documentation : Elektronisches Lastschriftverfahren (direct debit). Only applicable to Express Germany.
	 * @return string 'ELV'
	 */
	const VALUE_ELV = 'ELV';
	/**
	 * Constant for value 'PaisaPayEscrowEMI'
	 * Meta informations extracted from the WSDL
	 * - documentation : PaisaPayEscrow EMI (Equal Monthly Installment) payment method. The PaisaPayEscrowEMI payment method is only for the India site (site ID 203).
	 * @return string 'PaisaPayEscrowEMI'
	 */
	const VALUE_PAISAPAYESCROWEMI = 'PaisaPayEscrowEMI';
	/**
	 * Constant for value 'Moneybookers'
	 * Meta informations extracted from the WSDL
	 * - documentation : The Moneybookers payment method. For more information, see http://www.moneybookers.com/partners/us/ebay. Only applicable to the US site (and to the Parts and Accessories category of the US eBay Motors site).
	 * @return string 'Moneybookers'
	 */
	const VALUE_MONEYBOOKERS = 'Moneybookers';
	/**
	 * Constant for value 'Paymate'
	 * Meta informations extracted from the WSDL
	 * - documentation : The Paymate payment method. For more information, see http://www.paymate.com/eBay. Only applicable to the US site (and to the Parts and Accessories category of the US eBay Motors site).
	 * @return string 'Paymate'
	 */
	const VALUE_PAYMATE = 'Paymate';
	/**
	 * Constant for value 'ProPay'
	 * Meta informations extracted from the WSDL
	 * - documentation : The ProPay payment method. US site only. For more information, see http://www.Propay.com/eBay.
	 * @return string 'ProPay'
	 */
	const VALUE_PROPAY = 'ProPay';
	/**
	 * Constant for value 'StandardPayment'
	 * Meta informations extracted from the WSDL
	 * - documentation : For all payment intermediated transactions, If the authenticated caller is a seller then Standard Payment Method is returned to as Payment Method Used to sellers. OrderArray.Order.CheckoutStatus.PaymentMethod (GetOrders, GetOrderTransaction) and OrderArray.Order .TransactionArray.Transaction.Status (For all the 4 APIs). The COD (Cash on Demand) or POP (Pay on Pickup) should be shown as is to the buyers and sellers, these payment methods are not intermediated.
	 * @return string 'StandardPayment'
	 */
	const VALUE_STANDARDPAYMENT = 'StandardPayment';
	/**
	 * Return true if value is allowed
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_NONE
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MOCC
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_AMEX
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYMENTSEEDESCRIPTION
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CCACCEPTED
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PERSONALCHECK
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_COD
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_VISAMC
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAISAPAYACCEPTED
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_OTHER
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYPAL
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_DISCOVER
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CASHONPICKUP
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTED
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTEDINCHECKOUT
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_OTHERONLINEPAYMENTS
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_ESCROW
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PREPAYDELIVERY
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CODPREPAYDELIVERY
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_POSTALTRANSFER
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CUSTOMCODE
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_LOANCHECK
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CASHINPERSON
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_ELV
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAISAPAYESCROWEMI
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYBOOKERS
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYMATE
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PROPAY
	 * @uses EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_STANDARDPAYMENT
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_NONE,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MOCC,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_AMEX,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYMENTSEEDESCRIPTION,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CCACCEPTED,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PERSONALCHECK,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_COD,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_VISAMC,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAISAPAYACCEPTED,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_OTHER,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYPAL,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_DISCOVER,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CASHONPICKUP,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTED,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYXFERACCEPTEDINCHECKOUT,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_OTHERONLINEPAYMENTS,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_ESCROW,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PREPAYDELIVERY,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CODPREPAYDELIVERY,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_POSTALTRANSFER,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CUSTOMCODE,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_LOANCHECK,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_CASHINPERSON,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_ELV,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAISAPAYESCROWEMI,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_MONEYBOOKERS,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PAYMATE,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_PROPAY,EbayShoppingEnumBuyerPaymentMethodCodeType::VALUE_STANDARDPAYMENT));
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