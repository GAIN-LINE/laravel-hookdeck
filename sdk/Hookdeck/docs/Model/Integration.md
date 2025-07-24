# # Integration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the integration |
**team_id** | **string** | ID of the project |
**label** | **string** | Label of the integration |
**provider** | [**\Hookdeck\Model\IntegrationProvider**](IntegrationProvider.md) |  |
**features** | [**\Hookdeck\Model\IntegrationFeature[]**](IntegrationFeature.md) | List of features to enable (see features list below) |
**configs** | [**\Hookdeck\Model\CreateIntegrationRequestConfigs**](CreateIntegrationRequestConfigs.md) |  |
**sources** | **string[]** | List of source IDs the integration is attached to |
**updated_at** | **\DateTime** | Date the integration was last updated |
**created_at** | **\DateTime** | Date the integration was created |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
