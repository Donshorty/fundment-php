# # InvestmentStrategyReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**desc** | **string** |  |
**weighting_type** | [**\OpenAPI\Client\Model\WeightingType**](WeightingType.md) |  | [optional]
**is_tradeable** | **bool** |  | [optional] [default to true]
**auto_rebalance** | **bool** |  | [optional] [default to true]
**cash_exec_algo** | [**\OpenAPI\Client\Model\CashExecAlgo**](CashExecAlgo.md) |  |
**sort_order** | **int** |  | [optional] [default to 0]
**objectives** | **string** |  | [optional]
**ref** | **int** |  |
**cagr** | **float** |  | [optional]
**vol** | **float** |  | [optional]
**icf** | **float** |  | [optional]
**ocf** | **float** |  | [optional]
**status** | [**\OpenAPI\Client\Model\FapiDbInvstrategyInvStrategyStatus**](FapiDbInvstrategyInvStrategyStatus.md) |  | [optional]
**group_ref** | **int** |  | [optional]
**date_updated** | **\DateTime** |  |
**audit_latest** | [**\OpenAPI\Client\Model\InvStrategyAuditReturnSchema**](InvStrategyAuditReturnSchema.md) |  | [optional]
**benchmarks** | [**\OpenAPI\Client\Model\InvStrategyBenchmarksReturnSchema[]**](InvStrategyBenchmarksReturnSchema.md) |  | [optional]
**weights_latest** | [**\OpenAPI\Client\Model\InvStrategyWeightingLatestReturnSchema[]**](InvStrategyWeightingLatestReturnSchema.md) |  | [optional]
**investment_management_firm_ref** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
