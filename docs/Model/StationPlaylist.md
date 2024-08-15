# # StationPlaylist

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**type** | **mixed** |  | [optional]
**source** | **mixed** |  | [optional]
**order** | **mixed** |  | [optional]
**remoteUrl** | **string** |  | [optional]
**remoteType** | **mixed** |  | [optional]
**remoteBuffer** | **int** | The total time (in seconds) that Liquidsoap should buffer remote URL streams. | [optional]
**isEnabled** | **bool** |  | [optional]
**isJingle** | **bool** | If yes, do not send jingle metadata to AutoDJ or trigger web hooks. | [optional]
**playPerSongs** | **int** |  | [optional]
**playPerMinutes** | **int** |  | [optional]
**playPerHourMinute** | **int** |  | [optional]
**weight** | **int** |  | [optional]
**includeInRequests** | **bool** |  | [optional]
**includeInOnDemand** | **bool** | Whether this playlist&#39;s media is included in &#39;on demand&#39; download/streaming if enabled. | [optional]
**backendOptions** | **string** |  | [optional]
**avoidDuplicates** | **bool** |  | [optional]
**scheduleItems** | **mixed[]** | StationSchedule&gt; | [optional]
**podcasts** | **mixed[]** | Podcast&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
