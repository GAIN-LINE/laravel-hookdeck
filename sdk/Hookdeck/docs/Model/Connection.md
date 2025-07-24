# # Connection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the connection |
**name** | **string** | Unique name of the connection for this source |
**full_name** | **string** | Full name of the connection concatenated from source, connection and desitnation name |
**description** | **string** | Description of the connection |
**team_id** | **string** | ID of the project |
**destination** | [**\Hookdeck\Model\Destination**](Destination.md) |  |
**source** | [**\Hookdeck\Model\Source**](Source.md) |  |
**rules** | [**\Hookdeck\Model\Rule[]**](Rule.md) | Array of rules configured on the connection |
**disabled_at** | **\DateTime** | Date the connection was disabled |
**paused_at** | **\DateTime** | Date the connection was paused |
**updated_at** | **\DateTime** | Date the connection was last updated |
**created_at** | **\DateTime** | Date the connection was created |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
