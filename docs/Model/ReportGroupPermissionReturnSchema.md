# # ReportGroupPermissionReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_user_group_id** | **int** | Report User Group ID FK |
**report_group_id** | **int** | Report Group ID FK |
**updating_login_id** | **int** | Login ID of user that updated this data |
**updated_on** | **\DateTime** | Last updated time |
**report_group** | [**\OpenAPI\Client\Model\ReportGroupReturnSchema**](ReportGroupReturnSchema.md) |  | [optional]
**report_user_group** | [**\OpenAPI\Client\Model\ReportUserGroupReturnSchema**](ReportUserGroupReturnSchema.md) |  | [optional]
**updating_login** | [**\OpenAPI\Client\Model\ReducedLoginReturnSchema**](ReducedLoginReturnSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
