# # ApiDetailedSongHistory

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
**listenersStart** | **int** | Number of listeners when the song playback started. | [optional]
**listenersEnd** | **int** | Number of listeners when song playback ended. | [optional]
**deltaTotal** | **int** | The sum total change of listeners between the song&#39;s start and ending. | [optional]
**isVisible** | **bool** | Whether the entry is visible on public playlists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
