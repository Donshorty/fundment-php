# OpenAPI\Client\GoalsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**goalCashTransactionsRead()**](GoalsApi.md#goalCashTransactionsRead) | **GET** /goal/{ref}/cash-transaction/ | Goal Cash Transactions Read |
| [**goalRead()**](GoalsApi.md#goalRead) | **GET** /goal/{ref} | Goal Read |
| [**goalReadSecurityTransactions()**](GoalsApi.md#goalReadSecurityTransactions) | **GET** /goal/{ref}/security-transaction/ | Goal Read Security Transactions |
| [**goalsRead()**](GoalsApi.md#goalsRead) | **GET** /goal/ | Goals Read |


## `goalCashTransactionsRead()`

```php
goalCashTransactionsRead($ref): \OpenAPI\Client\Model\CashTransactionReturnSchema[]
```

Goal Cash Transactions Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = PF00000000B5046; // string

try {
    $result = $apiInstance->goalCashTransactionsRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->goalCashTransactionsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CashTransactionReturnSchema[]**](../Model/CashTransactionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `goalRead()`

```php
goalRead($ref): \OpenAPI\Client\Model\GoalReturnSchema
```

Goal Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = PF00000000B5046; // string

try {
    $result = $apiInstance->goalRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->goalRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GoalReturnSchema**](../Model/GoalReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `goalReadSecurityTransactions()`

```php
goalReadSecurityTransactions($ref): \OpenAPI\Client\Model\SecurityTransactionReturnSchema[]
```

Goal Read Security Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = PF00000000B5046; // string

try {
    $result = $apiInstance->goalReadSecurityTransactions($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->goalReadSecurityTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityTransactionReturnSchema[]**](../Model/SecurityTransactionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `goalsRead()`

```php
goalsRead($adviser_firm_ref): \OpenAPI\Client\Model\GoalMultipleReturnSchema[]
```

Goals Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->goalsRead($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->goalsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GoalMultipleReturnSchema[]**](../Model/GoalMultipleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
