<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/termsofserviceagreementstate.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the accepted terms of service.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.Accepted</code>
 */
class Accepted extends \Google\Protobuf\Internal\Message
{
    /**
     * The accepted
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService).
     *
     * Generated from protobuf field <code>string terms_of_service = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $terms_of_service = '';
    /**
     * The account where the acceptance was recorded. This can be the account
     * itself or, in the case of subaccounts, the MCA account.
     *
     * Generated from protobuf field <code>string accepted_by = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $accepted_by = '';
    /**
     * When set, it states that the accepted
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is only valid until the end of this date (in UTC). A new one must be
     * accepted before then. The information of the required
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is found in the [Required](Required) message.
     *
     * Generated from protobuf field <code>optional .google.type.Date valid_until = 3;</code>
     */
    protected $valid_until = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $terms_of_service
     *           The accepted
     *           [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService).
     *     @type string $accepted_by
     *           The account where the acceptance was recorded. This can be the account
     *           itself or, in the case of subaccounts, the MCA account.
     *     @type \Google\Type\Date $valid_until
     *           When set, it states that the accepted
     *           [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     *           is only valid until the end of this date (in UTC). A new one must be
     *           accepted before then. The information of the required
     *           [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     *           is found in the [Required](Required) message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Termsofserviceagreementstate::initOnce();
        parent::__construct($data);
    }

    /**
     * The accepted
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService).
     *
     * Generated from protobuf field <code>string terms_of_service = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->terms_of_service;
    }

    /**
     * The accepted
     * [termsOfService](google.shopping.merchant.accounts.v1main.TermsOfService).
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
     * The account where the acceptance was recorded. This can be the account
     * itself or, in the case of subaccounts, the MCA account.
     *
     * Generated from protobuf field <code>string accepted_by = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAcceptedBy()
    {
        return $this->accepted_by;
    }

    /**
     * The account where the acceptance was recorded. This can be the account
     * itself or, in the case of subaccounts, the MCA account.
     *
     * Generated from protobuf field <code>string accepted_by = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAcceptedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->accepted_by = $var;

        return $this;
    }

    /**
     * When set, it states that the accepted
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is only valid until the end of this date (in UTC). A new one must be
     * accepted before then. The information of the required
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is found in the [Required](Required) message.
     *
     * Generated from protobuf field <code>optional .google.type.Date valid_until = 3;</code>
     * @return \Google\Type\Date|null
     */
    public function getValidUntil()
    {
        return $this->valid_until;
    }

    public function hasValidUntil()
    {
        return isset($this->valid_until);
    }

    public function clearValidUntil()
    {
        unset($this->valid_until);
    }

    /**
     * When set, it states that the accepted
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is only valid until the end of this date (in UTC). A new one must be
     * accepted before then. The information of the required
     * [TermsOfService](google.shopping.merchant.accounts.v1main.TermsOfService)
     * is found in the [Required](Required) message.
     *
     * Generated from protobuf field <code>optional .google.type.Date valid_until = 3;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setValidUntil($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->valid_until = $var;

        return $this;
    }

}
