# # PensionEventGroupReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**ext_ref** | **string** |  |
**schedule_group_id** | **int** |  |
**payslip_id** | **int** |  | [optional]
**status** | [**\OpenAPI\Client\Model\FapiDbPensionPensionEventGroupStatus**](FapiDbPensionPensionEventGroupStatus.md) |  | [optional]
**message** | **string** |  | [optional]
**drawdown_type** | [**\OpenAPI\Client\Model\DrawdownType**](DrawdownType.md) |  |
**events** | [**\OpenAPI\Client\Model\NestedPensionEventReturnSchema[]**](NestedPensionEventReturnSchema.md) |  |
**schedule_group** | [**\OpenAPI\Client\Model\NestedPensionEventScheduleGroupReturnSchema**](NestedPensionEventScheduleGroupReturnSchema.md) |  |
**notes** | [**\OpenAPI\Client\Model\PensionNotesReturnSchema[]**](PensionNotesReturnSchema.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
