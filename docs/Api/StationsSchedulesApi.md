# AzuraCast\StationsSchedulesApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSchedule()**](StationsSchedulesApi.md#getSchedule) | **GET** /station/{station_id}/schedule |  |


## `getSchedule()`

```php
getSchedule($stationId, $now, $rows): \AzuraCast\Model\ApiStationSchedule[]
```



Return upcoming and currently ongoing schedule entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\StationsSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$now = 'now_example'; // string | The date/time to compare schedule items to. Defaults to the current date and time.
$rows = 56; // int | The number of upcoming/ongoing schedule entries to return. Defaults to 5.

try {
    $result = $apiInstance->getSchedule($stationId, $now, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSchedulesApi->getSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **now** | **string**| The date/time to compare schedule items to. Defaults to the current date and time. | [optional] |
| **rows** | **int**| The number of upcoming/ongoing schedule entries to return. Defaults to 5. | [optional] |

### Return type

[**\AzuraCast\Model\ApiStationSchedule[]**](../Model/ApiStationSchedule.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
