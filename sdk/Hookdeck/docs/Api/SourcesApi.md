# Hookdeck\SourcesApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSource()**](SourcesApi.md#createSource) | **POST** /sources | Create a source |
| [**deleteSource()**](SourcesApi.md#deleteSource) | **DELETE** /sources/{id} | Delete a source |
| [**disableSource()**](SourcesApi.md#disableSource) | **PUT** /sources/{id}/disable | Disable a source |
| [**disableSourceArchive()**](SourcesApi.md#disableSourceArchive) | **PUT** /sources/{id}/archive | Disable a source |
| [**enableSource()**](SourcesApi.md#enableSource) | **PUT** /sources/{id}/enable | Enable a source |
| [**enableSourceUnarchive()**](SourcesApi.md#enableSourceUnarchive) | **PUT** /sources/{id}/unarchive | Enable a source |
| [**getSource()**](SourcesApi.md#getSource) | **GET** /sources/{id} | Get a source |
| [**getSources()**](SourcesApi.md#getSources) | **GET** /sources | Get sources |
| [**updateSource()**](SourcesApi.md#updateSource) | **PUT** /sources/{id} | Update a source |
| [**upsertSource()**](SourcesApi.md#upsertSource) | **PUT** /sources | Update or create a source |


## `createSource()`

```php
createSource($upsert_source_request): \Hookdeck\Model\Source
```

Create a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_source_request = new \Hookdeck\Model\UpsertSourceRequest(); // \Hookdeck\Model\UpsertSourceRequest

try {
    $result = $apiInstance->createSource($upsert_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->createSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_source_request** | [**\Hookdeck\Model\UpsertSourceRequest**](../Model/UpsertSourceRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSource()`

```php
deleteSource($id): \Hookdeck\Model\DeleteSource200Response
```

Delete a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->deleteSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeleteSource200Response**](../Model/DeleteSource200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableSource()`

```php
disableSource($id): \Hookdeck\Model\Source
```

Disable a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->disableSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableSourceArchive()`

```php
disableSourceArchive($id): \Hookdeck\Model\Source
```

Disable a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableSourceArchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->disableSourceArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableSource()`

```php
enableSource($id): \Hookdeck\Model\Source
```

Enable a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->enableSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableSourceUnarchive()`

```php
enableSourceUnarchive($id): \Hookdeck\Model\Source
```

Enable a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableSourceUnarchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->enableSourceUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSource()`

```php
getSource($id, $include): \Hookdeck\Model\Source
```

Get a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$include = 'include_example'; // string

try {
    $result = $apiInstance->getSource($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->getSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **include** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSources()`

```php
getSources($id, $name, $disabled, $disabled_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\SourcePaginatedResult
```

Get sources



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetSourcesIdParameter(); // \Hookdeck\Model\GetSourcesIdParameter
$name = new \Hookdeck\Model\\Hookdeck\Model\GetSourcesNameParameter(); // \Hookdeck\Model\GetSourcesNameParameter
$disabled = True; // bool
$disabled_at = new \Hookdeck\Model\\Hookdeck\Model\GetSourcesDisabledAtParameter(); // \Hookdeck\Model\GetSourcesDisabledAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getSources($id, $name, $disabled, $disabled_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->getSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetSourcesIdParameter**](../Model/.md)|  | [optional] |
| **name** | [**\Hookdeck\Model\GetSourcesNameParameter**](../Model/.md)|  | [optional] |
| **disabled** | **bool**|  | [optional] |
| **disabled_at** | [**\Hookdeck\Model\GetSourcesDisabledAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\SourcePaginatedResult**](../Model/SourcePaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSource()`

```php
updateSource($id, $update_source_request): \Hookdeck\Model\Source
```

Update a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_source_request = new \Hookdeck\Model\UpdateSourceRequest(); // \Hookdeck\Model\UpdateSourceRequest

try {
    $result = $apiInstance->updateSource($id, $update_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->updateSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_source_request** | [**\Hookdeck\Model\UpdateSourceRequest**](../Model/UpdateSourceRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertSource()`

```php
upsertSource($upsert_source_request): \Hookdeck\Model\Source
```

Update or create a source



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


$apiInstance = new Hookdeck\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_source_request = new \Hookdeck\Model\UpsertSourceRequest(); // \Hookdeck\Model\UpsertSourceRequest

try {
    $result = $apiInstance->upsertSource($upsert_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->upsertSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_source_request** | [**\Hookdeck\Model\UpsertSourceRequest**](../Model/UpsertSourceRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Source**](../Model/Source.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
