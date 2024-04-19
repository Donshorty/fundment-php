# OpenAPI\Client\OAuth2Api

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorize()**](OAuth2Api.md#authorize) | **POST** /oauth/authorize | Authorize |
| [**createOauthApp()**](OAuth2Api.md#createOauthApp) | **POST** /oauth/app | Create Oauth App |
| [**deleteOauthApps()**](OAuth2Api.md#deleteOauthApps) | **DELETE** /oauth/app | Delete Oauth Apps |
| [**readOauthApps()**](OAuth2Api.md#readOauthApps) | **GET** /oauth/apps | Read Oauth Apps |
| [**redirectToLoginForm()**](OAuth2Api.md#redirectToLoginForm) | **GET** /oauth/authorize | Redirect To Login Form |
| [**swapCodeForToken()**](OAuth2Api.md#swapCodeForToken) | **POST** /oauth/token | Swap Code For Token |
| [**updateOauthApp()**](OAuth2Api.md#updateOauthApp) | **PATCH** /oauth/app | Update Oauth App |


## `authorize()`

```php
authorize($client_id, $redirect_uri, $state, $response_type, $device, $authorised): mixed
```

Authorize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string
$redirect_uri = 'redirect_uri_example'; // string
$state = 'state_example'; // string
$response_type = 'response_type_example'; // string
$device = 'device_example'; // string
$authorised = false; // bool

try {
    $result = $apiInstance->authorize($client_id, $redirect_uri, $state, $response_type, $device, $authorised);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->authorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **redirect_uri** | **string**|  | |
| **state** | **string**|  | |
| **response_type** | **string**|  | |
| **device** | **string**|  | [optional] |
| **authorised** | **bool**|  | [optional] [default to false] |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOauthApp()`

```php
createOauthApp($client_app_create_schema): \OpenAPI\Client\Model\ClientAppReturnSchema
```

Create Oauth App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_app_create_schema = new \OpenAPI\Client\Model\ClientAppCreateSchema(); // \OpenAPI\Client\Model\ClientAppCreateSchema

try {
    $result = $apiInstance->createOauthApp($client_app_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->createOauthApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_app_create_schema** | [**\OpenAPI\Client\Model\ClientAppCreateSchema**](../Model/ClientAppCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAppReturnSchema**](../Model/ClientAppReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOauthApps()`

```php
deleteOauthApps($client_id): mixed
```

Delete Oauth Apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->deleteOauthApps($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->deleteOauthApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readOauthApps()`

```php
readOauthApps(): \OpenAPI\Client\Model\ClientAppReturnSchema[]
```

Read Oauth Apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readOauthApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->readOauthApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ClientAppReturnSchema[]**](../Model/ClientAppReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redirectToLoginForm()`

```php
redirectToLoginForm($client_id, $redirect_uri, $state, $response_type, $scope): mixed
```

Redirect To Login Form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string
$redirect_uri = 'redirect_uri_example'; // string
$state = 'state_example'; // string
$response_type = 'response_type_example'; // string
$scope = 'scope_example'; // string

try {
    $result = $apiInstance->redirectToLoginForm($client_id, $redirect_uri, $state, $response_type, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->redirectToLoginForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **redirect_uri** | **string**|  | |
| **state** | **string**|  | |
| **response_type** | **string**|  | |
| **scope** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swapCodeForToken()`

```php
swapCodeForToken($grant_type, $client_id, $client_secret, $redirect_uri, $unused_grant_type, $code, $refresh_token): \OpenAPI\Client\Model\TokenSchema
```

Swap Code For Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = new \OpenAPI\Client\Model\GrantTypeForm(); // \OpenAPI\Client\Model\GrantTypeForm
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string
$redirect_uri = 'redirect_uri_example'; // string
$unused_grant_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GrantTypeForm(); // \OpenAPI\Client\Model\GrantTypeForm
$code = 'code_example'; // string
$refresh_token = 'refresh_token_example'; // string

try {
    $result = $apiInstance->swapCodeForToken($grant_type, $client_id, $client_secret, $redirect_uri, $unused_grant_type, $code, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->swapCodeForToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | [**\OpenAPI\Client\Model\GrantTypeForm**](../Model/GrantTypeForm.md)|  | |
| **client_id** | **string**|  | |
| **client_secret** | **string**|  | |
| **redirect_uri** | **string**|  | |
| **unused_grant_type** | [**\OpenAPI\Client\Model\GrantTypeForm**](../Model/.md)|  | [optional] |
| **code** | **string**|  | [optional] |
| **refresh_token** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOauthApp()`

```php
updateOauthApp($client_id, $client_app_update_schema): \OpenAPI\Client\Model\ClientAppReturnSchema
```

Update Oauth App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string
$client_app_update_schema = new \OpenAPI\Client\Model\ClientAppUpdateSchema(); // \OpenAPI\Client\Model\ClientAppUpdateSchema

try {
    $result = $apiInstance->updateOauthApp($client_id, $client_app_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2Api->updateOauthApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **client_app_update_schema** | [**\OpenAPI\Client\Model\ClientAppUpdateSchema**](../Model/ClientAppUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAppReturnSchema**](../Model/ClientAppReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
