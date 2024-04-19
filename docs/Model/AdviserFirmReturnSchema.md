# # AdviserFirmReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fca_registration_number** | **string** |  | [optional]
**ref** | **string** |  |
**firm_name** | **string** |  |
**institution_id** | **int** |  | [optional]
**support_email** | **string** |  | [optional]
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) |
**firm_type** | [**\OpenAPI\Client\Model\AdviserFirmType**](AdviserFirmType.md) |  | [optional]
**date_created** | **\DateTime** |  |
**date_updated** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Model\FapiDbAdviserAdviserFirmStatus**](FapiDbAdviserAdviserFirmStatus.md) |  |
**companies_house_registration_number** | **string** |  | [optional]
**auto_service_name** | **string** |  | [optional]
**auto_liberty_ref** | **string** |  | [optional]
**style_override** | **string** |  | [optional]
**addresses** | [**\OpenAPI\Client\Model\AdviserFirmAddressReturnSchema[]**](AdviserFirmAddressReturnSchema.md) |  |
**advisers** | [**\OpenAPI\Client\Model\AdviserReturnSchema[]**](AdviserReturnSchema.md) |  |
**fees** | [**\OpenAPI\Client\Model\AdviserFirmFeeReturnSchema[]**](AdviserFirmFeeReturnSchema.md) |  |
**documents** | [**\OpenAPI\Client\Model\AdviserDocumentReturnSchema[]**](AdviserDocumentReturnSchema.md) |  |
**investment_management_firms** | [**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkReturnSchema[]**](AdviserFirmInvestmentManagementFirmLinkReturnSchema.md) |  |
**options** | [**\OpenAPI\Client\Model\AdviserFirmOptionReturnSchema**](AdviserFirmOptionReturnSchema.md) |  |
**rpp_links** | [**\OpenAPI\Client\Model\AdviserFirmRppLinkReturnSchema[]**](AdviserFirmRppLinkReturnSchema.md) |  |
**client_groups** | [**\OpenAPI\Client\Model\ClientGroupReturnSchema[]**](ClientGroupReturnSchema.md) |  |
**fee_account** | [**\OpenAPI\Client\Model\NestedFeeAccountReturnSchema**](NestedFeeAccountReturnSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
