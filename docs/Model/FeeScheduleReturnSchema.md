# # FeeScheduleReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**label** | **string** |  | [optional]
**fee_type** | [**\OpenAPI\Client\Model\FapiDbFeeFeeScheduleFeeType**](FapiDbFeeFeeScheduleFeeType.md) |  |
**fee_calculation_type** | [**\OpenAPI\Client\Model\FeeCalculationType**](FeeCalculationType.md) |  | [optional]
**fee_charge_frequency** | [**\OpenAPI\Client\Model\FeeChargeFrequencyType**](FeeChargeFrequencyType.md) |  | [optional]
**include_initial_on_recurring_deposits** | **bool** |  |
**is_vat_applicable** | **bool** |  |
**ref** | **int** |  |
**tiers** | [**\OpenAPI\Client\Model\FeeScheduleTierReturnSchema[]**](FeeScheduleTierReturnSchema.md) |  |
**date_created** | **\DateTime** |  |
**date_updated** | **\DateTime** |  |
**constraints** | [**\OpenAPI\Client\Model\FeeScheduleConstraintReturnSchema**](FeeScheduleConstraintReturnSchema.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
