# OpenAPI\Client\AdviserNetworksApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adviserNetworkCreate()**](AdviserNetworksApi.md#adviserNetworkCreate) | **POST** /adviser-network/ | Adviser Network Create |
| [**adviserNetworkFirmLinkCreate()**](AdviserNetworksApi.md#adviserNetworkFirmLinkCreate) | **POST** /adviser-network/{adviser_network_ref}/link | Adviser Network Firm Link Create |
| [**adviserNetworkFirmLinkUpdate()**](AdviserNetworksApi.md#adviserNetworkFirmLinkUpdate) | **PATCH** /adviser-network/{adviser_network_ref}/link/{network_link_ref} | Adviser Network Firm Link Update |
| [**adviserNetworkLoginCreate()**](AdviserNetworksApi.md#adviserNetworkLoginCreate) | **POST** /adviser-network/{adviser_network_ref}/login | Adviser Network Login Create |
| [**adviserNetworkLoginDelete()**](AdviserNetworksApi.md#adviserNetworkLoginDelete) | **DELETE** /adviser-network/{adviser_network_ref}/login/{network_login_ref} | Adviser Network Login Delete |
| [**adviserNetworkLoginsRead()**](AdviserNetworksApi.md#adviserNetworkLoginsRead) | **GET** /adviser-network/{adviser_network_ref}/login | Adviser Network Logins Read |
| [**adviserNetworkRead()**](AdviserNetworksApi.md#adviserNetworkRead) | **GET** /adviser-network/{adviser_network_ref} | Adviser Network Read |
| [**adviserNetworkUpdate()**](AdviserNetworksApi.md#adviserNetworkUpdate) | **PATCH** /adviser-network/{adviser_network_ref} | Adviser Network Update |
| [**adviserNetworksRead()**](AdviserNetworksApi.md#adviserNetworksRead) | **GET** /adviser-network/ | Adviser Networks Read |


## `adviserNetworkCreate()`

```php
adviserNetworkCreate($adviser_network_create_schema): \OpenAPI\Client\Model\AdviserNetworkReturnSchema
```

Adviser Network Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_create_schema = new \OpenAPI\Client\Model\AdviserNetworkCreateSchema(); // \OpenAPI\Client\Model\AdviserNetworkCreateSchema

try {
    $result = $apiInstance->adviserNetworkCreate($adviser_network_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_create_schema** | [**\OpenAPI\Client\Model\AdviserNetworkCreateSchema**](../Model/AdviserNetworkCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkReturnSchema**](../Model/AdviserNetworkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkFirmLinkCreate()`

```php
adviserNetworkFirmLinkCreate($adviser_network_ref, $adviser_network_firm_link_create_schema): \OpenAPI\Client\Model\AdviserNetworkFirmLinkReturnSchema
```

Adviser Network Firm Link Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = TEST; // string
$adviser_network_firm_link_create_schema = new \OpenAPI\Client\Model\AdviserNetworkFirmLinkCreateSchema(); // \OpenAPI\Client\Model\AdviserNetworkFirmLinkCreateSchema

try {
    $result = $apiInstance->adviserNetworkFirmLinkCreate($adviser_network_ref, $adviser_network_firm_link_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkFirmLinkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |
| **adviser_network_firm_link_create_schema** | [**\OpenAPI\Client\Model\AdviserNetworkFirmLinkCreateSchema**](../Model/AdviserNetworkFirmLinkCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkFirmLinkReturnSchema**](../Model/AdviserNetworkFirmLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkFirmLinkUpdate()`

```php
adviserNetworkFirmLinkUpdate($adviser_network_ref, $network_link_ref, $adviser_network_firm_link_update_schema): \OpenAPI\Client\Model\AdviserNetworkFirmLinkReturnSchema
```

Adviser Network Firm Link Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = TEST; // string
$network_link_ref = 1; // int
$adviser_network_firm_link_update_schema = new \OpenAPI\Client\Model\AdviserNetworkFirmLinkUpdateSchema(); // \OpenAPI\Client\Model\AdviserNetworkFirmLinkUpdateSchema

try {
    $result = $apiInstance->adviserNetworkFirmLinkUpdate($adviser_network_ref, $network_link_ref, $adviser_network_firm_link_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkFirmLinkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |
| **network_link_ref** | **int**|  | |
| **adviser_network_firm_link_update_schema** | [**\OpenAPI\Client\Model\AdviserNetworkFirmLinkUpdateSchema**](../Model/AdviserNetworkFirmLinkUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkFirmLinkReturnSchema**](../Model/AdviserNetworkFirmLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkLoginCreate()`

```php
adviserNetworkLoginCreate($adviser_network_ref, $adviser_network_login_create_schema): \OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema
```

Adviser Network Login Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = TEST; // string
$adviser_network_login_create_schema = new \OpenAPI\Client\Model\AdviserNetworkLoginCreateSchema(); // \OpenAPI\Client\Model\AdviserNetworkLoginCreateSchema

try {
    $result = $apiInstance->adviserNetworkLoginCreate($adviser_network_ref, $adviser_network_login_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkLoginCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |
| **adviser_network_login_create_schema** | [**\OpenAPI\Client\Model\AdviserNetworkLoginCreateSchema**](../Model/AdviserNetworkLoginCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema**](../Model/AdviserNetworkLoginReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkLoginDelete()`

```php
adviserNetworkLoginDelete($adviser_network_ref, $network_login_ref): \OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema
```

Adviser Network Login Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = TEST; // string
$network_login_ref = 1; // int

try {
    $result = $apiInstance->adviserNetworkLoginDelete($adviser_network_ref, $network_login_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkLoginDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |
| **network_login_ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema**](../Model/AdviserNetworkLoginReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkLoginsRead()`

```php
adviserNetworkLoginsRead($adviser_network_ref): \OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema[]
```

Adviser Network Logins Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = 'adviser_network_ref_example'; // string

try {
    $result = $apiInstance->adviserNetworkLoginsRead($adviser_network_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkLoginsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkLoginReturnSchema[]**](../Model/AdviserNetworkLoginReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkRead()`

```php
adviserNetworkRead($adviser_network_ref): \OpenAPI\Client\Model\AdviserNetworkReturnSchema
```

Adviser Network Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = 'adviser_network_ref_example'; // string

try {
    $result = $apiInstance->adviserNetworkRead($adviser_network_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkReturnSchema**](../Model/AdviserNetworkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworkUpdate()`

```php
adviserNetworkUpdate($adviser_network_ref, $adviser_network_update_schema): \OpenAPI\Client\Model\AdviserNetworkReturnSchema
```

Adviser Network Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_network_ref = TEST; // string
$adviser_network_update_schema = new \OpenAPI\Client\Model\AdviserNetworkUpdateSchema(); // \OpenAPI\Client\Model\AdviserNetworkUpdateSchema

try {
    $result = $apiInstance->adviserNetworkUpdate($adviser_network_ref, $adviser_network_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_network_ref** | **string**|  | |
| **adviser_network_update_schema** | [**\OpenAPI\Client\Model\AdviserNetworkUpdateSchema**](../Model/AdviserNetworkUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkReturnSchema**](../Model/AdviserNetworkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserNetworksRead()`

```php
adviserNetworksRead(): \OpenAPI\Client\Model\AdviserNetworkReturnSchema[]
```

Adviser Networks Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adviserNetworksRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserNetworksApi->adviserNetworksRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AdviserNetworkReturnSchema[]**](../Model/AdviserNetworkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
