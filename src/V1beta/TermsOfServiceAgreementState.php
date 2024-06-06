<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/termsofserviceagreementstate.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This resource represents the agreement state for a given account and terms of
 * service kind.
 * The state is as follows:
 * * If the merchant has accepted a terms of service:
 * [accepted](TermsOfServiceAggrementState.accepted) will be populated,
 * otherwise it will be empty
 * * If the merchant must sign a terms of service:
 * [required](TermsOfServiceAggrementState.required) will be populated,
 * otherwise it will be empty.
 * Note that both [required](TermsOfServiceAggrementState.required) and
 * [accepted](TermsOfServiceAggrementState.accepted) can be present. In this
 * case the `accepted` terms of services will have an expiration date set in the
 * [valid_until](Accepted.valid_until) field. The `required` terms of services
 * need to be accepted before `valid_until` in order for the account to continue
 * having a valid agreement. When accepting new terms of services we expect 3Ps
 * to display the text associated with the given terms of service agreement (the
 * url to the file containing the text is added in the Required message below as
 * [tos_file_uri](Accepted.tos_file_uri). The actual acceptance of the terms of
 * service is done by calling accept on the [TermsOfService](TermsOfService)
 * resource.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.TermsOfServiceAgreementState</code>
 */
class TermsOfServiceAgreementState extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the terms of service version.
     * Format: `accounts/{account}/termsOfServiceAgreementState/{identifier}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Region code as defined by https://cldr.unicode.org/. This is the
     * country the current state applies to.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     */
    protected $region_code = '';
    /**
     * Terms of Service kind associated with the particular version.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.TermsOfServiceKind terms_of_service_kind = 3;</code>
     */
    protected $terms_of_service_kind = 0;
    /**
     * The accepted terms of service of this kind and for the associated
     * region_code
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Accepted accepted = 4;</code>
     */
    protected $accepted = null;
    /**
     * The required terms of service
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Required required = 5;</code>
     */
    protected $required = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the terms of service version.
     *           Format: `accounts/{account}/termsOfServiceAgreementState/{identifier}`
     *     @type string $region_code
     *           Region code as defined by https://cldr.unicode.org/. This is the
     *           country the current state applies to.
     *     @type int $terms_of_service_kind
     *           Terms of Service kind associated with the particular version.
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\Accepted $accepted
     *           The accepted terms of service of this kind and for the associated
     *           region_code
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\Required $required
     *           The required terms of service
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Termsofserviceagreementstate::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the terms of service version.
     * Format: `accounts/{account}/termsOfServiceAgreementState/{identifier}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the terms of service version.
     * Format: `accounts/{account}/termsOfServiceAgreementState/{identifier}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Region code as defined by https://cldr.unicode.org/. This is the
     * country the current state applies to.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Region code as defined by https://cldr.unicode.org/. This is the
     * country the current state applies to.
     *
     * Generated from protobuf field <code>string region_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Terms of Service kind associated with the particular version.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.TermsOfServiceKind terms_of_service_kind = 3;</code>
     * @return int
     */
    public function getTermsOfServiceKind()
    {
        return $this->terms_of_service_kind;
    }

    /**
     * Terms of Service kind associated with the particular version.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.TermsOfServiceKind terms_of_service_kind = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTermsOfServiceKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Accounts\V1beta\TermsOfServiceKind::class);
        $this->terms_of_service_kind = $var;

        return $this;
    }

    /**
     * The accepted terms of service of this kind and for the associated
     * region_code
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Accepted accepted = 4;</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\Accepted|null
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    public function hasAccepted()
    {
        return isset($this->accepted);
    }

    public function clearAccepted()
    {
        unset($this->accepted);
    }

    /**
     * The accepted terms of service of this kind and for the associated
     * region_code
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Accepted accepted = 4;</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\Accepted $var
     * @return $this
     */
    public function setAccepted($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\Accepted::class);
        $this->accepted = $var;

        return $this;
    }

    /**
     * The required terms of service
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Required required = 5;</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\Required|null
     */
    public function getRequired()
    {
        return $this->required;
    }

    public function hasRequired()
    {
        return isset($this->required);
    }

    public function clearRequired()
    {
        unset($this->required);
    }

    /**
     * The required terms of service
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.Required required = 5;</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\Required $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\Required::class);
        $this->required = $var;

        return $this;
    }

}

