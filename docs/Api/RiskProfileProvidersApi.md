# OpenAPI\Client\RiskProfileProvidersApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**riskProfileProviderCreate()**](RiskProfileProvidersApi.md#riskProfileProviderCreate) | **POST** /risk-profile-provider/ | Risk Profile Provider Create |
| [**riskProfileProviderRead()**](RiskProfileProvidersApi.md#riskProfileProviderRead) | **GET** /risk-profile-provider/{ref} | Risk Profile Provider Read |
| [**riskProfileProvidersRead()**](RiskProfileProvidersApi.md#riskProfileProvidersRead) | **GET** /risk-profile-provider/ | Risk Profile Providers Read |


## `riskProfileProviderCreate()`

```php
riskProfileProviderCreate($risk_profile_provider_create_schema): \OpenAPI\Client\Model\RiskProfileProviderReturnSchema
```

Risk Profile Provider Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RiskProfileProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$risk_profile_provider_create_schema = new \OpenAPI\Client\Model\RiskProfileProviderCreateSchema(); // \OpenAPI\Client\Model\RiskProfileProviderCreateSchema

try {
    $result = $apiInstance->riskProfileProviderCreate($risk_profile_provider_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskProfileProvidersApi->riskProfileProviderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **risk_profile_provider_create_schema** | [**\OpenAPI\Client\Model\RiskProfileProviderCreateSchema**](../Model/RiskProfileProviderCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RiskProfileProviderReturnSchema**](../Model/RiskProfileProviderReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `riskProfileProviderRead()`

```php
riskProfileProviderRead($ref): \OpenAPI\Client\Model\RiskProfileProviderReturnSchema
```

Risk Profile Provider Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RiskProfileProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FUN; // string

try {
    $result = $apiInstance->riskProfileProviderRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskProfileProvidersApi->riskProfileProviderRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\RiskProfileProviderReturnSchema**](../Model/RiskProfileProviderReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `riskProfileProvidersRead()`

```php
riskProfileProvidersRead(): \OpenAPI\Client\Model\RiskProfileProviderReturnSchema[]
```

Risk Profile Providers Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RiskProfileProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->riskProfileProvidersRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskProfileProvidersApi->riskProfileProvidersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RiskProfileProviderReturnSchema[]**](../Model/RiskProfileProviderReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
