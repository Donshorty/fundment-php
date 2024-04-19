# # InvestmentStrategyUpdateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] [default to '']
**desc** | **string** |  | [optional] [default to '']
**weighting_type** | [**\OpenAPI\Client\Model\WeightingType**](WeightingType.md) |  | [optional]
**is_tradeable** | **bool** |  | [optional] [default to true]
**auto_rebalance** | **bool** |  | [optional] [default to true]
**cash_exec_algo** | [**\OpenAPI\Client\Model\CashExecAlgo**](CashExecAlgo.md) |  |
**sort_order** | **int** |  | [optional] [default to 0]
**objectives** | **string** |  | [optional]
**cagr** | **float** |  | [optional]
**vol** | **float** |  | [optional]
**icf** | **float** |  | [optional]
**ocf** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
