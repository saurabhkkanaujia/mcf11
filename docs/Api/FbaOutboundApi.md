# Ced\Mcf\FbaOutboundApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelFulfillmentOrder()**](FbaOutboundApi.md#cancelFulfillmentOrder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel |  |
| [**createFulfillmentOrder()**](FbaOutboundApi.md#createFulfillmentOrder) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders |  |
| [**createFulfillmentReturn()**](FbaOutboundApi.md#createFulfillmentReturn) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return |  |
| [**getFeatureInventory()**](FbaOutboundApi.md#getFeatureInventory) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName} |  |
| [**getFeatureSKU()**](FbaOutboundApi.md#getFeatureSKU) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku} |  |
| [**getFeatures()**](FbaOutboundApi.md#getFeatures) | **GET** /fba/outbound/2020-07-01/features |  |
| [**getFulfillmentOrder()**](FbaOutboundApi.md#getFulfillmentOrder) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} |  |
| [**getFulfillmentPreview()**](FbaOutboundApi.md#getFulfillmentPreview) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders/preview |  |
| [**getPackageTrackingDetails()**](FbaOutboundApi.md#getPackageTrackingDetails) | **GET** /fba/outbound/2020-07-01/tracking |  |
| [**listAllFulfillmentOrders()**](FbaOutboundApi.md#listAllFulfillmentOrders) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders |  |
| [**listReturnReasonCodes()**](FbaOutboundApi.md#listReturnReasonCodes) | **GET** /fba/outbound/2020-07-01/returnReasonCodes |  |
| [**updateFulfillmentOrder()**](FbaOutboundApi.md#updateFulfillmentOrder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} |  |


## `cancelFulfillmentOrder()`

```php
cancelFulfillmentOrder($seller_fulfillment_order_id): \Ced\Mcf\Model\CancelFulfillmentOrderResponse
```



Requests that Amazon stop attempting to fulfill the fulfillment order indicated by the specified order identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->cancelFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->cancelFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. | |

### Return type

[**\Ced\Mcf\Model\CancelFulfillmentOrderResponse**](../Model/CancelFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFulfillmentOrder()`

```php
createFulfillmentOrder($body): \Ced\Mcf\Model\CreateFulfillmentOrderResponse
```



Requests that Amazon ship items from the seller's inventory in Amazon's fulfillment network to a destination address.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ced\Mcf\Model\CreateFulfillmentOrderRequest(); // \Ced\Mcf\Model\CreateFulfillmentOrderRequest

try {
    $result = $apiInstance->createFulfillmentOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Ced\Mcf\Model\CreateFulfillmentOrderRequest**](../Model/CreateFulfillmentOrderRequest.md)|  | |

### Return type

[**\Ced\Mcf\Model\CreateFulfillmentOrderResponse**](../Model/CreateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFulfillmentReturn()`

```php
createFulfillmentReturn($seller_fulfillment_order_id, $body): \Ced\Mcf\Model\CreateFulfillmentReturnResponse
```



Creates a fulfillment return.   **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer's request to return items.
$body = new \Ced\Mcf\Model\CreateFulfillmentReturnRequest(); // \Ced\Mcf\Model\CreateFulfillmentReturnRequest

try {
    $result = $apiInstance->createFulfillmentReturn($seller_fulfillment_order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seller_fulfillment_order_id** | **string**| An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#39;s request to return items. | |
| **body** | [**\Ced\Mcf\Model\CreateFulfillmentReturnRequest**](../Model/CreateFulfillmentReturnRequest.md)|  | |

### Return type

[**\Ced\Mcf\Model\CreateFulfillmentReturnResponse**](../Model/CreateFulfillmentReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatureInventory()`

```php
getFeatureInventory($marketplace_id, $feature_name, $next_token): \Ced\Mcf\Model\GetFeatureInventoryResponse
```



Returns a list of inventory items that are eligible for the fulfillment feature you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | The marketplace for which to return a list of the inventory that is eligible for the specified feature.
$feature_name = 'feature_name_example'; // string | The name of the feature for which to return a list of eligible inventory.
$next_token = 'next_token_example'; // string | A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page.

try {
    $result = $apiInstance->getFeatureInventory($marketplace_id, $feature_name, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatureInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| The marketplace for which to return a list of the inventory that is eligible for the specified feature. | |
| **feature_name** | **string**| The name of the feature for which to return a list of eligible inventory. | |
| **next_token** | **string**| A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. | [optional] |

### Return type

[**\Ced\Mcf\Model\GetFeatureInventoryResponse**](../Model/GetFeatureInventoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatureSKU()`

```php
getFeatureSKU($marketplace_id, $feature_name, $seller_sku): \Ced\Mcf\Model\GetFeatureSkuResponse
```



Returns the number of items with the sellerSKU you specify that can have orders fulfilled using the specified feature. Note that if the sellerSKU isn't eligible, the response will contain an empty skuInfo object.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | The marketplace for which to return the count.
$feature_name = 'feature_name_example'; // string | The name of the feature.
$seller_sku = 'seller_sku_example'; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->getFeatureSKU($marketplace_id, $feature_name, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatureSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| The marketplace for which to return the count. | |
| **feature_name** | **string**| The name of the feature. | |
| **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. | |

### Return type

[**\Ced\Mcf\Model\GetFeatureSkuResponse**](../Model/GetFeatureSkuResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeatures()`

```php
getFeatures($marketplace_id): \Ced\Mcf\Model\GetFeaturesResponse
```



Returns a list of features available for Multi-Channel Fulfillment orders in the marketplace you specify, and whether the seller for which you made the call is enrolled for each feature.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | The marketplace for which to return the list of features.

try {
    $result = $apiInstance->getFeatures($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marketplace_id** | **string**| The marketplace for which to return the list of features. | |

### Return type

[**\Ced\Mcf\Model\GetFeaturesResponse**](../Model/GetFeaturesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentOrder()`

```php
getFulfillmentOrder($seller_fulfillment_order_id): \Ced\Mcf\Model\GetFulfillmentOrderResponse
```



Returns the fulfillment order indicated by the specified order identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->getFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. | |

### Return type

[**\Ced\Mcf\Model\GetFulfillmentOrderResponse**](../Model/GetFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentPreview()`

```php
getFulfillmentPreview($body): \Ced\Mcf\Model\GetFulfillmentPreviewResponse
```



Returns a list of fulfillment order previews based on shipping criteria that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Ced\Mcf\Model\GetFulfillmentPreviewRequest(); // \Ced\Mcf\Model\GetFulfillmentPreviewRequest

try {
    $result = $apiInstance->getFulfillmentPreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Ced\Mcf\Model\GetFulfillmentPreviewRequest**](../Model/GetFulfillmentPreviewRequest.md)|  | |

### Return type

[**\Ced\Mcf\Model\GetFulfillmentPreviewResponse**](../Model/GetFulfillmentPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPackageTrackingDetails()`

```php
getPackageTrackingDetails($package_number): \Ced\Mcf\Model\GetPackageTrackingDetailsResponse
```



Returns delivery tracking information for a package in an outbound shipment for a Multi-Channel Fulfillment order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_number = 56; // int | The unencrypted package identifier returned by the getFulfillmentOrder operation.

try {
    $result = $apiInstance->getPackageTrackingDetails($package_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getPackageTrackingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_number** | **int**| The unencrypted package identifier returned by the getFulfillmentOrder operation. | |

### Return type

[**\Ced\Mcf\Model\GetPackageTrackingDetailsResponse**](../Model/GetPackageTrackingDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllFulfillmentOrders()`

```php
listAllFulfillmentOrders($query_start_date, $next_token): \Ced\Mcf\Model\ListAllFulfillmentOrdersResponse
```



Returns a list of fulfillment orders fulfilled after (or at) a specified date-time, or indicated by the next token parameter.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
$next_token = 'next_token_example'; // string | A string token returned in the response to your previous request.

try {
    $result = $apiInstance->listAllFulfillmentOrders($query_start_date, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listAllFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query_start_date** | **\DateTime**| A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. | [optional] |
| **next_token** | **string**| A string token returned in the response to your previous request. | [optional] |

### Return type

[**\Ced\Mcf\Model\ListAllFulfillmentOrdersResponse**](../Model/ListAllFulfillmentOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReturnReasonCodes()`

```php
listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id): \Ced\Mcf\Model\ListReturnReasonCodesResponse
```



Returns a list of return reason codes for a seller SKU in a given marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | The seller SKU for which return reason codes are required.
$language = 'language_example'; // string | The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into.
$marketplace_id = 'marketplace_id_example'; // string | The marketplace for which the seller wants return reason codes.
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes.

try {
    $result = $apiInstance->listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listReturnReasonCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seller_sku** | **string**| The seller SKU for which return reason codes are required. | |
| **language** | **string**| The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. | |
| **marketplace_id** | **string**| The marketplace for which the seller wants return reason codes. | [optional] |
| **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. | [optional] |

### Return type

[**\Ced\Mcf\Model\ListReturnReasonCodesResponse**](../Model/ListReturnReasonCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `payload`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFulfillmentOrder()`

```php
updateFulfillmentOrder($seller_fulfillment_order_id, $body): \Ced\Mcf\Model\UpdateFulfillmentOrderResponse
```



Updates and/or requests shipment for a fulfillment order with an order hold on it.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ced\Mcf\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = 'seller_fulfillment_order_id_example'; // string | The identifier assigned to the item by the seller when the fulfillment order was created.
$body = new \Ced\Mcf\Model\UpdateFulfillmentOrderRequest(); // \Ced\Mcf\Model\UpdateFulfillmentOrderRequest

try {
    $result = $apiInstance->updateFulfillmentOrder($seller_fulfillment_order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->updateFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. | |
| **body** | [**\Ced\Mcf\Model\UpdateFulfillmentOrderRequest**](../Model/UpdateFulfillmentOrderRequest.md)|  | |

### Return type

[**\Ced\Mcf\Model\UpdateFulfillmentOrderResponse**](../Model/UpdateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
