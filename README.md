# Azuracast

AzuraCast is a standalone, turnkey web radio management tool. Radio stations hosted by AzuraCast expose a public API for viewing now playing data, making requests and more.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Azuracast/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AzuraCast\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new AzuraCast\Api\AdministrationCPUStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getServerStats();
} catch (Exception $e) {
    echo 'Exception when calling AdministrationCPUStatsApi->getServerStats: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.azuracast.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdministrationCPUStatsApi* | [**getServerStats**](docs/Api/AdministrationCPUStatsApi.md#getserverstats) | **GET** /admin/server/stats | 
*AdministrationCustomFieldsApi* | [**addCustomField**](docs/Api/AdministrationCustomFieldsApi.md#addcustomfield) | **POST** /admin/custom_fields | 
*AdministrationCustomFieldsApi* | [**deleteCustomField**](docs/Api/AdministrationCustomFieldsApi.md#deletecustomfield) | **DELETE** /admin/custom_field/{id} | 
*AdministrationCustomFieldsApi* | [**editCustomField**](docs/Api/AdministrationCustomFieldsApi.md#editcustomfield) | **PUT** /admin/custom_field/{id} | 
*AdministrationCustomFieldsApi* | [**getCustomField**](docs/Api/AdministrationCustomFieldsApi.md#getcustomfield) | **GET** /admin/custom_field/{id} | 
*AdministrationCustomFieldsApi* | [**getCustomFields**](docs/Api/AdministrationCustomFieldsApi.md#getcustomfields) | **GET** /admin/custom_fields | 
*AdministrationRelaysApi* | [**internalGetRelayDetails**](docs/Api/AdministrationRelaysApi.md#internalgetrelaydetails) | **GET** /internal/relays | 
*AdministrationRolesApi* | [**addRole**](docs/Api/AdministrationRolesApi.md#addrole) | **POST** /admin/roles | 
*AdministrationRolesApi* | [**deleteRole**](docs/Api/AdministrationRolesApi.md#deleterole) | **DELETE** /admin/role/{id} | 
*AdministrationRolesApi* | [**editRole**](docs/Api/AdministrationRolesApi.md#editrole) | **PUT** /admin/role/{id} | 
*AdministrationRolesApi* | [**getPermissions**](docs/Api/AdministrationRolesApi.md#getpermissions) | **GET** /admin/permissions | 
*AdministrationRolesApi* | [**getRole**](docs/Api/AdministrationRolesApi.md#getrole) | **GET** /admin/role/{id} | 
*AdministrationRolesApi* | [**getRoles**](docs/Api/AdministrationRolesApi.md#getroles) | **GET** /admin/roles | 
*AdministrationSettingsApi* | [**editSettings**](docs/Api/AdministrationSettingsApi.md#editsettings) | **PUT** /admin/settings | 
*AdministrationSettingsApi* | [**getSettings**](docs/Api/AdministrationSettingsApi.md#getsettings) | **GET** /admin/settings | 
*AdministrationStationsApi* | [**adminAddStation**](docs/Api/AdministrationStationsApi.md#adminaddstation) | **POST** /admin/stations | 
*AdministrationStationsApi* | [**adminDeleteStation**](docs/Api/AdministrationStationsApi.md#admindeletestation) | **DELETE** /admin/station/{id} | 
*AdministrationStationsApi* | [**adminEditStation**](docs/Api/AdministrationStationsApi.md#admineditstation) | **PUT** /admin/station/{id} | 
*AdministrationStationsApi* | [**adminGetStation**](docs/Api/AdministrationStationsApi.md#admingetstation) | **GET** /admin/station/{id} | 
*AdministrationStationsApi* | [**adminGetStations**](docs/Api/AdministrationStationsApi.md#admingetstations) | **GET** /admin/stations | 
*AdministrationStorageLocationsApi* | [**addStorageLocation**](docs/Api/AdministrationStorageLocationsApi.md#addstoragelocation) | **POST** /admin/storage_locations | 
*AdministrationStorageLocationsApi* | [**deleteStorageLocation**](docs/Api/AdministrationStorageLocationsApi.md#deletestoragelocation) | **DELETE** /admin/storage_location/{id} | 
*AdministrationStorageLocationsApi* | [**editStorageLocation**](docs/Api/AdministrationStorageLocationsApi.md#editstoragelocation) | **PUT** /admin/storage_location/{id} | 
*AdministrationStorageLocationsApi* | [**getStorageLocation**](docs/Api/AdministrationStorageLocationsApi.md#getstoragelocation) | **GET** /admin/storage_location/{id} | 
*AdministrationStorageLocationsApi* | [**getStorageLocations**](docs/Api/AdministrationStorageLocationsApi.md#getstoragelocations) | **GET** /admin/storage_locations | 
*AdministrationUsersApi* | [**addUser**](docs/Api/AdministrationUsersApi.md#adduser) | **POST** /admin/users | 
*AdministrationUsersApi* | [**deleteUser**](docs/Api/AdministrationUsersApi.md#deleteuser) | **DELETE** /admin/user/{id} | 
*AdministrationUsersApi* | [**editUser**](docs/Api/AdministrationUsersApi.md#edituser) | **PUT** /admin/user/{id} | 
*AdministrationUsersApi* | [**getUser**](docs/Api/AdministrationUsersApi.md#getuser) | **GET** /admin/user/{id} | 
*AdministrationUsersApi* | [**getUsers**](docs/Api/AdministrationUsersApi.md#getusers) | **GET** /admin/users | 
*MiscellaneousApi* | [**getStatus**](docs/Api/MiscellaneousApi.md#getstatus) | **GET** /status | 
*MiscellaneousApi* | [**getTime**](docs/Api/MiscellaneousApi.md#gettime) | **GET** /time | 
*NowPlayingApi* | [**getAllNowPlaying**](docs/Api/NowPlayingApi.md#getallnowplaying) | **GET** /nowplaying | 
*NowPlayingApi* | [**getStationNowPlaying**](docs/Api/NowPlayingApi.md#getstationnowplaying) | **GET** /nowplaying/{station_id} | 
*StationsBroadcastingApi* | [**deleteStereoToolConfiguration**](docs/Api/StationsBroadcastingApi.md#deletestereotoolconfiguration) | **DELETE** /station/{station_id}/stereo-tool-configuration | 
*StationsBroadcastingApi* | [**getStereoToolConfiguration**](docs/Api/StationsBroadcastingApi.md#getstereotoolconfiguration) | **GET** /station/{station_id}/stereo-tool-configuration | 
*StationsBroadcastingApi* | [**postStereoToolConfiguration**](docs/Api/StationsBroadcastingApi.md#poststereotoolconfiguration) | **POST** /station/{station_id}/stereo-tool-configuration | 
*StationsGeneralApi* | [**deleteStationFallback**](docs/Api/StationsGeneralApi.md#deletestationfallback) | **DELETE** /station/{station_id}/fallback | 
*StationsGeneralApi* | [**getStation**](docs/Api/StationsGeneralApi.md#getstation) | **GET** /station/{station_id} | 
*StationsGeneralApi* | [**getStationFallback**](docs/Api/StationsGeneralApi.md#getstationfallback) | **GET** /station/{station_id}/fallback | 
*StationsGeneralApi* | [**getStations**](docs/Api/StationsGeneralApi.md#getstations) | **GET** /stations | 
*StationsGeneralApi* | [**postStationFallback**](docs/Api/StationsGeneralApi.md#poststationfallback) | **POST** /station/{station_id}/fallback | 
*StationsHLSStreamsApi* | [**addHlsStream**](docs/Api/StationsHLSStreamsApi.md#addhlsstream) | **POST** /station/{station_id}/hls_streams | 
*StationsHLSStreamsApi* | [**deleteHlsStream**](docs/Api/StationsHLSStreamsApi.md#deletehlsstream) | **DELETE** /station/{station_id}/hls_stream/{id} | 
*StationsHLSStreamsApi* | [**editHlsStream**](docs/Api/StationsHLSStreamsApi.md#edithlsstream) | **PUT** /station/{station_id}/hls_stream/{id} | 
*StationsHLSStreamsApi* | [**getHlsStream**](docs/Api/StationsHLSStreamsApi.md#gethlsstream) | **GET** /station/{station_id}/hls_stream/{id} | 
*StationsHLSStreamsApi* | [**getHlsStreams**](docs/Api/StationsHLSStreamsApi.md#gethlsstreams) | **GET** /station/{station_id}/hls_streams | 
*StationsHistoryApi* | [**getStationHistory**](docs/Api/StationsHistoryApi.md#getstationhistory) | **GET** /station/{station_id}/history | 
*StationsListenersApi* | [**getStationListeners**](docs/Api/StationsListenersApi.md#getstationlisteners) | **GET** /station/{station_id}/listeners | 
*StationsMediaApi* | [**addFile**](docs/Api/StationsMediaApi.md#addfile) | **POST** /station/{station_id}/files | 
*StationsMediaApi* | [**deleteFile**](docs/Api/StationsMediaApi.md#deletefile) | **DELETE** /station/{station_id}/file/{id} | 
*StationsMediaApi* | [**deleteMediaArt**](docs/Api/StationsMediaApi.md#deletemediaart) | **DELETE** /station/{station_id}/art/{media_id} | 
*StationsMediaApi* | [**editFile**](docs/Api/StationsMediaApi.md#editfile) | **PUT** /station/{station_id}/file/{id} | 
*StationsMediaApi* | [**getFile**](docs/Api/StationsMediaApi.md#getfile) | **GET** /station/{station_id}/file/{id} | 
*StationsMediaApi* | [**getFiles**](docs/Api/StationsMediaApi.md#getfiles) | **GET** /station/{station_id}/files | 
*StationsMediaApi* | [**getMediaArt**](docs/Api/StationsMediaApi.md#getmediaart) | **GET** /station/{station_id}/art/{media_id} | 
*StationsMediaApi* | [**postMediaArt**](docs/Api/StationsMediaApi.md#postmediaart) | **POST** /station/{station_id}/art/{media_id} | 
*StationsMountPointsApi* | [**addMount**](docs/Api/StationsMountPointsApi.md#addmount) | **POST** /station/{station_id}/mounts | 
*StationsMountPointsApi* | [**deleteMount**](docs/Api/StationsMountPointsApi.md#deletemount) | **DELETE** /station/{station_id}/mount/{id} | 
*StationsMountPointsApi* | [**deleteMountIntro**](docs/Api/StationsMountPointsApi.md#deletemountintro) | **DELETE** /station/{station_id}/mount/{id}/intro | 
*StationsMountPointsApi* | [**editMount**](docs/Api/StationsMountPointsApi.md#editmount) | **PUT** /station/{station_id}/mount/{id} | 
*StationsMountPointsApi* | [**getMount**](docs/Api/StationsMountPointsApi.md#getmount) | **GET** /station/{station_id}/mount/{id} | 
*StationsMountPointsApi* | [**getMountIntro**](docs/Api/StationsMountPointsApi.md#getmountintro) | **GET** /station/{station_id}/mount/{id}/intro | 
*StationsMountPointsApi* | [**getStationMounts**](docs/Api/StationsMountPointsApi.md#getstationmounts) | **GET** /station/{station_id}/mounts | 
*StationsMountPointsApi* | [**postMountIntro**](docs/Api/StationsMountPointsApi.md#postmountintro) | **POST** /station/{station_id}/mount/{id}/intro | 
*StationsPlaylistsApi* | [**addPlaylist**](docs/Api/StationsPlaylistsApi.md#addplaylist) | **POST** /station/{station_id}/playlists | 
*StationsPlaylistsApi* | [**deletePlaylist**](docs/Api/StationsPlaylistsApi.md#deleteplaylist) | **DELETE** /station/{station_id}/playlist/{id} | 
*StationsPlaylistsApi* | [**editPlaylist**](docs/Api/StationsPlaylistsApi.md#editplaylist) | **PUT** /station/{station_id}/playlist/{id} | 
*StationsPlaylistsApi* | [**getPlaylist**](docs/Api/StationsPlaylistsApi.md#getplaylist) | **GET** /station/{station_id}/playlist/{id} | 
*StationsPlaylistsApi* | [**getPlaylists**](docs/Api/StationsPlaylistsApi.md#getplaylists) | **GET** /station/{station_id}/playlists | 
*StationsPodcastsApi* | [**addEpisode**](docs/Api/StationsPodcastsApi.md#addepisode) | **POST** /station/{station_id}/podcast/{podcast_id}/episodes | 
*StationsPodcastsApi* | [**addPodcast**](docs/Api/StationsPodcastsApi.md#addpodcast) | **POST** /station/{station_id}/podcasts | 
*StationsPodcastsApi* | [**deleteEpisode**](docs/Api/StationsPodcastsApi.md#deleteepisode) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{id} | 
*StationsPodcastsApi* | [**deletePodcast**](docs/Api/StationsPodcastsApi.md#deletepodcast) | **DELETE** /station/{station_id}/podcast/{id} | 
*StationsPodcastsApi* | [**deletePodcastArt**](docs/Api/StationsPodcastsApi.md#deletepodcastart) | **DELETE** /station/{station_id}/podcast/{podcast_id}/art | 
*StationsPodcastsApi* | [**deletePodcastEpisodeArt**](docs/Api/StationsPodcastsApi.md#deletepodcastepisodeart) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art | 
*StationsPodcastsApi* | [**deletePodcastEpisodeMedia**](docs/Api/StationsPodcastsApi.md#deletepodcastepisodemedia) | **DELETE** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media | 
*StationsPodcastsApi* | [**editEpisode**](docs/Api/StationsPodcastsApi.md#editepisode) | **PUT** /station/{station_id}/podcast/{podcast_id}/episode/{id} | 
*StationsPodcastsApi* | [**editPodcast**](docs/Api/StationsPodcastsApi.md#editpodcast) | **PUT** /station/{station_id}/podcast/{id} | 
*StationsPodcastsApi* | [**getEpisode**](docs/Api/StationsPodcastsApi.md#getepisode) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{id} | 
*StationsPodcastsApi* | [**getEpisodes**](docs/Api/StationsPodcastsApi.md#getepisodes) | **GET** /station/{station_id}/podcast/{podcast_id}/episodes | 
*StationsPodcastsApi* | [**getPodcast**](docs/Api/StationsPodcastsApi.md#getpodcast) | **GET** /station/{station_id}/podcast/{id} | 
*StationsPodcastsApi* | [**getPodcastArt**](docs/Api/StationsPodcastsApi.md#getpodcastart) | **GET** /station/{station_id}/podcast/{podcast_id}/art | 
*StationsPodcastsApi* | [**getPodcastEpisodeArt**](docs/Api/StationsPodcastsApi.md#getpodcastepisodeart) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art | 
*StationsPodcastsApi* | [**getPodcastEpisodeMedia**](docs/Api/StationsPodcastsApi.md#getpodcastepisodemedia) | **GET** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media | 
*StationsPodcastsApi* | [**getPodcasts**](docs/Api/StationsPodcastsApi.md#getpodcasts) | **GET** /station/{station_id}/podcasts | 
*StationsPodcastsApi* | [**postPodcastArt**](docs/Api/StationsPodcastsApi.md#postpodcastart) | **POST** /station/{station_id}/podcast/{podcast_id}/art | 
*StationsPodcastsApi* | [**postPodcastEpisodeArt**](docs/Api/StationsPodcastsApi.md#postpodcastepisodeart) | **POST** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/art | 
*StationsPodcastsApi* | [**postPodcastEpisodeMedia**](docs/Api/StationsPodcastsApi.md#postpodcastepisodemedia) | **POST** /station/{station_id}/podcast/{podcast_id}/episode/{episode_id}/media | 
*StationsQueueApi* | [**deleteQueueItem**](docs/Api/StationsQueueApi.md#deletequeueitem) | **DELETE** /station/{station_id}/queue/{id} | 
*StationsQueueApi* | [**getQueue**](docs/Api/StationsQueueApi.md#getqueue) | **GET** /station/{station_id}/queue | 
*StationsQueueApi* | [**getQueueItem**](docs/Api/StationsQueueApi.md#getqueueitem) | **GET** /station/{station_id}/queue/{id} | 
*StationsRemoteRelaysApi* | [**addRelay**](docs/Api/StationsRemoteRelaysApi.md#addrelay) | **POST** /station/{station_id}/remotes | 
*StationsRemoteRelaysApi* | [**deleteRelay**](docs/Api/StationsRemoteRelaysApi.md#deleterelay) | **DELETE** /station/{station_id}/remote/{id} | 
*StationsRemoteRelaysApi* | [**editRelay**](docs/Api/StationsRemoteRelaysApi.md#editrelay) | **PUT** /station/{station_id}/remote/{id} | 
*StationsRemoteRelaysApi* | [**getRelay**](docs/Api/StationsRemoteRelaysApi.md#getrelay) | **GET** /station/{station_id}/remote/{id} | 
*StationsRemoteRelaysApi* | [**getRelays**](docs/Api/StationsRemoteRelaysApi.md#getrelays) | **GET** /station/{station_id}/remotes | 
*StationsSFTPUsersApi* | [**addSftpUser**](docs/Api/StationsSFTPUsersApi.md#addsftpuser) | **POST** /station/{station_id}/sftp-users | 
*StationsSFTPUsersApi* | [**deleteSftpUser**](docs/Api/StationsSFTPUsersApi.md#deletesftpuser) | **DELETE** /station/{station_id}/sftp-user/{id} | 
*StationsSFTPUsersApi* | [**editSftpUser**](docs/Api/StationsSFTPUsersApi.md#editsftpuser) | **PUT** /station/{station_id}/sftp-user/{id} | 
*StationsSFTPUsersApi* | [**getSftpUser**](docs/Api/StationsSFTPUsersApi.md#getsftpuser) | **GET** /station/{station_id}/sftp-user/{id} | 
*StationsSFTPUsersApi* | [**getSftpUsers**](docs/Api/StationsSFTPUsersApi.md#getsftpusers) | **GET** /station/{station_id}/sftp-users | 
*StationsSchedulesApi* | [**getSchedule**](docs/Api/StationsSchedulesApi.md#getschedule) | **GET** /station/{station_id}/schedule | 
*StationsServiceControlApi* | [**doBackendServiceAction**](docs/Api/StationsServiceControlApi.md#dobackendserviceaction) | **POST** /station/{station_id}/backend/{action} | 
*StationsServiceControlApi* | [**doFrontendServiceAction**](docs/Api/StationsServiceControlApi.md#dofrontendserviceaction) | **POST** /station/{station_id}/frontend/{action} | 
*StationsServiceControlApi* | [**getServiceStatus**](docs/Api/StationsServiceControlApi.md#getservicestatus) | **GET** /station/{station_id}/status | 
*StationsServiceControlApi* | [**restartServices**](docs/Api/StationsServiceControlApi.md#restartservices) | **POST** /station/{station_id}/restart | 
*StationsSongRequestsApi* | [**getRequestableSongs**](docs/Api/StationsSongRequestsApi.md#getrequestablesongs) | **GET** /station/{station_id}/requests | 
*StationsSongRequestsApi* | [**submitSongRequest**](docs/Api/StationsSongRequestsApi.md#submitsongrequest) | **POST** /station/{station_id}/request/{request_id} | 
*StationsStreamersDJsApi* | [**addStreamer**](docs/Api/StationsStreamersDJsApi.md#addstreamer) | **POST** /station/{station_id}/streamers | 
*StationsStreamersDJsApi* | [**deleteStreamer**](docs/Api/StationsStreamersDJsApi.md#deletestreamer) | **DELETE** /station/{station_id}/streamer/{id} | 
*StationsStreamersDJsApi* | [**editStreamer**](docs/Api/StationsStreamersDJsApi.md#editstreamer) | **PUT** /station/{station_id}/streamer/{id} | 
*StationsStreamersDJsApi* | [**getStreamer**](docs/Api/StationsStreamersDJsApi.md#getstreamer) | **GET** /station/{station_id}/streamer/{id} | 
*StationsStreamersDJsApi* | [**getStreamers**](docs/Api/StationsStreamersDJsApi.md#getstreamers) | **GET** /station/{station_id}/streamers | 
*StationsWebHooksApi* | [**addWebhook**](docs/Api/StationsWebHooksApi.md#addwebhook) | **POST** /station/{station_id}/webhooks | 
*StationsWebHooksApi* | [**deleteWebhook**](docs/Api/StationsWebHooksApi.md#deletewebhook) | **DELETE** /station/{station_id}/webhook/{id} | 
*StationsWebHooksApi* | [**editWebhook**](docs/Api/StationsWebHooksApi.md#editwebhook) | **PUT** /station/{station_id}/webhook/{id} | 
*StationsWebHooksApi* | [**getWebhook**](docs/Api/StationsWebHooksApi.md#getwebhook) | **GET** /station/{station_id}/webhook/{id} | 
*StationsWebHooksApi* | [**getWebhooks**](docs/Api/StationsWebHooksApi.md#getwebhooks) | **GET** /station/{station_id}/webhooks | 

## Models

- [ApiAdminRelay](docs/Model/ApiAdminRelay.md)
- [ApiAdminStorageLocation](docs/Model/ApiAdminStorageLocation.md)
- [ApiDetailedSongHistory](docs/Model/ApiDetailedSongHistory.md)
- [ApiError](docs/Model/ApiError.md)
- [ApiFileList](docs/Model/ApiFileList.md)
- [ApiFileListAllOfDir](docs/Model/ApiFileListAllOfDir.md)
- [ApiFileListAllOfMedia](docs/Model/ApiFileListAllOfMedia.md)
- [ApiFileListDir](docs/Model/ApiFileListDir.md)
- [ApiHasSongFields](docs/Model/ApiHasSongFields.md)
- [ApiListener](docs/Model/ApiListener.md)
- [ApiListenerDevice](docs/Model/ApiListenerDevice.md)
- [ApiListenerLocation](docs/Model/ApiListenerLocation.md)
- [ApiNewRecord](docs/Model/ApiNewRecord.md)
- [ApiNowPlaying](docs/Model/ApiNowPlaying.md)
- [ApiNowPlayingCurrentSong](docs/Model/ApiNowPlayingCurrentSong.md)
- [ApiNowPlayingListeners](docs/Model/ApiNowPlayingListeners.md)
- [ApiNowPlayingLive](docs/Model/ApiNowPlayingLive.md)
- [ApiNowPlayingNowPlaying](docs/Model/ApiNowPlayingNowPlaying.md)
- [ApiNowPlayingPlayingNext](docs/Model/ApiNowPlayingPlayingNext.md)
- [ApiNowPlayingSongHistory](docs/Model/ApiNowPlayingSongHistory.md)
- [ApiNowPlayingStation](docs/Model/ApiNowPlayingStation.md)
- [ApiNowPlayingStationMount](docs/Model/ApiNowPlayingStationMount.md)
- [ApiNowPlayingStationQueue](docs/Model/ApiNowPlayingStationQueue.md)
- [ApiNowPlayingStationRemote](docs/Model/ApiNowPlayingStationRemote.md)
- [ApiPodcast](docs/Model/ApiPodcast.md)
- [ApiPodcastCategory](docs/Model/ApiPodcastCategory.md)
- [ApiPodcastEpisode](docs/Model/ApiPodcastEpisode.md)
- [ApiPodcastEpisodeAllOfMedia](docs/Model/ApiPodcastEpisodeAllOfMedia.md)
- [ApiPodcastEpisodeAllOfPlaylistMedia](docs/Model/ApiPodcastEpisodeAllOfPlaylistMedia.md)
- [ApiPodcastMedia](docs/Model/ApiPodcastMedia.md)
- [ApiSong](docs/Model/ApiSong.md)
- [ApiStationMedia](docs/Model/ApiStationMedia.md)
- [ApiStationOnDemand](docs/Model/ApiStationOnDemand.md)
- [ApiStationPlaylistQueue](docs/Model/ApiStationPlaylistQueue.md)
- [ApiStationQueueDetailed](docs/Model/ApiStationQueueDetailed.md)
- [ApiStationRemote](docs/Model/ApiStationRemote.md)
- [ApiStationRequest](docs/Model/ApiStationRequest.md)
- [ApiStationSchedule](docs/Model/ApiStationSchedule.md)
- [ApiStationServiceStatus](docs/Model/ApiStationServiceStatus.md)
- [ApiStatus](docs/Model/ApiStatus.md)
- [ApiSystemStatus](docs/Model/ApiSystemStatus.md)
- [ApiTime](docs/Model/ApiTime.md)
- [ApiUploadFile](docs/Model/ApiUploadFile.md)
- [CustomField](docs/Model/CustomField.md)
- [FileTypes](docs/Model/FileTypes.md)
- [GetStationNowPlayingStationIdParameter](docs/Model/GetStationNowPlayingStationIdParameter.md)
- [HasAutoIncrementId](docs/Model/HasAutoIncrementId.md)
- [HasLinks](docs/Model/HasLinks.md)
- [HasSongFields](docs/Model/HasSongFields.md)
- [HasUniqueId](docs/Model/HasUniqueId.md)
- [PostMediaArtMediaIdParameter](docs/Model/PostMediaArtMediaIdParameter.md)
- [Relay](docs/Model/Relay.md)
- [Role](docs/Model/Role.md)
- [Settings](docs/Model/Settings.md)
- [SftpUser](docs/Model/SftpUser.md)
- [Station](docs/Model/Station.md)
- [StationHlsStream](docs/Model/StationHlsStream.md)
- [StationMount](docs/Model/StationMount.md)
- [StationPlaylist](docs/Model/StationPlaylist.md)
- [StationSchedule](docs/Model/StationSchedule.md)
- [StationStreamer](docs/Model/StationStreamer.md)
- [StationStreamerBroadcast](docs/Model/StationStreamerBroadcast.md)
- [StationWebhook](docs/Model/StationWebhook.md)
- [User](docs/Model/User.md)

## Authorization

Authentication schemes defined for the API:
### ApiKey

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.20.2`
    - Package version: `1.0.0`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
