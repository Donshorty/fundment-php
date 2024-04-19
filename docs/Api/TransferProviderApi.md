# OpenAPI\Client\TransferProviderApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transferProviderRead()**](TransferProviderApi.md#transferProviderRead) | **GET** /transfer-provider/{ref} | Transfer Provider Read |
| [**transferProvidersRead()**](TransferProviderApi.md#transferProvidersRead) | **GET** /transfer-provider/ | Transfer Providers Read |


## `transferProviderRead()`

```php
transferProviderRead($ref): \OpenAPI\Client\Model\TransferProviderReturnSchema
```

Transfer Provider Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransferProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FTP000000032; // string

try {
    $result = $apiInstance->transferProviderRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferProviderApi->transferProviderRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\TransferProviderReturnSchema**](../Model/TransferProviderReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferProvidersRead()`

```php
transferProvidersRead(): \OpenAPI\Client\Model\NestedTransferProviderReturnSchema[]
```

Transfer Providers Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransferProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transferProvidersRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferProviderApi->transferProvidersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NestedTransferProviderReturnSchema[]**](../Model/NestedTransferProviderReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
