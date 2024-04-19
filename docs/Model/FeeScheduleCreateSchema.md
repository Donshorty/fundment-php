# # FeeScheduleCreateSchema

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
**tiers** | [**\OpenAPI\Client\Model\FeeScheduleTierCreateSchema[]**](FeeScheduleTierCreateSchema.md) |  |
**constraints** | [**\OpenAPI\Client\Model\FeeScheduleConstraintsCreateSchema**](FeeScheduleConstraintsCreateSchema.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
