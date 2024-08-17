# AzuraCast\StationsPodcastsApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addEpisode()**](StationsPodcastsApi.md#addEpisode) | **POST** /station/{station_id}/podcast/{podcast_id}/episodes |  |
| [**addPodcast()**](StationsPodcastsApi.md#addPodcast) | **POST** /station/{station_id}/podcasts |  |
| [**deleteEpisode()**](StationsPodcastsApi.md#deleteEpisode) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{id} |  |
| [**deletePodcast()**](StationsPodcastsApi.md#deletePodcast) | **DELETE** /station/{station_id}/podcast/{id} |  |
| [**deletePodcastArt()**](StationsPodcastsApi.md#deletePodcastArt) | **DELETE** /station/{station_id}/podcast/{podcast_id}/art |  |
| [**deletePodcastEpisodeArt()**](StationsPodcastsApi.md#deletePodcastEpisodeArt) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art |  |
| [**deletePodcastEpisodeMedia()**](StationsPodcastsApi.md#deletePodcastEpisodeMedia) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media |  |
| [**editEpisode()**](StationsPodcastsApi.md#editEpisode) | **PUT** /station/{station_id}/podcast/{podcast_id}/episode/{id} |  |
| [**editPodcast()**](StationsPodcastsApi.md#editPodcast) | **PUT** /station/{station_id}/podcast/{id} |  |
| [**getEpisode()**](StationsPodcastsApi.md#getEpisode) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{id} |  |
| [**getEpisodes()**](StationsPodcastsApi.md#getEpisodes) | **GET** /station/{station_id}/podcast/{podcast_id}/episodes |  |
| [**getPodcast()**](StationsPodcastsApi.md#getPodcast) | **GET** /station/{station_id}/podcast/{id} |  |
| [**getPodcastArt()**](StationsPodcastsApi.md#getPodcastArt) | **GET** /station/{station_id}/podcast/{podcast_id}/art |  |
| [**getPodcastEpisodeArt()**](StationsPodcastsApi.md#getPodcastEpisodeArt) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art |  |
| [**getPodcastEpisodeMedia()**](StationsPodcastsApi.md#getPodcastEpisodeMedia) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media |  |
| [**getPodcasts()**](StationsPodcastsApi.md#getPodcasts) | **GET** /station/{station_id}/podcasts |  |
| [**postPodcastArt()**](StationsPodcastsApi.md#postPodcastArt) | **POST** /station/{station_id}/podcast/{podcast_id}/art |  |
| [**postPodcastEpisodeArt()**](StationsPodcastsApi.md#postPodcastEpisodeArt) | **POST** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art |  |
| [**postPodcastEpisodeMedia()**](StationsPodcastsApi.md#postPodcastEpisodeMedia) | **POST** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media |  |


## `addEpisode()`

```php
addEpisode($station_id, $podcast_id, $api_podcast_episode): \AzuraCast\Model\ApiPodcastEpisode
```



Create a new podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$api_podcast_episode = new \AzuraCast\Model\ApiPodcastEpisode(); // \AzuraCast\Model\ApiPodcastEpisode

try {
    $result = $apiInstance->addEpisode($station_id, $podcast_id, $api_podcast_episode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->addEpisode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **api_podcast_episode** | [**\AzuraCast\Model\ApiPodcastEpisode**](../Model/ApiPodcastEpisode.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\ApiPodcastEpisode**](../Model/ApiPodcastEpisode.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPodcast()`

```php
addPodcast($station_id, $api_podcast): \AzuraCast\Model\ApiPodcast
```



Create a new podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$api_podcast = new \AzuraCast\Model\ApiPodcast(); // \AzuraCast\Model\ApiPodcast

try {
    $result = $apiInstance->addPodcast($station_id, $api_podcast);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->addPodcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **api_podcast** | [**\AzuraCast\Model\ApiPodcast**](../Model/ApiPodcast.md)|  | [optional] |

### Return type

[**\AzuraCast\Model\ApiPodcast**](../Model/ApiPodcast.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEpisode()`

```php
deleteEpisode($station_id, $podcast_id, $id): \AzuraCast\Model\ApiStatus
```



Delete a single podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$id = 'id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->deleteEpisode($station_id, $podcast_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->deleteEpisode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **id** | **string**| Podcast Episode ID | |

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

## `deletePodcast()`

```php
deletePodcast($station_id, $id): \AzuraCast\Model\ApiStatus
```



Delete a single podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 'id_example'; // string | Podcast ID

try {
    $result = $apiInstance->deletePodcast($station_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->deletePodcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **string**| Podcast ID | |

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

## `deletePodcastArt()`

```php
deletePodcastArt($station_id, $podcast_id): \AzuraCast\Model\ApiStatus
```



Removes the album art for a podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID

try {
    $result = $apiInstance->deletePodcastArt($station_id, $podcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->deletePodcastArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |

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

## `deletePodcastEpisodeArt()`

```php
deletePodcastEpisodeArt($station_id, $podcast_id, $episode_id): \AzuraCast\Model\ApiStatus
```



Removes the album art for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->deletePodcastEpisodeArt($station_id, $podcast_id, $episode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->deletePodcastEpisodeArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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

## `deletePodcastEpisodeMedia()`

```php
deletePodcastEpisodeMedia($station_id, $podcast_id, $episode_id): \AzuraCast\Model\ApiStatus
```



Removes the media for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->deletePodcastEpisodeMedia($station_id, $podcast_id, $episode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->deletePodcastEpisodeMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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

## `editEpisode()`

```php
editEpisode($station_id, $podcast_id, $id, $api_podcast_episode): \AzuraCast\Model\ApiStatus
```



Update details of a single podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$id = 'id_example'; // string | Podcast Episode ID
$api_podcast_episode = new \AzuraCast\Model\ApiPodcastEpisode(); // \AzuraCast\Model\ApiPodcastEpisode

try {
    $result = $apiInstance->editEpisode($station_id, $podcast_id, $id, $api_podcast_episode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->editEpisode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **id** | **string**| Podcast Episode ID | |
| **api_podcast_episode** | [**\AzuraCast\Model\ApiPodcastEpisode**](../Model/ApiPodcastEpisode.md)|  | [optional] |

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

## `editPodcast()`

```php
editPodcast($station_id, $id, $api_podcast): \AzuraCast\Model\ApiStatus
```



Update details of a single podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 'id_example'; // string | Podcast ID
$api_podcast = new \AzuraCast\Model\ApiPodcast(); // \AzuraCast\Model\ApiPodcast

try {
    $result = $apiInstance->editPodcast($station_id, $id, $api_podcast);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->editPodcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **string**| Podcast ID | |
| **api_podcast** | [**\AzuraCast\Model\ApiPodcast**](../Model/ApiPodcast.md)|  | [optional] |

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

## `getEpisode()`

```php
getEpisode($station_id, $podcast_id, $id): \AzuraCast\Model\ApiPodcastEpisode
```



Retrieve details for a single podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$id = 'id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->getEpisode($station_id, $podcast_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getEpisode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **id** | **string**| Podcast Episode ID | |

### Return type

[**\AzuraCast\Model\ApiPodcastEpisode**](../Model/ApiPodcastEpisode.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEpisodes()`

```php
getEpisodes($station_id, $podcast_id): \AzuraCast\Model\ApiPodcastEpisode[]
```



List all current episodes for a given podcast ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID

try {
    $result = $apiInstance->getEpisodes($station_id, $podcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getEpisodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |

### Return type

[**\AzuraCast\Model\ApiPodcastEpisode[]**](../Model/ApiPodcastEpisode.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPodcast()`

```php
getPodcast($station_id, $id): \AzuraCast\Model\ApiPodcast
```



Retrieve details for a single podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$id = 'id_example'; // string | Podcast ID

try {
    $result = $apiInstance->getPodcast($station_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getPodcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **id** | **string**| Podcast ID | |

### Return type

[**\AzuraCast\Model\ApiPodcast**](../Model/ApiPodcast.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPodcastArt()`

```php
getPodcastArt($station_id, $podcast_id)
```



Gets the album art for a podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID

try {
    $apiInstance->getPodcastArt($station_id, $podcast_id);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getPodcastArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |

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

## `getPodcastEpisodeArt()`

```php
getPodcastEpisodeArt($station_id, $podcast_id, $episode_id)
```



Gets the album art for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $apiInstance->getPodcastEpisodeArt($station_id, $podcast_id, $episode_id);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getPodcastEpisodeArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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

## `getPodcastEpisodeMedia()`

```php
getPodcastEpisodeMedia($station_id, $podcast_id, $episode_id)
```



Gets the media for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $apiInstance->getPodcastEpisodeMedia($station_id, $podcast_id, $episode_id);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getPodcastEpisodeMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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

## `getPodcasts()`

```php
getPodcasts($station_id): \AzuraCast\Model\ApiPodcast[]
```



List all current podcasts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter

try {
    $result = $apiInstance->getPodcasts($station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->getPodcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |

### Return type

[**\AzuraCast\Model\ApiPodcast[]**](../Model/ApiPodcast.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPodcastArt()`

```php
postPodcastArt($station_id, $podcast_id): \AzuraCast\Model\ApiStatus
```



Sets the album art for a podcast.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID

try {
    $result = $apiInstance->postPodcastArt($station_id, $podcast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->postPodcastArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |

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

## `postPodcastEpisodeArt()`

```php
postPodcastEpisodeArt($station_id, $podcast_id, $episode_id): \AzuraCast\Model\ApiStatus
```



Sets the album art for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->postPodcastEpisodeArt($station_id, $podcast_id, $episode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->postPodcastEpisodeArt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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

## `postPodcastEpisodeMedia()`

```php
postPodcastEpisodeMedia($station_id, $podcast_id, $episode_id): \AzuraCast\Model\ApiStatus
```



Sets the media for a podcast episode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\StationsPodcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station_id = new \AzuraCast\Model\GetStationNowPlayingStationIdParameter(); // GetStationNowPlayingStationIdParameter
$podcast_id = 'podcast_id_example'; // string | Podcast ID
$episode_id = 'episode_id_example'; // string | Podcast Episode ID

try {
    $result = $apiInstance->postPodcastEpisodeMedia($station_id, $podcast_id, $episode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsPodcastsApi->postPodcastEpisodeMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **station_id** | [**GetStationNowPlayingStationIdParameter**](../Model/.md)|  | |
| **podcast_id** | **string**| Podcast ID | |
| **episode_id** | **string**| Podcast Episode ID | |

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
