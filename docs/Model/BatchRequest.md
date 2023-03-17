# # BatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI associated with an individual request within a batch. For FeaturedOfferExpectedPrice, this should be &#39;/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice&#39;. |
**method** | [**\Ced\Mcf\Model\HttpMethod**](HttpMethod.md) |  |
**body** | **array<string,object>** | Additional HTTP body information associated with an individual request within a batch. | [optional]
**headers** | **array<string,string>** | A mapping of additional HTTP headers to send/receive for an individual request within a batch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
