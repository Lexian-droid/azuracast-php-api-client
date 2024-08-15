# # ApiAdminStorageLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | **array<string,string>** |  | [optional]
**id** | **int** |  | [optional]
**type** | **string** | The type of storage location. | [optional]
**adapter** | **string** | The storage adapter to use for this location. | [optional]
**path** | **string** | The local path, if the local adapter is used, or path prefix for S3/remote adapters. | [optional]
**s3CredentialKey** | **string** | The credential key for S3 adapters. | [optional]
**s3CredentialSecret** | **string** | The credential secret for S3 adapters. | [optional]
**s3Region** | **string** | The region for S3 adapters. | [optional]
**s3Version** | **string** | The API version for S3 adapters. | [optional]
**s3Bucket** | **string** | The S3 bucket name for S3 adapters. | [optional]
**s3Endpoint** | **string** | The optional custom S3 endpoint S3 adapters. | [optional]
**dropboxAppKey** | **string** | The optional Dropbox App Key. | [optional]
**dropboxAppSecret** | **string** | The optional Dropbox App Secret. | [optional]
**dropboxAuthToken** | **string** | The optional Dropbox Auth Token. | [optional]
**sftpHost** | **string** | The host for SFTP adapters | [optional]
**sftpUsername** | **string** | The username for SFTP adapters | [optional]
**sftpPassword** | **string** | The password for SFTP adapters | [optional]
**sftpPort** | **int** | The port for SFTP adapters | [optional]
**sftpPrivateKey** | **string** | The private key for SFTP adapters | [optional]
**sftpPrivateKeyPassPhrase** | **string** | The private key pass phrase for SFTP adapters | [optional]
**storageQuota** | **string** |  | [optional]
**storageQuotaBytes** | **string** |  | [optional]
**storageUsed** | **string** |  | [optional]
**storageUsedBytes** | **string** |  | [optional]
**storageAvailable** | **string** |  | [optional]
**storageAvailableBytes** | **string** |  | [optional]
**storageUsedPercent** | **int** |  | [optional]
**isFull** | **bool** |  | [optional]
**uri** | **string** | The URI associated with the storage location. | [optional]
**stations** | **string[]** | The stations using this storage location, if any. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
