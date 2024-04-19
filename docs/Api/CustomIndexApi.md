# OpenAPI\Client\CustomIndexApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignedClientsRead()**](CustomIndexApi.md#assignedClientsRead) | **GET** /custom-index/clients/{security_id}/{adviser_firm_ref} | Assigned Clients Read |
| [**assignedInvStrategiesRead()**](CustomIndexApi.md#assignedInvStrategiesRead) | **GET** /custom-index/strategies/{security_id}/{investment_management_firm_ref} | Assigned Inv Strategies Read |
| [**checkIndexStatus()**](CustomIndexApi.md#checkIndexStatus) | **GET** /custom-index/status/{index_id} | Check Index Status |
| [**createIndex()**](CustomIndexApi.md#createIndex) | **POST** /custom-index/create/{investment_management_firm_ref} | Create Index |
| [**customIndexObjectivesUpdate()**](CustomIndexApi.md#customIndexObjectivesUpdate) | **POST** /custom-index/{index_id} | Custom Index Objectives Update |
| [**customIndexRead()**](CustomIndexApi.md#customIndexRead) | **GET** /custom-index/{index_id} | Custom Index Read |
| [**customIndexesRead()**](CustomIndexApi.md#customIndexesRead) | **GET** /custom-index/ | Custom Indexes Read |
| [**deleteIndex()**](CustomIndexApi.md#deleteIndex) | **DELETE** /custom-index/delete/{index_id}/{investment_management_firm_ref} | Delete Index |
| [**factsheetRead()**](CustomIndexApi.md#factsheetRead) | **GET** /custom-index/factsheet/{index_id} | Factsheet Read |
| [**filtersRead()**](CustomIndexApi.md#filtersRead) | **GET** /custom-index/filters | Filters Read |
| [**getIndexPerf()**](CustomIndexApi.md#getIndexPerf) | **GET** /custom-index/perf/{index_id}/ | Get Index Perf |
| [**getIndexWeights()**](CustomIndexApi.md#getIndexWeights) | **GET** /custom-index/weights/{index_id} | Get Index Weights |
| [**industrySecuritiesRead()**](CustomIndexApi.md#industrySecuritiesRead) | **GET** /custom-indexindustry/{industry_id} | Industry Securities Read |
| [**methodologyRead()**](CustomIndexApi.md#methodologyRead) | **GET** /custom-index/methodology | Methodology Read |
| [**previewComponents()**](CustomIndexApi.md#previewComponents) | **POST** /custom-index/preview | Preview Components |
| [**universeRead()**](CustomIndexApi.md#universeRead) | **GET** /custom-index/universe | Universe Read |


## `assignedClientsRead()`

```php
assignedClientsRead($security_id, $adviser_firm_ref): \OpenAPI\Client\Model\AssignedClientSchema[]
```

Assigned Clients Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$security_id = 0; // int
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->assignedClientsRead($security_id, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->assignedClientsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **security_id** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssignedClientSchema[]**](../Model/AssignedClientSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignedInvStrategiesRead()`

```php
assignedInvStrategiesRead($security_id, $investment_management_firm_ref): \OpenAPI\Client\Model\AssignedInvStrategySchema[]
```

Assigned Inv Strategies Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$security_id = 0; // int
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->assignedInvStrategiesRead($security_id, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->assignedInvStrategiesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **security_id** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssignedInvStrategySchema[]**](../Model/AssignedInvStrategySchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkIndexStatus()`

```php
checkIndexStatus($index_id): mixed
```

Check Index Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 0; // int

try {
    $result = $apiInstance->checkIndexStatus($index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->checkIndexStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |

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

## `createIndex()`

```php
createIndex($investment_management_firm_ref, $create_index_schema): mixed
```

Create Index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$create_index_schema = new \OpenAPI\Client\Model\CreateIndexSchema(); // \OpenAPI\Client\Model\CreateIndexSchema

try {
    $result = $apiInstance->createIndex($investment_management_firm_ref, $create_index_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->createIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **create_index_schema** | [**\OpenAPI\Client\Model\CreateIndexSchema**](../Model/CreateIndexSchema.md)|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customIndexObjectivesUpdate()`

```php
customIndexObjectivesUpdate($index_id, $objectives): \OpenAPI\Client\Model\CustomIndexObjectivesSchema
```

Custom Index Objectives Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 0; // int
$objectives = 'objectives_example'; // string

try {
    $result = $apiInstance->customIndexObjectivesUpdate($index_id, $objectives);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->customIndexObjectivesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |
| **objectives** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CustomIndexObjectivesSchema**](../Model/CustomIndexObjectivesSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customIndexRead()`

```php
customIndexRead($index_id): \OpenAPI\Client\Model\CustomIndexDetailsSchema
```

Custom Index Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 0; // int

try {
    $result = $apiInstance->customIndexRead($index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->customIndexRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\CustomIndexDetailsSchema**](../Model/CustomIndexDetailsSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customIndexesRead()`

```php
customIndexesRead(): \OpenAPI\Client\Model\CustomIndexBaseSchema[]
```

Custom Indexes Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customIndexesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->customIndexesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CustomIndexBaseSchema[]**](../Model/CustomIndexBaseSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIndex()`

```php
deleteIndex($index_id, $investment_management_firm_ref): mixed
```

Delete Index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 7; // int
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->deleteIndex($index_id, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->deleteIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |

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

## `factsheetRead()`

```php
factsheetRead($index_id): mixed
```

Factsheet Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 0; // int

try {
    $result = $apiInstance->factsheetRead($index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->factsheetRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |

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

## `filtersRead()`

```php
filtersRead(): \OpenAPI\Client\Model\FundmentFilterSchema
```

Filters Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->filtersRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->filtersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FundmentFilterSchema**](../Model/FundmentFilterSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIndexPerf()`

```php
getIndexPerf($index_id, $start_date, $end_date): mixed
```

Get Index Perf

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 7; // int
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getIndexPerf($index_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->getIndexPerf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |

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

## `getIndexWeights()`

```php
getIndexWeights($index_id): mixed
```

Get Index Weights

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_id = 0; // int

try {
    $result = $apiInstance->getIndexWeights($index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->getIndexWeights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_id** | **int**|  | |

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

## `industrySecuritiesRead()`

```php
industrySecuritiesRead($industry_id): \OpenAPI\Client\Model\NestedSecurityReturnSchema[]
```

Industry Securities Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$industry_id = 0; // int

try {
    $result = $apiInstance->industrySecuritiesRead($industry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->industrySecuritiesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **industry_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\NestedSecurityReturnSchema[]**](../Model/NestedSecurityReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `methodologyRead()`

```php
methodologyRead(): \OpenAPI\Client\Model\CustomIndexMethodologySchema[]
```

Methodology Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->methodologyRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->methodologyRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CustomIndexMethodologySchema[]**](../Model/CustomIndexMethodologySchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewComponents()`

```php
previewComponents($evaluate_components_schema): \OpenAPI\Client\Model\NestedSecurityReturnSchema[]
```

Preview Components

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$evaluate_components_schema = new \OpenAPI\Client\Model\EvaluateComponentsSchema(); // \OpenAPI\Client\Model\EvaluateComponentsSchema

try {
    $result = $apiInstance->previewComponents($evaluate_components_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->previewComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **evaluate_components_schema** | [**\OpenAPI\Client\Model\EvaluateComponentsSchema**](../Model/EvaluateComponentsSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NestedSecurityReturnSchema[]**](../Model/NestedSecurityReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `universeRead()`

```php
universeRead(): \OpenAPI\Client\Model\CustomIndexUniverseSchema[]
```

Universe Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->universeRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIndexApi->universeRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CustomIndexUniverseSchema[]**](../Model/CustomIndexUniverseSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
