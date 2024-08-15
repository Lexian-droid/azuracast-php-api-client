# # ApiNowPlayingStationMount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Mount/Remote ID number. | [optional]
**name** | **string** | Mount point name/URL | [optional]
**url** | **mixed** | Full listening URL specific to this mount | [optional]
**bitrate** | **int** | Bitrate (kbps) of the broadcasted audio (if known) | [optional]
**format** | **string** | Audio encoding format of broadcasted audio (if known) | [optional]
**listeners** | [**\AzuraCast\Model\ApiNowPlayingListeners**](ApiNowPlayingListeners.md) |  | [optional]
**path** | **string** | The relative path that corresponds to this mount point | [optional]
**isDefault** | **bool** | If the mount is the default mount for the parent station | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
