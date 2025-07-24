# # GetRequestBulkRetriesQueryParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Hookdeck\Model\GetRequestsIdParameter**](GetRequestsIdParameter.md) |  | [optional]
**status** | **string** | Filter by status | [optional]
**rejection_cause** | [**\Hookdeck\Model\GetRequestsRejectionCauseParameter**](GetRequestsRejectionCauseParameter.md) |  | [optional]
**source_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId**](GetEventBulkRetriesQueryParameterSourceId.md) |  | [optional]
**verified** | **bool** | Filter by verification status | [optional]
**search_term** | **string** | URL Encoded string of the value to match partially to the body, headers, parsed_query or path | [optional]
**headers** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders**](GetEventBulkRetriesQueryParameterHeaders.md) |  | [optional]
**body** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterBody**](GetEventBulkRetriesQueryParameterBody.md) |  | [optional]
**parsed_query** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery**](GetEventBulkRetriesQueryParameterParsedQuery.md) |  | [optional]
**path** | **string** | URL Encoded string of the value to match partially to the path | [optional]
**ignored_count** | [**\Hookdeck\Model\GetRequestsIgnoredCountParameter**](GetRequestsIgnoredCountParameter.md) |  | [optional]
**events_count** | [**\Hookdeck\Model\GetRequestsEventsCountParameter**](GetRequestsEventsCountParameter.md) |  | [optional]
**ingested_at** | [**\Hookdeck\Model\GetRequestsIngestedAtParameter**](GetRequestsIngestedAtParameter.md) |  | [optional]
**bulk_retry_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId**](GetEventBulkRetriesQueryParameterIssueId.md) |  | [optional]
**include** | **string** |  | [optional]
**order_by** | **string** | Sort key | [optional]
**dir** | **string** | Sort direction | [optional]
**limit** | **int** | Result set size | [optional]
**next** | **string** | The ID to provide in the query to get the next set of results | [optional]
**prev** | **string** | The ID to provide in the query to get the previous set of results | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
