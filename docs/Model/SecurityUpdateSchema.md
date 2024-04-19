# # SecurityUpdateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**status** | [**\OpenAPI\Client\Model\FapiDbSecuritySecurityStatus**](FapiDbSecuritySecurityStatus.md) |  | [optional]
**security_category** | [**\OpenAPI\Client\Model\SecurityCategory**](SecurityCategory.md) |  | [optional]
**asset_class_ref** | **int** |  | [optional]
**isin** | **string** | Must be a valid ISIN | [optional]
**code** | **string** |  | [optional]
**currency** | **string** | Must be an ISO 4217 currency code | [optional]
**bb_code** | **string** |  | [optional]
**preferred_broker** | [**\OpenAPI\Client\Model\Broker**](Broker.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\SecurityAttributeUpdateSchema**](SecurityAttributeUpdateSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
