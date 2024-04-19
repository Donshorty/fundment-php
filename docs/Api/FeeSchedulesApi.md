# OpenAPI\Client\FeeSchedulesApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**feeScheduleCreate()**](FeeSchedulesApi.md#feeScheduleCreate) | **POST** /fee-schedule/ | Fee Schedule Create |
| [**feeScheduleUpdate()**](FeeSchedulesApi.md#feeScheduleUpdate) | **PATCH** /fee-schedule/ | Fee Schedule Update |
| [**feeSchedulesRead()**](FeeSchedulesApi.md#feeSchedulesRead) | **GET** /fee-schedule/ | Fee Schedules Read |


## `feeScheduleCreate()`

```php
feeScheduleCreate($fee_schedule_create_schema, $adviser_firm_ref): \OpenAPI\Client\Model\FeeScheduleReturnSchema
```

Fee Schedule Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_schedule_create_schema = new \OpenAPI\Client\Model\FeeScheduleCreateSchema(); // \OpenAPI\Client\Model\FeeScheduleCreateSchema
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->feeScheduleCreate($fee_schedule_create_schema, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeSchedulesApi->feeScheduleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_schedule_create_schema** | [**\OpenAPI\Client\Model\FeeScheduleCreateSchema**](../Model/FeeScheduleCreateSchema.md)|  | |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeScheduleReturnSchema**](../Model/FeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeScheduleUpdate()`

```php
feeScheduleUpdate($fee_schedule_id, $fee_schedule_update_schema, $adviser_firm_ref): \OpenAPI\Client\Model\FeeScheduleReturnSchema
```

Fee Schedule Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_schedule_id = 1; // int
$fee_schedule_update_schema = new \OpenAPI\Client\Model\FeeScheduleUpdateSchema(); // \OpenAPI\Client\Model\FeeScheduleUpdateSchema
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->feeScheduleUpdate($fee_schedule_id, $fee_schedule_update_schema, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeSchedulesApi->feeScheduleUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_schedule_id** | **int**|  | |
| **fee_schedule_update_schema** | [**\OpenAPI\Client\Model\FeeScheduleUpdateSchema**](../Model/FeeScheduleUpdateSchema.md)|  | |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeScheduleReturnSchema**](../Model/FeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeSchedulesRead()`

```php
feeSchedulesRead($fee_type, $adviser_firm_ref): \OpenAPI\Client\Model\FeeScheduleReturnSchema[]
```

Fee Schedules Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeeSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_type = PLAT; // FapiDbFeeFeeScheduleFeeType
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->feeSchedulesRead($fee_type, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeSchedulesApi->feeSchedulesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee_type** | [**FapiDbFeeFeeScheduleFeeType**](../Model/.md)|  | [optional] |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeScheduleReturnSchema[]**](../Model/FeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
