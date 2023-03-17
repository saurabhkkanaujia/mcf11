# Ced\Mcf\ProductPricingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFeaturedOfferExpectedPriceBatch()**](ProductPricingApi.md#getFeaturedOfferExpectedPriceBatch) | **POST** /batches/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice |  |


## `getFeaturedOfferExpectedPriceBatch()`

```php
getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body): \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse
```



Returns the set of responses that correspond to the batched list of up to 40 requests defined in the request body. The response for each successful (HTTP status code 200) request in the set includes the computed listing price at or below which a seller can expect to become the featured offer (before applicable promotions). This is called the featured offer expected price (FOEP). Featured offer is not guaranteed, because competing offers may change, and different offers may be featured based on other factors, including fulfillment capabilities to a specific customer. The response to an unsuccessful request includes the available error text.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 0.033 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_featured_offer_expected_price_batch_request_body = new \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest(); // \Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest

try {
    $result = $apiInstance->getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getFeaturedOfferExpectedPriceBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_featured_offer_expected_price_batch_request_body** | [**\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchRequest**](../Model/GetFeaturedOfferExpectedPriceBatchRequest.md)|  | |

### Return type

[**\Ced\Mcf\Model\GetFeaturedOfferExpectedPriceBatchResponse**](../Model/GetFeaturedOfferExpectedPriceBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
