# OpenAPI\Client\SecuritiesApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securitiesRead()**](SecuritiesApi.md#securitiesRead) | **GET** /security/ | Securities Read |
| [**securitiesSearchRead()**](SecuritiesApi.md#securitiesSearchRead) | **GET** /security/search | Securities Search Read |
| [**securityCreateAccess()**](SecuritiesApi.md#securityCreateAccess) | **POST** /security/{ref}/access/ | Security Create Access |
| [**securityCreateCost()**](SecuritiesApi.md#securityCreateCost) | **POST** /security/{ref}/cost/ | Security Create Cost |
| [**securityCreateNote()**](SecuritiesApi.md#securityCreateNote) | **POST** /security/{ref}/note/ | Security Create Note |
| [**securityCreateValuation()**](SecuritiesApi.md#securityCreateValuation) | **POST** /security/{ref}/valuation/ | Security Create Valuation |
| [**securityDeleteAccess()**](SecuritiesApi.md#securityDeleteAccess) | **DELETE** /security/{ref}/access/ | Security Delete Access |
| [**securityRead()**](SecuritiesApi.md#securityRead) | **GET** /security/{ref} | Security Read |
| [**securityReadCosts()**](SecuritiesApi.md#securityReadCosts) | **GET** /security/{ref}/cost/ | Security Read Costs |
| [**securityReadNotes()**](SecuritiesApi.md#securityReadNotes) | **GET** /security/{ref}/note/ | Security Read Notes |
| [**securityUpdate()**](SecuritiesApi.md#securityUpdate) | **PATCH** /security/{ref} | Security Update |


## `securitiesRead()`

```php
securitiesRead($adviser_firm_ref, $investment_management_firm_ref, $name, $isin, $ref, $security_categories): \OpenAPI\Client\Model\NestedSecurityReturnSchema[]
```

Securities Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$investment_management_firm_ref = FDM; // string
$name = FTSE100; // string
$isin = IE0005042456; // string
$ref = 230; // int
$security_categories = ["Equity"]; // string[]

try {
    $result = $apiInstance->securitiesRead($adviser_firm_ref, $investment_management_firm_ref, $name, $isin, $ref, $security_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securitiesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | [optional] |
| **investment_management_firm_ref** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **isin** | **string**|  | [optional] |
| **ref** | **int**|  | [optional] |
| **security_categories** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `securitiesSearchRead()`

```php
securitiesSearchRead($adviser_firm_ref, $investment_management_firm_ref, $name, $isin, $ref, $security_categories): \OpenAPI\Client\Model\SecuritySearchSchema[]
```

Securities Search Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$investment_management_firm_ref = FDM; // string
$name = FTSE100; // string
$isin = IE0005042456; // string
$ref = 230; // int
$security_categories = ["Equity"]; // string[]

try {
    $result = $apiInstance->securitiesSearchRead($adviser_firm_ref, $investment_management_firm_ref, $name, $isin, $ref, $security_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securitiesSearchRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | [optional] |
| **investment_management_firm_ref** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **isin** | **string**|  | [optional] |
| **ref** | **int**|  | [optional] |
| **security_categories** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SecuritySearchSchema[]**](../Model/SecuritySearchSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityCreateAccess()`

```php
securityCreateAccess($ref, $nested_security_access_create_schema): \OpenAPI\Client\Model\NestedSecurityAccessReturnSchema
```

Security Create Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$nested_security_access_create_schema = new \OpenAPI\Client\Model\NestedSecurityAccessCreateSchema(); // \OpenAPI\Client\Model\NestedSecurityAccessCreateSchema

try {
    $result = $apiInstance->securityCreateAccess($ref, $nested_security_access_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityCreateAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **nested_security_access_create_schema** | [**\OpenAPI\Client\Model\NestedSecurityAccessCreateSchema**](../Model/NestedSecurityAccessCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NestedSecurityAccessReturnSchema**](../Model/NestedSecurityAccessReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityCreateCost()`

```php
securityCreateCost($ref, $security_cost_create_schema): \OpenAPI\Client\Model\SecurityCostReturnSchema
```

Security Create Cost

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$security_cost_create_schema = new \OpenAPI\Client\Model\SecurityCostCreateSchema(); // \OpenAPI\Client\Model\SecurityCostCreateSchema

try {
    $result = $apiInstance->securityCreateCost($ref, $security_cost_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityCreateCost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **security_cost_create_schema** | [**\OpenAPI\Client\Model\SecurityCostCreateSchema**](../Model/SecurityCostCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityCostReturnSchema**](../Model/SecurityCostReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityCreateNote()`

```php
securityCreateNote($ref, $security_note_create_schema): \OpenAPI\Client\Model\SecurityNoteReturnSchema
```

Security Create Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$security_note_create_schema = new \OpenAPI\Client\Model\SecurityNoteCreateSchema(); // \OpenAPI\Client\Model\SecurityNoteCreateSchema

try {
    $result = $apiInstance->securityCreateNote($ref, $security_note_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityCreateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **security_note_create_schema** | [**\OpenAPI\Client\Model\SecurityNoteCreateSchema**](../Model/SecurityNoteCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityNoteReturnSchema**](../Model/SecurityNoteReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityCreateValuation()`

```php
securityCreateValuation($ref, $security_valuation_create_schema): \OpenAPI\Client\Model\SecurityValuationReturnSchema
```

Security Create Valuation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$security_valuation_create_schema = new \OpenAPI\Client\Model\SecurityValuationCreateSchema(); // \OpenAPI\Client\Model\SecurityValuationCreateSchema

try {
    $result = $apiInstance->securityCreateValuation($ref, $security_valuation_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityCreateValuation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **security_valuation_create_schema** | [**\OpenAPI\Client\Model\SecurityValuationCreateSchema**](../Model/SecurityValuationCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityValuationReturnSchema**](../Model/SecurityValuationReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityDeleteAccess()`

```php
securityDeleteAccess($ref, $ref_type, $firm_ref): \OpenAPI\Client\Model\NestedSecurityAccessReturnSchema
```

Security Delete Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$ref_type = new \OpenAPI\Client\Model\SecurityAccessRefType(); // SecurityAccessRefType
$firm_ref = NULL; // mixed

try {
    $result = $apiInstance->securityDeleteAccess($ref, $ref_type, $firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityDeleteAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **ref_type** | [**SecurityAccessRefType**](../Model/.md)|  | |
| **firm_ref** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NestedSecurityAccessReturnSchema**](../Model/NestedSecurityAccessReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityRead()`

```php
securityRead($ref): \OpenAPI\Client\Model\SecurityReturnSchema
```

Security Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int

try {
    $result = $apiInstance->securityRead($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityReturnSchema**](../Model/SecurityReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityReadCosts()`

```php
securityReadCosts($ref): \OpenAPI\Client\Model\SecurityCostReturnSchema[]
```

Security Read Costs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int

try {
    $result = $apiInstance->securityReadCosts($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityReadCosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityCostReturnSchema[]**](../Model/SecurityCostReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityReadNotes()`

```php
securityReadNotes($ref): \OpenAPI\Client\Model\SecurityNoteReturnSchema[]
```

Security Read Notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int

try {
    $result = $apiInstance->securityReadNotes($ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityReadNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityNoteReturnSchema[]**](../Model/SecurityNoteReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityUpdate()`

```php
securityUpdate($ref, $security_update_schema): \OpenAPI\Client\Model\SecurityReturnSchema
```

Security Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecuritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 14; // int
$security_update_schema = new \OpenAPI\Client\Model\SecurityUpdateSchema(); // \OpenAPI\Client\Model\SecurityUpdateSchema

try {
    $result = $apiInstance->securityUpdate($ref, $security_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecuritiesApi->securityUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **security_update_schema** | [**\OpenAPI\Client\Model\SecurityUpdateSchema**](../Model/SecurityUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecurityReturnSchema**](../Model/SecurityReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
