# OpenAPI\Client\BulkActionsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBulkActions()**](BulkActionsApi.md#getBulkActions) | **GET** /bulk-actions/ | Get Bulk Actions |
| [**runBulkActions()**](BulkActionsApi.md#runBulkActions) | **POST** /bulk-actions/ | Run Bulk Actions |


## `getBulkActions()`

```php
getBulkActions(): \OpenAPI\Client\Model\BulkActionReturnSchema[]
```

Get Bulk Actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBulkActions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActionsApi->getBulkActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BulkActionReturnSchema[]**](../Model/BulkActionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runBulkActions()`

```php
runBulkActions($bulk_action_data, $input_sheet): object
```

Run Bulk Actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BulkActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_action_data = 'bulk_action_data_example'; // string
$input_sheet = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->runBulkActions($bulk_action_data, $input_sheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkActionsApi->runBulkActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_action_data** | **string**|  | |
| **input_sheet** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**object**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
