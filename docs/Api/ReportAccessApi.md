# OpenAPI\Client\ReportAccessApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportCreate()**](ReportAccessApi.md#reportCreate) | **POST** /report-access/report/ | Report Create |
| [**reportDelete()**](ReportAccessApi.md#reportDelete) | **DELETE** /report-access/report/{ref} | Report Delete |
| [**reportGroupCreate()**](ReportAccessApi.md#reportGroupCreate) | **POST** /report-access/report-group/ | Report Group Create |
| [**reportGroupDelete()**](ReportAccessApi.md#reportGroupDelete) | **DELETE** /report-access/report-group/{ref} | Report Group Delete |
| [**reportGroupMemberCreate()**](ReportAccessApi.md#reportGroupMemberCreate) | **POST** /report-access/report-group-member/ | Report Group Member Create |
| [**reportGroupMemberDelete()**](ReportAccessApi.md#reportGroupMemberDelete) | **DELETE** /report-access/report-group-member/{report_group_ref}/{report_ref} | Report Group Member Delete |
| [**reportGroupMemberUpdate()**](ReportAccessApi.md#reportGroupMemberUpdate) | **PATCH** /report-access/report-group-member/ | Report Group Member Update |
| [**reportGroupMembersRead()**](ReportAccessApi.md#reportGroupMembersRead) | **GET** /report-access/report-group-member | Report Group Members Read |
| [**reportGroupPermissionCreate()**](ReportAccessApi.md#reportGroupPermissionCreate) | **POST** /report-access/report-group-permission/ | Report Group Permission Create |
| [**reportGroupPermissionDelete()**](ReportAccessApi.md#reportGroupPermissionDelete) | **DELETE** /report-access/report-group-permission/{report_group_ref}/{report_user_group_ref} | Report Group Permission Delete |
| [**reportGroupPermissionForLoginRead()**](ReportAccessApi.md#reportGroupPermissionForLoginRead) | **GET** /report-access/report-group-permission/login/{login_ref} | Report Group Permission For Login Read |
| [**reportGroupPermissionUpdate()**](ReportAccessApi.md#reportGroupPermissionUpdate) | **PATCH** /report-access/report-group-permission/ | Report Group Permission Update |
| [**reportGroupPermissionsRead()**](ReportAccessApi.md#reportGroupPermissionsRead) | **GET** /report-access/report-group-permissions | Report Group Permissions Read |
| [**reportGroupUpdate()**](ReportAccessApi.md#reportGroupUpdate) | **PATCH** /report-access/report-group/ | Report Group Update |
| [**reportGroupsRead()**](ReportAccessApi.md#reportGroupsRead) | **GET** /report-access/report-group | Report Groups Read |
| [**reportUpdate()**](ReportAccessApi.md#reportUpdate) | **PATCH** /report-access/report/ | Report Update |
| [**reportUserGroupCreate()**](ReportAccessApi.md#reportUserGroupCreate) | **POST** /report-access/report-user-group/ | Report User Group Create |
| [**reportUserGroupDelete()**](ReportAccessApi.md#reportUserGroupDelete) | **DELETE** /report-access/report-user-group/{ref} | Report User Group Delete |
| [**reportUserGroupMemberCreate()**](ReportAccessApi.md#reportUserGroupMemberCreate) | **POST** /report-access/report-user-group-member/ | Report User Group Member Create |
| [**reportUserGroupMemberDelete()**](ReportAccessApi.md#reportUserGroupMemberDelete) | **DELETE** /report-access/report-user-group-member/{report_user_group_ref}/{login_ref} | Report User Group Member Delete |
| [**reportUserGroupMemberRead()**](ReportAccessApi.md#reportUserGroupMemberRead) | **GET** /report-access/report-user-group-members | Report User Group Member Read |
| [**reportUserGroupMemberUpdate()**](ReportAccessApi.md#reportUserGroupMemberUpdate) | **PATCH** /report-access/report-user-group-member/ | Report User Group Member Update |
| [**reportUserGroupRead()**](ReportAccessApi.md#reportUserGroupRead) | **GET** /report-access/report-user-group | Report User Group Read |
| [**reportUserGroupUpdate()**](ReportAccessApi.md#reportUserGroupUpdate) | **PATCH** /report-access/report-user-group/ | Report User Group Update |
| [**reportsRead()**](ReportAccessApi.md#reportsRead) | **GET** /report-access/report | Reports Read |


## `reportCreate()`

```php
reportCreate($report_create_schema): \OpenAPI\Client\Model\ReportReturnSchema
```

Report Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_create_schema = new \OpenAPI\Client\Model\ReportCreateSchema(); // \OpenAPI\Client\Model\ReportCreateSchema

try {
    $result = $apiInstance->reportCreate($report_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_create_schema** | [**\OpenAPI\Client\Model\ReportCreateSchema**](../Model/ReportCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportReturnSchema**](../Model/ReportReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportDelete()`

```php
reportDelete($ref): mixed
```

Report Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int

try {
    $result = $apiInstance->reportDelete($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupCreate()`

```php
reportGroupCreate($report_group_create_schema): \OpenAPI\Client\Model\ReportGroupReturnSchema
```

Report Group Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_create_schema = new \OpenAPI\Client\Model\ReportGroupCreateSchema(); // \OpenAPI\Client\Model\ReportGroupCreateSchema

try {
    $result = $apiInstance->reportGroupCreate($report_group_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_create_schema** | [**\OpenAPI\Client\Model\ReportGroupCreateSchema**](../Model/ReportGroupCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupReturnSchema**](../Model/ReportGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupDelete()`

```php
reportGroupDelete($ref): mixed
```

Report Group Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int

try {
    $result = $apiInstance->reportGroupDelete($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupMemberCreate()`

```php
reportGroupMemberCreate($report_group_member_create_schema): \OpenAPI\Client\Model\ReportGroupMemberReturnSchema
```

Report Group Member Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_member_create_schema = new \OpenAPI\Client\Model\ReportGroupMemberCreateSchema(); // \OpenAPI\Client\Model\ReportGroupMemberCreateSchema

try {
    $result = $apiInstance->reportGroupMemberCreate($report_group_member_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupMemberCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_member_create_schema** | [**\OpenAPI\Client\Model\ReportGroupMemberCreateSchema**](../Model/ReportGroupMemberCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupMemberReturnSchema**](../Model/ReportGroupMemberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupMemberDelete()`

```php
reportGroupMemberDelete($report_group_ref, $report_ref): mixed
```

Report Group Member Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_ref = 1; // int
$report_ref = 1; // int

try {
    $result = $apiInstance->reportGroupMemberDelete($report_group_ref, $report_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupMemberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_ref** | **int**|  | |
| **report_ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupMemberUpdate()`

```php
reportGroupMemberUpdate($report_group_member_update_schema): \OpenAPI\Client\Model\ReportGroupMemberReturnSchema
```

Report Group Member Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_member_update_schema = new \OpenAPI\Client\Model\ReportGroupMemberUpdateSchema(); // \OpenAPI\Client\Model\ReportGroupMemberUpdateSchema

try {
    $result = $apiInstance->reportGroupMemberUpdate($report_group_member_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupMemberUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_member_update_schema** | [**\OpenAPI\Client\Model\ReportGroupMemberUpdateSchema**](../Model/ReportGroupMemberUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupMemberReturnSchema**](../Model/ReportGroupMemberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupMembersRead()`

```php
reportGroupMembersRead($report_group_ref): \OpenAPI\Client\Model\ReportReturnSchema[]
```

Report Group Members Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_ref = 56; // int

try {
    $result = $apiInstance->reportGroupMembersRead($report_group_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupMembersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ReportReturnSchema[]**](../Model/ReportReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupPermissionCreate()`

```php
reportGroupPermissionCreate($report_group_permission_create_schema): \OpenAPI\Client\Model\ReportGroupPermissionReturnSchema
```

Report Group Permission Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_permission_create_schema = new \OpenAPI\Client\Model\ReportGroupPermissionCreateSchema(); // \OpenAPI\Client\Model\ReportGroupPermissionCreateSchema

try {
    $result = $apiInstance->reportGroupPermissionCreate($report_group_permission_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupPermissionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_permission_create_schema** | [**\OpenAPI\Client\Model\ReportGroupPermissionCreateSchema**](../Model/ReportGroupPermissionCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupPermissionReturnSchema**](../Model/ReportGroupPermissionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupPermissionDelete()`

```php
reportGroupPermissionDelete($report_user_group_ref, $report_group_ref): mixed
```

Report Group Permission Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_ref = 1; // int
$report_group_ref = 1; // int

try {
    $result = $apiInstance->reportGroupPermissionDelete($report_user_group_ref, $report_group_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_ref** | **int**|  | |
| **report_group_ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupPermissionForLoginRead()`

```php
reportGroupPermissionForLoginRead($login_ref, $adviser_firm_ref, $invmgr_firm_ref): \OpenAPI\Client\Model\ReportGroupPermissionReturnSchema[]
```

Report Group Permission For Login Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_ref = 1; // int
$adviser_firm_ref = 'adviser_firm_ref_example'; // string
$invmgr_firm_ref = 'invmgr_firm_ref_example'; // string

try {
    $result = $apiInstance->reportGroupPermissionForLoginRead($login_ref, $adviser_firm_ref, $invmgr_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupPermissionForLoginRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | [optional] |
| **invmgr_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportGroupPermissionReturnSchema[]**](../Model/ReportGroupPermissionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupPermissionUpdate()`

```php
reportGroupPermissionUpdate($report_group_permission_update_schema): \OpenAPI\Client\Model\ReportGroupPermissionReturnSchema
```

Report Group Permission Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_permission_update_schema = new \OpenAPI\Client\Model\ReportGroupPermissionUpdateSchema(); // \OpenAPI\Client\Model\ReportGroupPermissionUpdateSchema

try {
    $result = $apiInstance->reportGroupPermissionUpdate($report_group_permission_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupPermissionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_permission_update_schema** | [**\OpenAPI\Client\Model\ReportGroupPermissionUpdateSchema**](../Model/ReportGroupPermissionUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupPermissionReturnSchema**](../Model/ReportGroupPermissionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupPermissionsRead()`

```php
reportGroupPermissionsRead($report_user_group_id, $report_group_id, $updating_login_id): \OpenAPI\Client\Model\ReportGroupPermissionReturnSchema[]
```

Report Group Permissions Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_id = 56; // int
$report_group_id = 56; // int
$updating_login_id = 56; // int

try {
    $result = $apiInstance->reportGroupPermissionsRead($report_user_group_id, $report_group_id, $updating_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupPermissionsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_id** | **int**|  | [optional] |
| **report_group_id** | **int**|  | [optional] |
| **updating_login_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportGroupPermissionReturnSchema[]**](../Model/ReportGroupPermissionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupUpdate()`

```php
reportGroupUpdate($report_group_update_schema): \OpenAPI\Client\Model\ReportGroupReturnSchema
```

Report Group Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_update_schema = new \OpenAPI\Client\Model\ReportGroupUpdateSchema(); // \OpenAPI\Client\Model\ReportGroupUpdateSchema

try {
    $result = $apiInstance->reportGroupUpdate($report_group_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_update_schema** | [**\OpenAPI\Client\Model\ReportGroupUpdateSchema**](../Model/ReportGroupUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportGroupReturnSchema**](../Model/ReportGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGroupsRead()`

```php
reportGroupsRead($report_group_id): \OpenAPI\Client\Model\ReportGroupReturnSchema[]
```

Report Groups Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_group_id = 56; // int

try {
    $result = $apiInstance->reportGroupsRead($report_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportGroupsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_group_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportGroupReturnSchema[]**](../Model/ReportGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUpdate()`

```php
reportUpdate($report_update_schema): \OpenAPI\Client\Model\ReportReturnSchema
```

Report Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_update_schema = new \OpenAPI\Client\Model\ReportUpdateSchema(); // \OpenAPI\Client\Model\ReportUpdateSchema

try {
    $result = $apiInstance->reportUpdate($report_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_update_schema** | [**\OpenAPI\Client\Model\ReportUpdateSchema**](../Model/ReportUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportReturnSchema**](../Model/ReportReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupCreate()`

```php
reportUserGroupCreate($report_user_group_create_schema): \OpenAPI\Client\Model\ReportUserGroupCreateSchema
```

Report User Group Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_create_schema = new \OpenAPI\Client\Model\ReportUserGroupCreateSchema(); // \OpenAPI\Client\Model\ReportUserGroupCreateSchema

try {
    $result = $apiInstance->reportUserGroupCreate($report_user_group_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_create_schema** | [**\OpenAPI\Client\Model\ReportUserGroupCreateSchema**](../Model/ReportUserGroupCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupCreateSchema**](../Model/ReportUserGroupCreateSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupDelete()`

```php
reportUserGroupDelete($ref): mixed
```

Report User Group Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int

try {
    $result = $apiInstance->reportUserGroupDelete($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupMemberCreate()`

```php
reportUserGroupMemberCreate($report_user_group_member_create_schema): \OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema
```

Report User Group Member Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_member_create_schema = new \OpenAPI\Client\Model\ReportUserGroupMemberCreateSchema(); // \OpenAPI\Client\Model\ReportUserGroupMemberCreateSchema

try {
    $result = $apiInstance->reportUserGroupMemberCreate($report_user_group_member_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupMemberCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_member_create_schema** | [**\OpenAPI\Client\Model\ReportUserGroupMemberCreateSchema**](../Model/ReportUserGroupMemberCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema**](../Model/ReportUserGroupMemberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupMemberDelete()`

```php
reportUserGroupMemberDelete($login_ref, $report_user_group_ref): mixed
```

Report User Group Member Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_ref = 1; // int
$report_user_group_ref = 1; // int

try {
    $result = $apiInstance->reportUserGroupMemberDelete($login_ref, $report_user_group_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupMemberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_ref** | **int**|  | |
| **report_user_group_ref** | **int**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupMemberRead()`

```php
reportUserGroupMemberRead($login_id, $report_user_group_id, $updating_login_id): \OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema[]
```

Report User Group Member Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_id = 56; // int
$report_user_group_id = 56; // int
$updating_login_id = 56; // int

try {
    $result = $apiInstance->reportUserGroupMemberRead($login_id, $report_user_group_id, $updating_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupMemberRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_id** | **int**|  | [optional] |
| **report_user_group_id** | **int**|  | [optional] |
| **updating_login_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema[]**](../Model/ReportUserGroupMemberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupMemberUpdate()`

```php
reportUserGroupMemberUpdate($report_user_group_member_update_schema): \OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema
```

Report User Group Member Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_member_update_schema = new \OpenAPI\Client\Model\ReportUserGroupMemberUpdateSchema(); // \OpenAPI\Client\Model\ReportUserGroupMemberUpdateSchema

try {
    $result = $apiInstance->reportUserGroupMemberUpdate($report_user_group_member_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupMemberUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_member_update_schema** | [**\OpenAPI\Client\Model\ReportUserGroupMemberUpdateSchema**](../Model/ReportUserGroupMemberUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupMemberReturnSchema**](../Model/ReportUserGroupMemberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupRead()`

```php
reportUserGroupRead($report_user_group_id, $name, $description, $adviser_firm_ref, $invmgr_firm_ref, $updating_login_id): \OpenAPI\Client\Model\ReportUserGroupReturnSchema[]
```

Report User Group Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_id = 56; // int
$name = 'name_example'; // string
$description = 'description_example'; // string
$adviser_firm_ref = 'adviser_firm_ref_example'; // string
$invmgr_firm_ref = 'invmgr_firm_ref_example'; // string
$updating_login_id = 56; // int

try {
    $result = $apiInstance->reportUserGroupRead($report_user_group_id, $name, $description, $adviser_firm_ref, $invmgr_firm_ref, $updating_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_id** | **int**|  | [optional] |
| **name** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |
| **adviser_firm_ref** | **string**|  | [optional] |
| **invmgr_firm_ref** | **string**|  | [optional] |
| **updating_login_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupReturnSchema[]**](../Model/ReportUserGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserGroupUpdate()`

```php
reportUserGroupUpdate($report_user_group_update_schema): \OpenAPI\Client\Model\ReportUserGroupReturnSchema
```

Report User Group Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_user_group_update_schema = new \OpenAPI\Client\Model\ReportUserGroupUpdateSchema(); // \OpenAPI\Client\Model\ReportUserGroupUpdateSchema

try {
    $result = $apiInstance->reportUserGroupUpdate($report_user_group_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportUserGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_user_group_update_schema** | [**\OpenAPI\Client\Model\ReportUserGroupUpdateSchema**](../Model/ReportUserGroupUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportUserGroupReturnSchema**](../Model/ReportUserGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsRead()`

```php
reportsRead($report_id): \OpenAPI\Client\Model\ReportReturnSchema[]
```

Reports Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 56; // int

try {
    $result = $apiInstance->reportsRead($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAccessApi->reportsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportReturnSchema[]**](../Model/ReportReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
