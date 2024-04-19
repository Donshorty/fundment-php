# OpenAPI\Client\CorporateActionsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dividendsBook()**](CorporateActionsApi.md#dividendsBook) | **PUT** /corporate-action/dividends/{event_id}/book | Dividends Book |
| [**dividendsCancel()**](CorporateActionsApi.md#dividendsCancel) | **DELETE** /corporate-action/dividends/{event_id} | Dividends Cancel |
| [**dividendsCombine()**](CorporateActionsApi.md#dividendsCombine) | **PUT** /corporate-action/dividends/combine | Dividends Combine |
| [**dividendsFx()**](CorporateActionsApi.md#dividendsFx) | **PUT** /corporate-action/dividends/fx | Dividends Fx |
| [**dividendsUnbook()**](CorporateActionsApi.md#dividendsUnbook) | **PUT** /corporate-action/dividends/{event_id}/unbook | Dividends Unbook |
| [**securityEventCreate()**](CorporateActionsApi.md#securityEventCreate) | **POST** /corporate-action/security_events/create | Security Event Create |
| [**securityEventUpdate()**](CorporateActionsApi.md#securityEventUpdate) | **PATCH** /corporate-action/dividends/{event_id} | Security Event Update |
| [**securityEventsRead()**](CorporateActionsApi.md#securityEventsRead) | **GET** /corporate-action/security_events/ | Security Events Read |
| [**securityEventsReadDiv()**](CorporateActionsApi.md#securityEventsReadDiv) | **GET** /corporate-action/dividends | Security Events Read Div |


## `dividendsBook()`

```php
dividendsBook($event_id): \OpenAPI\Client\Model\SuccessResponseSchema
```

Dividends Book

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1; // int

try {
    $result = $apiInstance->dividendsBook($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->dividendsBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessResponseSchema**](../Model/SuccessResponseSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dividendsCancel()`

```php
dividendsCancel($event_id): \OpenAPI\Client\Model\SecurityEventReturnSchema
```

Dividends Cancel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1; // int

try {
    $result = $apiInstance->dividendsCancel($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->dividendsCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dividendsCombine()`

```php
dividendsCombine($combine_events_schema): \OpenAPI\Client\Model\SecurityEventReturnSchema
```

Dividends Combine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combine_events_schema = new \OpenAPI\Client\Model\CombineEventsSchema(); // \OpenAPI\Client\Model\CombineEventsSchema

try {
    $result = $apiInstance->dividendsCombine($combine_events_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->dividendsCombine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **combine_events_schema** | [**\OpenAPI\Client\Model\CombineEventsSchema**](../Model/CombineEventsSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dividendsFx()`

```php
dividendsFx($fx_schema): \OpenAPI\Client\Model\SecurityEventReturnSchema[]
```

Dividends Fx

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fx_schema = new \OpenAPI\Client\Model\FxSchema(); // \OpenAPI\Client\Model\FxSchema

try {
    $result = $apiInstance->dividendsFx($fx_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->dividendsFx: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fx_schema** | [**\OpenAPI\Client\Model\FxSchema**](../Model/FxSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema[]**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dividendsUnbook()`

```php
dividendsUnbook($event_id): \OpenAPI\Client\Model\SecurityEventReturnSchema[]
```

Dividends Unbook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1; // int

try {
    $result = $apiInstance->dividendsUnbook($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->dividendsUnbook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema[]**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityEventCreate()`

```php
securityEventCreate($security_event_create_schema): \OpenAPI\Client\Model\SecurityEventCreateSchema
```

Security Event Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$security_event_create_schema = new \OpenAPI\Client\Model\SecurityEventCreateSchema(); // \OpenAPI\Client\Model\SecurityEventCreateSchema

try {
    $result = $apiInstance->securityEventCreate($security_event_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->securityEventCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **security_event_create_schema** | [**\OpenAPI\Client\Model\SecurityEventCreateSchema**](../Model/SecurityEventCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventCreateSchema**](../Model/SecurityEventCreateSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityEventUpdate()`

```php
securityEventUpdate($event_id, $security_event_update_schema): \OpenAPI\Client\Model\SecurityEventReturnSchema
```

Security Event Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1; // int
$security_event_update_schema = new \OpenAPI\Client\Model\SecurityEventUpdateSchema(); // \OpenAPI\Client\Model\SecurityEventUpdateSchema

try {
    $result = $apiInstance->securityEventUpdate($event_id, $security_event_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->securityEventUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**|  | |
| **security_event_update_schema** | [**\OpenAPI\Client\Model\SecurityEventUpdateSchema**](../Model/SecurityEventUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityEventsRead()`

```php
securityEventsRead($event_id): \OpenAPI\Client\Model\SecurityEventReturnSchema[]
```

Security Events Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 1; // int

try {
    $result = $apiInstance->securityEventsRead($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->securityEventsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema[]**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityEventsReadDiv()`

```php
securityEventsReadDiv($start_date, $end_date, $security_id): \OpenAPI\Client\Model\SecurityEventReturnSchema[]
```

Security Events Read Div

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CorporateActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 2020-04-21; // \DateTime
$end_date = 2020-04-21; // \DateTime
$security_id = 56; // int

try {
    $result = $apiInstance->securityEventsReadDiv($start_date, $end_date, $security_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporateActionsApi->securityEventsReadDiv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **\DateTime**|  | [optional] |
| **end_date** | **\DateTime**|  | [optional] |
| **security_id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecurityEventReturnSchema[]**](../Model/SecurityEventReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
