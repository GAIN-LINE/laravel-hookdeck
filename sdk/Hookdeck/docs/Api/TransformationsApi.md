# Hookdeck\TransformationsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTransformation()**](TransformationsApi.md#createTransformation) | **POST** /transformations | Create a transformation |
| [**deleteTransformation()**](TransformationsApi.md#deleteTransformation) | **DELETE** /transformations/{id} | Delete a transformation |
| [**getTransformation()**](TransformationsApi.md#getTransformation) | **GET** /transformations/{id} | Get a transformation |
| [**getTransformationExecution()**](TransformationsApi.md#getTransformationExecution) | **GET** /transformations/{id}/executions/{execution_id} | Get a transformation execution |
| [**getTransformationExecutions()**](TransformationsApi.md#getTransformationExecutions) | **GET** /transformations/{id}/executions | Get transformation executions |
| [**getTransformations()**](TransformationsApi.md#getTransformations) | **GET** /transformations | Get transformations |
| [**testTransformation()**](TransformationsApi.md#testTransformation) | **PUT** /transformations/run | Test a transformation code |
| [**updateTransformation()**](TransformationsApi.md#updateTransformation) | **PUT** /transformations/{id} | Update a transformation |
| [**upsertTransformation()**](TransformationsApi.md#upsertTransformation) | **PUT** /transformations | Update or create a transformation |


## `createTransformation()`

```php
createTransformation($upsert_transformation_request): \Hookdeck\Model\Transformation
```

Create a transformation



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_transformation_request = new \Hookdeck\Model\UpsertTransformationRequest(); // \Hookdeck\Model\UpsertTransformationRequest

try {
    $result = $apiInstance->createTransformation($upsert_transformation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->createTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_transformation_request** | [**\Hookdeck\Model\UpsertTransformationRequest**](../Model/UpsertTransformationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Transformation**](../Model/Transformation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransformation()`

```php
deleteTransformation($id): \Hookdeck\Model\DeleteTransformation200Response
```

Delete a transformation



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteTransformation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->deleteTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeleteTransformation200Response**](../Model/DeleteTransformation200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransformation()`

```php
getTransformation($id): \Hookdeck\Model\Transformation
```

Get a transformation



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTransformation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->getTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Transformation**](../Model/Transformation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransformationExecution()`

```php
getTransformationExecution($id, $execution_id): \Hookdeck\Model\TransformationExecution
```

Get a transformation execution



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$execution_id = 'execution_id_example'; // string

try {
    $result = $apiInstance->getTransformationExecution($id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->getTransformationExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **execution_id** | **string**|  | |

### Return type

[**\Hookdeck\Model\TransformationExecution**](../Model/TransformationExecution.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransformationExecutions()`

```php
getTransformationExecutions($id, $log_level, $webhook_id, $issue_id, $created_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\TransformationExecutionPaginatedResult
```

Get transformation executions



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$log_level = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationExecutionsLogLevelParameter(); // \Hookdeck\Model\GetTransformationExecutionsLogLevelParameter
$webhook_id = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationExecutionsWebhookIdParameter(); // \Hookdeck\Model\GetTransformationExecutionsWebhookIdParameter
$issue_id = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationExecutionsIssueIdParameter(); // \Hookdeck\Model\GetTransformationExecutionsIssueIdParameter
$created_at = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationExecutionsCreatedAtParameter(); // \Hookdeck\Model\GetTransformationExecutionsCreatedAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getTransformationExecutions($id, $log_level, $webhook_id, $issue_id, $created_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->getTransformationExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **log_level** | [**\Hookdeck\Model\GetTransformationExecutionsLogLevelParameter**](../Model/.md)|  | [optional] |
| **webhook_id** | [**\Hookdeck\Model\GetTransformationExecutionsWebhookIdParameter**](../Model/.md)|  | [optional] |
| **issue_id** | [**\Hookdeck\Model\GetTransformationExecutionsIssueIdParameter**](../Model/.md)|  | [optional] |
| **created_at** | [**\Hookdeck\Model\GetTransformationExecutionsCreatedAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\TransformationExecutionPaginatedResult**](../Model/TransformationExecutionPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransformations()`

```php
getTransformations($id, $name, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\TransformationPaginatedResult
```

Get transformations



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationsIdParameter(); // \Hookdeck\Model\GetTransformationsIdParameter
$name = new \Hookdeck\Model\\Hookdeck\Model\GetTransformationsNameParameter(); // \Hookdeck\Model\GetTransformationsNameParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getTransformations($id, $name, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->getTransformations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetTransformationsIdParameter**](../Model/.md)|  | [optional] |
| **name** | [**\Hookdeck\Model\GetTransformationsNameParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\TransformationPaginatedResult**](../Model/TransformationPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testTransformation()`

```php
testTransformation($test_transformation_request): \Hookdeck\Model\TransformationExecutorOutput
```

Test a transformation code



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_transformation_request = new \Hookdeck\Model\TestTransformationRequest(); // \Hookdeck\Model\TestTransformationRequest

try {
    $result = $apiInstance->testTransformation($test_transformation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->testTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **test_transformation_request** | [**\Hookdeck\Model\TestTransformationRequest**](../Model/TestTransformationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\TransformationExecutorOutput**](../Model/TransformationExecutorOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransformation()`

```php
updateTransformation($id, $update_transformation_request): \Hookdeck\Model\Transformation
```

Update a transformation



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_transformation_request = new \Hookdeck\Model\UpdateTransformationRequest(); // \Hookdeck\Model\UpdateTransformationRequest

try {
    $result = $apiInstance->updateTransformation($id, $update_transformation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->updateTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_transformation_request** | [**\Hookdeck\Model\UpdateTransformationRequest**](../Model/UpdateTransformationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Transformation**](../Model/Transformation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertTransformation()`

```php
upsertTransformation($upsert_transformation_request): \Hookdeck\Model\Transformation
```

Update or create a transformation



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


$apiInstance = new Hookdeck\Api\TransformationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_transformation_request = new \Hookdeck\Model\UpsertTransformationRequest(); // \Hookdeck\Model\UpsertTransformationRequest

try {
    $result = $apiInstance->upsertTransformation($upsert_transformation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformationsApi->upsertTransformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_transformation_request** | [**\Hookdeck\Model\UpsertTransformationRequest**](../Model/UpsertTransformationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Transformation**](../Model/Transformation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
