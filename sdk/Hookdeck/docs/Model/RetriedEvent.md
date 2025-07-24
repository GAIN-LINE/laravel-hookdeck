# # RetriedEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the event |
**team_id** | **string** | ID of the project |
**webhook_id** | **string** | ID of the associated connection |
**source_id** | **string** | ID of the associated source |
**destination_id** | **string** | ID of the associated destination |
**event_data_id** | **string** | ID of the event data |
**request_id** | **string** | ID of the request that created the event |
**attempts** | **int** | Number of delivery attempts made |
**last_attempt_at** | **\DateTime** | Date of the most recently attempted retry |
**next_attempt_at** | **\DateTime** | Date of the next scheduled retry |
**response_status** | **int** | Event status | [optional]
**error_code** | [**\Hookdeck\Model\AttemptErrorCodes**](AttemptErrorCodes.md) |  | [optional]
**status** | [**\Hookdeck\Model\EventStatus**](EventStatus.md) |  |
**successful_at** | **\DateTime** | Date of the latest successful attempt |
**cli_id** | **string** | ID of the CLI the event is sent to |
**updated_at** | **\DateTime** | Date the event was last updated |
**created_at** | **\DateTime** | Date the event was created |
**data** | [**\Hookdeck\Model\ShortEventData**](ShortEventData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
