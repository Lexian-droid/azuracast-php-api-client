# # ApiNowPlayingStation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Station ID | [optional]
**name** | **string** | Station name | [optional]
**shortcode** | **string** | Station \&quot;short code\&quot;, used for URL and folder paths | [optional]
**description** | **string** | Station description | [optional]
**frontend** | **string** | Which broadcasting software (frontend) the station uses | [optional]
**backend** | **string** | Which AutoDJ software (backend) the station uses | [optional]
**timezone** | **string** | The station&#39;s IANA time zone | [optional]
**listen_url** | **mixed** | The full URL to listen to the default mount of the station | [optional]
**url** | **string** | The public URL of the station. | [optional]
**public_player_url** | **mixed** | The public player URL for the station. | [optional]
**playlist_pls_url** | **mixed** | The playlist download URL in PLS format. | [optional]
**playlist_m3u_url** | **mixed** | The playlist download URL in M3U format. | [optional]
**is_public** | **bool** | If the station is public (i.e. should be shown in listings of all stations) | [optional]
**mounts** | [**\AzuraCast\Model\ApiNowPlayingStationMount[]**](ApiNowPlayingStationMount.md) |  | [optional]
**remotes** | [**\AzuraCast\Model\ApiNowPlayingStationRemote[]**](ApiNowPlayingStationRemote.md) |  | [optional]
**hls_enabled** | **bool** | If the station has HLS streaming enabled. | [optional]
**hls_is_default** | **bool** | If the HLS stream should be the default one for the station. | [optional]
**hls_url** | **mixed** | The full URL to listen to the HLS stream for the station. | [optional]
**hls_listeners** | **int** | HLS Listeners | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
