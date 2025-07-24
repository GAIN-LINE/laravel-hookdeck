# Hookdeck\BulkRetryEventsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelEventBulkRetry()**](BulkRetryEventsApi.md#cancelEventBulkRetry) | **POST** /bulk/events/retry/{id}/cancel | Cancel an events bulk retry |
| [**createEventBulkRetry()**](BulkRetryEventsApi.md#createEventBulkRetry) | **POST** /bulk/events/retry | Create an events bulk retry |
| [**generateEventBulkRetryPlan()**](BulkRetryEventsApi.md#generateEventBulkRetryPlan) | **GET** /bulk/events/retry/plan | Generate an events bulk retry plan |
| [**getEventBulkRetries()**](BulkRetryEventsApi.md#getEventBulkRetries) | **GET** /bulk/events/retry | Get events bulk retries |
| [**getEventBulkRetry()**](BulkRetryEventsApi.md#getEventBulkRetry) | **GET** /bulk/events/retry/{id} | Get an events bulk retry |


## `cancelEventBulkRetry()`

```php
cancelEventBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Cancel an events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cancelEventBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryEventsApi->cancelEventBulkRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\BatchOperation**](../Model/BatchOperation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEventBulkRetry()`

```php
createEventBulkRetry($create_event_bulk_retry_request): \Hookdeck\Model\BatchOperation
```

Create an events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_event_bulk_retry_request = new \Hookdeck\Model\CreateEventBulkRetryRequest(); // \Hookdeck\Model\CreateEventBulkRetryRequest

try {
    $result = $apiInstance->createEventBulkRetry($create_event_bulk_retry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryEventsApi->createEventBulkRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_event_bulk_retry_request** | [**\Hookdeck\Model\CreateEventBulkRetryRequest**](../Model/CreateEventBulkRetryRequest.md)|  | |

### Return type

[**\Hookdeck\Model\BatchOperation**](../Model/BatchOperation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateEventBulkRetryPlan()`

```php
generateEventBulkRetryPlan($query): \Hookdeck\Model\GenerateEventBulkRetryPlan200Response
```

Generate an events bulk retry plan



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


$apiInstance = new Hookdeck\Api\BulkRetryEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = new \Hookdeck\Model\\Hookdeck\Model\CreateEventBulkRetryRequestQuery(); // \Hookdeck\Model\CreateEventBulkRetryRequestQuery

try {
    $result = $apiInstance->generateEventBulkRetryPlan($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryEventsApi->generateEventBulkRetryPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | [**\Hookdeck\Model\CreateEventBulkRetryRequestQuery**](../Model/.md)|  | [optional] |

### Return type

[**\Hookdeck\Model\GenerateEventBulkRetryPlan200Response**](../Model/GenerateEventBulkRetryPlan200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventBulkRetries()`

```php
getEventBulkRetries($cancelled_at, $completed_at, $created_at, $id, $query, $query_partial_match, $in_progress, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\BatchOperationPaginatedResult
```

Get events bulk retries



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


$apiInstance = new Hookdeck\Api\BulkRetryEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelled_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter
$completed_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter
$id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesIdParameter(); // \Hookdeck\Model\GetEventBulkRetriesIdParameter
$query = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesQueryParameter(); // \Hookdeck\Model\GetEventBulkRetriesQueryParameter
$query_partial_match = True; // bool
$in_progress = True; // bool
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getEventBulkRetries($cancelled_at, $completed_at, $created_at, $id, $query, $query_partial_match, $in_progress, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryEventsApi->getEventBulkRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelled_at** | [**\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter**](../Model/.md)|  | [optional] |
| **completed_at** | [**\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter**](../Model/.md)|  | [optional] |
| **id** | [**\Hookdeck\Model\GetEventBulkRetriesIdParameter**](../Model/.md)|  | [optional] |
| **query** | [**\Hookdeck\Model\GetEventBulkRetriesQueryParameter**](../Model/.md)|  | [optional] |
| **query_partial_match** | **bool**|  | [optional] |
| **in_progress** | **bool**|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\BatchOperationPaginatedResult**](../Model/BatchOperationPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventBulkRetry()`

```php
getEventBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Get an events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEventBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryEventsApi->getEventBulkRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\BatchOperation**](../Model/BatchOperation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
