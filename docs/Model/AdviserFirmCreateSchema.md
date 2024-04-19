# # AdviserFirmCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firm_name** | **string** |  |
**ref** | **string** |  |
**auto_service_name** | **string** |  | [optional]
**auto_liberty_ref** | **string** |  | [optional]
**support_email** | **string** |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) |
**companies_house_registration_number** | **string** | Must be a valid Company Registration Number | [optional]
**fca_registration_number** | **string** | Must be a valid FCA registration number |
**firm_type** | [**\OpenAPI\Client\Model\AdviserFirmType**](AdviserFirmType.md) |  | [optional]
**subdomain** | **string** |  | [optional]
**style_override** | **string** |  | [optional] [default to 'fundment']
**addresses** | [**\OpenAPI\Client\Model\AdviserFirmAddressCreateSchema[]**](AdviserFirmAddressCreateSchema.md) |  |
**options** | [**\OpenAPI\Client\Model\AdviserFirmOptionCreateSchema**](AdviserFirmOptionCreateSchema.md) |  | [optional]
**advisers** | [**\OpenAPI\Client\Model\AdviserCreateSchema[]**](AdviserCreateSchema.md) |  | [optional]
**fees** | [**\OpenAPI\Client\Model\AdviserFirmFeeCreateSchema[]**](AdviserFirmFeeCreateSchema.md) |  | [optional]
**documents** | [**\OpenAPI\Client\Model\AdviserDocumentCreateSchema[]**](AdviserDocumentCreateSchema.md) |  | [optional]
**investment_management_firms** | [**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkCreateSchema[]**](AdviserFirmInvestmentManagementFirmLinkCreateSchema.md) |  | [optional]
**rpp_links** | [**\OpenAPI\Client\Model\AdviserFirmRppLinkCreateSchema[]**](AdviserFirmRppLinkCreateSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
