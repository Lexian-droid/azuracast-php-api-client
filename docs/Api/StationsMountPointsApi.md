# AzuraCast\StationsMountPointsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMount()**](StationsMountPointsApi.md#addMount) | **POST** /station/{station_id}/mounts |  |
| [**deleteMount()**](StationsMountPointsApi.md#deleteMount) | **DELETE** /station/{station_id}/mount/{id} |  |
| [**deleteMountIntro()**](StationsMountPointsApi.md#deleteMountIntro) | **DELETE** /station/{station_id}/mount/{id}/intro |  |
| [**editMount()**](StationsMountPointsApi.md#editMount) | **PUT** /station/{station_id}/mount/{id} |  |
| [**getMount()**](StationsMountPointsApi.md#getMount) | **GET** /station/{station_id}/mount/{id} |  |
| [**getMountIntro()**](StationsMountPointsApi.md#getMountIntro) | **GET** /station/{station_id}/mount/{id}/intro |  |
| [**getStationMounts()**](StationsMountPointsApi.md#getStationMounts) | **GET** /station/{station_id}/mounts |  |
| [**postMountIntro()**](StationsMountPointsApi.md#postMountIntro) | **POST** /station/{station_id}/mount/{id}/intro |  |


## `addMount()`

```php
addMount($stationId, $stationMount): \AzuraCast\Model\StationMount
```



Create a new mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$stationMount = new \AzuraCast\Model\StationMount(); // \AzuraCast\Model\StationMount

try {
    $result = $apiInstance->addMount($stationId, $stationMount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->addMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **stationMount** | [**\AzuraCast\Model\StationMount**](../Model/StationMount.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\StationMount**](../Model/StationMount.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMount()`

```php
deleteMount($stationId, $id): \AzuraCast\Model\ApiStatus
```



Delete a single mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | StationMount ID

try {
    $result = $apiInstance->deleteMount($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->deleteMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| StationMount ID | |

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

## `deleteMountIntro()`

```php
deleteMountIntro($stationId, $id): \AzuraCast\Model\ApiStatus
```



Removes the intro track for a mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Mount Point ID

try {
    $result = $apiInstance->deleteMountIntro($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->deleteMountIntro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Mount Point ID | |

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

## `editMount()`

```php
editMount($stationId, $id, $stationMount): \AzuraCast\Model\ApiStatus
```



Update details of a single mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Streamer ID
$stationMount = new \AzuraCast\Model\StationMount(); // \AzuraCast\Model\StationMount

try {
    $result = $apiInstance->editMount($stationId, $id, $stationMount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->editMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Streamer ID | |
| **stationMount** | [**\AzuraCast\Model\StationMount**](../Model/StationMount.md)|  | [optional] |

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

## `getMount()`

```php
getMount($stationId, $id): \AzuraCast\Model\StationMount
```



Retrieve details for a single mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Streamer ID

try {
    $result = $apiInstance->getMount($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->getMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Streamer ID | |

### Return type

[**\AzuraCast\Model\StationMount**](../Model/StationMount.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMountIntro()`

```php
getMountIntro($stationId, $id)
```



Get the intro track for a mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Mount Point ID

try {
    $apiInstance->getMountIntro($stationId, $id);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->getMountIntro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Mount Point ID | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStationMounts()`

```php
getStationMounts($stationId): \AzuraCast\Model\StationMount[]
```



List all current mount points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getStationMounts($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->getStationMounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\StationMount[]**](../Model/StationMount.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMountIntro()`

```php
postMountIntro($stationId, $id): \AzuraCast\Model\ApiStatus
```



Update the intro track for a mount point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMountPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Mount Point ID

try {
    $result = $apiInstance->postMountIntro($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMountPointsApi->postMountIntro: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Mount Point ID | |

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
