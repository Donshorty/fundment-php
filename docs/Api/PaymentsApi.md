# OpenAPI\Client\PaymentsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUnsettledClientWithdrawalsAuthWrapper()**](PaymentsApi.md#getUnsettledClientWithdrawalsAuthWrapper) | **GET** /payments/outgoing_payments/client_withdrawal_cts | Get Unsettled Client Withdrawals Auth Wrapper |


## `getUnsettledClientWithdrawalsAuthWrapper()`

```php
getUnsettledClientWithdrawalsAuthWrapper(): mixed
```

Get Unsettled Client Withdrawals Auth Wrapper

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnsettledClientWithdrawalsAuthWrapper();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getUnsettledClientWithdrawalsAuthWrapper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
