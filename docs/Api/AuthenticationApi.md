# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMultiFactorAuthenticationRegisterOtpApp()**](AuthenticationApi.md#createMultiFactorAuthenticationRegisterOtpApp) | **POST** /auth/mfa-otp-register-app | Create Multi Factor Authentication Register Otp App |
| [**deleteMultiFactorAuthenticationRegisterOtpApp()**](AuthenticationApi.md#deleteMultiFactorAuthenticationRegisterOtpApp) | **DELETE** /auth/mfa-otp-register-app | Delete Multi Factor Authentication Register Otp App |
| [**getMultiFactorAuthenticationRegisterOtpApps()**](AuthenticationApi.md#getMultiFactorAuthenticationRegisterOtpApps) | **GET** /auth/mfa-otp-register-app | Get Multi Factor Authentication Register Otp Apps |
| [**handleForgottenPassword()**](AuthenticationApi.md#handleForgottenPassword) | **POST** /auth/forgotten-password | Handle Forgotten Password |
| [**handleResetPassword()**](AuthenticationApi.md#handleResetPassword) | **PATCH** /auth/reset-password | Handle Reset Password |
| [**login()**](AuthenticationApi.md#login) | **POST** /auth/login | Login |
| [**loginGoogle()**](AuthenticationApi.md#loginGoogle) | **GET** /auth/login/google | Login Google |
| [**loginMicrosoft()**](AuthenticationApi.md#loginMicrosoft) | **GET** /auth/login/microsoft | Login Microsoft |
| [**logout()**](AuthenticationApi.md#logout) | **POST** /auth/logout | Logout |
| [**multiFactorAuthenticationIpAddressWhitelistDisable()**](AuthenticationApi.md#multiFactorAuthenticationIpAddressWhitelistDisable) | **DELETE** /auth/mfa-whitelist-ip-address/{ref} | Multi Factor Authentication Ip Address Whitelist Disable |
| [**multiFactorAuthenticationIpAddressWhitelistEnable()**](AuthenticationApi.md#multiFactorAuthenticationIpAddressWhitelistEnable) | **POST** /auth/mfa-whitelist-ip-address | Multi Factor Authentication Ip Address Whitelist Enable |
| [**multiFactorAuthenticationMethods()**](AuthenticationApi.md#multiFactorAuthenticationMethods) | **GET** /auth/mfa-otp-methods | Multi Factor Authentication Methods |
| [**multiFactorAuthenticationSendOtp()**](AuthenticationApi.md#multiFactorAuthenticationSendOtp) | **POST** /auth/mfa-otp-send | Multi Factor Authentication Send Otp |
| [**multiFactorAuthenticationUntrustDevice()**](AuthenticationApi.md#multiFactorAuthenticationUntrustDevice) | **DELETE** /auth/mfa-untrust-device | Multi Factor Authentication Untrust Device |
| [**multiFactorAuthenticationVerifyOtp()**](AuthenticationApi.md#multiFactorAuthenticationVerifyOtp) | **POST** /auth/mfa-otp-verify | Multi Factor Authentication Verify Otp |
| [**refresh()**](AuthenticationApi.md#refresh) | **POST** /auth/refresh | Refresh |
| [**swapTokenGoogle()**](AuthenticationApi.md#swapTokenGoogle) | **GET** /auth/swap-token/google | Swap Token Google |
| [**swapTokenMicrosoft()**](AuthenticationApi.md#swapTokenMicrosoft) | **GET** /auth/swap-token/microsoft | Swap Token Microsoft |
| [**updateLoginEnabled()**](AuthenticationApi.md#updateLoginEnabled) | **PATCH** /auth/login-status/{login_id} | Update Login Enabled |


## `createMultiFactorAuthenticationRegisterOtpApp()`

```php
createMultiFactorAuthenticationRegisterOtpApp(): \OpenAPI\Client\Model\AuthenticationRegisterOTPAppReturnSchema
```

Create Multi Factor Authentication Register Otp App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createMultiFactorAuthenticationRegisterOtpApp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->createMultiFactorAuthenticationRegisterOtpApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AuthenticationRegisterOTPAppReturnSchema**](../Model/AuthenticationRegisterOTPAppReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMultiFactorAuthenticationRegisterOtpApp()`

```php
deleteMultiFactorAuthenticationRegisterOtpApp()
```

Delete Multi Factor Authentication Register Otp App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteMultiFactorAuthenticationRegisterOtpApp();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->deleteMultiFactorAuthenticationRegisterOtpApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMultiFactorAuthenticationRegisterOtpApps()`

```php
getMultiFactorAuthenticationRegisterOtpApps(): \OpenAPI\Client\Model\AuthenticationRegisterOTPAppReturnSchema[]
```

Get Multi Factor Authentication Register Otp Apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMultiFactorAuthenticationRegisterOtpApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getMultiFactorAuthenticationRegisterOtpApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AuthenticationRegisterOTPAppReturnSchema[]**](../Model/AuthenticationRegisterOTPAppReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleForgottenPassword()`

```php
handleForgottenPassword($username)
```

Handle Forgotten Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $apiInstance->handleForgottenPassword($username);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->handleForgottenPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleResetPassword()`

```php
handleResetPassword($reset_token, $username, $password)
```

Handle Reset Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reset_token = 'reset_token_example'; // string
$username = 'username_example'; // string
$password = NULL; // mixed | Password must be at least 6 characters and contain at least 1 upper case letter, 1 lower case letter and 1 number

try {
    $apiInstance->handleResetPassword($reset_token, $username, $password);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->handleResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reset_token** | **string**|  | |
| **username** | **string**|  | |
| **password** | [**mixed**](../Model/mixed.md)| Password must be at least 6 characters and contain at least 1 upper case letter, 1 lower case letter and 1 number | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `login()`

```php
login($username, $password, $device): \OpenAPI\Client\Model\TokenSchema
```

Login

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$password = 'password_example'; // string
$device = 'device_example'; // string

try {
    $result = $apiInstance->login($username, $password, $device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **password** | **string**|  | |
| **device** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginGoogle()`

```php
loginGoogle(): mixed
```

Login Google

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginGoogle();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginGoogle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginMicrosoft()`

```php
loginMicrosoft(): mixed
```

Login Microsoft

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginMicrosoft();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginMicrosoft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout(): mixed
```

Logout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->logout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiFactorAuthenticationIpAddressWhitelistDisable()`

```php
multiFactorAuthenticationIpAddressWhitelistDisable($ref)
```

Multi Factor Authentication Ip Address Whitelist Disable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int

try {
    $apiInstance->multiFactorAuthenticationIpAddressWhitelistDisable($ref);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationIpAddressWhitelistDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiFactorAuthenticationIpAddressWhitelistEnable()`

```php
multiFactorAuthenticationIpAddressWhitelistEnable($mfa_ip_whitelist_create_schema): \OpenAPI\Client\Model\MfaIpWhitelistReturnSchema
```

Multi Factor Authentication Ip Address Whitelist Enable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mfa_ip_whitelist_create_schema = new \OpenAPI\Client\Model\MfaIpWhitelistCreateSchema(); // \OpenAPI\Client\Model\MfaIpWhitelistCreateSchema

try {
    $result = $apiInstance->multiFactorAuthenticationIpAddressWhitelistEnable($mfa_ip_whitelist_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationIpAddressWhitelistEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mfa_ip_whitelist_create_schema** | [**\OpenAPI\Client\Model\MfaIpWhitelistCreateSchema**](../Model/MfaIpWhitelistCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MfaIpWhitelistReturnSchema**](../Model/MfaIpWhitelistReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiFactorAuthenticationMethods()`

```php
multiFactorAuthenticationMethods(): \OpenAPI\Client\Model\AuthenticationMethodsReturnSchema
```

Multi Factor Authentication Methods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->multiFactorAuthenticationMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AuthenticationMethodsReturnSchema**](../Model/AuthenticationMethodsReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiFactorAuthenticationSendOtp()`

```php
multiFactorAuthenticationSendOtp($verification_method): mixed
```

Multi Factor Authentication Send Otp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verification_method = new \OpenAPI\Client\Model\VerificationMethodSendOTP(); // VerificationMethodSendOTP

try {
    $result = $apiInstance->multiFactorAuthenticationSendOtp($verification_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationSendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verification_method** | [**VerificationMethodSendOTP**](../Model/.md)|  | |

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

## `multiFactorAuthenticationUntrustDevice()`

```php
multiFactorAuthenticationUntrustDevice()
```

Multi Factor Authentication Untrust Device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->multiFactorAuthenticationUntrustDevice();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationUntrustDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiFactorAuthenticationVerifyOtp()`

```php
multiFactorAuthenticationVerifyOtp($code, $app): mixed
```

Multi Factor Authentication Verify Otp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string
$app = false; // bool

try {
    $result = $apiInstance->multiFactorAuthenticationVerifyOtp($code, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->multiFactorAuthenticationVerifyOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **app** | **bool**|  | [optional] [default to false] |

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

## `refresh()`

```php
refresh(): \OpenAPI\Client\Model\TokenSchema
```

Refresh

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refresh();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->refresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swapTokenGoogle()`

```php
swapTokenGoogle($device): \OpenAPI\Client\Model\TokenSchema
```

Swap Token Google

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device = 'device_example'; // string

try {
    $result = $apiInstance->swapTokenGoogle($device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->swapTokenGoogle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **device** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `swapTokenMicrosoft()`

```php
swapTokenMicrosoft($device): \OpenAPI\Client\Model\TokenSchema
```

Swap Token Microsoft

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$device = 'device_example'; // string

try {
    $result = $apiInstance->swapTokenMicrosoft($device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->swapTokenMicrosoft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **device** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenSchema**](../Model/TokenSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLoginEnabled()`

```php
updateLoginEnabled($login_id, $enabled): \OpenAPI\Client\Model\LoginReturnSchema
```

Update Login Enabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_id = 56; // int
$enabled = True; // bool

try {
    $result = $apiInstance->updateLoginEnabled($login_id, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->updateLoginEnabled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_id** | **int**|  | |
| **enabled** | **bool**|  | |

### Return type

[**\OpenAPI\Client\Model\LoginReturnSchema**](../Model/LoginReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
