# # Station

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | The full display name of the station. | [optional]
**shortName** | **string** | The URL-friendly name for the station, typically auto-generated from the full station name. | [optional]
**isEnabled** | **bool** | If set to &#39;false&#39;, prevents the station from broadcasting but leaves it in the database. | [optional]
**frontendType** | **mixed** | The frontend adapter (icecast,shoutcast,remote,etc) | [optional]
**frontendConfig** | **object** | An array containing station-specific frontend configuration | [optional]
**backendType** | **mixed** | The backend adapter (liquidsoap,etc) | [optional]
**backendConfig** | **object** | An array containing station-specific backend configuration | [optional]
**description** | **string** |  | [optional]
**url** | **string** |  | [optional]
**genre** | **string** |  | [optional]
**radioBaseDir** | **string** |  | [optional]
**enableRequests** | **bool** | Whether listeners can request songs to play on this station. | [optional]
**requestDelay** | **int** |  | [optional]
**requestThreshold** | **int** |  | [optional]
**disconnectDeactivateStreamer** | **int** |  | [optional]
**enableStreamers** | **bool** | Whether streamers are allowed to broadcast to this station at all. | [optional]
**isStreamerLive** | **bool** | Whether a streamer is currently active on the station. | [optional]
**enablePublicPage** | **bool** | Whether this station is visible as a public page and in a now-playing API response. | [optional]
**enableOnDemand** | **bool** | Whether this station has a public &#39;on-demand&#39; streaming and download page. | [optional]
**enableOnDemandDownload** | **bool** | Whether the &#39;on-demand&#39; page offers download capability. | [optional]
**enableHls** | **bool** | Whether HLS streaming is enabled. | [optional]
**apiHistoryItems** | **int** | The number of &#39;last played&#39; history items to show for a station in API responses. | [optional]
**timezone** | **string** | The time zone that station operations should take place in. | [optional]
**brandingConfig** | **object** | An array containing station-specific branding configuration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
