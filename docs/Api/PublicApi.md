# OpenAPI\Client\PublicApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiHealthCheck()**](PublicApi.md#apiHealthCheck) | **GET** /public/health-check | Api Health Check |
| [**publicAdviserFirmDownloadLogo()**](PublicApi.md#publicAdviserFirmDownloadLogo) | **GET** /public/adviser-firm/logo/download | Public Adviser Firm Download Logo |
| [**publicAdviserFirmRead()**](PublicApi.md#publicAdviserFirmRead) | **GET** /public/adviser-firm | Public Adviser Firm Read |


## `apiHealthCheck()`

```php
apiHealthCheck(): mixed
```

Api Health Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiHealthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->apiHealthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicAdviserFirmDownloadLogo()`

```php
publicAdviserFirmDownloadLogo($subdomain): mixed
```

Public Adviser Firm Download Logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subdomain = 'subdomain_example'; // string

try {
    $result = $apiInstance->publicAdviserFirmDownloadLogo($subdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->publicAdviserFirmDownloadLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subdomain** | **string**|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicAdviserFirmRead()`

```php
publicAdviserFirmRead($subdomain): \OpenAPI\Client\Model\PublicAdviserFirmReturnSchema
```

Public Adviser Firm Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subdomain = 'subdomain_example'; // string

try {
    $result = $apiInstance->publicAdviserFirmRead($subdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->publicAdviserFirmRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subdomain** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PublicAdviserFirmReturnSchema**](../Model/PublicAdviserFirmReturnSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
