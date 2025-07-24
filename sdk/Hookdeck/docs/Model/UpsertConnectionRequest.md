# # UpsertConnectionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A unique name of the connection for the source | [optional]
**description** | **string** | Description for the connection | [optional]
**destination_id** | **string** | ID of a destination to bind to the connection | [optional]
**source_id** | **string** | ID of a source to bind to the connection | [optional]
**destination** | [**\Hookdeck\Model\UpsertConnectionRequestDestination**](UpsertConnectionRequestDestination.md) |  | [optional]
**source** | [**\Hookdeck\Model\UpsertConnectionRequestSource**](UpsertConnectionRequestSource.md) |  | [optional]
**rules** | [**\Hookdeck\Model\Rule[]**](Rule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
