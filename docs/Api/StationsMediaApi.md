# AzuraCast\StationsMediaApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFile()**](StationsMediaApi.md#addFile) | **POST** /station/{station_id}/files |  |
| [**deleteFile()**](StationsMediaApi.md#deleteFile) | **DELETE** /station/{station_id}/file/{id} |  |
| [**deleteMediaArt()**](StationsMediaApi.md#deleteMediaArt) | **DELETE** /station/{station_id}/art/{media_id} |  |
| [**editFile()**](StationsMediaApi.md#editFile) | **PUT** /station/{station_id}/file/{id} |  |
| [**getFile()**](StationsMediaApi.md#getFile) | **GET** /station/{station_id}/file/{id} |  |
| [**getFiles()**](StationsMediaApi.md#getFiles) | **GET** /station/{station_id}/files |  |
| [**getMediaArt()**](StationsMediaApi.md#getMediaArt) | **GET** /station/{station_id}/art/{media_id} |  |
| [**postMediaArt()**](StationsMediaApi.md#postMediaArt) | **POST** /station/{station_id}/art/{media_id} |  |


## `addFile()`

```php
addFile($stationId, $apiUploadFile): \AzuraCast\Model\ApiStationMedia
```



Upload a new file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$apiUploadFile = new \AzuraCast\Model\ApiUploadFile(); // \AzuraCast\Model\ApiUploadFile

try {
    $result = $apiInstance->addFile($stationId, $apiUploadFile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->addFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **apiUploadFile** | [**\AzuraCast\Model\ApiUploadFile**](../Model/ApiUploadFile.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\ApiStationMedia**](../Model/ApiStationMedia.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($stationId, $id): \AzuraCast\Model\ApiStatus
```



Delete a single file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Media ID

try {
    $result = $apiInstance->deleteFile($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Media ID | |

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

## `deleteMediaArt()`

```php
deleteMediaArt($stationId, $mediaId): \AzuraCast\Model\ApiStatus
```



Removes the album art for a track.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$mediaId = new \AzuraCast\Model\PostMediaArtMediaIdParameter(); // PostMediaArtMediaIdParameter | Media ID

try {
    $result = $apiInstance->deleteMediaArt($stationId, $mediaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->deleteMediaArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **mediaId** | [**PostMediaArtMediaIdParameter**](../Model/.md)| Media ID | |

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

## `editFile()`

```php
editFile($stationId, $id, $apiStationMedia): \AzuraCast\Model\ApiStatus
```



Update details of a single file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Media ID
$apiStationMedia = new \AzuraCast\Model\ApiStationMedia(); // \AzuraCast\Model\ApiStationMedia

try {
    $result = $apiInstance->editFile($stationId, $id, $apiStationMedia);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->editFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Media ID | |
| **apiStationMedia** | [**\AzuraCast\Model\ApiStationMedia**](../Model/ApiStationMedia.md)|  | [optional] |

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

## `getFile()`

```php
getFile($stationId, $id): \AzuraCast\Model\ApiStationMedia
```



Retrieve details for a single file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Media ID

try {
    $result = $apiInstance->getFile($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Media ID | |

### Return type

[**\AzuraCast\Model\ApiStationMedia**](../Model/ApiStationMedia.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiles()`

```php
getFiles($stationId): \AzuraCast\Model\ApiStationMedia[]
```



List all current uploaded files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getFiles($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\ApiStationMedia[]**](../Model/ApiStationMedia.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaArt()`

```php
getMediaArt($stationId, $mediaId)
```



Returns the album art for a song, or a generic image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$mediaId = 'mediaId_example'; // string | The station media unique ID

try {
    $apiInstance->getMediaArt($stationId, $mediaId);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->getMediaArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **mediaId** | **string**| The station media unique ID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMediaArt()`

```php
postMediaArt($stationId, $mediaId): \AzuraCast\Model\ApiStatus
```



Sets the album art for a track.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$mediaId = new \AzuraCast\Model\PostMediaArtMediaIdParameter(); // PostMediaArtMediaIdParameter | Media ID

try {
    $result = $apiInstance->postMediaArt($stationId, $mediaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsMediaApi->postMediaArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **mediaId** | [**PostMediaArtMediaIdParameter**](../Model/.md)| Media ID | |

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
