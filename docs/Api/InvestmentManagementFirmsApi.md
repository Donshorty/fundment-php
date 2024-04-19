# OpenAPI\Client\InvestmentManagementFirmsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**investmentManagementFirmCreate()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreate) | **POST** /investment-management-firm/ | Investment Management Firm Create |
| [**investmentManagementFirmCreateAddress()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateAddress) | **POST** /investment-management-firm/{investment_management_firm_ref}/address/ | Investment Management Firm Create Address |
| [**investmentManagementFirmCreateAdviserFirmFeeScheduleLink()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateAdviserFirmFeeScheduleLink) | **POST** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{ref}/fee-schedule-link | Investment Management Firm Create Adviser Firm Fee Schedule Link |
| [**investmentManagementFirmCreateAdviserFirmInvestmentStrategy()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateAdviserFirmInvestmentStrategy) | **POST** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/batch | Investment Management Firm Create Adviser Firm Investment Strategy |
| [**investmentManagementFirmCreateInvestmentManager()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateInvestmentManager) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-manager/ | Investment Management Firm Create Investment Manager |
| [**investmentManagementFirmCreateInvestmentManagerAdviserLink()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateInvestmentManagerAdviserLink) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-manager/adviser-link | Investment Management Firm Create Investment Manager Adviser Link |
| [**investmentManagementFirmCreateInvestmentStrategy()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateInvestmentStrategy) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/ | Investment Management Firm Create Investment Strategy |
| [**investmentManagementFirmCreateInvestmentStrategyGroup()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateInvestmentStrategyGroup) | **POST** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/ | Investment Management Firm Create Investment Strategy Group |
| [**investmentManagementFirmCreateRiskProfileProviderLink()**](InvestmentManagementFirmsApi.md#investmentManagementFirmCreateRiskProfileProviderLink) | **POST** /investment-management-firm/{investment_management_firm_ref}/rpp-link/ | Investment Management Firm Create Risk Profile Provider Link |
| [**investmentManagementFirmDeleteAdviserFirmFeeScheduleLink()**](InvestmentManagementFirmsApi.md#investmentManagementFirmDeleteAdviserFirmFeeScheduleLink) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/fee-schedule-link/end/{ref} | Investment Management Firm Delete Adviser Firm Fee Schedule Link |
| [**investmentManagementFirmDeleteAdviserFirmInvestmentStrategy()**](InvestmentManagementFirmsApi.md#investmentManagementFirmDeleteAdviserFirmInvestmentStrategy) | **DELETE** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/{ref} | Investment Management Firm Delete Adviser Firm Investment Strategy |
| [**investmentManagementFirmDeleteInvestmentManager()**](InvestmentManagementFirmsApi.md#investmentManagementFirmDeleteInvestmentManager) | **DELETE** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref} | Investment Management Firm Delete Investment Manager |
| [**investmentManagementFirmExternalRead()**](InvestmentManagementFirmsApi.md#investmentManagementFirmExternalRead) | **GET** /investment-management-firm/external/{investment_management_firm_ref} | Investment Management Firm External Read |
| [**investmentManagementFirmGenerateOrders()**](InvestmentManagementFirmsApi.md#investmentManagementFirmGenerateOrders) | **POST** /investment-management-firm/{investment_management_firm_ref}/generate-orders | Investment Management Firm Generate Orders |
| [**investmentManagementFirmRead()**](InvestmentManagementFirmsApi.md#investmentManagementFirmRead) | **GET** /investment-management-firm/{investment_management_firm_ref} | Investment Management Firm Read |
| [**investmentManagementFirmReadAdviserFirmAdvisers()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadAdviserFirmAdvisers) | **GET** /investment-management-firm/{investment_management_firm_ref}/advisers | Investment Management Firm Read Adviser Firm Advisers |
| [**investmentManagementFirmReadAdviserFirmFeeScheduleLinks()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadAdviserFirmFeeScheduleLinks) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{ref}/fee-schedule-link | Investment Management Firm Read Adviser Firm Fee Schedule Links |
| [**investmentManagementFirmReadAdviserFirmInvestmentStrategies()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadAdviserFirmInvestmentStrategies) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/{adviser_firm_ref}/strategy-link/ | Investment Management Firm Read Adviser Firm Investment Strategies |
| [**investmentManagementFirmReadAdviserFirms()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadAdviserFirms) | **GET** /investment-management-firm/{investment_management_firm_ref}/adviser-firm/ | Investment Management Firm Read Adviser Firms |
| [**investmentManagementFirmReadFeeSchedules()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadFeeSchedules) | **GET** /investment-management-firm/{investment_management_firm_ref}/fee-schedule | Investment Management Firm Read Fee Schedules |
| [**investmentManagementFirmReadInvestmentManagers()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadInvestmentManagers) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-manager/ | Investment Management Firm Read Investment Managers |
| [**investmentManagementFirmReadInvestmentStrategies()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadInvestmentStrategies) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/ | Investment Management Firm Read Investment Strategies |
| [**investmentManagementFirmReadInvestmentStrategyGroups()**](InvestmentManagementFirmsApi.md#investmentManagementFirmReadInvestmentStrategyGroups) | **GET** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/ | Investment Management Firm Read Investment Strategy Groups |
| [**investmentManagementFirmUpdateAccessInvestmentManager()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateAccessInvestmentManager) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager-access/{ref} | Investment Management Firm Update Access Investment Manager |
| [**investmentManagementFirmUpdateAddress()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateAddress) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/address/{ref} | Investment Management Firm Update Address |
| [**investmentManagementFirmUpdateDetails()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateDetails) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/details | Investment Management Firm Update Details |
| [**investmentManagementFirmUpdateInvestmentManager()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentManager) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref} | Investment Management Firm Update Investment Manager |
| [**investmentManagementFirmUpdateInvestmentManagerPassword()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentManagerPassword) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-manager/{ref}/update-password | Investment Management Firm Update Investment Manager Password |
| [**investmentManagementFirmUpdateInvestmentStrategy()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentStrategy) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/{ref} | Investment Management Firm Update Investment Strategy |
| [**investmentManagementFirmUpdateInvestmentStrategyGroup()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentStrategyGroup) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{ref} | Investment Management Firm Update Investment Strategy Group |
| [**investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{investment_strategy_group_ref}/investment-strategy/batch | Investment Management Firm Update Investment Strategy Group Investment Strategies |
| [**investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/{investment_strategy_group_ref}/investment-strategy/{investment_strategy_ref} | Investment Management Firm Update Investment Strategy Group Investment Strategy |
| [**investmentManagementFirmUpdateOptions()**](InvestmentManagementFirmsApi.md#investmentManagementFirmUpdateOptions) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/options | Investment Management Firm Update Options |
| [**investmentManagementFirmsExternalRead()**](InvestmentManagementFirmsApi.md#investmentManagementFirmsExternalRead) | **GET** /investment-management-firm/external/ | Investment Management Firms External Read |
| [**investmentManagementFirmsRead()**](InvestmentManagementFirmsApi.md#investmentManagementFirmsRead) | **GET** /investment-management-firm/ | Investment Management Firms Read |
| [**investmentStrategyGroupUpdateSortOrders()**](InvestmentManagementFirmsApi.md#investmentStrategyGroupUpdateSortOrders) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy-group/sort-order-batch | Investment Strategy Group Update Sort Orders |
| [**investmentStrategyUpdateSortOrders()**](InvestmentManagementFirmsApi.md#investmentStrategyUpdateSortOrders) | **PATCH** /investment-management-firm/{investment_management_firm_ref}/investment-strategy/sort-order-batch | Investment Strategy Update Sort Orders |
| [**readAllInvestmentManagers()**](InvestmentManagementFirmsApi.md#readAllInvestmentManagers) | **GET** /investment-management-firm/investment-managers/ | Read All Investment Managers |


## `investmentManagementFirmCreate()`

```php
investmentManagementFirmCreate($investment_management_firm_create_schema): \OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema
```

Investment Management Firm Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_create_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmCreateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreate($investment_management_firm_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_create_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmCreateSchema**](../Model/InvestmentManagementFirmCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema**](../Model/InvestmentManagementFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateAddress()`

```php
investmentManagementFirmCreateAddress($investment_management_firm_ref, $investment_management_firm_address_create_schema): \OpenAPI\Client\Model\InvestmentManagementFirmAddressReturnSchema
```

Investment Management Firm Create Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_management_firm_address_create_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmAddressCreateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmAddressCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateAddress($investment_management_firm_ref, $investment_management_firm_address_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_firm_address_create_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmAddressCreateSchema**](../Model/InvestmentManagementFirmAddressCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmAddressReturnSchema**](../Model/InvestmentManagementFirmAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateAdviserFirmFeeScheduleLink()`

```php
investmentManagementFirmCreateAdviserFirmFeeScheduleLink($ref, $investment_management_firm_ref, $adviser_firm_fee_schedule_create_schema): \OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema
```

Investment Management Firm Create Adviser Firm Fee Schedule Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = TEST; // string
$investment_management_firm_ref = FDM; // string
$adviser_firm_fee_schedule_create_schema = new \OpenAPI\Client\Model\AdviserFirmFeeScheduleCreateSchema(); // \OpenAPI\Client\Model\AdviserFirmFeeScheduleCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateAdviserFirmFeeScheduleLink($ref, $investment_management_firm_ref, $adviser_firm_fee_schedule_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateAdviserFirmFeeScheduleLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **investment_management_firm_ref** | **string**|  | |
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

## `investmentManagementFirmCreateAdviserFirmInvestmentStrategy()`

```php
investmentManagementFirmCreateAdviserFirmInvestmentStrategy($investment_management_firm_ref, $adviser_firm_ref, $adviser_firm_investment_strategy_create_schema): \OpenAPI\Client\Model\AdviserFirmInvestmentStrategyReturnSchema[]
```

Investment Management Firm Create Adviser Firm Investment Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$adviser_firm_ref = TEST; // string
$adviser_firm_investment_strategy_create_schema = array(new \OpenAPI\Client\Model\AdviserFirmInvestmentStrategyCreateSchema()); // \OpenAPI\Client\Model\AdviserFirmInvestmentStrategyCreateSchema[]

try {
    $result = $apiInstance->investmentManagementFirmCreateAdviserFirmInvestmentStrategy($investment_management_firm_ref, $adviser_firm_ref, $adviser_firm_investment_strategy_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateAdviserFirmInvestmentStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **adviser_firm_ref** | **string**|  | |
| **adviser_firm_investment_strategy_create_schema** | [**\OpenAPI\Client\Model\AdviserFirmInvestmentStrategyCreateSchema[]**](../Model/AdviserFirmInvestmentStrategyCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmInvestmentStrategyReturnSchema[]**](../Model/AdviserFirmInvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateInvestmentManager()`

```php
investmentManagementFirmCreateInvestmentManager($investment_management_firm_ref, $investment_manager_create_schema): \OpenAPI\Client\Model\InvestmentManagerReturnSchema
```

Investment Management Firm Create Investment Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_manager_create_schema = new \OpenAPI\Client\Model\InvestmentManagerCreateSchema(); // \OpenAPI\Client\Model\InvestmentManagerCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateInvestmentManager($investment_management_firm_ref, $investment_manager_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateInvestmentManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_manager_create_schema** | [**\OpenAPI\Client\Model\InvestmentManagerCreateSchema**](../Model/InvestmentManagerCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateInvestmentManagerAdviserLink()`

```php
investmentManagementFirmCreateInvestmentManagerAdviserLink($investment_management_firm_ref, $investment_manager_create_adviser_link_schema): \OpenAPI\Client\Model\InvestmentManagerReturnSchema
```

Investment Management Firm Create Investment Manager Adviser Link

Create a new investment manager at an investment management firm from an existing adviser. The adviser firm that the existing adviser is employed at must be the same firm as the referenced investment management firm. In particular, the FCA registration numbers of the two firms must match.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_manager_create_adviser_link_schema = new \OpenAPI\Client\Model\InvestmentManagerCreateAdviserLinkSchema(); // \OpenAPI\Client\Model\InvestmentManagerCreateAdviserLinkSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateInvestmentManagerAdviserLink($investment_management_firm_ref, $investment_manager_create_adviser_link_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateInvestmentManagerAdviserLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_manager_create_adviser_link_schema** | [**\OpenAPI\Client\Model\InvestmentManagerCreateAdviserLinkSchema**](../Model/InvestmentManagerCreateAdviserLinkSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateInvestmentStrategy()`

```php
investmentManagementFirmCreateInvestmentStrategy($investment_management_firm_ref, $nested_inv_strategy_create_schema): \OpenAPI\Client\Model\NestedInvStrategyReturnSchema
```

Investment Management Firm Create Investment Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$nested_inv_strategy_create_schema = new \OpenAPI\Client\Model\NestedInvStrategyCreateSchema(); // \OpenAPI\Client\Model\NestedInvStrategyCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateInvestmentStrategy($investment_management_firm_ref, $nested_inv_strategy_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateInvestmentStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **nested_inv_strategy_create_schema** | [**\OpenAPI\Client\Model\NestedInvStrategyCreateSchema**](../Model/NestedInvStrategyCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NestedInvStrategyReturnSchema**](../Model/NestedInvStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateInvestmentStrategyGroup()`

```php
investmentManagementFirmCreateInvestmentStrategyGroup($investment_management_firm_ref, $inv_strategy_group_create_schema): \OpenAPI\Client\Model\InvStrategyGroupReturnSchema
```

Investment Management Firm Create Investment Strategy Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$inv_strategy_group_create_schema = new \OpenAPI\Client\Model\InvStrategyGroupCreateSchema(); // \OpenAPI\Client\Model\InvStrategyGroupCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateInvestmentStrategyGroup($investment_management_firm_ref, $inv_strategy_group_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateInvestmentStrategyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **inv_strategy_group_create_schema** | [**\OpenAPI\Client\Model\InvStrategyGroupCreateSchema**](../Model/InvStrategyGroupCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvStrategyGroupReturnSchema**](../Model/InvStrategyGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmCreateRiskProfileProviderLink()`

```php
investmentManagementFirmCreateRiskProfileProviderLink($investment_management_firm_ref, $investment_management_firm_rpp_link_create_schema): \OpenAPI\Client\Model\InvestmentManagementFirmRPPLinkReturnSchema
```

Investment Management Firm Create Risk Profile Provider Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_management_firm_rpp_link_create_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmRPPLinkCreateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmRPPLinkCreateSchema

try {
    $result = $apiInstance->investmentManagementFirmCreateRiskProfileProviderLink($investment_management_firm_ref, $investment_management_firm_rpp_link_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmCreateRiskProfileProviderLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_firm_rpp_link_create_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmRPPLinkCreateSchema**](../Model/InvestmentManagementFirmRPPLinkCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmRPPLinkReturnSchema**](../Model/InvestmentManagementFirmRPPLinkReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmDeleteAdviserFirmFeeScheduleLink()`

```php
investmentManagementFirmDeleteAdviserFirmFeeScheduleLink($adviser_firm_ref, $ref, $investment_management_firm_ref, $adviser_firm_fee_schedule_delete_schema)
```

Investment Management Firm Delete Adviser Firm Fee Schedule Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$ref = 56; // int
$investment_management_firm_ref = FDM; // string
$adviser_firm_fee_schedule_delete_schema = new \OpenAPI\Client\Model\AdviserFirmFeeScheduleDeleteSchema(); // \OpenAPI\Client\Model\AdviserFirmFeeScheduleDeleteSchema

try {
    $apiInstance->investmentManagementFirmDeleteAdviserFirmFeeScheduleLink($adviser_firm_ref, $ref, $investment_management_firm_ref, $adviser_firm_fee_schedule_delete_schema);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmDeleteAdviserFirmFeeScheduleLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
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

## `investmentManagementFirmDeleteAdviserFirmInvestmentStrategy()`

```php
investmentManagementFirmDeleteAdviserFirmInvestmentStrategy($ref, $adviser_firm_ref, $investment_management_firm_ref)
```

Investment Management Firm Delete Adviser Firm Investment Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$adviser_firm_ref = TEST; // string
$investment_management_firm_ref = FDM; // string

try {
    $apiInstance->investmentManagementFirmDeleteAdviserFirmInvestmentStrategy($ref, $adviser_firm_ref, $investment_management_firm_ref);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmDeleteAdviserFirmInvestmentStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **adviser_firm_ref** | **string**|  | |
| **investment_management_firm_ref** | **string**|  | |

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

## `investmentManagementFirmDeleteInvestmentManager()`

```php
investmentManagementFirmDeleteInvestmentManager($ref, $investment_management_firm_ref): mixed
```

Investment Management Firm Delete Investment Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmDeleteInvestmentManager($ref, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmDeleteInvestmentManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |

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

## `investmentManagementFirmExternalRead()`

```php
investmentManagementFirmExternalRead($investment_management_firm_ref): \OpenAPI\Client\Model\InvestmentManagementFirmPublicReturnSchema
```

Investment Management Firm External Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmExternalRead($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmExternalRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmPublicReturnSchema**](../Model/InvestmentManagementFirmPublicReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmGenerateOrders()`

```php
investmentManagementFirmGenerateOrders($investment_management_firm_ref, $investment_management_generate_orders_schema): mixed
```

Investment Management Firm Generate Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = G; // string
$investment_management_generate_orders_schema = new \OpenAPI\Client\Model\InvestmentManagementGenerateOrdersSchema(); // \OpenAPI\Client\Model\InvestmentManagementGenerateOrdersSchema

try {
    $result = $apiInstance->investmentManagementFirmGenerateOrders($investment_management_firm_ref, $investment_management_generate_orders_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmGenerateOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_generate_orders_schema** | [**\OpenAPI\Client\Model\InvestmentManagementGenerateOrdersSchema**](../Model/InvestmentManagementGenerateOrdersSchema.md)|  | |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmRead()`

```php
investmentManagementFirmRead($investment_management_firm_ref): \OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema
```

Investment Management Firm Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmRead($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema**](../Model/InvestmentManagementFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmReadAdviserFirmAdvisers()`

```php
investmentManagementFirmReadAdviserFirmAdvisers($investment_management_firm_ref, $adviser_firm_ref): \OpenAPI\Client\Model\ReducedAdviserReturnSchema[]
```

Investment Management Firm Read Adviser Firm Advisers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$adviser_firm_ref = 'adviser_firm_ref_example'; // string

try {
    $result = $apiInstance->investmentManagementFirmReadAdviserFirmAdvisers($investment_management_firm_ref, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadAdviserFirmAdvisers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **adviser_firm_ref** | **string**|  | [optional] |

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

## `investmentManagementFirmReadAdviserFirmFeeScheduleLinks()`

```php
investmentManagementFirmReadAdviserFirmFeeScheduleLinks($ref, $investment_management_firm_ref): \OpenAPI\Client\Model\AdviserFirmFeeScheduleReturnSchema[]
```

Investment Management Firm Read Adviser Firm Fee Schedule Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = FDMT; // string
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadAdviserFirmFeeScheduleLinks($ref, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadAdviserFirmFeeScheduleLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **string**|  | |
| **investment_management_firm_ref** | **string**|  | |

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

## `investmentManagementFirmReadAdviserFirmInvestmentStrategies()`

```php
investmentManagementFirmReadAdviserFirmInvestmentStrategies($adviser_firm_ref, $investment_management_firm_ref): \OpenAPI\Client\Model\AdviserFirmInvestmentStrategyReturnSchema[]
```

Investment Management Firm Read Adviser Firm Investment Strategies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadAdviserFirmInvestmentStrategies($adviser_firm_ref, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadAdviserFirmInvestmentStrategies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AdviserFirmInvestmentStrategyReturnSchema[]**](../Model/AdviserFirmInvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmReadAdviserFirms()`

```php
investmentManagementFirmReadAdviserFirms($investment_management_firm_ref): \OpenAPI\Client\Model\LinkedAdviserFirmReturnSchema[]
```

Investment Management Firm Read Adviser Firms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadAdviserFirms($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadAdviserFirms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\LinkedAdviserFirmReturnSchema[]**](../Model/LinkedAdviserFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmReadFeeSchedules()`

```php
investmentManagementFirmReadFeeSchedules($investment_management_firm_ref, $adviser_firm_ref): \OpenAPI\Client\Model\FeeScheduleReturnSchema[]
```

Investment Management Firm Read Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$adviser_firm_ref = G; // string

try {
    $result = $apiInstance->investmentManagementFirmReadFeeSchedules($investment_management_firm_ref, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **adviser_firm_ref** | **string**|  | [optional] |

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

## `investmentManagementFirmReadInvestmentManagers()`

```php
investmentManagementFirmReadInvestmentManagers($investment_management_firm_ref): \OpenAPI\Client\Model\InvestmentManagerReturnSchema[]
```

Investment Management Firm Read Investment Managers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadInvestmentManagers($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadInvestmentManagers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema[]**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmReadInvestmentStrategies()`

```php
investmentManagementFirmReadInvestmentStrategies($investment_management_firm_ref): \OpenAPI\Client\Model\NestedInvStrategyReturnSchema[]
```

Investment Management Firm Read Investment Strategies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadInvestmentStrategies($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadInvestmentStrategies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NestedInvStrategyReturnSchema[]**](../Model/NestedInvStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmReadInvestmentStrategyGroups()`

```php
investmentManagementFirmReadInvestmentStrategyGroups($investment_management_firm_ref): \OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]
```

Investment Management Firm Read Investment Strategy Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmReadInvestmentStrategyGroups($investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmReadInvestmentStrategyGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]**](../Model/InvStrategyGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateAccessInvestmentManager()`

```php
investmentManagementFirmUpdateAccessInvestmentManager($ref, $investment_management_firm_ref, $enabled, $end_date): \OpenAPI\Client\Model\InvestmentManagerReturnSchema
```

Investment Management Firm Update Access Investment Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$investment_management_firm_ref = FDM; // string
$enabled = True; // bool
$end_date = 2022-9-20; // \DateTime

try {
    $result = $apiInstance->investmentManagementFirmUpdateAccessInvestmentManager($ref, $investment_management_firm_ref, $enabled, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateAccessInvestmentManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **enabled** | **bool**|  | |
| **end_date** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateAddress()`

```php
investmentManagementFirmUpdateAddress($ref, $investment_management_firm_ref, $investment_management_firm_address_update_schema): \OpenAPI\Client\Model\InvestmentManagementFirmAddressReturnSchema
```

Investment Management Firm Update Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$investment_management_firm_ref = FDM; // string
$investment_management_firm_address_update_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmAddressUpdateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmAddressUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateAddress($ref, $investment_management_firm_ref, $investment_management_firm_address_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_firm_address_update_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmAddressUpdateSchema**](../Model/InvestmentManagementFirmAddressUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmAddressReturnSchema**](../Model/InvestmentManagementFirmAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateDetails()`

```php
investmentManagementFirmUpdateDetails($investment_management_firm_ref, $investment_management_firm_details_update_schema): \OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema
```

Investment Management Firm Update Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_management_firm_details_update_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmDetailsUpdateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmDetailsUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateDetails($investment_management_firm_ref, $investment_management_firm_details_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_firm_details_update_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmDetailsUpdateSchema**](../Model/InvestmentManagementFirmDetailsUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmReturnSchema**](../Model/InvestmentManagementFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentManager()`

```php
investmentManagementFirmUpdateInvestmentManager($ref, $investment_management_firm_ref, $investment_manager_update_schema): \OpenAPI\Client\Model\InvestmentManagerReturnSchema
```

Investment Management Firm Update Investment Manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 1; // int
$investment_management_firm_ref = FDM; // string
$investment_manager_update_schema = new \OpenAPI\Client\Model\InvestmentManagerUpdateSchema(); // \OpenAPI\Client\Model\InvestmentManagerUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentManager($ref, $investment_management_firm_ref, $investment_manager_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **investment_manager_update_schema** | [**\OpenAPI\Client\Model\InvestmentManagerUpdateSchema**](../Model/InvestmentManagerUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentManagerPassword()`

```php
investmentManagementFirmUpdateInvestmentManagerPassword($ref, $investment_management_firm_ref, $password_update_schema): \OpenAPI\Client\Model\InvestmentManagerReturnSchema
```

Investment Management Firm Update Investment Manager Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$investment_management_firm_ref = FDM; // string
$password_update_schema = new \OpenAPI\Client\Model\PasswordUpdateSchema(); // \OpenAPI\Client\Model\PasswordUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentManagerPassword($ref, $investment_management_firm_ref, $password_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentManagerPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **password_update_schema** | [**\OpenAPI\Client\Model\PasswordUpdateSchema**](../Model/PasswordUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentStrategy()`

```php
investmentManagementFirmUpdateInvestmentStrategy($ref, $investment_management_firm_ref, $investment_strategy_update_schema): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema
```

Investment Management Firm Update Investment Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 147; // int
$investment_management_firm_ref = FDM; // string
$investment_strategy_update_schema = new \OpenAPI\Client\Model\InvestmentStrategyUpdateSchema(); // \OpenAPI\Client\Model\InvestmentStrategyUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentStrategy($ref, $investment_management_firm_ref, $investment_strategy_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **investment_strategy_update_schema** | [**\OpenAPI\Client\Model\InvestmentStrategyUpdateSchema**](../Model/InvestmentStrategyUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentStrategyGroup()`

```php
investmentManagementFirmUpdateInvestmentStrategyGroup($ref, $investment_management_firm_ref, $inv_strategy_group_update_schema): \OpenAPI\Client\Model\InvStrategyGroupReturnSchema
```

Investment Management Firm Update Investment Strategy Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref = 56; // int
$investment_management_firm_ref = FDM; // string
$inv_strategy_group_update_schema = new \OpenAPI\Client\Model\InvStrategyGroupUpdateSchema(); // \OpenAPI\Client\Model\InvStrategyGroupUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentStrategyGroup($ref, $investment_management_firm_ref, $inv_strategy_group_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentStrategyGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **inv_strategy_group_update_schema** | [**\OpenAPI\Client\Model\InvStrategyGroupUpdateSchema**](../Model/InvStrategyGroupUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvStrategyGroupReturnSchema**](../Model/InvStrategyGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies()`

```php
investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies($investment_strategy_group_ref, $investment_management_firm_ref, $investment_strategy_group_investment_strategy_update_schema): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]
```

Investment Management Firm Update Investment Strategy Group Investment Strategies

Add one or more investment strategies to an investment strategy group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_strategy_group_ref = 56; // int
$investment_management_firm_ref = FDM; // string
$investment_strategy_group_investment_strategy_update_schema = array(new \OpenAPI\Client\Model\InvestmentStrategyGroupInvestmentStrategyUpdateSchema()); // \OpenAPI\Client\Model\InvestmentStrategyGroupInvestmentStrategyUpdateSchema[]

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies($investment_strategy_group_ref, $investment_management_firm_ref, $investment_strategy_group_investment_strategy_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_strategy_group_ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |
| **investment_strategy_group_investment_strategy_update_schema** | [**\OpenAPI\Client\Model\InvestmentStrategyGroupInvestmentStrategyUpdateSchema[]**](../Model/InvestmentStrategyGroupInvestmentStrategyUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy()`

```php
investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy($investment_strategy_group_ref, $investment_strategy_ref, $investment_management_firm_ref): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema
```

Investment Management Firm Update Investment Strategy Group Investment Strategy

Remove an investment strategy from an investment strategy group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_strategy_group_ref = 56; // int
$investment_strategy_ref = 56; // int
$investment_management_firm_ref = FDM; // string

try {
    $result = $apiInstance->investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy($investment_strategy_group_ref, $investment_strategy_ref, $investment_management_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateInvestmentStrategyGroupInvestmentStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_strategy_group_ref** | **int**|  | |
| **investment_strategy_ref** | **int**|  | |
| **investment_management_firm_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmUpdateOptions()`

```php
investmentManagementFirmUpdateOptions($investment_management_firm_ref, $investment_management_firm_options_update_schema): \OpenAPI\Client\Model\InvestmentManagementFirmOptionsReturnSchema
```

Investment Management Firm Update Options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$investment_management_firm_options_update_schema = new \OpenAPI\Client\Model\InvestmentManagementFirmOptionsUpdateSchema(); // \OpenAPI\Client\Model\InvestmentManagementFirmOptionsUpdateSchema

try {
    $result = $apiInstance->investmentManagementFirmUpdateOptions($investment_management_firm_ref, $investment_management_firm_options_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmUpdateOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **investment_management_firm_options_update_schema** | [**\OpenAPI\Client\Model\InvestmentManagementFirmOptionsUpdateSchema**](../Model/InvestmentManagementFirmOptionsUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmOptionsReturnSchema**](../Model/InvestmentManagementFirmOptionsReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmsExternalRead()`

```php
investmentManagementFirmsExternalRead(): \OpenAPI\Client\Model\InvestmentManagementFirmPublicReturnSchema[]
```

Investment Management Firms External Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->investmentManagementFirmsExternalRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmsExternalRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InvestmentManagementFirmPublicReturnSchema[]**](../Model/InvestmentManagementFirmPublicReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentManagementFirmsRead()`

```php
investmentManagementFirmsRead(): \OpenAPI\Client\Model\NestedInvestmentManagementFirmReturnSchema[]
```

Investment Management Firms Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->investmentManagementFirmsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentManagementFirmsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NestedInvestmentManagementFirmReturnSchema[]**](../Model/NestedInvestmentManagementFirmReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentStrategyGroupUpdateSortOrders()`

```php
investmentStrategyGroupUpdateSortOrders($investment_management_firm_ref, $sort_order_update_schema): \OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]
```

Investment Strategy Group Update Sort Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$sort_order_update_schema = array(new \OpenAPI\Client\Model\SortOrderUpdateSchema()); // \OpenAPI\Client\Model\SortOrderUpdateSchema[]

try {
    $result = $apiInstance->investmentStrategyGroupUpdateSortOrders($investment_management_firm_ref, $sort_order_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentStrategyGroupUpdateSortOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **sort_order_update_schema** | [**\OpenAPI\Client\Model\SortOrderUpdateSchema[]**](../Model/SortOrderUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvStrategyGroupReturnSchema[]**](../Model/InvStrategyGroupReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `investmentStrategyUpdateSortOrders()`

```php
investmentStrategyUpdateSortOrders($investment_management_firm_ref, $sort_order_update_schema): \OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]
```

Investment Strategy Update Sort Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$investment_management_firm_ref = FDM; // string
$sort_order_update_schema = array(new \OpenAPI\Client\Model\SortOrderUpdateSchema()); // \OpenAPI\Client\Model\SortOrderUpdateSchema[]

try {
    $result = $apiInstance->investmentStrategyUpdateSortOrders($investment_management_firm_ref, $sort_order_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->investmentStrategyUpdateSortOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **investment_management_firm_ref** | **string**|  | |
| **sort_order_update_schema** | [**\OpenAPI\Client\Model\SortOrderUpdateSchema[]**](../Model/SortOrderUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InvestmentStrategyReturnSchema[]**](../Model/InvestmentStrategyReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAllInvestmentManagers()`

```php
readAllInvestmentManagers(): \OpenAPI\Client\Model\InvestmentManagerReturnSchema[]
```

Read All Investment Managers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvestmentManagementFirmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readAllInvestmentManagers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestmentManagementFirmsApi->readAllInvestmentManagers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InvestmentManagerReturnSchema[]**](../Model/InvestmentManagerReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
