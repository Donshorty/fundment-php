# OpenAPI\Client\FeeAccountsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**feeAccountLinkAvailableBankAccount()**](FeeAccountsApi.md#feeAccountLinkAvailableBankAccount) | **PUT** /fee-account/{ref}/bank-account/{iba_ref} | Fee Account Link Available Bank Account |
| [**feeAccountRead()**](FeeAccountsApi.md#feeAccountRead) | **GET** /fee-account/{ref} | Fee Account Read |
| [**feeAccountReadAvailableBankAccounts()**](FeeAccountsApi.md#feeAccountReadAvailableBankAccounts) | **GET** /fee-account/{ref}/bank-account | Fee Account Read Available Bank Accounts |
| [**feeAccountTransactionsRead()**](FeeAccountsApi.md#feeAccountTransactionsRead) | **GET** /fee-account/{ref}/transactions/ | Fee Account Transactions Read |
| [**feeAccountsRead()**](FeeAccountsApi.md#feeAccountsRead) | **GET** /fee-account/ | Fee Accounts Read |


## `feeAccountLinkAvailableBankAccount()`

```php
feeAccountLinkAvailableBankAccount($ref, $iba_ref): mixed
```

Fee Account Link Available Bank Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FDMTAFFEES; // string
$iba_ref = FDMTBUS; // string

try {
    $result = $apiInstance->feeAccountLinkAvailableBankAccount($ref, $iba_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeAccountsApi->feeAccountLinkAvailableBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **iba_ref** | **string**|  | |

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

## `feeAccountRead()`

```php
feeAccountRead($ref): \OpenAPI\Client\Model\FeeAccountReturnSchema
```

Fee Account Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FDMTAFFEES; // string

try {
    $result = $apiInstance->feeAccountRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeAccountsApi->feeAccountRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FeeAccountReturnSchema**](../Model/FeeAccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeAccountReadAvailableBankAccounts()`

```php
feeAccountReadAvailableBankAccounts($ref): \OpenAPI\Client\Model\NestedInstitutionBankAccountReturnSchema[]
```

Fee Account Read Available Bank Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FDMTAFFEES; // string

try {
    $result = $apiInstance->feeAccountReadAvailableBankAccounts($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeAccountsApi->feeAccountReadAvailableBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NestedInstitutionBankAccountReturnSchema[]**](../Model/NestedInstitutionBankAccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeAccountTransactionsRead()`

```php
feeAccountTransactionsRead($ref, $start_date, $end_date): \OpenAPI\Client\Model\FeeAccountTransactionReturnSchema[]
```

Fee Account Transactions Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FDMTAFFEES; // string
$start_date = 2022-01-01; // \DateTime
$end_date = 2022-05-10; // \DateTime

try {
    $result = $apiInstance->feeAccountTransactionsRead($ref, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeAccountsApi->feeAccountTransactionsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeAccountTransactionReturnSchema[]**](../Model/FeeAccountTransactionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeAccountsRead()`

```php
feeAccountsRead(): \OpenAPI\Client\Model\NestedFeeAccountReturnSchema[]
```

Fee Accounts Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->feeAccountsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeAccountsApi->feeAccountsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NestedFeeAccountReturnSchema[]**](../Model/NestedFeeAccountReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
