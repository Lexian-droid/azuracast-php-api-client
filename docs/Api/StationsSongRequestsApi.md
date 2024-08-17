# AzuraCast\StationsSongRequestsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRequestableSongs()**](StationsSongRequestsApi.md#getRequestableSongs) | **GET** /station/{station_id}/requests |  |
| [**submitSongRequest()**](StationsSongRequestsApi.md#submitSongRequest) | **POST** /station/{station_id}/request/{request_id} |  |


## `getRequestableSongs()`

```php
getRequestableSongs($station_id): \AzuraCast\Model\ApiStationRequest[]
```



Return a list of requestable songs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\StationsSongRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getRequestableSongs($station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSongRequestsApi->getRequestableSongs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\ApiStationRequest[]**](../Model/ApiStationRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitSongRequest()`

```php
submitSongRequest($station_id, $request_id): \AzuraCast\Model\ApiStatus
```



Submit a song request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\StationsSongRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$request_id = 'request_id_example'; // string | The requestable song ID

try {
    $result = $apiInstance->submitSongRequest($station_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSongRequestsApi->submitSongRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **request_id** | **string**| The requestable song ID | |

### Return type

[**\AzuraCast\Model\ApiStatus**](../Model/ApiStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
