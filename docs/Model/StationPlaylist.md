# # StationPlaylist

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**type** | **mixed** |  | [optional]
**source** | **mixed** |  | [optional]
**order** | **mixed** |  | [optional]
**remote_url** | **string** |  | [optional]
**remote_type** | **mixed** |  | [optional]
**remote_buffer** | **int** | The total time (in seconds) that Liquidsoap should buffer remote URL streams. | [optional]
**is_enabled** | **bool** |  | [optional]
**is_jingle** | **bool** | If yes, do not send jingle metadata to AutoDJ or trigger web hooks. | [optional]
**play_per_songs** | **int** |  | [optional]
**play_per_minutes** | **int** |  | [optional]
**play_per_hour_minute** | **int** |  | [optional]
**weight** | **int** |  | [optional]
**include_in_requests** | **bool** |  | [optional]
**include_in_on_demand** | **bool** | Whether this playlist&#39;s media is included in &#39;on demand&#39; download/streaming if enabled. | [optional]
**backend_options** | **string** |  | [optional]
**avoid_duplicates** | **bool** |  | [optional]
**schedule_items** | **mixed[]** | StationSchedule&gt; | [optional]
**podcasts** | **mixed[]** | Podcast&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
