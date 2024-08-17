# AzuraCast\AdministrationStorageLocationsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addStorageLocation()**](AdministrationStorageLocationsApi.md#addStorageLocation) | **POST** /admin/storage_locations |  |
| [**deleteStorageLocation()**](AdministrationStorageLocationsApi.md#deleteStorageLocation) | **DELETE** /admin/storage_location/{id} |  |
| [**editStorageLocation()**](AdministrationStorageLocationsApi.md#editStorageLocation) | **PUT** /admin/storage_location/{id} |  |
| [**getStorageLocation()**](AdministrationStorageLocationsApi.md#getStorageLocation) | **GET** /admin/storage_location/{id} |  |
| [**getStorageLocations()**](AdministrationStorageLocationsApi.md#getStorageLocations) | **GET** /admin/storage_locations |  |


## `addStorageLocation()`

```php
addStorageLocation($api_admin_storage_location): \AzuraCast\Model\ApiAdminStorageLocation
```



Create a new storage location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStorageLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_admin_storage_location = new \AzuraCast\Model\ApiAdminStorageLocation(); // \AzuraCast\Model\ApiAdminStorageLocation

try {
    $result = $apiInstance->addStorageLocation($api_admin_storage_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStorageLocationsApi->addStorageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_admin_storage_location** | [**\AzuraCast\Model\ApiAdminStorageLocation**](../Model/ApiAdminStorageLocation.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\ApiAdminStorageLocation**](../Model/ApiAdminStorageLocation.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStorageLocation()`

```php
deleteStorageLocation($id): \AzuraCast\Model\ApiStatus
```



Delete a single storage location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStorageLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Storage Location ID

try {
    $result = $apiInstance->deleteStorageLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStorageLocationsApi->deleteStorageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Storage Location ID | |

### Return type

[**\AzuraCast\Model\ApiStatus**](../Model/ApiStatus.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editStorageLocation()`

```php
editStorageLocation($id, $api_admin_storage_location): \AzuraCast\Model\ApiStatus
```



Update details of a single storage location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStorageLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Storage Location ID
$api_admin_storage_location = new \AzuraCast\Model\ApiAdminStorageLocation(); // \AzuraCast\Model\ApiAdminStorageLocation

try {
    $result = $apiInstance->editStorageLocation($id, $api_admin_storage_location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStorageLocationsApi->editStorageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Storage Location ID | |
| **api_admin_storage_location** | [**\AzuraCast\Model\ApiAdminStorageLocation**](../Model/ApiAdminStorageLocation.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\ApiStatus**](../Model/ApiStatus.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStorageLocation()`

```php
getStorageLocation($id): \AzuraCast\Model\ApiAdminStorageLocation
```



Retrieve details for a single storage location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStorageLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User ID

try {
    $result = $apiInstance->getStorageLocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStorageLocationsApi->getStorageLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| User ID | |

### Return type

[**\AzuraCast\Model\ApiAdminStorageLocation**](../Model/ApiAdminStorageLocation.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStorageLocations()`

```php
getStorageLocations(): \AzuraCast\Model\ApiAdminStorageLocation[]
```



List all current storage locations in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStorageLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStorageLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStorageLocationsApi->getStorageLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\ApiAdminStorageLocation[]**](../Model/ApiAdminStorageLocation.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
