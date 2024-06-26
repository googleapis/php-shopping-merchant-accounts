<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/termsofservice.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `AcceptTermsOfService` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.AcceptTermsOfServiceRequest</code>
 */
class AcceptTermsOfServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the terms of service version.
     * Format: `termsOfService/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The account for which to accept the ToS.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $account = '';
    /**
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/). This
     * is either a country when the ToS applies specifically to that country or
     * 001 when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region_code = '';

    /**
     * @param string $name Required. The resource name of the terms of service version.
     *                     Format: `termsOfService/{version}`
     *                     Please see {@see TermsOfServiceServiceClient::termsOfServiceName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Accounts\V1beta\AcceptTermsOfServiceRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the terms of service version.
     *           Format: `termsOfService/{version}`
     *     @type string $account
     *           Required. The account for which to accept the ToS.
     *     @type string $region_code
     *           Required. Region code as defined by [CLDR](https://cldr.unicode.org/). This
     *           is either a country when the ToS applies specifically to that country or
     *           001 when it applies globally.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Termsofservice::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the terms of service version.
     * Format: `termsOfService/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the terms of service version.
     * Format: `termsOfService/{version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The account for which to accept the ToS.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Required. The account for which to accept the ToS.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/). This
     * is either a country when the ToS applies specifically to that country or
     * 001 when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. Region code as defined by [CLDR](https://cldr.unicode.org/). This
     * is either a country when the ToS applies specifically to that country or
     * 001 when it applies globally.
     *
     * Generated from protobuf field <code>string region_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

}

