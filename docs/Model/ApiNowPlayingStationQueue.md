# # ApiNowPlayingStationQueue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cuedAt** | **int** | UNIX timestamp when the AutoDJ is expected to queue the song for playback. | [optional]
**playedAt** | **int** | UNIX timestamp when playback is expected to start. | [optional]
**duration** | **int** | Duration of the song in seconds | [optional]
**playlist** | **string** | Indicates the playlist that the song was played from, if available, or empty string if not. | [optional]
**isRequest** | **bool** | Indicates whether the song is a listener request. | [optional]
**song** | [**\AzuraCast\Model\ApiSong**](ApiSong.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
