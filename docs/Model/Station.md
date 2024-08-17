# # Station

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | The full display name of the station. | [optional]
**short_name** | **string** | The URL-friendly name for the station, typically auto-generated from the full station name. | [optional]
**is_enabled** | **bool** | If set to &#39;false&#39;, prevents the station from broadcasting but leaves it in the database. | [optional]
**frontend_type** | **mixed** | The frontend adapter (icecast,shoutcast,remote,etc) | [optional]
**frontend_config** | **object** | An array containing station-specific frontend configuration | [optional]
**backend_type** | **mixed** | The backend adapter (liquidsoap,etc) | [optional]
**backend_config** | **object** | An array containing station-specific backend configuration | [optional]
**description** | **string** |  | [optional]
**url** | **string** |  | [optional]
**genre** | **string** |  | [optional]
**radio_base_dir** | **string** |  | [optional]
**enable_requests** | **bool** | Whether listeners can request songs to play on this station. | [optional]
**request_delay** | **int** |  | [optional]
**request_threshold** | **int** |  | [optional]
**disconnect_deactivate_streamer** | **int** |  | [optional]
**enable_streamers** | **bool** | Whether streamers are allowed to broadcast to this station at all. | [optional]
**is_streamer_live** | **bool** | Whether a streamer is currently active on the station. | [optional]
**enable_public_page** | **bool** | Whether this station is visible as a public page and in a now-playing API response. | [optional]
**enable_on_demand** | **bool** | Whether this station has a public &#39;on-demand&#39; streaming and download page. | [optional]
**enable_on_demand_download** | **bool** | Whether the &#39;on-demand&#39; page offers download capability. | [optional]
**enable_hls** | **bool** | Whether HLS streaming is enabled. | [optional]
**api_history_items** | **int** | The number of &#39;last played&#39; history items to show for a station in API responses. | [optional]
**timezone** | **string** | The time zone that station operations should take place in. | [optional]
**branding_config** | **object** | An array containing station-specific branding configuration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
