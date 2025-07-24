# Hookdeck\RequestsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRequest()**](RequestsApi.md#getRequest) | **GET** /requests/{id} | Get a request |
| [**getRequestEvents()**](RequestsApi.md#getRequestEvents) | **GET** /requests/{id}/events | Get request events |
| [**getRequestIgnoredEvents()**](RequestsApi.md#getRequestIgnoredEvents) | **GET** /requests/{id}/ignored_events | Get request ignored events |
| [**getRequestRawBody()**](RequestsApi.md#getRequestRawBody) | **GET** /requests/{id}/raw_body | Get a request raw body data |
| [**getRequests()**](RequestsApi.md#getRequests) | **GET** /requests | Get requests |
| [**retryRequest()**](RequestsApi.md#retryRequest) | **POST** /requests/{id}/retry | Retry a request |


## `getRequest()`

```php
getRequest($id): \Hookdeck\Model\Request
```

Get a request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getRequest($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->getRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Request**](../Model/Request.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequestEvents()`

```php
getRequestEvents($id2, $id, $status, $webhook_id, $destination_id, $source_id, $attempts, $response_status, $successful_at, $created_at, $error_code, $cli_id, $last_attempt_at, $search_term, $headers, $body, $parsed_query, $path, $cli_user_id, $issue_id, $event_data_id, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\EventPaginatedResult
```

Get request events



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id2 = 'id_example'; // string
$id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterId
$status = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterStatus(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterStatus
$webhook_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterWebhookId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterWebhookId
$destination_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterDestinationId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterDestinationId
$source_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId
$attempts = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterAttempts(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterAttempts
$response_status = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterResponseStatus(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterResponseStatus
$successful_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterSuccessfulAt(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterSuccessfulAt
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterCreatedAt(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterCreatedAt
$error_code = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterErrorCode(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterErrorCode
$cli_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterCliId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterCliId
$last_attempt_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterLastAttemptAt(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterLastAttemptAt
$search_term = 'search_term_example'; // string
$headers = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders
$body = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterBody(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterBody
$parsed_query = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery
$path = 'path_example'; // string
$cli_user_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterCliUserId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterCliUserId
$issue_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId
$event_data_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId
$bulk_retry_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId
$include = 'include_example'; // string
$order_by = 'order_by_example'; // string
$dir = 'dir_example'; // string
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getRequestEvents($id2, $id, $status, $webhook_id, $destination_id, $source_id, $attempts, $response_status, $successful_at, $created_at, $error_code, $cli_id, $last_attempt_at, $search_term, $headers, $body, $parsed_query, $path, $cli_user_id, $issue_id, $event_data_id, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->getRequestEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id2** | **string**|  | |
| **id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterId**](../Model/.md)|  | [optional] |
| **status** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterStatus**](../Model/.md)|  | [optional] |
| **webhook_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterWebhookId**](../Model/.md)|  | [optional] |
| **destination_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterDestinationId**](../Model/.md)|  | [optional] |
| **source_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId**](../Model/.md)|  | [optional] |
| **attempts** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterAttempts**](../Model/.md)|  | [optional] |
| **response_status** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterResponseStatus**](../Model/.md)|  | [optional] |
| **successful_at** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterSuccessfulAt**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterCreatedAt**](../Model/.md)|  | [optional] |
| **error_code** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterErrorCode**](../Model/.md)|  | [optional] |
| **cli_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterCliId**](../Model/.md)|  | [optional] |
| **last_attempt_at** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterLastAttemptAt**](../Model/.md)|  | [optional] |
| **search_term** | **string**|  | [optional] |
| **headers** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders**](../Model/.md)|  | [optional] |
| **body** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterBody**](../Model/.md)|  | [optional] |
| **parsed_query** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery**](../Model/.md)|  | [optional] |
| **path** | **string**|  | [optional] |
| **cli_user_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterCliUserId**](../Model/.md)|  | [optional] |
| **issue_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId**](../Model/.md)|  | [optional] |
| **event_data_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId**](../Model/.md)|  | [optional] |
| **bulk_retry_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId**](../Model/.md)|  | [optional] |
| **include** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **dir** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\EventPaginatedResult**](../Model/EventPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequestIgnoredEvents()`

```php
getRequestIgnoredEvents($id2, $id, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\IgnoredEventPaginatedResult
```

Get request ignored events



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id2 = 'id_example'; // string
$id = new \Hookdeck\Model\\Hookdeck\Model\GetRequestIgnoredEventsIdParameter(); // \Hookdeck\Model\GetRequestIgnoredEventsIdParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getRequestIgnoredEvents($id2, $id, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->getRequestIgnoredEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id2** | **string**|  | |
| **id** | [**\Hookdeck\Model\GetRequestIgnoredEventsIdParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\IgnoredEventPaginatedResult**](../Model/IgnoredEventPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequestRawBody()`

```php
getRequestRawBody($id): \Hookdeck\Model\RawBody
```

Get a request raw body data



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getRequestRawBody($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->getRequestRawBody: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\RawBody**](../Model/RawBody.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRequests()`

```php
getRequests($id, $status, $rejection_cause, $source_id, $verified, $search_term, $headers, $body, $parsed_query, $path, $ignored_count, $events_count, $ingested_at, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\RequestPaginatedResult
```

Get requests



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetRequestsIdParameter(); // \Hookdeck\Model\GetRequestsIdParameter
$status = 'status_example'; // string
$rejection_cause = new \Hookdeck\Model\\Hookdeck\Model\GetRequestsRejectionCauseParameter(); // \Hookdeck\Model\GetRequestsRejectionCauseParameter
$source_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId
$verified = True; // bool
$search_term = 'search_term_example'; // string
$headers = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders
$body = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterBody(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterBody
$parsed_query = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery
$path = 'path_example'; // string
$ignored_count = new \Hookdeck\Model\\Hookdeck\Model\GetRequestsIgnoredCountParameter(); // \Hookdeck\Model\GetRequestsIgnoredCountParameter
$events_count = new \Hookdeck\Model\\Hookdeck\Model\GetRequestsEventsCountParameter(); // \Hookdeck\Model\GetRequestsEventsCountParameter
$ingested_at = new \Hookdeck\Model\\Hookdeck\Model\GetRequestsIngestedAtParameter(); // \Hookdeck\Model\GetRequestsIngestedAtParameter
$bulk_retry_id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId
$include = 'include_example'; // string
$order_by = 'order_by_example'; // string
$dir = 'dir_example'; // string
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getRequests($id, $status, $rejection_cause, $source_id, $verified, $search_term, $headers, $body, $parsed_query, $path, $ignored_count, $events_count, $ingested_at, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->getRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetRequestsIdParameter**](../Model/.md)|  | [optional] |
| **status** | **string**|  | [optional] |
| **rejection_cause** | [**\Hookdeck\Model\GetRequestsRejectionCauseParameter**](../Model/.md)|  | [optional] |
| **source_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterSourceId**](../Model/.md)|  | [optional] |
| **verified** | **bool**|  | [optional] |
| **search_term** | **string**|  | [optional] |
| **headers** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterHeaders**](../Model/.md)|  | [optional] |
| **body** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterBody**](../Model/.md)|  | [optional] |
| **parsed_query** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterParsedQuery**](../Model/.md)|  | [optional] |
| **path** | **string**|  | [optional] |
| **ignored_count** | [**\Hookdeck\Model\GetRequestsIgnoredCountParameter**](../Model/.md)|  | [optional] |
| **events_count** | [**\Hookdeck\Model\GetRequestsEventsCountParameter**](../Model/.md)|  | [optional] |
| **ingested_at** | [**\Hookdeck\Model\GetRequestsIngestedAtParameter**](../Model/.md)|  | [optional] |
| **bulk_retry_id** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameterIssueId**](../Model/.md)|  | [optional] |
| **include** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |
| **dir** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\RequestPaginatedResult**](../Model/RequestPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryRequest()`

```php
retryRequest($id, $retry_request_request): \Hookdeck\Model\RetryRequest
```

Retry a request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = Hookdeck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hookdeck\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$retry_request_request = new \Hookdeck\Model\RetryRequestRequest(); // \Hookdeck\Model\RetryRequestRequest

try {
    $result = $apiInstance->retryRequest($id, $retry_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->retryRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **retry_request_request** | [**\Hookdeck\Model\RetryRequestRequest**](../Model/RetryRequestRequest.md)|  | |

### Return type

[**\Hookdeck\Model\RetryRequest**](../Model/RetryRequest.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
