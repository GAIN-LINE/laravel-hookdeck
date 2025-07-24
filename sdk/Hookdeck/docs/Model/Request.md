# # Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the request |
**team_id** | **string** | ID of the project |
**verified** | **bool** | Whether or not the request was verified when received |
**original_event_data_id** | **string** | ID of the request data |
**rejection_cause** | [**\Hookdeck\Model\RequestRejectionCause**](RequestRejectionCause.md) |  |
**ingest_priority** | **string** | The priority attributed to the request when received |
**ingested_at** | **\DateTime** | The time the request was originally received |
**source_id** | **string** | ID of the associated source |
**events_count** | **int** | The count of events created from this request (CLI events not included) |
**cli_events_count** | **int** | The count of CLI events created from this request |
**ignored_count** | **int** |  |
**updated_at** | **\DateTime** | Date the event was last updated |
**created_at** | **\DateTime** | Date the event was created |
**data** | [**\Hookdeck\Model\ShortEventData**](ShortEventData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
