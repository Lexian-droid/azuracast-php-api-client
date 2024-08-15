# AzuraCast\NowPlayingApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllNowPlaying()**](NowPlayingApi.md#getAllNowPlaying) | **GET** /nowplaying |  |
| [**getStationNowPlaying()**](NowPlayingApi.md#getStationNowPlaying) | **GET** /nowplaying/{station_id} |  |


## `getAllNowPlaying()`

```php
getAllNowPlaying(): \AzuraCast\Model\ApiNowPlaying[]
```



Returns a full summary of all stations' current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\NowPlayingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllNowPlaying();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NowPlayingApi->getAllNowPlaying: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\ApiNowPlaying[]**](../Model/ApiNowPlaying.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStationNowPlaying()`

```php
getStationNowPlaying($stationId): \AzuraCast\Model\ApiNowPlaying
```



Returns a full summary of the specified station's current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\NowPlayingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getStationNowPlaying($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NowPlayingApi->getStationNowPlaying: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\ApiNowPlaying**](../Model/ApiNowPlaying.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
