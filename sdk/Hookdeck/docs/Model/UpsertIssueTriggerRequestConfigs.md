# # UpsertIssueTriggerRequestConfigs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**strategy** | [**\Hookdeck\Model\IssueTriggerStrategy**](IssueTriggerStrategy.md) |  |
**connections** | [**\Hookdeck\Model\IssueTriggerDeliveryConfigsConnections**](IssueTriggerDeliveryConfigsConnections.md) |  |
**log_level** | [**\Hookdeck\Model\TransformationExecutionLogLevel**](TransformationExecutionLogLevel.md) |  |
**transformations** | [**\Hookdeck\Model\IssueTriggerTransformationConfigsTransformations**](IssueTriggerTransformationConfigsTransformations.md) |  |
**delay** | **int** | The minimum delay (backpressure) to open the issue for min of 1 minute (60000) and max of 1 day (86400000) |
**destinations** | [**\Hookdeck\Model\IssueTriggerBackpressureConfigsDestinations**](IssueTriggerBackpressureConfigsDestinations.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
