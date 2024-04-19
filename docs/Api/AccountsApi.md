# OpenAPI\Client\AccountsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountCreate()**](AccountsApi.md#accountCreate) | **POST** /account/ | Account Create |
| [**accountCreateGoal()**](AccountsApi.md#accountCreateGoal) | **POST** /account/{ref}/goal/ | Account Create Goal |
| [**accountPensionInfoUpdate()**](AccountsApi.md#accountPensionInfoUpdate) | **PATCH** /account/{ref}/pension-info | Account Pension Info Update |
| [**accountRead()**](AccountsApi.md#accountRead) | **GET** /account/{ref} | Account Read |
| [**accountUpdate()**](AccountsApi.md#accountUpdate) | **PATCH** /account/{ref} | Account Update |
| [**accountsRead()**](AccountsApi.md#accountsRead) | **GET** /account/ | Accounts Read |


## `accountCreate()`

```php
accountCreate($account_create_schema): \OpenAPI\Client\Model\AccountReturnSchema
```

Account Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_create_schema = new \OpenAPI\Client\Model\AccountCreateSchema(); // \OpenAPI\Client\Model\AccountCreateSchema

try {
    $result = $apiInstance->accountCreate($account_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_create_schema** | [**\OpenAPI\Client\Model\AccountCreateSchema**](../Model/AccountCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountReturnSchema**](../Model/AccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountCreateGoal()`

```php
accountCreateGoal($ref, $nested_goal_create_schema): \OpenAPI\Client\Model\NestedGoalReturnSchema
```

Account Create Goal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FPENS00000ED; // string
$nested_goal_create_schema = new \OpenAPI\Client\Model\NestedGoalCreateSchema(); // \OpenAPI\Client\Model\NestedGoalCreateSchema

try {
    $result = $apiInstance->accountCreateGoal($ref, $nested_goal_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountCreateGoal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **nested_goal_create_schema** | [**\OpenAPI\Client\Model\NestedGoalCreateSchema**](../Model/NestedGoalCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NestedGoalReturnSchema**](../Model/NestedGoalReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPensionInfoUpdate()`

```php
accountPensionInfoUpdate($ref, $pension_account_info_upsert_schema): \OpenAPI\Client\Model\AccountReturnSchema
```

Account Pension Info Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FPENS00000ED; // string
$pension_account_info_upsert_schema = new \OpenAPI\Client\Model\PensionAccountInfoUpsertSchema(); // \OpenAPI\Client\Model\PensionAccountInfoUpsertSchema

try {
    $result = $apiInstance->accountPensionInfoUpdate($ref, $pension_account_info_upsert_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountPensionInfoUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **pension_account_info_upsert_schema** | [**\OpenAPI\Client\Model\PensionAccountInfoUpsertSchema**](../Model/PensionAccountInfoUpsertSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountReturnSchema**](../Model/AccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountRead()`

```php
accountRead($ref): \OpenAPI\Client\Model\AccountReturnSchema
```

Account Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FPENS00000ED; // string

try {
    $result = $apiInstance->accountRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AccountReturnSchema**](../Model/AccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountUpdate()`

```php
accountUpdate($ref, $account_update_schema): \OpenAPI\Client\Model\AccountReturnSchema
```

Account Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FPENS00000ED; // string
$account_update_schema = new \OpenAPI\Client\Model\AccountUpdateSchema(); // \OpenAPI\Client\Model\AccountUpdateSchema

try {
    $result = $apiInstance->accountUpdate($ref, $account_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **account_update_schema** | [**\OpenAPI\Client\Model\AccountUpdateSchema**](../Model/AccountUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountReturnSchema**](../Model/AccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsRead()`

```php
accountsRead($adviser_firm_ref): \OpenAPI\Client\Model\AccountReturnSchema[]
```

Accounts Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->accountsRead($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountReturnSchema[]**](../Model/AccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
