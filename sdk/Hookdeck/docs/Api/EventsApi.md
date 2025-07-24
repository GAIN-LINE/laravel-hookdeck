# Hookdeck\EventsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEvent()**](EventsApi.md#getEvent) | **GET** /events/{id} | Get an event |
| [**getEventRawBody()**](EventsApi.md#getEventRawBody) | **GET** /events/{id}/raw_body | Get a event raw body data |
| [**getEvents()**](EventsApi.md#getEvents) | **GET** /events | Get events |
| [**muteEvent()**](EventsApi.md#muteEvent) | **PUT** /events/{id}/mute | Mute an event |
| [**retryEvent()**](EventsApi.md#retryEvent) | **POST** /events/{id}/retry | Retry an event |


## `getEvent()`

```php
getEvent($id): \Hookdeck\Model\Event
```

Get an event



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


$apiInstance = new Hookdeck\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Event**](../Model/Event.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventRawBody()`

```php
getEventRawBody($id): \Hookdeck\Model\RawBody
```

Get a event raw body data



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


$apiInstance = new Hookdeck\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEventRawBody($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventRawBody: ', $e->getMessage(), PHP_EOL;
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

## `getEvents()`

```php
getEvents($id, $status, $webhook_id, $destination_id, $source_id, $attempts, $response_status, $successful_at, $created_at, $error_code, $cli_id, $last_attempt_at, $search_term, $headers, $body, $parsed_query, $path, $cli_user_id, $issue_id, $event_data_id, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\EventPaginatedResult
```

Get events



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


$apiInstance = new Hookdeck\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
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
    $result = $apiInstance->getEvents($id, $status, $webhook_id, $destination_id, $source_id, $attempts, $response_status, $successful_at, $created_at, $error_code, $cli_id, $last_attempt_at, $search_term, $headers, $body, $parsed_query, $path, $cli_user_id, $issue_id, $event_data_id, $bulk_retry_id, $include, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `muteEvent()`

```php
muteEvent($id): \Hookdeck\Model\Event
```

Mute an event



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


$apiInstance = new Hookdeck\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->muteEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->muteEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Event**](../Model/Event.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryEvent()`

```php
retryEvent($id): \Hookdeck\Model\RetriedEvent
```

Retry an event



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


$apiInstance = new Hookdeck\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->retryEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->retryEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\RetriedEvent**](../Model/RetriedEvent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
