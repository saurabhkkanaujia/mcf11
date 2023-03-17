# # FulfillmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. |
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. |
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. |
**displayable_order_date** | **\DateTime** |  |
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. |
**shipping_speed_category** | [**\Ced\Mcf\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  |
**delivery_window** | [**\Ced\Mcf\Model\DeliveryWindow**](DeliveryWindow.md) |  | [optional]
**destination_address** | [**\Ced\Mcf\Model\Address**](Address.md) |  |
**fulfillment_action** | [**\Ced\Mcf\Model\FulfillmentAction**](FulfillmentAction.md) |  | [optional]
**fulfillment_policy** | [**\Ced\Mcf\Model\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional]
**cod_settings** | [**\Ced\Mcf\Model\CODSettings**](CODSettings.md) |  | [optional]
**received_date** | **\DateTime** |  |
**fulfillment_order_status** | [**\Ced\Mcf\Model\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  |
**status_updated_date** | **\DateTime** |  |
**notification_emails** | **string[]** | A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller. | [optional]
**feature_constraints** | [**\Ced\Mcf\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
