# OpenAPI\Client\AdviserFirmsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adviserFirmClientGroupAddClients()**](AdviserFirmsApi.md#adviserFirmClientGroupAddClients) | **POST** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/batch | Adviser Firm Client Group Add Clients |
| [**adviserFirmClientGroupDeleteClient()**](AdviserFirmsApi.md#adviserFirmClientGroupDeleteClient) | **DELETE** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/{client_ref} | Adviser Firm Client Group Delete Client |
| [**adviserFirmClientGroupUpdateClients()**](AdviserFirmsApi.md#adviserFirmClientGroupUpdateClients) | **PATCH** /adviser-firm/{adviser_firm_ref}/client-group/{client_group_ref}/client/batch | Adviser Firm Client Group Update Clients |
| [**adviserFirmCreate()**](AdviserFirmsApi.md#adviserFirmCreate) | **POST** /adviser-firm/ | Adviser Firm Create |
| [**adviserFirmCreateAddress()**](AdviserFirmsApi.md#adviserFirmCreateAddress) | **POST** /adviser-firm/{adviser_firm_ref}/address/ | Adviser Firm Create Address |
| [**adviserFirmCreateAdviser()**](AdviserFirmsApi.md#adviserFirmCreateAdviser) | **POST** /adviser-firm/{adviser_firm_ref}/adviser/ | Adviser Firm Create Adviser |
| [**adviserFirmCreateClientGroup()**](AdviserFirmsApi.md#adviserFirmCreateClientGroup) | **POST** /adviser-firm/{adviser_firm_ref}/client-group/ | Adviser Firm Create Client Group |
| [**adviserFirmCreateFee()**](AdviserFirmsApi.md#adviserFirmCreateFee) | **POST** /adviser-firm/{adviser_firm_ref}/fee/ | Adviser Firm Create Fee |
| [**adviserFirmCreateFeeScheduleLink()**](AdviserFirmsApi.md#adviserFirmCreateFeeScheduleLink) | **POST** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/ | Adviser Firm Create Fee Schedule Link |
| [**adviserFirmCreateInvestmentManagementFirmLink()**](AdviserFirmsApi.md#adviserFirmCreateInvestmentManagementFirmLink) | **POST** /adviser-firm/{adviser_firm_ref}/investment-management-firms-link/ | Adviser Firm Create Investment Management Firm Link |
| [**adviserFirmCreateOption()**](AdviserFirmsApi.md#adviserFirmCreateOption) | **POST** /adviser-firm/{adviser_firm_ref}/option | Adviser Firm Create Option |
| [**adviserFirmCreateRiskProfileProviderLink()**](AdviserFirmsApi.md#adviserFirmCreateRiskProfileProviderLink) | **POST** /adviser-firm/{adviser_firm_ref}/rpp-link/ | Adviser Firm Create Risk Profile Provider Link |
| [**adviserFirmDeleteAdviser()**](AdviserFirmsApi.md#adviserFirmDeleteAdviser) | **DELETE** /adviser-firm/{adviser_firm_ref}/adviser/{ref} | Adviser Firm Delete Adviser |
| [**adviserFirmDeleteClientGroup()**](AdviserFirmsApi.md#adviserFirmDeleteClientGroup) | **DELETE** /adviser-firm/{adviser_firm_ref}/client-group/{ref} | Adviser Firm Delete Client Group |
| [**adviserFirmDeleteFeeScheduleLink()**](AdviserFirmsApi.md#adviserFirmDeleteFeeScheduleLink) | **PATCH** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/end/{ref} | Adviser Firm Delete Fee Schedule Link |
| [**adviserFirmDeleteInvestmentManagementFirmLink()**](AdviserFirmsApi.md#adviserFirmDeleteInvestmentManagementFirmLink) | **DELETE** /adviser-firm/{adviser_firm_ref}/investment-management-firm-link/{ref} | Adviser Firm Delete Investment Management Firm Link |
| [**adviserFirmDeleteRiskProfileProviderLink()**](AdviserFirmsApi.md#adviserFirmDeleteRiskProfileProviderLink) | **DELETE** /adviser-firm/{adviser_firm_ref}/rpp-link/{risk_profile_provider_ref} | Adviser Firm Delete Risk Profile Provider Link |
| [**adviserFirmExport()**](AdviserFirmsApi.md#adviserFirmExport) | **GET** /adviser-firm/{adviser_firm_ref}/export | Adviser Firm Export |
| [**adviserFirmIntroduce()**](AdviserFirmsApi.md#adviserFirmIntroduce) | **POST** /adviser-firm/introduce/ | Adviser Firm Introduce |
| [**adviserFirmPutLogo()**](AdviserFirmsApi.md#adviserFirmPutLogo) | **PUT** /adviser-firm/{adviser_firm_ref}/logo | Adviser Firm Put Logo |
| [**adviserFirmRead()**](AdviserFirmsApi.md#adviserFirmRead) | **GET** /adviser-firm/{adviser_firm_ref} | Adviser Firm Read |
| [**adviserFirmReadClientGroups()**](AdviserFirmsApi.md#adviserFirmReadClientGroups) | **GET** /adviser-firm/{adviser_firm_ref}/client-group/ | Adviser Firm Read Client Groups |
| [**adviserFirmReadFeeScheduleLinks()**](AdviserFirmsApi.md#adviserFirmReadFeeScheduleLinks) | **GET** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/ | Adviser Firm Read Fee Schedule Links |
| [**adviserFirmReadFeeSchedules()**](AdviserFirmsApi.md#adviserFirmReadFeeSchedules) | **GET** /adviser-firm/{adviser_firm_ref}/fee-schedule | Adviser Firm Read Fee Schedules |
| [**adviserFirmUpdate()**](AdviserFirmsApi.md#adviserFirmUpdate) | **PATCH** /adviser-firm/{adviser_firm_ref}/details | Adviser Firm Update |
| [**adviserFirmUpdateAccessAdviser()**](AdviserFirmsApi.md#adviserFirmUpdateAccessAdviser) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser-access/{ref} | Adviser Firm Update Access Adviser |
| [**adviserFirmUpdateAddress()**](AdviserFirmsApi.md#adviserFirmUpdateAddress) | **PATCH** /adviser-firm/{adviser_firm_ref}/address/{ref} | Adviser Firm Update Address |
| [**adviserFirmUpdateAdviser()**](AdviserFirmsApi.md#adviserFirmUpdateAdviser) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser/{ref} | Adviser Firm Update Adviser |
| [**adviserFirmUpdateAdviserPassword()**](AdviserFirmsApi.md#adviserFirmUpdateAdviserPassword) | **PATCH** /adviser-firm/{adviser_firm_ref}/adviser/{ref}/update-password | Adviser Firm Update Adviser Password |
| [**adviserFirmUpdateClientGroup()**](AdviserFirmsApi.md#adviserFirmUpdateClientGroup) | **PATCH** /adviser-firm/{adviser_firm_ref}/client-group/{ref} | Adviser Firm Update Client Group |
| [**adviserFirmUpdateFeeScheduleLinkToDefault()**](AdviserFirmsApi.md#adviserFirmUpdateFeeScheduleLinkToDefault) | **PATCH** /adviser-firm/{adviser_firm_ref}/fee-schedule-link/default/{ref} | Adviser Firm Update Fee Schedule Link To Default |
| [**adviserFirmUpdateInvestmentManagementFirmLink()**](AdviserFirmsApi.md#adviserFirmUpdateInvestmentManagementFirmLink) | **PATCH** /adviser-firm/{adviser_firm_ref}/investment-management-firm-link/{ref} | Adviser Firm Update Investment Management Firm Link |
| [**adviserFirmUpdateOption()**](AdviserFirmsApi.md#adviserFirmUpdateOption) | **PATCH** /adviser-firm/{adviser_firm_ref}/option | Adviser Firm Update Option |
| [**adviserFirmsRead()**](AdviserFirmsApi.md#adviserFirmsRead) | **GET** /adviser-firm/ | Adviser Firms Read |
| [**advisersRead()**](AdviserFirmsApi.md#advisersRead) | **GET** /adviser-firm/adviser/ | Advisers Read |


## `adviserFirmClientGroupAddClients()`

```php
adviserFirmClientGroupAddClients($client_group_ref, $adviser_firm_ref, $client_group_client_create_schema): \OpenAPI\Client\Model\ClientGroupClientReturnSchema[]
```

Adviser Firm Client Group Add Clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_group_ref = 1; // int
$adviser_firm_ref = TEST; // string
$client_group_client_create_schema = array(new \OpenAPI\Client\Model\ClientGroupClientCreateSchema()); // \OpenAPI\Client\Model\ClientGroupClientCreateSchema[]

try {
    $result = $apiInstance->adviserFirmClientGroupAddClients($client_group_ref, $adviser_firm_ref, $client_group_client_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmClientGroupAddClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_group_ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **client_group_client_create_schema** | [**\OpenAPI\Client\Model\ClientGroupClientCreateSchema[]**](../Model/ClientGroupClientCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupClientReturnSchema[]**](../Model/ClientGroupClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmClientGroupDeleteClient()`

```php
adviserFirmClientGroupDeleteClient($client_group_ref, $client_ref, $adviser_firm_ref)
```

Adviser Firm Client Group Delete Client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_group_ref = 1; // int
$client_ref = C000000000B5567; // string
$adviser_firm_ref = TEST; // string

try {
    $apiInstance->adviserFirmClientGroupDeleteClient($client_group_ref, $client_ref, $adviser_firm_ref);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmClientGroupDeleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_group_ref** | **int**|  | |
| **client_ref** | **string**|  | |
| **adviser_firm_ref** | **string**|  | |

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

## `adviserFirmClientGroupUpdateClients()`

```php
adviserFirmClientGroupUpdateClients($client_group_ref, $adviser_firm_ref, $client_group_client_update_schema): \OpenAPI\Client\Model\ClientGroupClientReturnSchema[]
```

Adviser Firm Client Group Update Clients

Send all the clients which are to be in the client group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_group_ref = 1; // int
$adviser_firm_ref = TEST; // string
$client_group_client_update_schema = array(new \OpenAPI\Client\Model\ClientGroupClientUpdateSchema()); // \OpenAPI\Client\Model\ClientGroupClientUpdateSchema[]

try {
    $result = $apiInstance->adviserFirmClientGroupUpdateClients($client_group_ref, $adviser_firm_ref, $client_group_client_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmClientGroupUpdateClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_group_ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **client_group_client_update_schema** | [**\OpenAPI\Client\Model\ClientGroupClientUpdateSchema[]**](../Model/ClientGroupClientUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupClientReturnSchema[]**](../Model/ClientGroupClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreate()`

```php
adviserFirmCreate($adviser_firm_create_schema, $adviser_network_ref): \OpenAPI\Client\Model\AdviserFirmReturnSchema
```

Adviser Firm Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_create_schema = new \OpenAPI\Client\Model\AdviserFirmCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmCreateSchema
$adviser_network_ref = 'adviser_network_ref_example'; // string

try {
    $result = $apiInstance->adviserFirmCreate($adviser_firm_create_schema, $adviser_network_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmCreateSchema**](../Model/AdviserFirmCreateSchema.md)|  | |
| **adviser_network_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmReturnSchema**](../Model/AdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateAddress()`

```php
adviserFirmCreateAddress($adviser_firm_ref, $adviser_firm_address_create_schema): \OpenAPI\Client\Model\AdviserFirmAddressReturnSchema
```

Adviser Firm Create Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_address_create_schema = new \OpenAPI\Client\Model\AdviserFirmAddressCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmAddressCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateAddress($adviser_firm_ref, $adviser_firm_address_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_address_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmAddressCreateSchema**](../Model/AdviserFirmAddressCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmAddressReturnSchema**](../Model/AdviserFirmAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateAdviser()`

```php
adviserFirmCreateAdviser($adviser_firm_ref, $adviser_create_schema): \OpenAPI\Client\Model\AdviserReturnSchema
```

Adviser Firm Create Adviser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_create_schema = new \OpenAPI\Client\Model\AdviserCreateSchema(); // \OpenAPI\Client\Model\AdviserCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateAdviser($adviser_firm_ref, $adviser_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateAdviser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_create_schema** | [**\OpenAPI\Client\Model\AdviserCreateSchema**](../Model/AdviserCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserReturnSchema**](../Model/AdviserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateClientGroup()`

```php
adviserFirmCreateClientGroup($adviser_firm_ref, $client_group_create_schema): \OpenAPI\Client\Model\ClientGroupReturnSchema
```

Adviser Firm Create Client Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$client_group_create_schema = new \OpenAPI\Client\Model\ClientGroupCreateSchema(); // \OpenAPI\Client\Model\ClientGroupCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateClientGroup($adviser_firm_ref, $client_group_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateClientGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **client_group_create_schema** | [**\OpenAPI\Client\Model\ClientGroupCreateSchema**](../Model/ClientGroupCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupReturnSchema**](../Model/ClientGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateFee()`

```php
adviserFirmCreateFee($adviser_firm_ref, $adviser_firm_fee_create_schema): \OpenAPI\Client\Model\AdviserFirmFeeReturnSchema
```

Adviser Firm Create Fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_fee_create_schema = new \OpenAPI\Client\Model\AdviserFirmFeeCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmFeeCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateFee($adviser_firm_ref, $adviser_firm_fee_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_fee_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmFeeCreateSchema**](../Model/AdviserFirmFeeCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmFeeReturnSchema**](../Model/AdviserFirmFeeReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateFeeScheduleLink()`

```php
adviserFirmCreateFeeScheduleLink($adviser_firm_ref, $adviser_firm_fee_schedule_create_schema): \OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema
```

Adviser Firm Create Fee Schedule Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_fee_schedule_create_schema = new \OpenAPI\Client\Model\AdviserFirmFeeScheduleCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmFeeScheduleCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateFeeScheduleLink($adviser_firm_ref, $adviser_firm_fee_schedule_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateFeeScheduleLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_fee_schedule_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmFeeScheduleCreateSchema**](../Model/AdviserFirmFeeScheduleCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema**](../Model/AdviserFirmFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateInvestmentManagementFirmLink()`

```php
adviserFirmCreateInvestmentManagementFirmLink($adviser_firm_ref, $adviser_firm_investment_management_firm_link_create_schema): \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkReturnSchema
```

Adviser Firm Create Investment Management Firm Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_investment_management_firm_link_create_schema = new \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateInvestmentManagementFirmLink($adviser_firm_ref, $adviser_firm_investment_management_firm_link_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateInvestmentManagementFirmLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_investment_management_firm_link_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkCreateSchema**](../Model/AdviserFirmInvestmentManagementFirmLinkCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkReturnSchema**](../Model/AdviserFirmInvestmentManagementFirmLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateOption()`

```php
adviserFirmCreateOption($adviser_firm_ref, $adviser_firm_option_create_schema): \OpenAPI\Client\Model\AdviserFirmOptionReturnSchema
```

Adviser Firm Create Option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_option_create_schema = new \OpenAPI\Client\Model\AdviserFirmOptionCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmOptionCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateOption($adviser_firm_ref, $adviser_firm_option_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_option_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmOptionCreateSchema**](../Model/AdviserFirmOptionCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmOptionReturnSchema**](../Model/AdviserFirmOptionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmCreateRiskProfileProviderLink()`

```php
adviserFirmCreateRiskProfileProviderLink($adviser_firm_ref, $adviser_firm_rpp_link_create_schema): \OpenAPI\Client\Model\AdviserFirmRppLinkReturnSchema
```

Adviser Firm Create Risk Profile Provider Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_rpp_link_create_schema = new \OpenAPI\Client\Model\AdviserFirmRppLinkCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmRppLinkCreateSchema

try {
    $result = $apiInstance->adviserFirmCreateRiskProfileProviderLink($adviser_firm_ref, $adviser_firm_rpp_link_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmCreateRiskProfileProviderLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_rpp_link_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmRppLinkCreateSchema**](../Model/AdviserFirmRppLinkCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmRppLinkReturnSchema**](../Model/AdviserFirmRppLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmDeleteAdviser()`

```php
adviserFirmDeleteAdviser($ref, $adviser_firm_ref): mixed
```

Adviser Firm Delete Adviser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmDeleteAdviser($ref, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmDeleteAdviser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |

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

## `adviserFirmDeleteClientGroup()`

```php
adviserFirmDeleteClientGroup($ref, $adviser_firm_ref)
```

Adviser Firm Delete Client Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int
$adviser_firm_ref = TEST; // string

try {
    $apiInstance->adviserFirmDeleteClientGroup($ref, $adviser_firm_ref);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmDeleteClientGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |

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

## `adviserFirmDeleteFeeScheduleLink()`

```php
adviserFirmDeleteFeeScheduleLink($ref, $adviser_firm_ref, $adviser_firm_fee_schedule_delete_schema)
```

Adviser Firm Delete Fee Schedule Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$adviser_firm_fee_schedule_delete_schema = new \OpenAPI\Client\Model\AdviserFirmFeeScheduleDeleteSchema(); // \OpenAPI\Client\Model\AdviserFirmFeeScheduleDeleteSchema

try {
    $apiInstance->adviserFirmDeleteFeeScheduleLink($ref, $adviser_firm_ref, $adviser_firm_fee_schedule_delete_schema);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmDeleteFeeScheduleLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_fee_schedule_delete_schema** | [**\OpenAPI\Client\Model\AdviserFirmFeeScheduleDeleteSchema**](../Model/AdviserFirmFeeScheduleDeleteSchema.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmDeleteInvestmentManagementFirmLink()`

```php
adviserFirmDeleteInvestmentManagementFirmLink($ref, $adviser_firm_ref)
```

Adviser Firm Delete Investment Management Firm Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string

try {
    $apiInstance->adviserFirmDeleteInvestmentManagementFirmLink($ref, $adviser_firm_ref);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmDeleteInvestmentManagementFirmLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |

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

## `adviserFirmDeleteRiskProfileProviderLink()`

```php
adviserFirmDeleteRiskProfileProviderLink($risk_profile_provider_ref, $adviser_firm_ref)
```

Adviser Firm Delete Risk Profile Provider Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$risk_profile_provider_ref = FUN; // string
$adviser_firm_ref = TEST; // string

try {
    $apiInstance->adviserFirmDeleteRiskProfileProviderLink($risk_profile_provider_ref, $adviser_firm_ref);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmDeleteRiskProfileProviderLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **risk_profile_provider_ref** | **string**|  | |
| **adviser_firm_ref** | **string**|  | |

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

## `adviserFirmExport()`

```php
adviserFirmExport($adviser_firm_ref): \OpenAPI\Client\Model\AdviserFirmCreateSchema
```

Adviser Firm Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmExport($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmCreateSchema**](../Model/AdviserFirmCreateSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmIntroduce()`

```php
adviserFirmIntroduce($adviser_firm_introduce_schema, $adviser_network_ref): \OpenAPI\Client\Model\AdviserFirmReturnSchema
```

Adviser Firm Introduce

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_introduce_schema = new \OpenAPI\Client\Model\AdviserFirmIntroduceSchema(); // \OpenAPI\Client\Model\AdviserFirmIntroduceSchema
$adviser_network_ref = 'adviser_network_ref_example'; // string

try {
    $result = $apiInstance->adviserFirmIntroduce($adviser_firm_introduce_schema, $adviser_network_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmIntroduce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_introduce_schema** | [**\OpenAPI\Client\Model\AdviserFirmIntroduceSchema**](../Model/AdviserFirmIntroduceSchema.md)|  | |
| **adviser_network_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmReturnSchema**](../Model/AdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmPutLogo()`

```php
adviserFirmPutLogo($adviser_firm_ref, $file): mixed
```

Adviser Firm Put Logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->adviserFirmPutLogo($adviser_firm_ref, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmPutLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmRead()`

```php
adviserFirmRead($adviser_firm_ref): \OpenAPI\Client\Model\AdviserFirmReturnSchema
```

Adviser Firm Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmRead($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmReturnSchema**](../Model/AdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmReadClientGroups()`

```php
adviserFirmReadClientGroups($adviser_firm_ref): \OpenAPI\Client\Model\ClientGroupReturnSchema[]
```

Adviser Firm Read Client Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmReadClientGroups($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmReadClientGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupReturnSchema[]**](../Model/ClientGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmReadFeeScheduleLinks()`

```php
adviserFirmReadFeeScheduleLinks($adviser_firm_ref): \OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema[]
```

Adviser Firm Read Fee Schedule Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmReadFeeScheduleLinks($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmReadFeeScheduleLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema[]**](../Model/AdviserFirmFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmReadFeeSchedules()`

```php
adviserFirmReadFeeSchedules($adviser_firm_ref): \OpenAPI\Client\Model\FeeScheduleReturnSchema[]
```

Adviser Firm Read Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmReadFeeSchedules($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmReadFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FeeScheduleReturnSchema[]**](../Model/FeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdate()`

```php
adviserFirmUpdate($adviser_firm_ref, $adviser_firm_update_schema): \OpenAPI\Client\Model\AdviserFirmReturnSchema
```

Adviser Firm Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_update_schema = new \OpenAPI\Client\Model\AdviserFirmUpdateSchema(); // \OpenAPI\Client\Model\AdviserFirmUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdate($adviser_firm_ref, $adviser_firm_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_update_schema** | [**\OpenAPI\Client\Model\AdviserFirmUpdateSchema**](../Model/AdviserFirmUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmReturnSchema**](../Model/AdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateAccessAdviser()`

```php
adviserFirmUpdateAccessAdviser($ref, $adviser_firm_ref, $enabled, $end_date): \OpenAPI\Client\Model\AdviserReturnSchema
```

Adviser Firm Update Access Adviser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$enabled = True; // bool
$end_date = 2022-9-20; // \DateTime

try {
    $result = $apiInstance->adviserFirmUpdateAccessAdviser($ref, $adviser_firm_ref, $enabled, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateAccessAdviser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **enabled** | **bool**|  | |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdviserReturnSchema**](../Model/AdviserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateAddress()`

```php
adviserFirmUpdateAddress($ref, $adviser_firm_ref, $adviser_firm_address_update_schema): \OpenAPI\Client\Model\AdviserFirmAddressReturnSchema
```

Adviser Firm Update Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$adviser_firm_address_update_schema = new \OpenAPI\Client\Model\AdviserFirmAddressUpdateSchema(); // \OpenAPI\Client\Model\AdviserFirmAddressUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateAddress($ref, $adviser_firm_ref, $adviser_firm_address_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_address_update_schema** | [**\OpenAPI\Client\Model\AdviserFirmAddressUpdateSchema**](../Model/AdviserFirmAddressUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmAddressReturnSchema**](../Model/AdviserFirmAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateAdviser()`

```php
adviserFirmUpdateAdviser($ref, $adviser_firm_ref, $adviser_update_schema): \OpenAPI\Client\Model\AdviserReturnSchema
```

Adviser Firm Update Adviser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$adviser_update_schema = new \OpenAPI\Client\Model\AdviserUpdateSchema(); // \OpenAPI\Client\Model\AdviserUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateAdviser($ref, $adviser_firm_ref, $adviser_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateAdviser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **adviser_update_schema** | [**\OpenAPI\Client\Model\AdviserUpdateSchema**](../Model/AdviserUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserReturnSchema**](../Model/AdviserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateAdviserPassword()`

```php
adviserFirmUpdateAdviserPassword($ref, $adviser_firm_ref, $password_update_schema): \OpenAPI\Client\Model\AdviserReturnSchema
```

Adviser Firm Update Adviser Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$password_update_schema = new \OpenAPI\Client\Model\PasswordUpdateSchema(); // \OpenAPI\Client\Model\PasswordUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateAdviserPassword($ref, $adviser_firm_ref, $password_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateAdviserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **password_update_schema** | [**\OpenAPI\Client\Model\PasswordUpdateSchema**](../Model/PasswordUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserReturnSchema**](../Model/AdviserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateClientGroup()`

```php
adviserFirmUpdateClientGroup($ref, $adviser_firm_ref, $client_group_update_schema): \OpenAPI\Client\Model\ClientGroupReturnSchema
```

Adviser Firm Update Client Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int
$adviser_firm_ref = TEST; // string
$client_group_update_schema = new \OpenAPI\Client\Model\ClientGroupUpdateSchema(); // \OpenAPI\Client\Model\ClientGroupUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateClientGroup($ref, $adviser_firm_ref, $client_group_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateClientGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **client_group_update_schema** | [**\OpenAPI\Client\Model\ClientGroupUpdateSchema**](../Model/ClientGroupUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupReturnSchema**](../Model/ClientGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateFeeScheduleLinkToDefault()`

```php
adviserFirmUpdateFeeScheduleLinkToDefault($ref, $adviser_firm_ref): \OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema
```

Adviser Firm Update Fee Schedule Link To Default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->adviserFirmUpdateFeeScheduleLinkToDefault($ref, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateFeeScheduleLinkToDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema**](../Model/AdviserFirmFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateInvestmentManagementFirmLink()`

```php
adviserFirmUpdateInvestmentManagementFirmLink($ref, $adviser_firm_ref, $adviser_firm_investment_management_firm_link_update_schema): \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkReturnSchema
```

Adviser Firm Update Investment Management Firm Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$adviser_firm_investment_management_firm_link_update_schema = new \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkUpdateSchema(); // \OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateInvestmentManagementFirmLink($ref, $adviser_firm_ref, $adviser_firm_investment_management_firm_link_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateInvestmentManagementFirmLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_investment_management_firm_link_update_schema** | [**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkUpdateSchema**](../Model/AdviserFirmInvestmentManagementFirmLinkUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmInvestmentManagementFirmLinkReturnSchema**](../Model/AdviserFirmInvestmentManagementFirmLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmUpdateOption()`

```php
adviserFirmUpdateOption($adviser_firm_ref, $adviser_firm_option_update_schema): \OpenAPI\Client\Model\AdviserFirmOptionReturnSchema
```

Adviser Firm Update Option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$adviser_firm_option_update_schema = new \OpenAPI\Client\Model\AdviserFirmOptionUpdateSchema(); // \OpenAPI\Client\Model\AdviserFirmOptionUpdateSchema

try {
    $result = $apiInstance->adviserFirmUpdateOption($adviser_firm_ref, $adviser_firm_option_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmUpdateOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_option_update_schema** | [**\OpenAPI\Client\Model\AdviserFirmOptionUpdateSchema**](../Model/AdviserFirmOptionUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmOptionReturnSchema**](../Model/AdviserFirmOptionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adviserFirmsRead()`

```php
adviserFirmsRead(): \OpenAPI\Client\Model\NestedAdviserFirmReturnSchema[]
```

Adviser Firms Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adviserFirmsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->adviserFirmsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NestedAdviserFirmReturnSchema[]**](../Model/NestedAdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `advisersRead()`

```php
advisersRead($fca_registration_number): \OpenAPI\Client\Model\ReducedAdviserReturnSchema[]
```

Advisers Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdviserFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fca_registration_number = 'fca_registration_number_example'; // string

try {
    $result = $apiInstance->advisersRead($fca_registration_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdviserFirmsApi->advisersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fca_registration_number** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReducedAdviserReturnSchema[]**](../Model/ReducedAdviserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
