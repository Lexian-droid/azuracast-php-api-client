# # ApiListener

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip** | **string** | The listener&#39;s IP address | [optional]
**user_agent** | **string** | The listener&#39;s HTTP User-Agent | [optional]
**hash** | **string** | A unique identifier for this listener/user agent (used for unique calculations). | [optional]
**mount_is_local** | **bool** | Whether the user is connected to a local mount point or a remote one. | [optional]
**mount_name** | **string** | The display name of the mount point. | [optional]
**connected_on** | **int** | UNIX timestamp that the user first connected. | [optional]
**connected_until** | **int** | UNIX timestamp that the user disconnected (or the latest timestamp if they are still connected). | [optional]
**connected_time** | **int** | Number of seconds that the user has been connected. | [optional]
**device** | [**\AzuraCast\Model\ApiListenerDevice**](ApiListenerDevice.md) |  | [optional]
**location** | [**\AzuraCast\Model\ApiListenerLocation**](ApiListenerLocation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
