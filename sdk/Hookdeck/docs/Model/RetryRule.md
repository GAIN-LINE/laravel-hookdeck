# # RetryRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | A retry rule must be of type &#x60;retry&#x60; |
**strategy** | [**\Hookdeck\Model\RetryStrategy**](RetryStrategy.md) |  |
**interval** | **int** | Time in MS between each retry | [optional]
**count** | **int** | Maximum number of retries to attempt | [optional]
**response_status_codes** | **string[]** | HTTP codes to retry on. Accepts: range expressions (e.g., \&quot;400-499\&quot;, \&quot;&gt;400\&quot;), specific codes (e.g., 404), and exclusions (e.g., \&quot;!401\&quot;). Example: [\&quot;500-599\&quot;, \&quot;&gt;400\&quot;, 404, \&quot;!401\&quot;] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
