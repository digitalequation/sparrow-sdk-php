<?php

namespace SparrowSDK\Classes;

use SparrowSDK\SparrowClient;

use SparrowSDK\Exceptions\SDKUnsupportedRequestException;
use SparrowSDK\Exceptions\SDKIncompleteRequestException;
use SparrowSDK\Exceptions\SDKDuplicateRequestException;

/**
 *
 * MethodHandler
 *
 */
abstract class MethodHandler
{
    protected $origin; // Reference to originating SparrowClient instance

    public function __construct(SparrowClient $origin)
    {
        $this->origin = $origin;
    }

    /**
     * Helper function that enforces a field structure based on a support table:
     *   - Forces use of fields marked as required (with value bool:true)
     *   - Detects duplicate fields
     *   - Detects unsupported fields
     *
     * @param mixed[] $array    Array to be enforced
     * @param mixed[] $supports Fields support table to use for rule enforcing
     *                          (values must be boolean: true => required, false => optional)
     *
     * @return bool
     * @throws SDKUnsupportedRequestException if unsupported fields are found
     * @throws SDKIncompleteRequestException  if any required field is missing
     * @throws SDKDuplicateRequestException   if any duplicate field is found
     */
    protected function enforce($array, $supports)
    {
        $sall  = [];        // All supported keys
        $sreq  = [];        // Mandatory supported keys

        $socc  = $supports; // Key use occurances

        $unsup = [];        // Unsupported key list
        $dupl  = [];        // Duplicate key list
        $mreq  = [];        // Missing required keys

        foreach ($supports as $sk => $sv) {
            if ($sv === Client::REQUIRED_PARAM) {
                array_push($sreq, $sk);
            }
            array_push($sall, $sk);
            $socc[$sk] = 0;
        }

        foreach ($array as $k => $v) {
            if (in_array($k, $sall)) {
                $socc[$k]++;
            } else {
                array_push($unsup, $k);
            }
        }

        foreach ($socc as $ok => $ov) {
            if ($ov > 1) {
                array_push($dupl, $ok);
            } elseif ($ov === 0 && in_array($ok, $sreq)) {
                array_push($mreq, $ok);
            }
        }

        if (count($unsup)) {
            throw new SDKUnsupportedRequestException($unsup);
        } elseif (count($mreq)) {
            throw new SDKIncompleteRequestException($mreq);
        } elseif (count($dupl)) {
            throw new SDKDuplicateRequestException($dupl);
        }

        return true;
    }

}
