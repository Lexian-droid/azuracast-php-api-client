# AzuraCast\StationsSFTPUsersApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addSftpUser()**](StationsSFTPUsersApi.md#addSftpUser) | **POST** /station/{station_id}/sftp-users |  |
| [**deleteSftpUser()**](StationsSFTPUsersApi.md#deleteSftpUser) | **DELETE** /station/{station_id}/sftp-user/{id} |  |
| [**editSftpUser()**](StationsSFTPUsersApi.md#editSftpUser) | **PUT** /station/{station_id}/sftp-user/{id} |  |
| [**getSftpUser()**](StationsSFTPUsersApi.md#getSftpUser) | **GET** /station/{station_id}/sftp-user/{id} |  |
| [**getSftpUsers()**](StationsSFTPUsersApi.md#getSftpUsers) | **GET** /station/{station_id}/sftp-users |  |


## `addSftpUser()`

```php
addSftpUser($stationId, $sftpUser): \AzuraCast\Model\SftpUser
```



Create a new SFTP user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsSFTPUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$sftpUser = new \AzuraCast\Model\SftpUser(); // \AzuraCast\Model\SftpUser

try {
    $result = $apiInstance->addSftpUser($stationId, $sftpUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSFTPUsersApi->addSftpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **sftpUser** | [**\AzuraCast\Model\SftpUser**](../Model/SftpUser.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\SftpUser**](../Model/SftpUser.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSftpUser()`

```php
deleteSftpUser($stationId, $id): \AzuraCast\Model\ApiStatus
```



Delete a single remote relay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsSFTPUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Remote Relay ID

try {
    $result = $apiInstance->deleteSftpUser($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSFTPUsersApi->deleteSftpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Remote Relay ID | |

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

## `editSftpUser()`

```php
editSftpUser($stationId, $id, $sftpUser): \AzuraCast\Model\ApiStatus
```



Update details of a single SFTP user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsSFTPUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | Remote Relay ID
$sftpUser = new \AzuraCast\Model\SftpUser(); // \AzuraCast\Model\SftpUser

try {
    $result = $apiInstance->editSftpUser($stationId, $id, $sftpUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSFTPUsersApi->editSftpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| Remote Relay ID | |
| **sftpUser** | [**\AzuraCast\Model\SftpUser**](../Model/SftpUser.md)|  | [optional] |

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

## `getSftpUser()`

```php
getSftpUser($stationId, $id): \AzuraCast\Model\SftpUser
```



Retrieve details for a single SFTP user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsSFTPUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 56; // int | SFTP User ID

try {
    $result = $apiInstance->getSftpUser($stationId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSFTPUsersApi->getSftpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **int**| SFTP User ID | |

### Return type

[**\AzuraCast\Model\SftpUser**](../Model/SftpUser.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSftpUsers()`

```php
getSftpUsers($stationId): \AzuraCast\Model\SftpUser[]
```



List all current SFTP users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsSFTPUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getSftpUsers($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsSFTPUsersApi->getSftpUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stationId** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\SftpUser[]**](../Model/SftpUser.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
