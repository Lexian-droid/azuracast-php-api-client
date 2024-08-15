# # ApiNowPlayingNowPlaying

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shId** | **int** | Song history unique identifier | [optional]
**playedAt** | **int** | UNIX timestamp when playback started. | [optional]
**duration** | **int** | Duration of the song in seconds | [optional]
**playlist** | **string** | Indicates the playlist that the song was played from, if available, or empty string if not. | [optional]
**streamer** | **string** | Indicates the current streamer that was connected, if available, or empty string if not. | [optional]
**isRequest** | **bool** | Indicates whether the song is a listener request. | [optional]
**song** | [**\AzuraCast\Model\ApiSong**](ApiSong.md) |  | [optional]
**elapsed** | **int** | Elapsed time of the song&#39;s playback since it started. | [optional]
**remaining** | **int** | Remaining time in the song, in seconds. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
