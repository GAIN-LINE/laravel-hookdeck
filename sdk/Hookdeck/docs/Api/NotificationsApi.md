# Hookdeck\NotificationsApi

All URIs are relative to https://api.hookdeck.com/2025-01-01, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCustomDomain()**](NotificationsApi.md#addCustomDomain) | **POST** /teams/current/custom_domains | Add a custom domain to the project |
| [**deleteCustomDomain()**](NotificationsApi.md#deleteCustomDomain) | **DELETE** /teams/current/custom_domains/{domain_id} | Removes a custom domain from the project |
| [**listCustomDomains()**](NotificationsApi.md#listCustomDomains) | **GET** /teams/current/custom_domains | List all custom domains and their verification statuses for the project |
| [**toggleWebhookNotifications()**](NotificationsApi.md#toggleWebhookNotifications) | **PUT** /notifications/webhooks | Toggle webhook notifications for the project |


## `addCustomDomain()`

```php
addCustomDomain($add_custom_hostname): \Hookdeck\Model\AddCustomHostname
```

Add a custom domain to the project



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


$apiInstance = new Hookdeck\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_custom_hostname = new \Hookdeck\Model\AddCustomHostname(); // \Hookdeck\Model\AddCustomHostname

try {
    $result = $apiInstance->addCustomDomain($add_custom_hostname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->addCustomDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_custom_hostname** | [**\Hookdeck\Model\AddCustomHostname**](../Model/AddCustomHostname.md)|  | |

### Return type

[**\Hookdeck\Model\AddCustomHostname**](../Model/AddCustomHostname.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomDomain()`

```php
deleteCustomDomain($domain_id): \Hookdeck\Model\DeleteCustomDomainSchema
```

Removes a custom domain from the project



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


$apiInstance = new Hookdeck\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 'domain_id_example'; // string

try {
    $result = $apiInstance->deleteCustomDomain($domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteCustomDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **string**|  | |

### Return type

[**\Hookdeck\Model\DeleteCustomDomainSchema**](../Model/DeleteCustomDomainSchema.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomDomains()`

```php
listCustomDomains(): \Hookdeck\Model\ListCustomDomainSchemaInner[]
```

List all custom domains and their verification statuses for the project



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


$apiInstance = new Hookdeck\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCustomDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->listCustomDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hookdeck\Model\ListCustomDomainSchemaInner[]**](../Model/ListCustomDomainSchemaInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleWebhookNotifications()`

```php
toggleWebhookNotifications($toggle_webhook_notifications_request): \Hookdeck\Model\ToggleWebhookNotifications
```

Toggle webhook notifications for the project



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


$apiInstance = new Hookdeck\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toggle_webhook_notifications_request = new \Hookdeck\Model\ToggleWebhookNotificationsRequest(); // \Hookdeck\Model\ToggleWebhookNotificationsRequest

try {
    $result = $apiInstance->toggleWebhookNotifications($toggle_webhook_notifications_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->toggleWebhookNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toggle_webhook_notifications_request** | [**\Hookdeck\Model\ToggleWebhookNotificationsRequest**](../Model/ToggleWebhookNotificationsRequest.md)|  | |

### Return type

[**\Hookdeck\Model\ToggleWebhookNotifications**](../Model/ToggleWebhookNotifications.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
