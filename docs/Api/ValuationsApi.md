# OpenAPI\Client\ValuationsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**readCashValuations()**](ValuationsApi.md#readCashValuations) | **GET** /valuation/cash | Read Cash Valuations |
| [**readHoldingValuations()**](ValuationsApi.md#readHoldingValuations) | **GET** /valuation/holdings | Read Holding Valuations |
| [**valuationsRead()**](ValuationsApi.md#valuationsRead) | **GET** /valuation/ | Valuations Read |


## `readCashValuations()`

```php
readCashValuations($valuation_date, $page, $size): \OpenAPI\Client\Model\PageValuationReturnSchema
```

Read Cash Valuations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValuationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$valuation_date = 2023-01-01; // \DateTime
$page = 1; // int
$size = 50; // int

try {
    $result = $apiInstance->readCashValuations($valuation_date, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValuationsApi->readCashValuations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **valuation_date** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **size** | **int**|  | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageValuationReturnSchema**](../Model/PageValuationReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readHoldingValuations()`

```php
readHoldingValuations($valuation_date, $page, $size): \OpenAPI\Client\Model\PageValuationReturnSchema
```

Read Holding Valuations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValuationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$valuation_date = 2023-01-01; // \DateTime
$page = 1; // int
$size = 50; // int

try {
    $result = $apiInstance->readHoldingValuations($valuation_date, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValuationsApi->readHoldingValuations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **valuation_date** | **\DateTime**|  | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **size** | **int**|  | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\PageValuationReturnSchema**](../Model/PageValuationReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `valuationsRead()`

```php
valuationsRead(): \OpenAPI\Client\Model\ValuationReturnSchema[]
```

Valuations Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ValuationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->valuationsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValuationsApi->valuationsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ValuationReturnSchema[]**](../Model/ValuationReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
