# # SecurityReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\FapiDbSecuritySecurityStatus**](FapiDbSecuritySecurityStatus.md) |  | [optional]
**security_category** | [**\OpenAPI\Client\Model\SecurityCategory**](SecurityCategory.md) |  | [optional]
**isin** | **string** |  |
**ref** | **int** |  |
**preferred_broker** | [**\OpenAPI\Client\Model\Broker**](Broker.md) |  | [optional]
**code** | **string** |  |
**currency** | **string** | Must be an ISO 4217 currency code | [optional]
**bb_code** | **string** |  | [optional]
**date_updated** | **\DateTime** |  |
**attributes** | [**\OpenAPI\Client\Model\SecurityAttributeReturnSchema**](SecurityAttributeReturnSchema.md) |  | [optional]
**notes** | [**\OpenAPI\Client\Model\SecurityNoteReturnSchema[]**](SecurityNoteReturnSchema.md) |  | [optional]
**accesses** | [**\OpenAPI\Client\Model\NestedSecurityAccessReturnSchema[]**](NestedSecurityAccessReturnSchema.md) |  | [optional]
**latest_cost** | [**\OpenAPI\Client\Model\SecurityCostReturnSchema**](SecurityCostReturnSchema.md) |  | [optional]
**latest_valuation** | [**\OpenAPI\Client\Model\SecurityValuationReturnSchema**](SecurityValuationReturnSchema.md) |  | [optional]
**asset_class** | [**\OpenAPI\Client\Model\NestedAssetClassReturnSchema**](NestedAssetClassReturnSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
