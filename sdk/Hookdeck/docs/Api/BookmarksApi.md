# Hookdeck\BookmarksApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBookmark()**](BookmarksApi.md#createBookmark) | **POST** /bookmarks | Create a bookmark |
| [**deleteBookmark()**](BookmarksApi.md#deleteBookmark) | **DELETE** /bookmarks/{id} | Delete a bookmark |
| [**getBookmark()**](BookmarksApi.md#getBookmark) | **GET** /bookmarks/{id} | Get a single bookmark |
| [**getBookmarkRawBody()**](BookmarksApi.md#getBookmarkRawBody) | **GET** /bookmarks/{id}/raw_body | Get a bookmark raw body data |
| [**getBookmarks()**](BookmarksApi.md#getBookmarks) | **GET** /bookmarks | Get bookmarks |
| [**triggerBookmark()**](BookmarksApi.md#triggerBookmark) | **POST** /bookmarks/{id}/trigger | Trigger a bookmark |
| [**updateBookmark()**](BookmarksApi.md#updateBookmark) | **PUT** /bookmarks/{id} | Update a bookmark |


## `createBookmark()`

```php
createBookmark($create_bookmark_request): \Hookdeck\Model\Bookmark
```

Create a bookmark



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_bookmark_request = new \Hookdeck\Model\CreateBookmarkRequest(); // \Hookdeck\Model\CreateBookmarkRequest

try {
    $result = $apiInstance->createBookmark($create_bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->createBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_bookmark_request** | [**\Hookdeck\Model\CreateBookmarkRequest**](../Model/CreateBookmarkRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBookmark()`

```php
deleteBookmark($id): \Hookdeck\Model\DeletedBookmarkResponse
```

Delete a bookmark



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteBookmark($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->deleteBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeletedBookmarkResponse**](../Model/DeletedBookmarkResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookmark()`

```php
getBookmark($id): \Hookdeck\Model\Bookmark
```

Get a single bookmark



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBookmark($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookmarkRawBody()`

```php
getBookmarkRawBody($id): \Hookdeck\Model\RawBody
```

Get a bookmark raw body data



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getBookmarkRawBody($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getBookmarkRawBody: ', $e->getMessage(), PHP_EOL;
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

## `getBookmarks()`

```php
getBookmarks($id, $name, $webhook_id, $event_data_id, $label, $last_used_at, $order_by, $dir, $limit, $next, $prev): \Hookdeck\Model\BookmarkPaginatedResult
```

Get bookmarks



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksIdParameter(); // \Hookdeck\Model\GetBookmarksIdParameter
$name = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksNameParameter(); // \Hookdeck\Model\GetBookmarksNameParameter
$webhook_id = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksWebhookIdParameter(); // \Hookdeck\Model\GetBookmarksWebhookIdParameter
$event_data_id = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksEventDataIdParameter(); // \Hookdeck\Model\GetBookmarksEventDataIdParameter
$label = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksLabelParameter(); // \Hookdeck\Model\GetBookmarksLabelParameter
$last_used_at = new \Hookdeck\Model\\Hookdeck\Model\GetBookmarksLastUsedAtParameter(); // \Hookdeck\Model\GetBookmarksLastUsedAtParameter
$order_by = new \Hookdeck\Model\\Hookdeck\Model\GetAttemptsOrderByParameter(); // \Hookdeck\Model\GetAttemptsOrderByParameter
$dir = new \Hookdeck\Model\\Hookdeck\Model\GetIssueTriggersDirParameter(); // \Hookdeck\Model\GetIssueTriggersDirParameter
$limit = 56; // int
$next = 'next_example'; // string
$prev = 'prev_example'; // string

try {
    $result = $apiInstance->getBookmarks($id, $name, $webhook_id, $event_data_id, $label, $last_used_at, $order_by, $dir, $limit, $next, $prev);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getBookmarks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Hookdeck\Model\GetBookmarksIdParameter**](../Model/.md)|  | [optional] |
| **name** | [**\Hookdeck\Model\GetBookmarksNameParameter**](../Model/.md)|  | [optional] |
| **webhook_id** | [**\Hookdeck\Model\GetBookmarksWebhookIdParameter**](../Model/.md)|  | [optional] |
| **event_data_id** | [**\Hookdeck\Model\GetBookmarksEventDataIdParameter**](../Model/.md)|  | [optional] |
| **label** | [**\Hookdeck\Model\GetBookmarksLabelParameter**](../Model/.md)|  | [optional] |
| **last_used_at** | [**\Hookdeck\Model\GetBookmarksLastUsedAtParameter**](../Model/.md)|  | [optional] |
| **order_by** | [**\Hookdeck\Model\GetAttemptsOrderByParameter**](../Model/.md)|  | [optional] |
| **dir** | [**\Hookdeck\Model\GetIssueTriggersDirParameter**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] |
| **next** | **string**|  | [optional] |
| **prev** | **string**|  | [optional] |

### Return type

[**\Hookdeck\Model\BookmarkPaginatedResult**](../Model/BookmarkPaginatedResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerBookmark()`

```php
triggerBookmark($id): \Hookdeck\Model\Event[]
```

Trigger a bookmark



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->triggerBookmark($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->triggerBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Hookdeck\Model\Event[]**](../Model/Event.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBookmark()`

```php
updateBookmark($id, $update_bookmark_request): \Hookdeck\Model\Bookmark
```

Update a bookmark



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


$apiInstance = new Hookdeck\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_bookmark_request = new \Hookdeck\Model\UpdateBookmarkRequest(); // \Hookdeck\Model\UpdateBookmarkRequest

try {
    $result = $apiInstance->updateBookmark($id, $update_bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->updateBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_bookmark_request** | [**\Hookdeck\Model\UpdateBookmarkRequest**](../Model/UpdateBookmarkRequest.md)|  | |

### Return type

[**\Hookdeck\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
