# # ApiDetailedSongHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sh_id** | **int** | Song history unique identifier | [optional]
**played_at** | **int** | UNIX timestamp when playback started. | [optional]
**duration** | **int** | Duration of the song in seconds | [optional]
**playlist** | **string** | Indicates the playlist that the song was played from, if available, or empty string if not. | [optional]
**streamer** | **string** | Indicates the current streamer that was connected, if available, or empty string if not. | [optional]
**is_request** | **bool** | Indicates whether the song is a listener request. | [optional]
**song** | [**\AzuraCast\Model\ApiSong**](ApiSong.md) |  | [optional]
**listeners_start** | **int** | Number of listeners when the song playback started. | [optional]
**listeners_end** | **int** | Number of listeners when song playback ended. | [optional]
**delta_total** | **int** | The sum total change of listeners between the song&#39;s start and ending. | [optional]
**is_visible** | **bool** | Whether the entry is visible on public playlists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
