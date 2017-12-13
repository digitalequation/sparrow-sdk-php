<?php

namespace SparrowSDK;

use SparrowSDK\Exceptions\SDKInvalidArgException;

use SparrowSDK\Handlers\AirlineHandler;
use SparrowSDK\Handlers\AuthorizationHandler;
use SparrowSDK\Handlers\BalanceHandler;
use SparrowSDK\Handlers\CaptureHandler;
use SparrowSDK\Handlers\ChargebackHandler;
use SparrowSDK\Handlers\CustomFieldHandler;
use SparrowSDK\Handlers\EwalletHandler;
use SparrowSDK\Handlers\InvoiceHandler;
use SparrowSDK\Handlers\PaymentPlanHandler;
use SparrowSDK\Handlers\RefundHandler;
use SparrowSDK\Handlers\SaleHandler;
use SparrowSDK\Handlers\VaultHandler;
use SparrowSDK\Handlers\VerificationHandler;
use SparrowSDK\Handlers\VoidHandler;

/**
 *
 * Sparrow PHP Client
 *
 * @link http://foresight.sparrowone.com/ Follows the Sparrow One Service API documentation
 *
 */
class SparrowClient
{
    public const API_BASE_URI = 'https://secure.sparrowone.com/Payments/Services_api.aspx';

    protected $merchantKey = null;

    public $sale;
    public $authorization;
    public $capture;
    public $refund;
    public $void;
    public $airline;
    public $ewallet;
    public $chargeback;
    public $balance;
    public $customField;
    public $verification;
    public $vault;
    public $paymentPlan;
    public $invoice;

    /**
     * SparrowClient constructor
     */
    public function __construct()
    {
        $this->sale          = new AirlineHandler($this);
        $this->authorization = new AuthorizationHandler($this);
        $this->capture       = new BalanceHandler($this);
        $this->refund        = new CaptureHandler($this);
        $this->void          = new ChargebackHandler($this);
        $this->airline       = new CustomFieldHandler($this);
        $this->ewallet       = new EwalletHandler($this);
        $this->chargeback    = new InvoiceHandler($this);
        $this->balance       = new PaymentPlanHandler($this);
        $this->customField   = new RefundHandler($this);
        $this->verification  = new SaleHandler($this);
        $this->vault         = new VaultHandler($this);
        $this->paymentPlan   = new VerificationHandler($this);
        $this->invoice       = new VoidHandler($this);
    }

    /**
     * Retrieve the currently attached merchant key
     *
     * @return string|null The attached merchant key or null if it is not set
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * Attach merchant key to SDK client instance. Key changes are dynamic - all objects/entities originating
     * from an instance which has had its key updated will utilize the new key automatically.
     *
     * @param  string $merchantKey The new string type merchant key to attach
     *
     * @throws SDKInvalidArgException if provided $merchantKey param is not a string
     */
    public function attachMerchantKey($merchantKey)
    {
        if (!is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;
    }

}
