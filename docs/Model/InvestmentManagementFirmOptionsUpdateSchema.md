# # InvestmentManagementFirmOptionsUpdateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ctc_name** | **string** |  | [optional]
**lei** | **string** |  | [optional]
**dm_nino** | **string** |  | [optional]
**acknowledgement_tcs** | **string** |  | [optional]
**retail_acknowledgement_full** | **string** |  | [optional]
**retail_acknowledgement_mandate** | **string** |  | [optional]
**auto_rebalance_allowed** | **bool** |  | [optional] [default to true]
**auto_rebalance_threshold_freq** | [**\OpenAPI\Client\Model\AutoRebalanceThresholdFrequency**](AutoRebalanceThresholdFrequency.md) |  | [optional]
**default_rebalance_threshold_pct** | **int** |  | [optional] [default to 10]
**default_cash_exec_algo** | [**\OpenAPI\Client\Model\CashExecAlgo**](CashExecAlgo.md) |  | [optional]
**default_linked_weighting_type** | [**\OpenAPI\Client\Model\WeightingType**](WeightingType.md) |  | [optional]
**analysis_period_years** | **int** |  | [optional]
**fee_charge_frequency** | [**\OpenAPI\Client\Model\FeeChargeFrequency**](FeeChargeFrequency.md) |  | [optional]
**fee_type** | [**\OpenAPI\Client\Model\FapiDbHelpersEnumsFeeType**](FapiDbHelpersEnumsFeeType.md) |  | [optional]
**default_weighting_type** | [**\OpenAPI\Client\Model\WeightingType**](WeightingType.md) |  | [optional]
**im_type** | [**\OpenAPI\Client\Model\InvestmentManagementFirmType**](InvestmentManagementFirmType.md) |  | [optional]
**initial_fee_on_recurring_deposit** | **int** |  | [optional]
**enable_custom_index** | **bool** |  | [optional]
**mfa_period_days** | [**\OpenAPI\Client\Model\MFAPeriodDrop**](MFAPeriodDrop.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
