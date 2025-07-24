# Hookdeck\ConnectionsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countConnections()**](ConnectionsApi.md#countConnections) | **GET** /connections/count | Count connections |
| [**createConnection()**](ConnectionsApi.md#createConnection) | **POST** /connections | Create a connection |
| [**deleteConnection()**](ConnectionsApi.md#deleteConnection) | **DELETE** /connections/{id} | Delete a connection |
| [**disableConnection()**](ConnectionsApi.md#disableConnection) | **PUT** /connections/{id}/disable | Disable a connection |
| [**disableConnectionArchive()**](ConnectionsApi.md#disableConnectionArchive) | **PUT** /connections/{id}/archive | Disable a connection |
| [**enableConnection()**](ConnectionsApi.md#enableConnection) | **PUT** /connections/{id}/enable | Enable a connection |
| [**enableConnectionUnarchive()**](ConnectionsApi.md#enableConnectionUnarchive) | **PUT** /connections/{id}/unarchive | Enable a connection |
| [**getConnection()**](ConnectionsApi.md#getConnection) | **GET** /connections/{id} | Get a single connection |
| [**getConnections()**](ConnectionsApi.md#getConnections) | **GET** /connections | Get connections |
| [**pauseConnection()**](ConnectionsApi.md#pauseConnection) | **PUT** /connections/{id}/pause | Pause a connection |
| [**unpauseConnection()**](ConnectionsApi.md#unpauseConnection) | **PUT** /connections/{id}/unpause | Unpause a connection |
| [**updateConnection()**](ConnectionsApi.md#updateConnection) | **PUT** /connections/{id} | Update a connection |
| [**upsertConnection()**](ConnectionsApi.md#upsertConnection) | **PUT** /connections | Update or create a connection |


## `countConnections()`

```php
countConnections($destination_id, $source_id, $disabled, $disabled_at, $paused_at): \Hookdeck\Model\CountConnections200Response
```

Count connections



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsDestinationIdParameter(); // \Hookdeck\Model\GetConnectionsDestinationIdParameter
$source_id = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsSourceIdParameter(); // \Hookdeck\Model\GetConnectionsSourceIdParameter
$disabled = True; // bool
$disabled_at = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsDisabledAtParameter(); // \Hookdeck\Model\GetConnectionsDisabledAtParameter
$paused_at = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsPausedAtParameter(); // \Hookdeck\Model\GetConnectionsPausedAtParameter

try {
    $result = $apiInstance->countConnections($destination_id, $source_id, $disabled, $disabled_at, $paused_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->countConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **destination_id** | [**\Hookdeck\Model\GetConnectionsDestinationIdParameter**](../Model/.md)|  | [optional] |
| **source_id** | [**\Hookdeck\Model\GetConnectionsSourceIdParameter**](../Model/.md)|  | [optional] |
| **disabled** | **bool**|  | [optional] |
| **disabled_at** | [**\Hookdeck\Model\GetConnectionsDisabledAtParameter**](../Model/.md)|  | [optional] |
| **paused_at** | [**\Hookdeck\Model\GetConnectionsPausedAtParameter**](../Model/.md)|  | [optional] |

### Return type

[**\Hookdeck\Model\CountConnections200Response**](../Model/CountConnections200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConnection()`

```php
createConnection($upsert_connection_request): \Hookdeck\Model\Connection
```

Create a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_connection_request = new \Hookdeck\Model\UpsertConnectionRequest(); // \Hookdeck\Model\UpsertConnectionRequest

try {
    $result = $apiInstance->createConnection($upsert_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->createConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_connection_request** | [**\Hookdeck\Model\UpsertConnectionRequest**](../Model/UpsertConnectionRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConnection()`

```php
deleteConnection($id): \Hookdeck\Model\DeleteConnection200Response
```

Delete a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->deleteConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeleteConnection200Response**](../Model/DeleteConnection200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableConnection()`

```php
disableConnection($id): \Hookdeck\Model\Connection
```

Disable a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->disableConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableConnectionArchive()`

```php
disableConnectionArchive($id): \Hookdeck\Model\Connection
```

Disable a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableConnectionArchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->disableConnectionArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableConnection()`

```php
enableConnection($id): \Hookdeck\Model\Connection
```

Enable a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->enableConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableConnectionUnarchive()`

```php
enableConnectionUnarchive($id): \Hookdeck\Model\Connection
```

Enable a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableConnectionUnarchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->enableConnectionUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnection()`

```php
getConnection($id): \Hookdeck\Model\Connection
```

Get a single connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnections()`

```php
getConnections($id, $name, $destination_id, $source_id, $disabled, $disabled_at, $full_name, $paused_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\ConnectionPaginatedResult
```

Get connections



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsIdParameter(); // \Hookdeck\Model\GetConnectionsIdParameter
$name = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsNameParameter(); // \Hookdeck\Model\GetConnectionsNameParameter
$destination_id = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsDestinationIdParameter(); // \Hookdeck\Model\GetConnectionsDestinationIdParameter
$source_id = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsSourceIdParameter(); // \Hookdeck\Model\GetConnectionsSourceIdParameter
$disabled = True; // bool
$disabled_at = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsDisabledAtParameter(); // \Hookdeck\Model\GetConnectionsDisabledAtParameter
$full_name = 'full_name_example'; // string
$paused_at = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsPausedAtParameter(); // \Hookdeck\Model\GetConnectionsPausedAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetConnectionsOrderByParameter(); // \Hookdeck\Model\GetConnectionsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getConnections($id, $name, $destination_id, $source_id, $disabled, $disabled_at, $full_name, $paused_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetConnectionsIdParameter**](../Model/.md)|  | [optional] |
| **name** | [**\Hookdeck\Model\GetConnectionsNameParameter**](../Model/.md)|  | [optional] |
| **destination_id** | [**\Hookdeck\Model\GetConnectionsDestinationIdParameter**](../Model/.md)|  | [optional] |
| **source_id** | [**\Hookdeck\Model\GetConnectionsSourceIdParameter**](../Model/.md)|  | [optional] |
| **disabled** | **bool**|  | [optional] |
| **disabled_at** | [**\Hookdeck\Model\GetConnectionsDisabledAtParameter**](../Model/.md)|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **paused_at** | [**\Hookdeck\Model\GetConnectionsPausedAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetConnectionsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\ConnectionPaginatedResult**](../Model/ConnectionPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseConnection()`

```php
pauseConnection($id): \Hookdeck\Model\Connection
```

Pause a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->pauseConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->pauseConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpauseConnection()`

```php
unpauseConnection($id): \Hookdeck\Model\Connection
```

Unpause a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->unpauseConnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->unpauseConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConnection()`

```php
updateConnection($id, $update_connection_request): \Hookdeck\Model\Connection
```

Update a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_connection_request = new \Hookdeck\Model\UpdateConnectionRequest(); // \Hookdeck\Model\UpdateConnectionRequest

try {
    $result = $apiInstance->updateConnection($id, $update_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->updateConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_connection_request** | [**\Hookdeck\Model\UpdateConnectionRequest**](../Model/UpdateConnectionRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertConnection()`

```php
upsertConnection($upsert_connection_request): \Hookdeck\Model\Connection
```

Update or create a connection



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


$apiInstance = new Hookdeck\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_connection_request = new \Hookdeck\Model\UpsertConnectionRequest(); // \Hookdeck\Model\UpsertConnectionRequest

try {
    $result = $apiInstance->upsertConnection($upsert_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->upsertConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_connection_request** | [**\Hookdeck\Model\UpsertConnectionRequest**](../Model/UpsertConnectionRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Connection**](../Model/Connection.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
