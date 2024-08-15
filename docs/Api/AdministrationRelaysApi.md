# AzuraCast\AdministrationRelaysApi

All URIs are relative to https://demo.azuracast.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**internalGetRelayDetails()**](AdministrationRelaysApi.md#internalGetRelayDetails) | **GET** /internal/relays |  |


## `internalGetRelayDetails()`

```php
internalGetRelayDetails(): \AzuraCast\Model\ApiAdminRelay[]
```



Returns all necessary information to relay all 'relayable' stations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AzuraCast\Api\AdministrationRelaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->internalGetRelayDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationRelaysApi->internalGetRelayDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AzuraCast\Model\ApiAdminRelay[]**](../Model/ApiAdminRelay.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
