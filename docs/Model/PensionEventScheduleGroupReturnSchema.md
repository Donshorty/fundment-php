# # PensionEventScheduleGroupReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **int** |  |
**ext_ref** | **string** |  |
**status** | [**\OpenAPI\Client\Model\FapiDbPensionPensionEventScheduleGroupStatus**](FapiDbPensionPensionEventScheduleGroupStatus.md) |  | [optional]
**status_description** | **string** |  | [optional]
**end_date** | **\DateTime** |  | [optional]
**date_created** | **\DateTime** |  |
**date_updated** | **\DateTime** |  |
**pension_event_schedules** | [**\OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[]**](NestedPensionEventScheduleReturnSchema.md) |  |
**notes** | [**\OpenAPI\Client\Model\PensionNotesReturnSchema[]**](PensionNotesReturnSchema.md) |  |
**event_groups** | [**\OpenAPI\Client\Model\NestedPensionEventGroupReturnSchema[]**](NestedPensionEventGroupReturnSchema.md) |  |
**client_approvals** | [**\OpenAPI\Client\Model\PensionClientApprovalReturnSchema[]**](PensionClientApprovalReturnSchema.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
