# OpenAPI\Client\PensionsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pensionEventCancel()**](PensionsApi.md#pensionEventCancel) | **DELETE** /pensions/event/{pev_ref} | Pension Event Cancel |
| [**pensionEventGroupRead()**](PensionsApi.md#pensionEventGroupRead) | **GET** /pensions/pev_group/{pev_grp_ref} | Pension Event Group Read |
| [**pensionEventRead()**](PensionsApi.md#pensionEventRead) | **GET** /pensions/event/{pev_ref} | Pension Event Read |
| [**pensionEventScheduleCancel()**](PensionsApi.md#pensionEventScheduleCancel) | **DELETE** /pensions/{pevs_ref} | Pension Event Schedule Cancel |
| [**pensionEventScheduleCreate()**](PensionsApi.md#pensionEventScheduleCreate) | **POST** /pensions/ | Pension Event Schedule Create |
| [**pensionEventScheduleGroupCreate()**](PensionsApi.md#pensionEventScheduleGroupCreate) | **POST** /pensions/compound | Pension Event Schedule Group Create |
| [**pensionEventScheduleRead()**](PensionsApi.md#pensionEventScheduleRead) | **GET** /pensions/{pevs_ref} | Pension Event Schedule Read |
| [**pensionEventScheduleUpdate()**](PensionsApi.md#pensionEventScheduleUpdate) | **PATCH** /pensions/{pevs_ref} | Pension Event Schedule Update |
| [**pensionEventSchedulesGet()**](PensionsApi.md#pensionEventSchedulesGet) | **GET** /pensions/ | Pension Event Schedules Get |
| [**pensionEventsGet()**](PensionsApi.md#pensionEventsGet) | **GET** /pensions/event/status/{status} | Pension Events Get |
| [**pensionScheduleGroupCancel()**](PensionsApi.md#pensionScheduleGroupCancel) | **DELETE** /pensions/pes_group/{pes_grp_ref} | Pension Schedule Group Cancel |
| [**pensionScheduleGroupRead()**](PensionsApi.md#pensionScheduleGroupRead) | **GET** /pensions/pes_group/{pes_grp_ref} | Pension Schedule Group Read |
| [**pensionScheduleGroupReadEvents()**](PensionsApi.md#pensionScheduleGroupReadEvents) | **GET** /pensions/pes_group/{pes_grp_ref}/events | Pension Schedule Group Read Events |
| [**readPensionEventScheduleGroupsForAccount()**](PensionsApi.md#readPensionEventScheduleGroupsForAccount) | **GET** /pensions/account/{account_ref}/groups | Read Pension Event Schedule Groups For Account |
| [**readPensionEventSchedulesForAccount()**](PensionsApi.md#readPensionEventSchedulesForAccount) | **GET** /pensions/account/{account_ref} | Read Pension Event Schedules For Account |
| [**readPensionEventsForAccount()**](PensionsApi.md#readPensionEventsForAccount) | **GET** /pensions/account/{account_ref}/events | Read Pension Events For Account |


## `pensionEventCancel()`

```php
pensionEventCancel($pev_ref): \OpenAPI\Client\Model\PensionEventReturnSchema
```

Pension Event Cancel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pev_ref = 'pev_ref_example'; // string

try {
    $result = $apiInstance->pensionEventCancel($pev_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pev_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventReturnSchema**](../Model/PensionEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventGroupRead()`

```php
pensionEventGroupRead($pev_grp_ref): \OpenAPI\Client\Model\PensionEventGroupReturnSchema
```

Pension Event Group Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pev_grp_ref = 'pev_grp_ref_example'; // string

try {
    $result = $apiInstance->pensionEventGroupRead($pev_grp_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventGroupRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pev_grp_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventGroupReturnSchema**](../Model/PensionEventGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventRead()`

```php
pensionEventRead($pev_ref): \OpenAPI\Client\Model\PensionEventReturnSchema
```

Pension Event Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pev_ref = 'pev_ref_example'; // string

try {
    $result = $apiInstance->pensionEventRead($pev_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pev_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventReturnSchema**](../Model/PensionEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventScheduleCancel()`

```php
pensionEventScheduleCancel($pevs_ref): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema
```

Pension Event Schedule Cancel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pevs_ref = 'pevs_ref_example'; // string

try {
    $result = $apiInstance->pensionEventScheduleCancel($pevs_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventScheduleCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pevs_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventScheduleCreate()`

```php
pensionEventScheduleCreate($pension_event_schedule_create_schema): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema
```

Pension Event Schedule Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pension_event_schedule_create_schema = new \OpenAPI\Client\Model\PensionEventScheduleCreateSchema(); // \OpenAPI\Client\Model\PensionEventScheduleCreateSchema

try {
    $result = $apiInstance->pensionEventScheduleCreate($pension_event_schedule_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventScheduleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pension_event_schedule_create_schema** | [**\OpenAPI\Client\Model\PensionEventScheduleCreateSchema**](../Model/PensionEventScheduleCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventScheduleGroupCreate()`

```php
pensionEventScheduleGroupCreate($pension_event_schedule_create_schema): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema[]
```

Pension Event Schedule Group Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pension_event_schedule_create_schema = array(new \OpenAPI\Client\Model\PensionEventScheduleCreateSchema()); // \OpenAPI\Client\Model\PensionEventScheduleCreateSchema[]

try {
    $result = $apiInstance->pensionEventScheduleGroupCreate($pension_event_schedule_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventScheduleGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pension_event_schedule_create_schema** | [**\OpenAPI\Client\Model\PensionEventScheduleCreateSchema[]**](../Model/PensionEventScheduleCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema[]**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventScheduleRead()`

```php
pensionEventScheduleRead($pevs_ref): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema
```

Pension Event Schedule Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pevs_ref = 'pevs_ref_example'; // string

try {
    $result = $apiInstance->pensionEventScheduleRead($pevs_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventScheduleRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pevs_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventScheduleUpdate()`

```php
pensionEventScheduleUpdate($pevs_ref, $pension_event_schedule_update_schema): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema
```

Pension Event Schedule Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pevs_ref = 'pevs_ref_example'; // string
$pension_event_schedule_update_schema = new \OpenAPI\Client\Model\PensionEventScheduleUpdateSchema(); // \OpenAPI\Client\Model\PensionEventScheduleUpdateSchema

try {
    $result = $apiInstance->pensionEventScheduleUpdate($pevs_ref, $pension_event_schedule_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventScheduleUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pevs_ref** | **string**|  | |
| **pension_event_schedule_update_schema** | [**\OpenAPI\Client\Model\PensionEventScheduleUpdateSchema**](../Model/PensionEventScheduleUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventSchedulesGet()`

```php
pensionEventSchedulesGet(): \OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[]
```

Pension Event Schedules Get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pensionEventSchedulesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventSchedulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[]**](../Model/NestedPensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionEventsGet()`

```php
pensionEventsGet($status): \OpenAPI\Client\Model\PensionEventReturnSchema[]
```

Pension Events Get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = PEND; // FapiDbPensionPensionEventStatus

try {
    $result = $apiInstance->pensionEventsGet($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**FapiDbPensionPensionEventStatus**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventReturnSchema[]**](../Model/PensionEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionScheduleGroupCancel()`

```php
pensionScheduleGroupCancel($pes_grp_ref): \OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema
```

Pension Schedule Group Cancel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pes_grp_ref = 'pes_grp_ref_example'; // string

try {
    $result = $apiInstance->pensionScheduleGroupCancel($pes_grp_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionScheduleGroupCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pes_grp_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema**](../Model/PensionEventScheduleGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionScheduleGroupRead()`

```php
pensionScheduleGroupRead($pes_grp_ref): \OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema
```

Pension Schedule Group Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pes_grp_ref = 'pes_grp_ref_example'; // string

try {
    $result = $apiInstance->pensionScheduleGroupRead($pes_grp_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionScheduleGroupRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pes_grp_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema**](../Model/PensionEventScheduleGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionScheduleGroupReadEvents()`

```php
pensionScheduleGroupReadEvents($pes_grp_ref): \OpenAPI\Client\Model\PensionEventReturnSchema[]
```

Pension Schedule Group Read Events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pes_grp_ref = 'pes_grp_ref_example'; // string

try {
    $result = $apiInstance->pensionScheduleGroupReadEvents($pes_grp_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->pensionScheduleGroupReadEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pes_grp_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventReturnSchema[]**](../Model/PensionEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readPensionEventScheduleGroupsForAccount()`

```php
readPensionEventScheduleGroupsForAccount($account_ref): \OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema[]
```

Read Pension Event Schedule Groups For Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ref = 'account_ref_example'; // string

try {
    $result = $apiInstance->readPensionEventScheduleGroupsForAccount($account_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->readPensionEventScheduleGroupsForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleGroupReturnSchema[]**](../Model/PensionEventScheduleGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readPensionEventSchedulesForAccount()`

```php
readPensionEventSchedulesForAccount($account_ref): \OpenAPI\Client\Model\PensionEventScheduleReturnSchema[]
```

Read Pension Event Schedules For Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ref = 'account_ref_example'; // string

try {
    $result = $apiInstance->readPensionEventSchedulesForAccount($account_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->readPensionEventSchedulesForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventScheduleReturnSchema[]**](../Model/PensionEventScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readPensionEventsForAccount()`

```php
readPensionEventsForAccount($account_ref): \OpenAPI\Client\Model\PensionEventReturnSchema[]
```

Read Pension Events For Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ref = 'account_ref_example'; // string

try {
    $result = $apiInstance->readPensionEventsForAccount($account_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionsApi->readPensionEventsForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PensionEventReturnSchema[]**](../Model/PensionEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
