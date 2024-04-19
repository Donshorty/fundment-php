# # InvestmentManagementFirmCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**im_type** | [**\OpenAPI\Client\Model\InvestmentManagementFirmType**](InvestmentManagementFirmType.md) |  | [optional]
**name** | **string** |  |
**default_weighting_type** | [**\OpenAPI\Client\Model\WeightingType**](WeightingType.md) |  |
**ref** | **string** |  |
**email** | **string** |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) |
**fca_registration_number** | **string** | Must be a valid FCA registration number |
**fees** | [**\OpenAPI\Client\Model\InvestmentManagementFirmFeeCreateSchema[]**](InvestmentManagementFirmFeeCreateSchema.md) |  | [optional]
**rpp_links** | [**\OpenAPI\Client\Model\InvestmentManagementFirmRppCreateSchema[]**](InvestmentManagementFirmRppCreateSchema.md) |  | [optional]
**addresses** | [**\OpenAPI\Client\Model\InvestmentManagementFirmAddressCreateSchema[]**](InvestmentManagementFirmAddressCreateSchema.md) |  | [optional]
**options** | [**\OpenAPI\Client\Model\InvestmentManagementFirmOptionsCreateSchema**](InvestmentManagementFirmOptionsCreateSchema.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
