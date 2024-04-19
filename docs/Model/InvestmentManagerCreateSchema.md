# # InvestmentManagerCreateSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Must only contain letters |
**first_name** | **string** | Must only contain letters, single spaces, dashes, apostrophes, and begin and end with letters |
**last_name** | **string** | Must only contain letters, single spaces, dashes, apostrophes, and begin and end with letters |
**email** | **string** |  |
**phone_number** | **string** | Must be a string of numbers and special characters (\&quot;()\&quot;, \&quot;-\&quot;, \&quot;+\&quot;, \&quot; \&quot;) | [optional]
**username** | **string** | Must be unique |
**password** | **mixed** | Password must be at least 6 characters and contain at least 1 upper case letter, 1 lower case letter and 1 number |
**date_of_birth** | **\DateTime** |  | [optional]
**can_edit** | **bool** |  | [optional] [default to true]
**can_approve** | **bool** |  | [optional] [default to false]
**is_administrator** | **bool** |  | [optional] [default to false]
**end_date** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
