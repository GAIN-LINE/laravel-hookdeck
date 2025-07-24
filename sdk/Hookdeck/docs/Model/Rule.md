# # Rule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | A retry rule must be of type &#x60;retry&#x60; |
**strategy** | [**\Hookdeck\Model\RetryStrategy**](RetryStrategy.md) |  |
**interval** | **int** | Time in MS between each retry | [optional]
**count** | **int** | Maximum number of retries to attempt | [optional]
**response_status_codes** | **string[]** | HTTP codes to retry on. Accepts: range expressions (e.g., \&quot;400-499\&quot;, \&quot;&gt;400\&quot;), specific codes (e.g., 404), and exclusions (e.g., \&quot;!401\&quot;). Example: [\&quot;500-599\&quot;, \&quot;&gt;400\&quot;, 404, \&quot;!401\&quot;] | [optional]
**headers** | [**\Hookdeck\Model\FilterRuleProperty**](FilterRuleProperty.md) |  | [optional]
**body** | [**\Hookdeck\Model\FilterRuleProperty**](FilterRuleProperty.md) |  | [optional]
**query** | [**\Hookdeck\Model\FilterRuleProperty**](FilterRuleProperty.md) |  | [optional]
**path** | [**\Hookdeck\Model\FilterRuleProperty**](FilterRuleProperty.md) |  | [optional]
**transformation_id** | **string** | ID of the attached transformation object. Optional input, always set once the rule is defined | [optional]
**transformation** | [**\Hookdeck\Model\TransformRuleTransformation**](TransformRuleTransformation.md) |  | [optional]
**delay** | **int** | Delay to introduce in MS |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
