<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/businessinfo.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collection of information related to a business.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.BusinessInfo</code>
 */
class BusinessInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the business info.
     * Format: `accounts/{account}/businessInfo`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. The address of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PostalAddress address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $address = null;
    /**
     * Optional. The phone number of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PhoneNumber phone = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $phone = null;
    /**
     * Output only. The phone verification state of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.PhoneVerificationState phone_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $phone_verification_state = null;
    /**
     * Optional. The customer service of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.CustomerService customer_service = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $customer_service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the business info.
     *           Format: `accounts/{account}/businessInfo`
     *     @type \Google\Type\PostalAddress $address
     *           Optional. The address of the business.
     *     @type \Google\Type\PhoneNumber $phone
     *           Optional. The phone number of the business.
     *     @type int $phone_verification_state
     *           Output only. The phone verification state of the business.
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\CustomerService $customer_service
     *           Optional. The customer service of the business.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Businessinfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the business info.
     * Format: `accounts/{account}/businessInfo`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the business info.
     * Format: `accounts/{account}/businessInfo`
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
     * Optional. The address of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PostalAddress address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Type\PostalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * Optional. The address of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PostalAddress address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Type\PostalAddress $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PostalAddress::class);
        $this->address = $var;

        return $this;
    }

    /**
     * Optional. The phone number of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PhoneNumber phone = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Type\PhoneNumber|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function hasPhone()
    {
        return isset($this->phone);
    }

    public function clearPhone()
    {
        unset($this->phone);
    }

    /**
     * Optional. The phone number of the business.
     *
     * Generated from protobuf field <code>optional .google.type.PhoneNumber phone = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Type\PhoneNumber $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\PhoneNumber::class);
        $this->phone = $var;

        return $this;
    }

    /**
     * Output only. The phone verification state of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.PhoneVerificationState phone_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPhoneVerificationState()
    {
        return isset($this->phone_verification_state) ? $this->phone_verification_state : 0;
    }

    public function hasPhoneVerificationState()
    {
        return isset($this->phone_verification_state);
    }

    public function clearPhoneVerificationState()
    {
        unset($this->phone_verification_state);
    }

    /**
     * Output only. The phone verification state of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.PhoneVerificationState phone_verification_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPhoneVerificationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Accounts\V1beta\PhoneVerificationState::class);
        $this->phone_verification_state = $var;

        return $this;
    }

    /**
     * Optional. The customer service of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.CustomerService customer_service = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\CustomerService|null
     */
    public function getCustomerService()
    {
        return $this->customer_service;
    }

    public function hasCustomerService()
    {
        return isset($this->customer_service);
    }

    public function clearCustomerService()
    {
        unset($this->customer_service);
    }

    /**
     * Optional. The customer service of the business.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.accounts.v1beta.CustomerService customer_service = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\CustomerService $var
     * @return $this
     */
    public function setCustomerService($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\CustomerService::class);
        $this->customer_service = $var;

        return $this;
    }

}

