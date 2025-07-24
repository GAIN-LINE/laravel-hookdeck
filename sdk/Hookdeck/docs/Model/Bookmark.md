# # Bookmark

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the bookmark |
**team_id** | **string** | ID of the project |
**webhook_id** | **string** | ID of the associated connection |
**event_data_id** | **string** | ID of the bookmarked event data |
**label** | **string** | Descriptive name of the bookmark |
**alias** | **string** | Alternate alias for the bookmark | [optional]
**data** | [**\Hookdeck\Model\ShortEventData**](ShortEventData.md) |  | [optional]
**last_used_at** | **\DateTime** | Date the bookmark was last manually triggered | [optional]
**updated_at** | **\DateTime** | Date the bookmark was last updated |
**created_at** | **\DateTime** | Date the bookmark was created |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
