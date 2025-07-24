# Hookdeck\BulkRetryRequestsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelRequestBulkRetry()**](BulkRetryRequestsApi.md#cancelRequestBulkRetry) | **POST** /bulk/requests/retry/{id}/cancel | Cancel a requests bulk retry |
| [**createRequestBulkRetry()**](BulkRetryRequestsApi.md#createRequestBulkRetry) | **POST** /bulk/requests/retry | Create a requests bulk retry |
| [**generateRequestBulkRetryPlan()**](BulkRetryRequestsApi.md#generateRequestBulkRetryPlan) | **GET** /bulk/requests/retry/plan | Generate a requests bulk retry plan |
| [**getRequestBulkRetries()**](BulkRetryRequestsApi.md#getRequestBulkRetries) | **GET** /bulk/requests/retry | Get request bulk retries |
| [**getRequestBulkRetry()**](BulkRetryRequestsApi.md#getRequestBulkRetry) | **GET** /bulk/requests/retry/{id} | Get a requests bulk retry |


## `cancelRequestBulkRetry()`

```php
cancelRequestBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Cancel a requests bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cancelRequestBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryRequestsApi->cancelRequestBulkRetry: ', $e->getMessage(), PHP_EOL;
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

## `createRequestBulkRetry()`

```php
createRequestBulkRetry($create_request_bulk_retry_request): \Hookdeck\Model\BatchOperation
```

Create a requests bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_request_bulk_retry_request = new \Hookdeck\Model\CreateRequestBulkRetryRequest(); // \Hookdeck\Model\CreateRequestBulkRetryRequest

try {
    $result = $apiInstance->createRequestBulkRetry($create_request_bulk_retry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryRequestsApi->createRequestBulkRetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_request_bulk_retry_request** | [**\Hookdeck\Model\CreateRequestBulkRetryRequest**](../Model/CreateRequestBulkRetryRequest.md)|  | |

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

## `generateRequestBulkRetryPlan()`

```php
generateRequestBulkRetryPlan($query): \Hookdeck\Model\GenerateEventBulkRetryPlan200Response
```

Generate a requests bulk retry plan



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


$apiInstance = new Hookdeck\Api\BulkRetryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = new \Hookdeck\Model\\Hookdeck\Model\CreateRequestBulkRetryRequestQuery(); // \Hookdeck\Model\CreateRequestBulkRetryRequestQuery

try {
    $result = $apiInstance->generateRequestBulkRetryPlan($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryRequestsApi->generateRequestBulkRetryPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | [**\Hookdeck\Model\CreateRequestBulkRetryRequestQuery**](../Model/.md)|  | [optional] |

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

## `getRequestBulkRetries()`

```php
getRequestBulkRetries($cancelled_at, $completed_at, $created_at, $id, $in_progress, $query, $query_partial_match, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\BatchOperationPaginatedResult
```

Get request bulk retries



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


$apiInstance = new Hookdeck\Api\BulkRetryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelled_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter
$completed_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter(); // \Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter
$id = new \Hookdeck\Model\\Hookdeck\Model\GetEventBulkRetriesIdParameter(); // \Hookdeck\Model\GetEventBulkRetriesIdParameter
$in_progress = True; // bool
$query = new \Hookdeck\Model\\Hookdeck\Model\GetRequestBulkRetriesQueryParameter(); // \Hookdeck\Model\GetRequestBulkRetriesQueryParameter
$query_partial_match = True; // bool
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getRequestBulkRetries($cancelled_at, $completed_at, $created_at, $id, $in_progress, $query, $query_partial_match, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryRequestsApi->getRequestBulkRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelled_at** | [**\Hookdeck\Model\GetEventBulkRetriesCancelledAtParameter**](../Model/.md)|  | [optional] |
| **completed_at** | [**\Hookdeck\Model\GetEventBulkRetriesCompletedAtParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetEventBulkRetriesCreatedAtParameter**](../Model/.md)|  | [optional] |
| **id** | [**\Hookdeck\Model\GetEventBulkRetriesIdParameter**](../Model/.md)|  | [optional] |
| **in_progress** | **bool**|  | [optional] |
| **query** | [**\Hookdeck\Model\GetRequestBulkRetriesQueryParameter**](../Model/.md)|  | [optional] |
| **query_partial_match** | **bool**|  | [optional] |
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

## `getRequestBulkRetry()`

```php
getRequestBulkRetry($id): \Hookdeck\Model\BatchOperation
```

Get a requests bulk retry



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


$apiInstance = new Hookdeck\Api\BulkRetryRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getRequestBulkRetry($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkRetryRequestsApi->getRequestBulkRetry: ', $e->getMessage(), PHP_EOL;
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
