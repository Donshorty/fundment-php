# # ClientCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** |  | [optional]
**middle_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**client_type** | [**\OpenAPI\Client\Model\ClientType**](ClientType.md) |  | [optional]
**title** | **string** | Must only contain letters | [optional]
**suffix** | **string** |  | [optional]
**email** | **string** |  |
**date_of_birth** | **\DateTime** |  |
**gender** | [**\OpenAPI\Client\Model\Gender**](Gender.md) |  | [optional]
**country_of_birth** | **string** | Must be a string of letters of length 2, based on the ISO alpha-2 codes |
**nationality** | **string** | Must be a string of letters of length 2, based on the ISO alpha-2 codes |
**country_of_tax_residency** | **string** | Must be a string of letters of length 2, based on the ISO alpha-2 codes |
**nino** | **string** | NI number must be valid as per Government guidelines | [optional]
**addresses** | [**\OpenAPI\Client\Model\NestedClientAddressCreateSchema[]**](NestedClientAddressCreateSchema.md) |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) | [optional]
**adviser_firm_ref** | **string** |  | [optional]
**is_associate** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
