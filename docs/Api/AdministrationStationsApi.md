# AzuraCast\AdministrationStationsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminAddStation()**](AdministrationStationsApi.md#adminAddStation) | **POST** /admin/stations |  |
| [**adminDeleteStation()**](AdministrationStationsApi.md#adminDeleteStation) | **DELETE** /admin/station/{id} |  |
| [**adminEditStation()**](AdministrationStationsApi.md#adminEditStation) | **PUT** /admin/station/{id} |  |
| [**adminGetStation()**](AdministrationStationsApi.md#adminGetStation) | **GET** /admin/station/{id} |  |
| [**adminGetStations()**](AdministrationStationsApi.md#adminGetStations) | **GET** /admin/stations |  |


## `adminAddStation()`

```php
adminAddStation($station): \AzuraCast\Model\Station
```



Create a new station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station = new \AzuraCast\Model\Station(); // \AzuraCast\Model\Station

try {
    $result = $apiInstance->adminAddStation($station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStationsApi->adminAddStation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station** | [**\AzuraCast\Model\Station**](../Model/Station.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\Station**](../Model/Station.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteStation()`

```php
adminDeleteStation($id): \AzuraCast\Model\ApiStatus
```



Delete a single station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $result = $apiInstance->adminDeleteStation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStationsApi->adminDeleteStation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |

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

## `adminEditStation()`

```php
adminEditStation($id, $station): \AzuraCast\Model\ApiStatus
```



Update details of a single station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$station = new \AzuraCast\Model\Station(); // \AzuraCast\Model\Station

try {
    $result = $apiInstance->adminEditStation($id, $station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStationsApi->adminEditStation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **station** | [**\AzuraCast\Model\Station**](../Model/Station.md)|  | [optional] |

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

## `adminGetStation()`

```php
adminGetStation($id): \AzuraCast\Model\Station
```



Retrieve details for a single station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $result = $apiInstance->adminGetStation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStationsApi->adminGetStation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |

### Return type

[**\AzuraCast\Model\Station**](../Model/Station.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetStations()`

```php
adminGetStations(): \AzuraCast\Model\Station[]
```



List all current stations in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationStationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminGetStations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationStationsApi->adminGetStations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\Station[]**](../Model/Station.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
