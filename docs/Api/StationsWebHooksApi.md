# AzuraCast\StationsWebHooksApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWebhook()**](StationsWebHooksApi.md#addWebhook) | **POST** /station/{station_id}/webhooks |  |
| [**deleteWebhook()**](StationsWebHooksApi.md#deleteWebhook) | **DELETE** /station/{station_id}/webhook/{id} |  |
| [**editWebhook()**](StationsWebHooksApi.md#editWebhook) | **PUT** /station/{station_id}/webhook/{id} |  |
| [**getWebhook()**](StationsWebHooksApi.md#getWebhook) | **GET** /station/{station_id}/webhook/{id} |  |
| [**getWebhooks()**](StationsWebHooksApi.md#getWebhooks) | **GET** /station/{station_id}/webhooks |  |


## `addWebhook()`

```php
addWebhook($stationId, $stationWebhook): \AzuraCast\Model\StationWebhook
```



Create a new web hook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$stationWebhook = new \AzuraCast\Model\StationWebhook(); // \AzuraCast\Model\StationWebhook

try {
    $result = $apiInstance->addWebhook($stationId, $stationWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsWebHooksApi->addWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **stationWebhook** | [**\AzuraCast\Model\StationWebhook**](../Model/StationWebhook.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\StationWebhook**](../Model/StationWebhook.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($stationId, $id): \AzuraCast\Model\ApiStatus
```



Delete a single web hook relay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Web Hook ID

try {
    $result = $apiInstance->deleteWebhook($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsWebHooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Web Hook ID | |

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

## `editWebhook()`

```php
editWebhook($stationId, $id, $stationWebhook): \AzuraCast\Model\ApiStatus
```



Update details of a single web hook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Web Hook ID
$stationWebhook = new \AzuraCast\Model\StationWebhook(); // \AzuraCast\Model\StationWebhook

try {
    $result = $apiInstance->editWebhook($stationId, $id, $stationWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsWebHooksApi->editWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Web Hook ID | |
| **stationWebhook** | [**\AzuraCast\Model\StationWebhook**](../Model/StationWebhook.md)|  | [optional] |

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

## `getWebhook()`

```php
getWebhook($stationId, $id): \AzuraCast\Model\StationWebhook
```



Retrieve details for a single web hook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Web Hook ID

try {
    $result = $apiInstance->getWebhook($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsWebHooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Web Hook ID | |

### Return type

[**\AzuraCast\Model\StationWebhook**](../Model/StationWebhook.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($stationId): \AzuraCast\Model\StationWebhook[]
```



List all current web hooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getWebhooks($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsWebHooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\StationWebhook[]**](../Model/StationWebhook.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
