# # AdviserFirmOptionCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_drop_notification** | [**\OpenAPI\Client\Model\DropNotification**](DropNotification.md) |  | [optional]
**customer_link_method** | [**\OpenAPI\Client\Model\CustomerLinkMethod**](CustomerLinkMethod.md) |  | [optional]
**io_tenant_id** | **string** | Must be a string of numbers | [optional]
**require_full_advice_for_drawdown** | **bool** |  | [optional] [default to true]
**enable_leads** | **bool** |  | [optional] [default to true]
**enable_execonly** | **bool** |  | [optional] [default to true]
**enable_flows_analysis** | **bool** |  | [optional] [default to true]
**cc_advisers_on_user_emails** | **bool** |  | [optional] [default to true]
**send_user_login_details** | **bool** |  | [optional] [default to true]
**user_emails_with_fundment_branding** | **bool** |  | [optional] [default to true]
**customer_show_securities** | **bool** |  | [optional] [default to true]
**allow_client_referrals** | **bool** |  | [optional] [default to false]
**email_on_pay_create** | **bool** |  | [optional] [default to false]
**email_on_pay_settle** | **bool** |  | [optional] [default to true]
**email_on_recurring_pay_settle** | **bool** |  | [optional] [default to true]
**email_on_tax_relief_settle** | **bool** |  | [optional] [default to false]
**email_on_goal_setup** | **bool** |  | [optional] [default to false]
**email_on_bankaccount_setup** | **bool** |  | [optional] [default to false]
**allow_client_deposit_withdrawals** | **bool** |  | [optional] [default to false]
**enable_entity_clients** | **bool** |  | [optional] [default to true]
**enable_create_pension_drawdown** | **bool** |  | [optional] [default to false]
**pay_cash_interest** | **bool** |  | [optional] [default to true]
**mfa_period_days** | [**\OpenAPI\Client\Model\MFAPeriodDrop**](MFAPeriodDrop.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
