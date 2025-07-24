# Hookdeck\BulkRetryIgnoredEventsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelIgnoredEventBulkRetry()**](BulkRetryIgnoredEventsApi.md#cancelIgnoredEventBulkRetry) | **POST** /bulk/ignored-events/retry/{id}/cancel | Cancel an ignored events bulk retry |
| [**createIgnoredEventBulkRetry()**](BulkRetryIgnoredEventsApi.md#createIgnoredEventBulkRetry) | **POST** /bulk/ignored-events/retry | Create an ignored events bulk retry |
| [**generateIgnoredEventBulkRetryPlan()**](BulkRetryIgnoredEventsApi.md#generateIgnoredEventBulkRetryPlan) | **GET** /bulk/ignored-events/retry/plan | Generate an ignored events bulk retry plan |
| [**getIgnoredEventBulkRetries()**](BulkRetryIgnoredEventsApi.md#getIgnoredEventBulkRetries) | **GET** /bulk/ignored-events/retry | Get ignored events bulk retries |
| [**getIgnoredEventBulkRetry()**](BulkRetryIgnoredEventsApi.md#getIgnoredEventBulkRetry) | **GET** /bulk/ignored-events/retry/{id} | Get an ignored events bulk retry |


## `cancelIgnoredEventBulkRetry()`

```php
cancelIgnoredEventBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Cancel an ignored events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryIgnoredEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cancelIgnoredEventBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryIgnoredEventsApi->cancelIgnoredEventBulkRetry: ', $e->getMessage(), PHP_EOL;
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

## `createIgnoredEventBulkRetry()`

```php
createIgnoredEventBulkRetry($create_ignored_event_bulk_retry_request): \Hookdeck\Model\BatchOperation
```

Create an ignored events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryIgnoredEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ignored_event_bulk_retry_request = new \Hookdeck\Model\CreateIgnoredEventBulkRetryRequest(); // \Hookdeck\Model\CreateIgnoredEventBulkRetryRequest

try {
    $result = $apiInstance->createIgnoredEventBulkRetry($create_ignored_event_bulk_retry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryIgnoredEventsApi->createIgnoredEventBulkRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ignored_event_bulk_retry_request** | [**\Hookdeck\Model\CreateIgnoredEventBulkRetryRequest**](../Model/CreateIgnoredEventBulkRetryRequest.md)|  | |

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

## `generateIgnoredEventBulkRetryPlan()`

```php
generateIgnoredEventBulkRetryPlan($query): \Hookdeck\Model\GenerateEventBulkRetryPlan200Response
```

Generate an ignored events bulk retry plan



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


$apiInstance = new Hookdeck\Api\BulkRetryIgnoredEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = new \Hookdeck\Model\\Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter(); // \Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter

try {
    $result = $apiInstance->generateIgnoredEventBulkRetryPlan($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryIgnoredEventsApi->generateIgnoredEventBulkRetryPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | [**\Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter**](../Model/.md)|  | [optional] |

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

## `getIgnoredEventBulkRetries()`

```php
getIgnoredEventBulkRetries($cancelled_at, $completed_at, $created_at, $id, $query, $query_partial_match, $in_progress, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\BatchOperationPaginatedResult
```

Get ignored events bulk retries



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


$apiInstance = new Hookdeck\Api\BulkRetryIgnoredEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelled_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter
$completed_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter
$id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesIdParameter(); // \Hookdeck\Model\GetEventBulkRetriesIdParameter
$query = new \Hookdeck\Model\\Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter(); // \Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter
$query_partial_match = True; // bool
$in_progress = True; // bool
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getIgnoredEventBulkRetries($cancelled_at, $completed_at, $created_at, $id, $query, $query_partial_match, $in_progress, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryIgnoredEventsApi->getIgnoredEventBulkRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelled_at** | [**\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter**](../Model/.md)|  | [optional] |
| **completed_at** | [**\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter**](../Model/.md)|  | [optional] |
| **id** | [**\Hookdeck\Model\GetEventBulkRetriesIdParameter**](../Model/.md)|  | [optional] |
| **query** | [**\Hookdeck\Model\GetIgnoredEventBulkRetriesQueryParameter**](../Model/.md)|  | [optional] |
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

## `getIgnoredEventBulkRetry()`

```php
getIgnoredEventBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Get an ignored events bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryIgnoredEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getIgnoredEventBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryIgnoredEventsApi->getIgnoredEventBulkRetry: ', $e->getMessage(), PHP_EOL;
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
