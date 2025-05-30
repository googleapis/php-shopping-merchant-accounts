<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/gbpaccounts.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the ListGbpAccounts method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.ListGbpAccountsResponse</code>
 */
class ListGbpAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The GBP accounts from the specified merchant in the specified country.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.GbpAccount gbp_accounts = 1;</code>
     */
    private $gbp_accounts;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
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
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\GbpAccount>|\Google\Protobuf\Internal\RepeatedField $gbp_accounts
     *           The GBP accounts from the specified merchant in the specified country.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Gbpaccounts::initOnce();
        parent::__construct($data);
    }

    /**
     * The GBP accounts from the specified merchant in the specified country.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.GbpAccount gbp_accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGbpAccounts()
    {
        return $this->gbp_accounts;
    }

    /**
     * The GBP accounts from the specified merchant in the specified country.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.GbpAccount gbp_accounts = 1;</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\GbpAccount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGbpAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\GbpAccount::class);
        $this->gbp_accounts = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
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
     * A token, which can be sent as `page_token` to retrieve the next page.
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

