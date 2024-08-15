# AzuraCast\MiscellaneousApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStatus()**](MiscellaneousApi.md#getStatus) | **GET** /status |  |
| [**getTime()**](MiscellaneousApi.md#getTime) | **GET** /time |  |


## `getStatus()`

```php
getStatus(): \AzuraCast\Model\ApiSystemStatus
```



Returns an affirmative response if the API is active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\ApiSystemStatus**](../Model/ApiSystemStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTime()`

```php
getTime(): \AzuraCast\Model\ApiTime
```



Returns the time (with formatting) in GMT and the user's local time zone, if logged in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\ApiTime**](../Model/ApiTime.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
