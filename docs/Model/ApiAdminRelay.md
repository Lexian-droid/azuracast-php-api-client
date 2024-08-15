# # ApiAdminRelay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Station ID | [optional]
**name** | **string** | Station name | [optional]
**shortcode** | **string** | Station \&quot;short code\&quot;, used for URL and folder paths | [optional]
**description** | **string** | Station description | [optional]
**url** | **string** | Station homepage URL | [optional]
**genre** | **string** | The genre of the station | [optional]
**type** | **string** | Which broadcasting software (frontend) the station uses | [optional]
**port** | **int** | The port used by this station to serve its broadcasts. | [optional]
**relayPw** | **string** | The relay password for the frontend (if applicable). | [optional]
**adminPw** | **string** | The administrator password for the frontend (if applicable). | [optional]
**mounts** | [**\AzuraCast\Model\ApiNowPlayingStationMount[]**](ApiNowPlayingStationMount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
