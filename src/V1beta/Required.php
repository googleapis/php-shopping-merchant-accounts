<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/termsofserviceagreementstate.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the terms of service which are required to be accepted.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.Required</code>
 */
class Required extends \Google\Protobuf\Internal\Message
{
    /**
     * The
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * that need to be accepted.
     *
     * Generated from protobuf field <code>string terms_of_service = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $terms_of_service = '';
    /**
     * Full URL to the terms of service file. This field is the same as
     * [TermsOfService.file_uri](TermsOfService.file_uri), it is added
     * here for convenience only.
     *
     * Generated from protobuf field <code>string tos_file_uri = 2;</code>
     */
    protected $tos_file_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $terms_of_service
     *           The
     *           [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     *           that need to be accepted.
     *     @type string $tos_file_uri
     *           Full URL to the terms of service file. This field is the same as
     *           [TermsOfService.file_uri](TermsOfService.file_uri), it is added
     *           here for convenience only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Termsofserviceagreementstate::initOnce();
        parent::__construct($data);
    }

    /**
     * The
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * that need to be accepted.
     *
     * Generated from protobuf field <code>string terms_of_service = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->terms_of_service;
    }

    /**
     * The
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * that need to be accepted.
     *
     * Generated from protobuf field <code>string terms_of_service = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTermsOfService($var)
    {
        GPBUtil::checkString($var, True);
        $this->terms_of_service = $var;

        return $this;
    }

    /**
     * Full URL to the terms of service file. This field is the same as
     * [TermsOfService.file_uri](TermsOfService.file_uri), it is added
     * here for convenience only.
     *
     * Generated from protobuf field <code>string tos_file_uri = 2;</code>
     * @return string
     */
    public function getTosFileUri()
    {
        return $this->tos_file_uri;
    }

    /**
     * Full URL to the terms of service file. This field is the same as
     * [TermsOfService.file_uri](TermsOfService.file_uri), it is added
     * here for convenience only.
     *
     * Generated from protobuf field <code>string tos_file_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTosFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->tos_file_uri = $var;

        return $this;
    }

}

