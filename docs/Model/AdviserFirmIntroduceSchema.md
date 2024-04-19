# # AdviserFirmIntroduceSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firm_name** | **string** |  |
**support_email** | **string** |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) |
**fca_registration_number** | **string** | Must be a valid FCA registration number | [optional]
**addresses** | [**\OpenAPI\Client\Model\AdviserFirmAddressCreateSchema[]**](AdviserFirmAddressCreateSchema.md) |  |
**advisers** | [**\OpenAPI\Client\Model\AdviserCreateSchema[]**](AdviserCreateSchema.md) |  | [optional]
**companies_house_registration_number** | **string** | Must be a valid Company Registration Number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
