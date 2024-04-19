# OpenAPI\Client\InvestmentStrategiesApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**investmentStrategiesRead()**](InvestmentStrategiesApi.md#investmentStrategiesRead) | **GET** /investment-strategy/ | Investment Strategies Read |
| [**investmentStrategyGroupsRead()**](InvestmentStrategiesApi.md#investmentStrategyGroupsRead) | **GET** /investment-strategy/investment-strategy-group/ | Investment Strategy Groups Read |
| [**investmentStrategyRead()**](InvestmentStrategiesApi.md#investmentStrategyRead) | **GET** /investment-strategy/{ref} | Investment Strategy Read |


## `investmentStrategiesRead()`

```php
investmentStrategiesRead(): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]
```

Investment Strategies Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentStrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->investmentStrategiesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentStrategiesApi->investmentStrategiesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentStrategyGroupsRead()`

```php
investmentStrategyGroupsRead(): \OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]
```

Investment Strategy Groups Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentStrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->investmentStrategyGroupsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentStrategiesApi->investmentStrategyGroupsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]**](../Model/InvStrategyGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentStrategyRead()`

```php
investmentStrategyRead($ref): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema
```

Investment Strategy Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentStrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int

try {
    $result = $apiInstance->investmentStrategyRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentStrategiesApi->investmentStrategyRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
