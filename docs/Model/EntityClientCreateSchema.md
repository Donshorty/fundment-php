# # EntityClientCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_name** | **string** |  | [optional]
**client_type** | [**\OpenAPI\Client\Model\ClientType**](ClientType.md) |  |
**country_of_tax_residency** | **string** | Must be a string of letters of length 2, based on the ISO alpha-2 codes |
**email** | **string** |  |
**lei** | **string** | 20-character long Legal Entity Idenitfier | [optional]
**adviser_firm_ref** | **string** |  |
**associated_existing_users** | [**\OpenAPI\Client\Model\AssociatedUserLinkSchema[]**](AssociatedUserLinkSchema.md) |  | [optional]
**addresses** | [**\OpenAPI\Client\Model\NestedClientAddressCreateSchema[]**](NestedClientAddressCreateSchema.md) |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) | [optional]
**date_of_incorporation** | **\DateTime** |  |
**company_reg_number** | **string** |  | [optional]
**company_business_nature** | **string** |  | [optional]
**country_of_incorporation** | **string** | Must be a string of letters of length 2, based on the ISO alpha-2 codes | [optional]
**pension_scheme_tax_reference** | **string** |  | [optional]
**is_associate** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
