# OpenAPI\Client\BeneficiaryApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**beneficiaryTypesCreate()**](BeneficiaryApi.md#beneficiaryTypesCreate) | **POST** /beneficiary/ | Beneficiary Types Create |
| [**beneficiaryTypesRead()**](BeneficiaryApi.md#beneficiaryTypesRead) | **GET** /beneficiary/ | Beneficiary Types Read |
| [**beneficiaryTypesUpdate()**](BeneficiaryApi.md#beneficiaryTypesUpdate) | **PATCH** /beneficiary/{beneficiary_type_ref} | Beneficiary Types Update |


## `beneficiaryTypesCreate()`

```php
beneficiaryTypesCreate($beneficiary_type_create_schema): \OpenAPI\Client\Model\BeneficiaryTypeReturnSchema
```

Beneficiary Types Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BeneficiaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beneficiary_type_create_schema = new \OpenAPI\Client\Model\BeneficiaryTypeCreateSchema(); // \OpenAPI\Client\Model\BeneficiaryTypeCreateSchema

try {
    $result = $apiInstance->beneficiaryTypesCreate($beneficiary_type_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiaryApi->beneficiaryTypesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **beneficiary_type_create_schema** | [**\OpenAPI\Client\Model\BeneficiaryTypeCreateSchema**](../Model/BeneficiaryTypeCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BeneficiaryTypeReturnSchema**](../Model/BeneficiaryTypeReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `beneficiaryTypesRead()`

```php
beneficiaryTypesRead(): \OpenAPI\Client\Model\BeneficiaryTypeReturnSchema[]
```

Beneficiary Types Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BeneficiaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->beneficiaryTypesRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiaryApi->beneficiaryTypesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BeneficiaryTypeReturnSchema[]**](../Model/BeneficiaryTypeReturnSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `beneficiaryTypesUpdate()`

```php
beneficiaryTypesUpdate($beneficiary_type_ref, $beneficiary_type_update_schema): \OpenAPI\Client\Model\BeneficiaryTypeReturnSchema
```

Beneficiary Types Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BeneficiaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$beneficiary_type_ref = 1; // int
$beneficiary_type_update_schema = new \OpenAPI\Client\Model\BeneficiaryTypeUpdateSchema(); // \OpenAPI\Client\Model\BeneficiaryTypeUpdateSchema

try {
    $result = $apiInstance->beneficiaryTypesUpdate($beneficiary_type_ref, $beneficiary_type_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BeneficiaryApi->beneficiaryTypesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **beneficiary_type_ref** | **int**|  | |
| **beneficiary_type_update_schema** | [**\OpenAPI\Client\Model\BeneficiaryTypeUpdateSchema**](../Model/BeneficiaryTypeUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BeneficiaryTypeReturnSchema**](../Model/BeneficiaryTypeReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
