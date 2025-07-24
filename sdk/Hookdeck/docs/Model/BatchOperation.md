# # BatchOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the bulk retry |
**team_id** | **string** | ID of the project |
**query** | [**\Hookdeck\Model\BatchOperationQuery**](BatchOperationQuery.md) |  | [optional]
**created_at** | **\DateTime** | Date the bulk retry was created |
**updated_at** | **\DateTime** | Last time the bulk retry was updated |
**cancelled_at** | **\DateTime** | Date the bulk retry was cancelled | [optional]
**completed_at** | **\DateTime** | Date the bulk retry was completed | [optional]
**estimated_batch** | **int** | Number of batches required to complete the bulk retry | [optional]
**estimated_count** | **int** | Number of estimated events to be retried | [optional]
**processed_batch** | **int** | Number of batches currently processed | [optional]
**completed_count** | **int** | Number of events that were successfully delivered | [optional]
**in_progress** | **bool** | Indicates if the bulk retry is currently in progress |
**progress** | **float** | Progression of the batch operations, values 0 - 1 | [optional]
**failed_count** | **int** | Number of events that failed to be delivered | [optional]
**number** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
