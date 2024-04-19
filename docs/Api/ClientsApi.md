# OpenAPI\Client\ClientsApi

All URIs are relative to https://staging-api.fundment.com/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAssociatedClients()**](ClientsApi.md#addAssociatedClients) | **PUT** /client/entity/{client_ref}/associate | Add Associated Clients |
| [**clientCreate()**](ClientsApi.md#clientCreate) | **POST** /client/ | Client Create |
| [**clientCreateAddress()**](ClientsApi.md#clientCreateAddress) | **POST** /client/{client_ref}/address/ | Client Create Address |
| [**clientCreateDocument()**](ClientsApi.md#clientCreateDocument) | **POST** /client/{client_ref}/document/ | Client Create Document |
| [**clientCreateFeeSchedule()**](ClientsApi.md#clientCreateFeeSchedule) | **POST** /client/{client_ref}/fee-schedule/ | Client Create Fee Schedule |
| [**clientCreateIsaLimit()**](ClientsApi.md#clientCreateIsaLimit) | **POST** /client/{client_ref}/isa-limit | Client Create Isa Limit |
| [**clientCreatePhoneNumber()**](ClientsApi.md#clientCreatePhoneNumber) | **POST** /client/{client_ref}/phone-number | Client Create Phone Number |
| [**clientDeleteFeeSchedule()**](ClientsApi.md#clientDeleteFeeSchedule) | **DELETE** /client/{client_ref}/fee-schedule/{ref} | Client Delete Fee Schedule |
| [**clientDeletePhoneNumber()**](ClientsApi.md#clientDeletePhoneNumber) | **DELETE** /client/{client_ref}/phone-number/{ref} | Client Delete Phone Number |
| [**clientDownloadDocument()**](ClientsApi.md#clientDownloadDocument) | **GET** /client/{client_ref}/document/{ref}/download | Client Download Document |
| [**clientGetFlexibleIsaLimits()**](ClientsApi.md#clientGetFlexibleIsaLimits) | **GET** /client/{client_ref}/flex-isa-limits | Client Get Flexible Isa Limits |
| [**clientGroupReadDefaultFeeSchedules()**](ClientsApi.md#clientGroupReadDefaultFeeSchedules) | **GET** /client/client-group/{client_group_ref}/fee-schedule/default | Client Group Read Default Fee Schedules |
| [**clientGroupsRead()**](ClientsApi.md#clientGroupsRead) | **GET** /client/client-group/ | Client Groups Read |
| [**clientRead()**](ClientsApi.md#clientRead) | **GET** /client/{client_ref} | Client Read |
| [**clientReadAddress()**](ClientsApi.md#clientReadAddress) | **GET** /client/{client_ref}/address/{ref} | Client Read Address |
| [**clientReadAddresses()**](ClientsApi.md#clientReadAddresses) | **GET** /client/{client_ref}/address/ | Client Read Addresses |
| [**clientReadAppliedFeeSchedules()**](ClientsApi.md#clientReadAppliedFeeSchedules) | **GET** /client/{client_ref}/fee-schedule/applied | Client Read Applied Fee Schedules |
| [**clientReadDefaultFeeSchedules()**](ClientsApi.md#clientReadDefaultFeeSchedules) | **GET** /client/{client_ref}/fee-schedule/default | Client Read Default Fee Schedules |
| [**clientReadDocument()**](ClientsApi.md#clientReadDocument) | **GET** /client/{client_ref}/document/{ref} | Client Read Document |
| [**clientReadDocuments()**](ClientsApi.md#clientReadDocuments) | **GET** /client/{client_ref}/document/ | Client Read Documents |
| [**clientReadFeeSchedules()**](ClientsApi.md#clientReadFeeSchedules) | **GET** /client/{client_ref}/fee-schedule/ | Client Read Fee Schedules |
| [**clientReadUserGroupFeeSchedules()**](ClientsApi.md#clientReadUserGroupFeeSchedules) | **GET** /client/client_group/{client_group_ref}/fee-schedule/ | Client Read User Group Fee Schedules |
| [**clientUpdate()**](ClientsApi.md#clientUpdate) | **PATCH** /client/{client_ref} | Client Update |
| [**clientUpdateAddress()**](ClientsApi.md#clientUpdateAddress) | **PATCH** /client/{client_ref}/address/{ref} | Client Update Address |
| [**clientUpdateDocument()**](ClientsApi.md#clientUpdateDocument) | **PATCH** /client/{client_ref}/document/{ref} | Client Update Document |
| [**clientUpdateFeeSchedule()**](ClientsApi.md#clientUpdateFeeSchedule) | **PATCH** /client/{client_ref}/fee-schedule/{ref} | Client Update Fee Schedule |
| [**clientUpdateIsaLimit()**](ClientsApi.md#clientUpdateIsaLimit) | **PATCH** /client/{client_ref}/isa-limit/{tax_year} | Client Update Isa Limit |
| [**clientUpdatePhoneNumber()**](ClientsApi.md#clientUpdatePhoneNumber) | **PATCH** /client/{client_ref}/phone-number/{ref} | Client Update Phone Number |
| [**clientsRead()**](ClientsApi.md#clientsRead) | **GET** /client/ | Clients Read |
| [**entityClientCreate()**](ClientsApi.md#entityClientCreate) | **POST** /client/entity | Entity Client Create |
| [**entityClientRead()**](ClientsApi.md#entityClientRead) | **GET** /client/entity/{client_ref} | Entity Client Read |
| [**entityClientReadAssociations()**](ClientsApi.md#entityClientReadAssociations) | **GET** /client/entity/{client_ref}/associations | Entity Client Read Associations |
| [**entityClientUpdate()**](ClientsApi.md#entityClientUpdate) | **PATCH** /client/entity/{client_ref} | Entity Client Update |
| [**entityLeadUpdate()**](ClientsApi.md#entityLeadUpdate) | **PATCH** /client/entity/lead/{client_ref} | Entity Lead Update |
| [**goalReadFeeSchedulesProjections()**](ClientsApi.md#goalReadFeeSchedulesProjections) | **GET** /client/{client_ref}/fee-schedule/{goal_ref}/fee-projections | Goal Read Fee Schedules Projections |
| [**leadUpdate()**](ClientsApi.md#leadUpdate) | **PATCH** /client/lead/{client_ref} | Lead Update |
| [**removeAssociatedClient()**](ClientsApi.md#removeAssociatedClient) | **DELETE** /client/entity/{client_ref}/associate/{association_id} | Remove Associated Client |


## `addAssociatedClients()`

```php
addAssociatedClients($client_ref, $associated_user_link_schema): \OpenAPI\Client\Model\EntityClientReturnSchema
```

Add Associated Clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$associated_user_link_schema = array(new \OpenAPI\Client\Model\AssociatedUserLinkSchema()); // \OpenAPI\Client\Model\AssociatedUserLinkSchema[]

try {
    $result = $apiInstance->addAssociatedClients($client_ref, $associated_user_link_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->addAssociatedClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **associated_user_link_schema** | [**\OpenAPI\Client\Model\AssociatedUserLinkSchema[]**](../Model/AssociatedUserLinkSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityClientReturnSchema**](../Model/EntityClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreate()`

```php
clientCreate($client_create_schema): \OpenAPI\Client\Model\ClientReturnSchema
```

Client Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_create_schema = new \OpenAPI\Client\Model\ClientCreateSchema(); // \OpenAPI\Client\Model\ClientCreateSchema

try {
    $result = $apiInstance->clientCreate($client_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_create_schema** | [**\OpenAPI\Client\Model\ClientCreateSchema**](../Model/ClientCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientReturnSchema**](../Model/ClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreateAddress()`

```php
clientCreateAddress($client_ref, $client_address_create_schema): \OpenAPI\Client\Model\ClientAddressReturnSchema[]
```

Client Create Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_address_create_schema = new \OpenAPI\Client\Model\ClientAddressCreateSchema(); // \OpenAPI\Client\Model\ClientAddressCreateSchema

try {
    $result = $apiInstance->clientCreateAddress($client_ref, $client_address_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **client_address_create_schema** | [**\OpenAPI\Client\Model\ClientAddressCreateSchema**](../Model/ClientAddressCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAddressReturnSchema[]**](../Model/ClientAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreateDocument()`

```php
clientCreateDocument($client_ref, $document_type, $file, $title, $status): \OpenAPI\Client\Model\ClientDocumentReturnSchema
```

Client Create Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$document_type = 'document_type_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$title = 'title_example'; // string
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FapiDbUserDocumentUserDocumentStatus(); // \OpenAPI\Client\Model\FapiDbUserDocumentUserDocumentStatus

try {
    $result = $apiInstance->clientCreateDocument($client_ref, $document_type, $file, $title, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **document_type** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **title** | **string**|  | [optional] |
| **status** | [**\OpenAPI\Client\Model\FapiDbUserDocumentUserDocumentStatus**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientDocumentReturnSchema**](../Model/ClientDocumentReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreateFeeSchedule()`

```php
clientCreateFeeSchedule($client_ref, $client_fee_schedule_create_schema): \OpenAPI\Client\Model\ClientFeeScheduleReturnSchema
```

Client Create Fee Schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_fee_schedule_create_schema = new \OpenAPI\Client\Model\ClientFeeScheduleCreateSchema(); // \OpenAPI\Client\Model\ClientFeeScheduleCreateSchema

try {
    $result = $apiInstance->clientCreateFeeSchedule($client_ref, $client_fee_schedule_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreateFeeSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **client_fee_schedule_create_schema** | [**\OpenAPI\Client\Model\ClientFeeScheduleCreateSchema**](../Model/ClientFeeScheduleCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientFeeScheduleReturnSchema**](../Model/ClientFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreateIsaLimit()`

```php
clientCreateIsaLimit($client_ref, $isa_limit_create_schema): \OpenAPI\Client\Model\IsaLimitReturnSchema
```

Client Create Isa Limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$isa_limit_create_schema = new \OpenAPI\Client\Model\IsaLimitCreateSchema(); // \OpenAPI\Client\Model\IsaLimitCreateSchema

try {
    $result = $apiInstance->clientCreateIsaLimit($client_ref, $isa_limit_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreateIsaLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **isa_limit_create_schema** | [**\OpenAPI\Client\Model\IsaLimitCreateSchema**](../Model/IsaLimitCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IsaLimitReturnSchema**](../Model/IsaLimitReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreatePhoneNumber()`

```php
clientCreatePhoneNumber($client_ref, $client_phone_number_create_schema): \OpenAPI\Client\Model\ClientPhoneNumberReturnSchema
```

Client Create Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_phone_number_create_schema = new \OpenAPI\Client\Model\ClientPhoneNumberCreateSchema(); // \OpenAPI\Client\Model\ClientPhoneNumberCreateSchema

try {
    $result = $apiInstance->clientCreatePhoneNumber($client_ref, $client_phone_number_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientCreatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **client_phone_number_create_schema** | [**\OpenAPI\Client\Model\ClientPhoneNumberCreateSchema**](../Model/ClientPhoneNumberCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientPhoneNumberReturnSchema**](../Model/ClientPhoneNumberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientDeleteFeeSchedule()`

```php
clientDeleteFeeSchedule($client_ref, $ref)
```

Client Delete Fee Schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int

try {
    $apiInstance->clientDeleteFeeSchedule($client_ref, $ref);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientDeleteFeeSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
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

## `clientDeletePhoneNumber()`

```php
clientDeletePhoneNumber($client_ref, $ref)
```

Client Delete Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int

try {
    $apiInstance->clientDeletePhoneNumber($client_ref, $ref);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientDeletePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
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

## `clientDownloadDocument()`

```php
clientDownloadDocument($client_ref, $ref): mixed
```

Client Download Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 1; // int

try {
    $result = $apiInstance->clientDownloadDocument($client_ref, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientDownloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **int**|  | |

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

## `clientGetFlexibleIsaLimits()`

```php
clientGetFlexibleIsaLimits($client_ref): \OpenAPI\Client\Model\FlexibleIsaLimitSchema[]
```

Client Get Flexible Isa Limits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientGetFlexibleIsaLimits($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientGetFlexibleIsaLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FlexibleIsaLimitSchema[]**](../Model/FlexibleIsaLimitSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientGroupReadDefaultFeeSchedules()`

```php
clientGroupReadDefaultFeeSchedules($client_group_ref): \OpenAPI\Client\Model\ClientGroupDefaultFeeSchedulesReturnSchema[]
```

Client Group Read Default Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_group_ref = 56; // int

try {
    $result = $apiInstance->clientGroupReadDefaultFeeSchedules($client_group_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientGroupReadDefaultFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_group_ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientGroupDefaultFeeSchedulesReturnSchema[]**](../Model/ClientGroupDefaultFeeSchedulesReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientGroupsRead()`

```php
clientGroupsRead($adviser_firm_ref): \OpenAPI\Client\Model\ClientGroupReturnSchema[]
```

Client Groups Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->clientGroupsRead($adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientGroupsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adviser_firm_ref** | **string**|  | [optional] |

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

## `clientRead()`

```php
clientRead($client_ref): \OpenAPI\Client\Model\ClientReturnSchema
```

Client Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientRead($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientReturnSchema**](../Model/ClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadAddress()`

```php
clientReadAddress($client_ref, $ref): \OpenAPI\Client\Model\ClientAddressReturnSchema
```

Client Read Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = A000000000B4A85; // string

try {
    $result = $apiInstance->clientReadAddress($client_ref, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAddressReturnSchema**](../Model/ClientAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadAddresses()`

```php
clientReadAddresses($client_ref): \OpenAPI\Client\Model\ClientAddressReturnSchema[]
```

Client Read Addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientReadAddresses($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAddressReturnSchema[]**](../Model/ClientAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadAppliedFeeSchedules()`

```php
clientReadAppliedFeeSchedules($client_ref): \OpenAPI\Client\Model\ClientAppliedFeeSchedulesReturnSchema[]
```

Client Read Applied Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientReadAppliedFeeSchedules($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadAppliedFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAppliedFeeSchedulesReturnSchema[]**](../Model/ClientAppliedFeeSchedulesReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadDefaultFeeSchedules()`

```php
clientReadDefaultFeeSchedules($client_ref): \OpenAPI\Client\Model\ClientDefaultFeeSchedulesReturnSchema[]
```

Client Read Default Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientReadDefaultFeeSchedules($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadDefaultFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientDefaultFeeSchedulesReturnSchema[]**](../Model/ClientDefaultFeeSchedulesReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadDocument()`

```php
clientReadDocument($client_ref, $ref): \OpenAPI\Client\Model\ClientDocumentReturnSchema
```

Client Read Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int

try {
    $result = $apiInstance->clientReadDocument($client_ref, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientDocumentReturnSchema**](../Model/ClientDocumentReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadDocuments()`

```php
clientReadDocuments($client_ref): \OpenAPI\Client\Model\ClientDocumentReturnSchema[]
```

Client Read Documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientReadDocuments($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientDocumentReturnSchema[]**](../Model/ClientDocumentReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadFeeSchedules()`

```php
clientReadFeeSchedules($client_ref): \OpenAPI\Client\Model\ClientFeeScheduleReturnSchema[]
```

Client Read Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->clientReadFeeSchedules($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientFeeScheduleReturnSchema[]**](../Model/ClientFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientReadUserGroupFeeSchedules()`

```php
clientReadUserGroupFeeSchedules($client_group_ref): \OpenAPI\Client\Model\ClientFeeScheduleReturnSchema[]
```

Client Read User Group Fee Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_group_ref = 56; // int

try {
    $result = $apiInstance->clientReadUserGroupFeeSchedules($client_group_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientReadUserGroupFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_group_ref** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ClientFeeScheduleReturnSchema[]**](../Model/ClientFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdate()`

```php
clientUpdate($client_ref, $client_update_schema): \OpenAPI\Client\Model\ClientReturnSchema
```

Client Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_update_schema = new \OpenAPI\Client\Model\ClientUpdateSchema(); // \OpenAPI\Client\Model\ClientUpdateSchema

try {
    $result = $apiInstance->clientUpdate($client_ref, $client_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **client_update_schema** | [**\OpenAPI\Client\Model\ClientUpdateSchema**](../Model/ClientUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientReturnSchema**](../Model/ClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdateAddress()`

```php
clientUpdateAddress($client_ref, $ref, $client_address_update_schema): \OpenAPI\Client\Model\ClientAddressReturnSchema[]
```

Client Update Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = A000000000B4A85; // string
$client_address_update_schema = new \OpenAPI\Client\Model\ClientAddressUpdateSchema(); // \OpenAPI\Client\Model\ClientAddressUpdateSchema

try {
    $result = $apiInstance->clientUpdateAddress($client_ref, $ref, $client_address_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **string**|  | |
| **client_address_update_schema** | [**\OpenAPI\Client\Model\ClientAddressUpdateSchema**](../Model/ClientAddressUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientAddressReturnSchema[]**](../Model/ClientAddressReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdateDocument()`

```php
clientUpdateDocument($client_ref, $ref, $client_document_update_schema): \OpenAPI\Client\Model\ClientDocumentReturnSchema
```

Client Update Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int
$client_document_update_schema = new \OpenAPI\Client\Model\ClientDocumentUpdateSchema(); // \OpenAPI\Client\Model\ClientDocumentUpdateSchema

try {
    $result = $apiInstance->clientUpdateDocument($client_ref, $ref, $client_document_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **int**|  | |
| **client_document_update_schema** | [**\OpenAPI\Client\Model\ClientDocumentUpdateSchema**](../Model/ClientDocumentUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientDocumentReturnSchema**](../Model/ClientDocumentReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdateFeeSchedule()`

```php
clientUpdateFeeSchedule($client_ref, $ref, $client_fee_schedule_update_schema): \OpenAPI\Client\Model\ClientFeeScheduleReturnSchema
```

Client Update Fee Schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int
$client_fee_schedule_update_schema = new \OpenAPI\Client\Model\ClientFeeScheduleUpdateSchema(); // \OpenAPI\Client\Model\ClientFeeScheduleUpdateSchema

try {
    $result = $apiInstance->clientUpdateFeeSchedule($client_ref, $ref, $client_fee_schedule_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdateFeeSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **int**|  | |
| **client_fee_schedule_update_schema** | [**\OpenAPI\Client\Model\ClientFeeScheduleUpdateSchema**](../Model/ClientFeeScheduleUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientFeeScheduleReturnSchema**](../Model/ClientFeeScheduleReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdateIsaLimit()`

```php
clientUpdateIsaLimit($client_ref, $tax_year, $isa_limit_update_schema): \OpenAPI\Client\Model\IsaLimitReturnSchema
```

Client Update Isa Limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$tax_year = 56; // int
$isa_limit_update_schema = new \OpenAPI\Client\Model\IsaLimitUpdateSchema(); // \OpenAPI\Client\Model\IsaLimitUpdateSchema

try {
    $result = $apiInstance->clientUpdateIsaLimit($client_ref, $tax_year, $isa_limit_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdateIsaLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **tax_year** | **int**|  | |
| **isa_limit_update_schema** | [**\OpenAPI\Client\Model\IsaLimitUpdateSchema**](../Model/IsaLimitUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IsaLimitReturnSchema**](../Model/IsaLimitReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdatePhoneNumber()`

```php
clientUpdatePhoneNumber($client_ref, $ref, $client_phone_number_update_schema): \OpenAPI\Client\Model\ClientPhoneNumberReturnSchema
```

Client Update Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$ref = 56; // int
$client_phone_number_update_schema = new \OpenAPI\Client\Model\ClientPhoneNumberUpdateSchema(); // \OpenAPI\Client\Model\ClientPhoneNumberUpdateSchema

try {
    $result = $apiInstance->clientUpdatePhoneNumber($client_ref, $ref, $client_phone_number_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientUpdatePhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **ref** | **int**|  | |
| **client_phone_number_update_schema** | [**\OpenAPI\Client\Model\ClientPhoneNumberUpdateSchema**](../Model/ClientPhoneNumberUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientPhoneNumberReturnSchema**](../Model/ClientPhoneNumberReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientsRead()`

```php
clientsRead($client_ref, $client_type, $date_of_birth, $last_name, $national_insurance_number, $adviser_firm_ref): \OpenAPI\Client\Model\NestedClientReturnSchema[]
```

Clients Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_type = INDV; // string
$date_of_birth = 1978-04-06; // \DateTime
$last_name = Mee; // string
$national_insurance_number = AB122222A; // string
$adviser_firm_ref = TEST; // string

try {
    $result = $apiInstance->clientsRead($client_ref, $client_type, $date_of_birth, $last_name, $national_insurance_number, $adviser_firm_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | [optional] |
| **client_type** | **string**|  | [optional] |
| **date_of_birth** | **\DateTime**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **national_insurance_number** | **string**|  | [optional] |
| **adviser_firm_ref** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NestedClientReturnSchema[]**](../Model/NestedClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityClientCreate()`

```php
entityClientCreate($entity_client_create_schema): \OpenAPI\Client\Model\EntityClientReturnSchema
```

Entity Client Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_client_create_schema = new \OpenAPI\Client\Model\EntityClientCreateSchema(); // \OpenAPI\Client\Model\EntityClientCreateSchema

try {
    $result = $apiInstance->entityClientCreate($entity_client_create_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->entityClientCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_client_create_schema** | [**\OpenAPI\Client\Model\EntityClientCreateSchema**](../Model/EntityClientCreateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityClientReturnSchema**](../Model/EntityClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityClientRead()`

```php
entityClientRead($client_ref): \OpenAPI\Client\Model\EntityClientReturnSchema
```

Entity Client Read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->entityClientRead($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->entityClientRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EntityClientReturnSchema**](../Model/EntityClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityClientReadAssociations()`

```php
entityClientReadAssociations($client_ref): \OpenAPI\Client\Model\AssociatedUserReturnSchema[]
```

Entity Client Read Associations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string

try {
    $result = $apiInstance->entityClientReadAssociations($client_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->entityClientReadAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AssociatedUserReturnSchema[]**](../Model/AssociatedUserReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityClientUpdate()`

```php
entityClientUpdate($client_ref, $entity_client_update_schema): \OpenAPI\Client\Model\EntityClientReturnSchema
```

Entity Client Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$entity_client_update_schema = new \OpenAPI\Client\Model\EntityClientUpdateSchema(); // \OpenAPI\Client\Model\EntityClientUpdateSchema

try {
    $result = $apiInstance->entityClientUpdate($client_ref, $entity_client_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->entityClientUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **entity_client_update_schema** | [**\OpenAPI\Client\Model\EntityClientUpdateSchema**](../Model/EntityClientUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityClientReturnSchema**](../Model/EntityClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entityLeadUpdate()`

```php
entityLeadUpdate($client_ref, $entity_lead_update_schema): \OpenAPI\Client\Model\EntityClientReturnSchema
```

Entity Lead Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$entity_lead_update_schema = new \OpenAPI\Client\Model\EntityLeadUpdateSchema(); // \OpenAPI\Client\Model\EntityLeadUpdateSchema

try {
    $result = $apiInstance->entityLeadUpdate($client_ref, $entity_lead_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->entityLeadUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **entity_lead_update_schema** | [**\OpenAPI\Client\Model\EntityLeadUpdateSchema**](../Model/EntityLeadUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityClientReturnSchema**](../Model/EntityClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `goalReadFeeSchedulesProjections()`

```php
goalReadFeeSchedulesProjections($client_ref, $goal_ref): \OpenAPI\Client\Model\PortfolioFeeProjectionReturnSchema[]
```

Goal Read Fee Schedules Projections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$goal_ref = PF00000000B5046; // string

try {
    $result = $apiInstance->goalReadFeeSchedulesProjections($client_ref, $goal_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->goalReadFeeSchedulesProjections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **goal_ref** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PortfolioFeeProjectionReturnSchema[]**](../Model/PortfolioFeeProjectionReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadUpdate()`

```php
leadUpdate($client_ref, $client_lead_update_schema): \OpenAPI\Client\Model\ClientReturnSchema
```

Lead Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$client_lead_update_schema = new \OpenAPI\Client\Model\ClientLeadUpdateSchema(); // \OpenAPI\Client\Model\ClientLeadUpdateSchema

try {
    $result = $apiInstance->leadUpdate($client_ref, $client_lead_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->leadUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **client_lead_update_schema** | [**\OpenAPI\Client\Model\ClientLeadUpdateSchema**](../Model/ClientLeadUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClientReturnSchema**](../Model/ClientReturnSchema.md)

### Authorization

[OAuth2PasswordBearerCookie](../../README.md#OAuth2PasswordBearerCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAssociatedClient()`

```php
removeAssociatedClient($client_ref, $association_id)
```

Remove Associated Client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearerCookie
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_ref = C000000000B5567; // string
$association_id = 0; // int

try {
    $apiInstance->removeAssociatedClient($client_ref, $association_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->removeAssociatedClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_ref** | **string**|  | |
| **association_id** | **int**|  | |

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
