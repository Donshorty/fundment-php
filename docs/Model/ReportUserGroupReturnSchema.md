# # ReportUserGroupReturnSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Report User Group Name |
**description** | **string** | Report User Group Description |
**include_all** | **bool** | Include all members of the firm by default in this group | [optional] [default to true]
**updating_login_id** | **int** | Login ID of user that updated this data |
**id** | **int** | Report User Group ID PK |
**adviser_firm_id** | **int** |  | [optional]
**invmgr_firm_id** | **int** |  | [optional]
**adviser_firm** | [**\OpenAPI\Client\Model\ReducedAdviserFirmReturnSchema**](ReducedAdviserFirmReturnSchema.md) |  | [optional]
**invmgr_firm** | [**\OpenAPI\Client\Model\ReducedInvestmentManagementReturnSchema**](ReducedInvestmentManagementReturnSchema.md) |  | [optional]
**updating_login** | [**\OpenAPI\Client\Model\ReducedLoginReturnSchema**](ReducedLoginReturnSchema.md) |  | [optional]
**updated_on** | **\DateTime** | Last updated time |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
