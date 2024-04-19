# OpenAPI\Client\ReportingApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReport()**](ReportingApi.md#createReport) | **POST** /reporting/ | Create Report |
| [**getReportingAvailableParameters()**](ReportingApi.md#getReportingAvailableParameters) | **GET** /reporting/ | Get Reporting Available Parameters |


## `createReport()`

```php
createReport($report_instance_create_schema): string
```

Create Report

Endpoint for generating a report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_instance_create_schema = new \OpenAPI\Client\Model\ReportInstanceCreateSchema(); // \OpenAPI\Client\Model\ReportInstanceCreateSchema

try {
    $result = $apiInstance->createReport($report_instance_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->createReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_instance_create_schema** | [**\OpenAPI\Client\Model\ReportInstanceCreateSchema**](../Model/ReportInstanceCreateSchema.md)|  | |

### Return type

**string**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportingAvailableParameters()`

```php
getReportingAvailableParameters($reports, $client_id, $inv_mgr_id, $adviser_firm_id): object[]
```

Get Reporting Available Parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reports = array('reports_example'); // string[]
$client_id = 56; // int
$inv_mgr_id = 56; // int
$adviser_firm_id = 56; // int

try {
    $result = $apiInstance->getReportingAvailableParameters($reports, $client_id, $inv_mgr_id, $adviser_firm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getReportingAvailableParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reports** | [**string[]**](../Model/string.md)|  | [optional] |
| **client_id** | **int**|  | [optional] |
| **inv_mgr_id** | **int**|  | [optional] |
| **adviser_firm_id** | **int**|  | [optional] |

### Return type

**object[]**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
