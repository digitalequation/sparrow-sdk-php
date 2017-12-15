<?php

namespace SparrowSDK;

use SparrowSDK\Exceptions\SDKInvalidArgException;

use SparrowSDK\Service\Handlers\AirlineHandler;
use SparrowSDK\Service\Handlers\AuthorizationHandler;
use SparrowSDK\Service\Handlers\BalanceHandler;
use SparrowSDK\Service\Handlers\CaptureHandler;
use SparrowSDK\Service\Handlers\ChargebackHandler;
use SparrowSDK\Service\Handlers\CreditHandler;
use SparrowSDK\Service\Handlers\CustomFieldHandler;
use SparrowSDK\Service\Handlers\InvoiceHandler;
use SparrowSDK\Service\Handlers\PaymentPlanHandler;
use SparrowSDK\Service\Handlers\RefundHandler;
use SparrowSDK\Service\Handlers\SaleHandler;
use SparrowSDK\Service\Handlers\VaultHandler;
use SparrowSDK\Service\Handlers\VoidHandler;

/**
 *
 * Sparrow PHP Client for Services API
 *
 * @link http://foresight.sparrowone.com/
 * @link https://sparrowone.com/wp-content/uploads/2017/07/SPARROW-Services-API-for-Developers-v3.7.pdf
 *
 */
class SparrowServiceClient
{
    public const API_BASE_URI = 'https://secure.sparrowone.com/Payments/Services_api.aspx';

    protected $merchantKey = null;

    public $airline;
    public $authorization;
    public $balance;
    public $capture;
    public $chargeback;
    public $credit;
    public $customField;
    public $invoice;
    public $paymentPlan;
    public $refund;
    public $sale;
    public $vault;
    public $void;

    public $debugReturn = null;

    /**
     * SparrowServiceClient constructor
     *
     * @param  string $merchantKey An optional merchant key to set
     *
     * @throws SDKInvalidArgException if $merchantKey is set and is not a string
     */
    public function __construct($merchantKey = null)
    {
        if (!is_null($merchantKey) && !is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;

        $this->airline       = new AirlineHandler($this);
        $this->authorization = new AuthorizationHandler($this);
        $this->balance       = new BalanceHandler($this);
        $this->capture       = new CaptureHandler($this);
        $this->chargeback    = new ChargebackHandler($this);
        $this->credit        = new CreditHandler($this);
        $this->customField   = new CustomFieldHandler($this);
        $this->invoice       = new InvoiceHandler($this);
        $this->paymentPlan   = new PaymentPlanHandler($this);
        $this->refund        = new RefundHandler($this);
        $this->sale          = new SaleHandler($this);
        $this->vault         = new VaultHandler($this);
        $this->void          = new VoidHandler($this);
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
     * Attach a merchant key to the client instance. Key changes are dynamic - all objects/entities originating
     * from an instance which has had its key updated will utilize the new key automatically.
     *
     * @param  string $merchantKey The new string type merchant key to attach
     *
     * @throws SDKInvalidArgException if provided $merchantKey param is not a string
     */
    public function setMerchantKey($merchantKey)
    {
        if (!is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;
    }
}
