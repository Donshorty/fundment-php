# # SecurityTransactionReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | [**\OpenAPI\Client\Model\TransactionType**](TransactionType.md) |  |
**order_ref** | **string** |  |
**security_ref** | **int** |  |
**price** | **float** |  |
**quantity** | **float** |  |
**currency** | **string** | Must be an ISO 4217 currency code | [optional] [default to 'GBP']
**description** | **string** |  | [optional]
**transaction_datetime** | **\DateTime** |  |
**trade_date** | **\DateTime** |  |
**settlement_date** | **\DateTime** |  |
**venue_code** | **string** |  | [optional]
**order_type** | **string** |  | [optional]
**is_broker_principal** | **bool** |  | [optional] [default to true]
**stamp_duty** | **float** |  | [optional]
**ptm_levy** | **float** |  | [optional]
**fx_charges** | **float** |  | [optional]
**commission** | **float** |  | [optional]
**initial_charge** | **float** |  | [optional]
**net_consideration** | **float** |  | [optional]
**book_cost** | **float** |  | [optional]
**broker** | [**\OpenAPI\Client\Model\Broker**](Broker.md) |  |
**updated_on** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Model\FapiDbUserSecurityTransactionStatus**](FapiDbUserSecurityTransactionStatus.md) |  | [optional]
**reporting_status** | [**\OpenAPI\Client\Model\ReportingStatus**](ReportingStatus.md) |  | [optional]
**reporting_ref** | **string** |  | [optional]
**ref** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
