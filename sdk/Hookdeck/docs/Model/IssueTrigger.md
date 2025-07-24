# # IssueTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the issue trigger |
**team_id** | **string** | ID of the project | [optional]
**name** | **string** | Optional unique name to use as reference when using the API | [optional]
**type** | [**\Hookdeck\Model\IssueType**](IssueType.md) |  |
**configs** | [**\Hookdeck\Model\IssueTriggerReference**](IssueTriggerReference.md) |  |
**channels** | [**\Hookdeck\Model\IssueTriggerChannels**](IssueTriggerChannels.md) |  | [optional]
**disabled_at** | **\DateTime** | ISO timestamp for when the issue trigger was disabled | [optional]
**updated_at** | **\DateTime** | ISO timestamp for when the issue trigger was last updated |
**created_at** | **\DateTime** | ISO timestamp for when the issue trigger was created |
**deleted_at** | **\DateTime** | ISO timestamp for when the issue trigger was deleted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
