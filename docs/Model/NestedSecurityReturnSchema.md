# # NestedSecurityReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref** | **int** |  |
**name** | **string** |  | [optional]
**code** | **string** |  |
**status** | [**\OpenAPI\Client\Model\FapiDbSecuritySecurityStatus**](FapiDbSecuritySecurityStatus.md) |  | [optional]
**ac_name** | **string** |  | [optional]
**industry** | **string** |  | [optional]
**country** | **string** |  | [optional]
**security_category** | [**\OpenAPI\Client\Model\SecurityCategory**](SecurityCategory.md) |  | [optional]
**is_restricted** | **bool** |  | [optional] [default to false]
**access** | [**\OpenAPI\Client\Model\NestedSecurityAccessReturnSchema[]**](NestedSecurityAccessReturnSchema.md) |  | [optional]
**isin** | **string** |  |
**latest_market_cap** | [**\OpenAPI\Client\Model\SecurityMarketCapSchema**](SecurityMarketCapSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
