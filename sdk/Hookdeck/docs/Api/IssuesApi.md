# Hookdeck\IssuesApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dismissIssue()**](IssuesApi.md#dismissIssue) | **DELETE** /issues/{id} | Dismiss an issue |
| [**getIssue()**](IssuesApi.md#getIssue) | **GET** /issues/{id} | Get a single issue |
| [**getIssueCount()**](IssuesApi.md#getIssueCount) | **GET** /issues/count | Get the number of issues |
| [**getIssues()**](IssuesApi.md#getIssues) | **GET** /issues | Get issues |
| [**updateIssue()**](IssuesApi.md#updateIssue) | **PUT** /issues/{id} | Update issue |


## `dismissIssue()`

```php
dismissIssue($id): \Hookdeck\Model\Issue
```

Dismiss an issue



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


$apiInstance = new Hookdeck\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->dismissIssue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->dismissIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Issue**](../Model/Issue.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssue()`

```php
getIssue($id): \Hookdeck\Model\IssueWithData
```

Get a single issue



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


$apiInstance = new Hookdeck\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getIssue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\IssueWithData**](../Model/IssueWithData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueCount()`

```php
getIssueCount($id, $issue_trigger_id, $type, $status, $merged_with, $aggregation_keys, $created_at, $first_seen_at, $last_seen_at, $dismissed_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\IssueCount
```

Get the number of issues



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


$apiInstance = new Hookdeck\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesIdParameter(); // \Hookdeck\Model\GetIssuesIdParameter
$issue_trigger_id = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesIssueTriggerIdParameter(); // \Hookdeck\Model\GetIssuesIssueTriggerIdParameter
$type = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesTypeParameter(); // \Hookdeck\Model\GetIssuesTypeParameter
$status = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesStatusParameter(); // \Hookdeck\Model\GetIssuesStatusParameter
$merged_with = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesMergedWithParameter(); // \Hookdeck\Model\GetIssuesMergedWithParameter
$aggregation_keys = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesAggregationKeysParameter(); // \Hookdeck\Model\GetIssuesAggregationKeysParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesCreatedAtParameter(); // \Hookdeck\Model\GetIssuesCreatedAtParameter
$first_seen_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesFirstSeenAtParameter(); // \Hookdeck\Model\GetIssuesFirstSeenAtParameter
$last_seen_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesLastSeenAtParameter(); // \Hookdeck\Model\GetIssuesLastSeenAtParameter
$dismissed_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesDismissedAtParameter(); // \Hookdeck\Model\GetIssuesDismissedAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesOrderByParameter(); // \Hookdeck\Model\GetIssuesOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getIssueCount($id, $issue_trigger_id, $type, $status, $merged_with, $aggregation_keys, $created_at, $first_seen_at, $last_seen_at, $dismissed_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssueCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetIssuesIdParameter**](../Model/.md)|  | [optional] |
| **issue_trigger_id** | [**\Hookdeck\Model\GetIssuesIssueTriggerIdParameter**](../Model/.md)|  | [optional] |
| **type** | [**\Hookdeck\Model\GetIssuesTypeParameter**](../Model/.md)|  | [optional] |
| **status** | [**\Hookdeck\Model\GetIssuesStatusParameter**](../Model/.md)|  | [optional] |
| **merged_with** | [**\Hookdeck\Model\GetIssuesMergedWithParameter**](../Model/.md)|  | [optional] |
| **aggregation_keys** | [**\Hookdeck\Model\GetIssuesAggregationKeysParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetIssuesCreatedAtParameter**](../Model/.md)|  | [optional] |
| **first_seen_at** | [**\Hookdeck\Model\GetIssuesFirstSeenAtParameter**](../Model/.md)|  | [optional] |
| **last_seen_at** | [**\Hookdeck\Model\GetIssuesLastSeenAtParameter**](../Model/.md)|  | [optional] |
| **dismissed_at** | [**\Hookdeck\Model\GetIssuesDismissedAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetIssuesOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\IssueCount**](../Model/IssueCount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssues()`

```php
getIssues($id, $issue_trigger_id, $type, $status, $merged_with, $aggregation_keys, $created_at, $first_seen_at, $last_seen_at, $dismissed_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\IssueWithDataPaginatedResult
```

Get issues



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


$apiInstance = new Hookdeck\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesIdParameter(); // \Hookdeck\Model\GetIssuesIdParameter
$issue_trigger_id = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesIssueTriggerIdParameter(); // \Hookdeck\Model\GetIssuesIssueTriggerIdParameter
$type = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesTypeParameter(); // \Hookdeck\Model\GetIssuesTypeParameter
$status = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesStatusParameter(); // \Hookdeck\Model\GetIssuesStatusParameter
$merged_with = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesMergedWithParameter(); // \Hookdeck\Model\GetIssuesMergedWithParameter
$aggregation_keys = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesAggregationKeysParameter(); // \Hookdeck\Model\GetIssuesAggregationKeysParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesCreatedAtParameter(); // \Hookdeck\Model\GetIssuesCreatedAtParameter
$first_seen_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesFirstSeenAtParameter(); // \Hookdeck\Model\GetIssuesFirstSeenAtParameter
$last_seen_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesLastSeenAtParameter(); // \Hookdeck\Model\GetIssuesLastSeenAtParameter
$dismissed_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesDismissedAtParameter(); // \Hookdeck\Model\GetIssuesDismissedAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetIssuesOrderByParameter(); // \Hookdeck\Model\GetIssuesOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getIssues($id, $issue_trigger_id, $type, $status, $merged_with, $aggregation_keys, $created_at, $first_seen_at, $last_seen_at, $dismissed_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->getIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetIssuesIdParameter**](../Model/.md)|  | [optional] |
| **issue_trigger_id** | [**\Hookdeck\Model\GetIssuesIssueTriggerIdParameter**](../Model/.md)|  | [optional] |
| **type** | [**\Hookdeck\Model\GetIssuesTypeParameter**](../Model/.md)|  | [optional] |
| **status** | [**\Hookdeck\Model\GetIssuesStatusParameter**](../Model/.md)|  | [optional] |
| **merged_with** | [**\Hookdeck\Model\GetIssuesMergedWithParameter**](../Model/.md)|  | [optional] |
| **aggregation_keys** | [**\Hookdeck\Model\GetIssuesAggregationKeysParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetIssuesCreatedAtParameter**](../Model/.md)|  | [optional] |
| **first_seen_at** | [**\Hookdeck\Model\GetIssuesFirstSeenAtParameter**](../Model/.md)|  | [optional] |
| **last_seen_at** | [**\Hookdeck\Model\GetIssuesLastSeenAtParameter**](../Model/.md)|  | [optional] |
| **dismissed_at** | [**\Hookdeck\Model\GetIssuesDismissedAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetIssuesOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\IssueWithDataPaginatedResult**](../Model/IssueWithDataPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIssue()`

```php
updateIssue($id, $update_issue_request): \Hookdeck\Model\Issue
```

Update issue



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


$apiInstance = new Hookdeck\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_issue_request = new \Hookdeck\Model\UpdateIssueRequest(); // \Hookdeck\Model\UpdateIssueRequest

try {
    $result = $apiInstance->updateIssue($id, $update_issue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->updateIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_issue_request** | [**\Hookdeck\Model\UpdateIssueRequest**](../Model/UpdateIssueRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Issue**](../Model/Issue.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
