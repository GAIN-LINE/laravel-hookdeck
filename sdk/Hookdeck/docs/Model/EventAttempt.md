# # EventAttempt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Attempt ID |
**team_id** | **string** | ID of the project |
**event_id** | **string** | Event ID |
**destination_id** | **string** | Destination ID |
**response_status** | **int** | Attempt&#39;s HTTP response code | [optional]
**attempt_number** | **int** | Sequential number of attempts (up to and including this one) made for the associated event | [optional]
**trigger** | [**\Hookdeck\Model\AttemptTrigger**](AttemptTrigger.md) |  | [optional]
**error_code** | [**\Hookdeck\Model\AttemptErrorCodes**](AttemptErrorCodes.md) |  | [optional]
**body** | [**\Hookdeck\Model\EventAttemptBody**](EventAttemptBody.md) |  | [optional]
**requested_url** | **string** | URL of the destination where delivery was attempted | [optional]
**http_method** | **string** | HTTP method used to deliver the attempt | [optional]
**bulk_retry_id** | **string** | ID of associated bulk retry | [optional]
**status** | [**\Hookdeck\Model\AttemptStatus**](AttemptStatus.md) |  |
**successful_at** | **\DateTime** | Date the attempt was successful | [optional]
**delivered_at** | **\DateTime** | Date the attempt was delivered | [optional]
**responded_at** | **\DateTime** | Date the destination responded to this attempt | [optional]
**delivery_latency** | **int** | Time elapsed between attempt initiation and final delivery (in ms) | [optional]
**response_latency** | **int** | Time elapsed between attempt initiation and a response from the destination (in ms) | [optional]
**updated_at** | **\DateTime** | Date the attempt was last updated |
**created_at** | **\DateTime** | Date the attempt was created |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
