# # CashTransactionReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ref** | **int** |  | [optional]
**cashtrans_type_code** | **string** |  |
**amount** | **float** |  |
**fee_amount** | **float** |  | [optional]
**amount_for_tax_relief** | **float** |  | [optional]
**currency** | **string** | Must be an ISO 4217 currency code | [optional] [default to 'GBP']
**payment_reference** | **string** |  | [optional]
**description** | **string** |  |
**execution_date** | **\DateTime** |  |
**tax_impact_year** | **int** |  | [optional]
**created_on** | **\DateTime** |  |
**updated_on** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Model\FapiDbUserCashTransactionStatus**](FapiDbUserCashTransactionStatus.md) |  | [optional]
**suppress_notifications** | **bool** |  | [optional] [default to false]
**settlement_date** | **\DateTime** |  | [optional]
**parent_id** | **string** |  | [optional]
**ref** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
