# # TransformationIssueWithData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Issue ID |
**team_id** | **string** | ID of the project |
**status** | [**\Hookdeck\Model\IssueStatus**](IssueStatus.md) |  |
**opened_at** | **\DateTime** | ISO timestamp for when the issue was last opened |
**first_seen_at** | **\DateTime** | ISO timestamp for when the issue was first opened |
**last_seen_at** | **\DateTime** | ISO timestamp for when the issue last occured |
**last_updated_by** | **string** | Deprecated, will always be set to null | [optional]
**dismissed_at** | **\DateTime** | ISO timestamp for when the issue was dismissed | [optional]
**auto_resolved_at** | **\DateTime** |  | [optional]
**merged_with** | **string** |  | [optional]
**updated_at** | **string** | ISO timestamp for when the issue was last updated |
**created_at** | **string** | ISO timestamp for when the issue was created |
**type** | **string** |  |
**aggregation_keys** | [**\Hookdeck\Model\TransformationIssueAggregationKeys**](TransformationIssueAggregationKeys.md) |  |
**reference** | [**\Hookdeck\Model\TransformationIssueReference**](TransformationIssueReference.md) |  |
**data** | [**\Hookdeck\Model\TransformationIssueData**](TransformationIssueData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
