<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/online_return_policy.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `ListOnlineReturnPolicies` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.ListOnlineReturnPoliciesResponse</code>
 */
class ListOnlineReturnPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The retrieved return policies.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy online_return_policies = 1;</code>
     */
    private $online_return_policies;
    /**
     * A token, which can be sent as `pageToken` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy>|\Google\Protobuf\Internal\RepeatedField $online_return_policies
     *           The retrieved return policies.
     *     @type string $next_page_token
     *           A token, which can be sent as `pageToken` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\OnlineReturnPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * The retrieved return policies.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy online_return_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOnlineReturnPolicies()
    {
        return $this->online_return_policies;
    }

    /**
     * The retrieved return policies.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy online_return_policies = 1;</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOnlineReturnPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy::class);
        $this->online_return_policies = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `pageToken` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `pageToken` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

