# AzuraCast\StationsHistoryApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStationHistory()**](StationsHistoryApi.md#getStationHistory) | **GET** /station/{station_id}/history |  |


## `getStationHistory()`

```php
getStationHistory($station_id, $start, $end): \AzuraCast\Model\ApiDetailedSongHistory[]
```



Return song playback history items for a given station.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$start = 'start_example'; // string | The start date for records, in PHP-supported date/time format. (https://www.php.net/manual/en/datetime.formats.php)
$end = 'end_example'; // string | The end date for records, in PHP-supported date/time format. (https://www.php.net/manual/en/datetime.formats.php)

try {
    $result = $apiInstance->getStationHistory($station_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsHistoryApi->getStationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **start** | **string**| The start date for records, in PHP-supported date/time format. (https://www.php.net/manual/en/datetime.formats.php) | [optional] |
| **end** | **string**| The end date for records, in PHP-supported date/time format. (https://www.php.net/manual/en/datetime.formats.php) | [optional] |

### Return type

[**\AzuraCast\Model\ApiDetailedSongHistory[]**](../Model/ApiDetailedSongHistory.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
