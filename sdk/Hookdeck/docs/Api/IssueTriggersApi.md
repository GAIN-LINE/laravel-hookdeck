# Hookdeck\IssueTriggersApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIssueTrigger()**](IssueTriggersApi.md#createIssueTrigger) | **POST** /issue-triggers | Create an issue trigger |
| [**deleteIssueTrigger()**](IssueTriggersApi.md#deleteIssueTrigger) | **DELETE** /issue-triggers/{id} | Delete an issue trigger |
| [**disableIssueTrigger()**](IssueTriggersApi.md#disableIssueTrigger) | **PUT** /issue-triggers/{id}/disable | Disable an issue trigger |
| [**enableIssueTrigger()**](IssueTriggersApi.md#enableIssueTrigger) | **PUT** /issue-triggers/{id}/enable | Enable an issue trigger |
| [**getIssueTrigger()**](IssueTriggersApi.md#getIssueTrigger) | **GET** /issue-triggers/{id} | Get a single issue trigger |
| [**getIssueTriggers()**](IssueTriggersApi.md#getIssueTriggers) | **GET** /issue-triggers | Get issue triggers |
| [**updateIssueTrigger()**](IssueTriggersApi.md#updateIssueTrigger) | **PUT** /issue-triggers/{id} | Update an issue trigger |
| [**upsertIssueTrigger()**](IssueTriggersApi.md#upsertIssueTrigger) | **PUT** /issue-triggers | Create or update an issue trigger |


## `createIssueTrigger()`

```php
createIssueTrigger($create_issue_trigger_request): \Hookdeck\Model\IssueTrigger
```

Create an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_issue_trigger_request = new \Hookdeck\Model\CreateIssueTriggerRequest(); // \Hookdeck\Model\CreateIssueTriggerRequest

try {
    $result = $apiInstance->createIssueTrigger($create_issue_trigger_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->createIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_issue_trigger_request** | [**\Hookdeck\Model\CreateIssueTriggerRequest**](../Model/CreateIssueTriggerRequest.md)|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssueTrigger()`

```php
deleteIssueTrigger($id): \Hookdeck\Model\DeletedIssueTriggerResponse
```

Delete an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteIssueTrigger($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->deleteIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeletedIssueTriggerResponse**](../Model/DeletedIssueTriggerResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableIssueTrigger()`

```php
disableIssueTrigger($id): \Hookdeck\Model\IssueTrigger
```

Disable an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableIssueTrigger($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->disableIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableIssueTrigger()`

```php
enableIssueTrigger($id): \Hookdeck\Model\IssueTrigger
```

Enable an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableIssueTrigger($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->enableIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTrigger()`

```php
getIssueTrigger($id): \Hookdeck\Model\IssueTrigger
```

Get a single issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getIssueTrigger($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->getIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssueTriggers()`

```php
getIssueTriggers($name, $type, $disabled_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\IssueTriggerPaginatedResult
```

Get issue triggers



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$type = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersTypeParameter(); // \Hookdeck\Model\GetIssueTriggersTypeParameter
$disabled_at = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDisabledAtParameter(); // \Hookdeck\Model\GetIssueTriggersDisabledAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersOrderByParameter(); // \Hookdeck\Model\GetIssueTriggersOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getIssueTriggers($name, $type, $disabled_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->getIssueTriggers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
| **type** | [**\Hookdeck\Model\GetIssueTriggersTypeParameter**](../Model/.md)|  | [optional] |
| **disabled_at** | [**\Hookdeck\Model\GetIssueTriggersDisabledAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetIssueTriggersOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\IssueTriggerPaginatedResult**](../Model/IssueTriggerPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIssueTrigger()`

```php
updateIssueTrigger($id, $update_issue_trigger_request): \Hookdeck\Model\IssueTrigger
```

Update an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_issue_trigger_request = new \Hookdeck\Model\UpdateIssueTriggerRequest(); // \Hookdeck\Model\UpdateIssueTriggerRequest

try {
    $result = $apiInstance->updateIssueTrigger($id, $update_issue_trigger_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->updateIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_issue_trigger_request** | [**\Hookdeck\Model\UpdateIssueTriggerRequest**](../Model/UpdateIssueTriggerRequest.md)|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertIssueTrigger()`

```php
upsertIssueTrigger($upsert_issue_trigger_request): \Hookdeck\Model\IssueTrigger
```

Create or update an issue trigger



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


$apiInstance = new Hookdeck\Api\IssueTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_issue_trigger_request = new \Hookdeck\Model\UpsertIssueTriggerRequest(); // \Hookdeck\Model\UpsertIssueTriggerRequest

try {
    $result = $apiInstance->upsertIssueTrigger($upsert_issue_trigger_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueTriggersApi->upsertIssueTrigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_issue_trigger_request** | [**\Hookdeck\Model\UpsertIssueTriggerRequest**](../Model/UpsertIssueTriggerRequest.md)|  | |

### Return type

[**\Hookdeck\Model\IssueTrigger**](../Model/IssueTrigger.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
