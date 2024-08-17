# # ApiStationQueueDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cued_at** | **int** | UNIX timestamp when the AutoDJ is expected to queue the song for playback. | [optional]
**played_at** | **int** | UNIX timestamp when playback is expected to start. | [optional]
**duration** | **int** | Duration of the song in seconds | [optional]
**playlist** | **string** | Indicates the playlist that the song was played from, if available, or empty string if not. | [optional]
**is_request** | **bool** | Indicates whether the song is a listener request. | [optional]
**song** | [**\AzuraCast\Model\ApiSong**](ApiSong.md) |  | [optional]
**links** | **array<string,string>** |  | [optional]
**sent_to_autodj** | **bool** | Indicates whether the song has been sent to the AutoDJ. | [optional]
**is_played** | **bool** | Indicates whether the song has already been marked as played. | [optional]
**autodj_custom_uri** | **string** | Custom AutoDJ playback URI, if it exists. | [optional]
**log** | **mixed[]** | Log entries on how the specific queue item was picked by the AutoDJ. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
