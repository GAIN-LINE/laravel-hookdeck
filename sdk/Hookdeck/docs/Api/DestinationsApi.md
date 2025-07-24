# Hookdeck\DestinationsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDestination()**](DestinationsApi.md#createDestination) | **POST** /destinations | Create a destination |
| [**deleteDestination()**](DestinationsApi.md#deleteDestination) | **DELETE** /destinations/{id} | Delete a destination |
| [**disableDestination()**](DestinationsApi.md#disableDestination) | **PUT** /destinations/{id}/disable | Disable a destination |
| [**disableDestinationArchive()**](DestinationsApi.md#disableDestinationArchive) | **PUT** /destinations/{id}/archive | Disable a destination |
| [**enableDestination()**](DestinationsApi.md#enableDestination) | **PUT** /destinations/{id}/enable | Enable a destination |
| [**enableDestinationUnarchive()**](DestinationsApi.md#enableDestinationUnarchive) | **PUT** /destinations/{id}/unarchive | Enable a destination |
| [**getDestination()**](DestinationsApi.md#getDestination) | **GET** /destinations/{id} | Get a destination |
| [**getDestinations()**](DestinationsApi.md#getDestinations) | **GET** /destinations | Get destinations |
| [**updateDestination()**](DestinationsApi.md#updateDestination) | **PUT** /destinations/{id} | Update a destination |
| [**upsertDestination()**](DestinationsApi.md#upsertDestination) | **PUT** /destinations | Update or create a destination |


## `createDestination()`

```php
createDestination($upsert_destination_request): \Hookdeck\Model\Destination
```

Create a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_destination_request = new \Hookdeck\Model\UpsertDestinationRequest(); // \Hookdeck\Model\UpsertDestinationRequest

try {
    $result = $apiInstance->createDestination($upsert_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_destination_request** | [**\Hookdeck\Model\UpsertDestinationRequest**](../Model/UpsertDestinationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDestination()`

```php
deleteDestination($id): \Hookdeck\Model\DeleteDestination200Response
```

Delete a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteDestination($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeleteDestination200Response**](../Model/DeleteDestination200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableDestination()`

```php
disableDestination($id): \Hookdeck\Model\Destination
```

Disable a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableDestination($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->disableDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableDestinationArchive()`

```php
disableDestinationArchive($id): \Hookdeck\Model\Destination
```

Disable a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableDestinationArchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->disableDestinationArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableDestination()`

```php
enableDestination($id): \Hookdeck\Model\Destination
```

Enable a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableDestination($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->enableDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableDestinationUnarchive()`

```php
enableDestinationUnarchive($id): \Hookdeck\Model\Destination
```

Enable a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableDestinationUnarchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->enableDestinationUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestination()`

```php
getDestination($id, $include): \Hookdeck\Model\Destination
```

Get a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$include = 'include_example'; // string

try {
    $result = $apiInstance->getDestination($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **include** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestinations()`

```php
getDestinations($id, $name, $disabled, $disabled_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\DestinationPaginatedResult
```

Get destinations



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetDestinationsIdParameter(); // \Hookdeck\Model\GetDestinationsIdParameter
$name = new \Hookdeck\Model\\Hookdeck\Model\GetDestinationsNameParameter(); // \Hookdeck\Model\GetDestinationsNameParameter
$disabled = True; // bool
$disabled_at = new \Hookdeck\Model\\Hookdeck\Model\GetDestinationsDisabledAtParameter(); // \Hookdeck\Model\GetDestinationsDisabledAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getDestinations($id, $name, $disabled, $disabled_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetDestinationsIdParameter**](../Model/.md)|  | [optional] |
| **name** | [**\Hookdeck\Model\GetDestinationsNameParameter**](../Model/.md)|  | [optional] |
| **disabled** | **bool**|  | [optional] |
| **disabled_at** | [**\Hookdeck\Model\GetDestinationsDisabledAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\DestinationPaginatedResult**](../Model/DestinationPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDestination()`

```php
updateDestination($id, $update_destination_request): \Hookdeck\Model\Destination
```

Update a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_destination_request = new \Hookdeck\Model\UpdateDestinationRequest(); // \Hookdeck\Model\UpdateDestinationRequest

try {
    $result = $apiInstance->updateDestination($id, $update_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->updateDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_destination_request** | [**\Hookdeck\Model\UpdateDestinationRequest**](../Model/UpdateDestinationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertDestination()`

```php
upsertDestination($upsert_destination_request): \Hookdeck\Model\Destination
```

Update or create a destination



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


$apiInstance = new Hookdeck\Api\DestinationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_destination_request = new \Hookdeck\Model\UpsertDestinationRequest(); // \Hookdeck\Model\UpsertDestinationRequest

try {
    $result = $apiInstance->upsertDestination($upsert_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsApi->upsertDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_destination_request** | [**\Hookdeck\Model\UpsertDestinationRequest**](../Model/UpsertDestinationRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Destination**](../Model/Destination.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
