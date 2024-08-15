# AzuraCast\StationsStreamersDJsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addStreamer()**](StationsStreamersDJsApi.md#addStreamer) | **POST** /station/{station_id}/streamers |  |
| [**deleteStreamer()**](StationsStreamersDJsApi.md#deleteStreamer) | **DELETE** /station/{station_id}/streamer/{id} |  |
| [**editStreamer()**](StationsStreamersDJsApi.md#editStreamer) | **PUT** /station/{station_id}/streamer/{id} |  |
| [**getStreamer()**](StationsStreamersDJsApi.md#getStreamer) | **GET** /station/{station_id}/streamer/{id} |  |
| [**getStreamers()**](StationsStreamersDJsApi.md#getStreamers) | **GET** /station/{station_id}/streamers |  |


## `addStreamer()`

```php
addStreamer($stationId, $stationStreamer): \AzuraCast\Model\StationStreamer
```



Create a new Streamer/DJ account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsStreamersDJsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$stationStreamer = new \AzuraCast\Model\StationStreamer(); // \AzuraCast\Model\StationStreamer

try {
    $result = $apiInstance->addStreamer($stationId, $stationStreamer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsStreamersDJsApi->addStreamer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **stationStreamer** | [**\AzuraCast\Model\StationStreamer**](../Model/StationStreamer.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\StationStreamer**](../Model/StationStreamer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStreamer()`

```php
deleteStreamer($stationId, $id): \AzuraCast\Model\ApiStatus
```



Delete a single Streamer/DJ account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsStreamersDJsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | StationStreamer ID

try {
    $result = $apiInstance->deleteStreamer($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsStreamersDJsApi->deleteStreamer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| StationStreamer ID | |

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

## `editStreamer()`

```php
editStreamer($stationId, $id, $stationStreamer): \AzuraCast\Model\ApiStatus
```



Update details of a single Streamer/DJ account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsStreamersDJsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Streamer ID
$stationStreamer = new \AzuraCast\Model\StationStreamer(); // \AzuraCast\Model\StationStreamer

try {
    $result = $apiInstance->editStreamer($stationId, $id, $stationStreamer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsStreamersDJsApi->editStreamer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Streamer ID | |
| **stationStreamer** | [**\AzuraCast\Model\StationStreamer**](../Model/StationStreamer.md)|  | [optional] |

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

## `getStreamer()`

```php
getStreamer($stationId, $id): \AzuraCast\Model\StationStreamer
```



Retrieve details for a single Streamer/DJ account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsStreamersDJsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Streamer ID

try {
    $result = $apiInstance->getStreamer($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsStreamersDJsApi->getStreamer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Streamer ID | |

### Return type

[**\AzuraCast\Model\StationStreamer**](../Model/StationStreamer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStreamers()`

```php
getStreamers($stationId): \AzuraCast\Model\StationStreamer[]
```



List all current Streamer/DJ accounts for the specified station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsStreamersDJsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getStreamers($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsStreamersDJsApi->getStreamers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\StationStreamer[]**](../Model/StationStreamer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
