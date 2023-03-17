# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog. |
**attributes** | **object** | A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions. | [optional]
**dimensions** | [**\Ced\Mcf\Model\ItemDimensionsByMarketplace[]**](ItemDimensionsByMarketplace.md) | Array of dimensions associated with the item in the Amazon catalog by Amazon marketplace. | [optional]
**identifiers** | [**\Ced\Mcf\Model\ItemIdentifiersByMarketplace[]**](ItemIdentifiersByMarketplace.md) | Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers. | [optional]
**images** | [**\Ced\Mcf\Model\ItemImagesByMarketplace[]**](ItemImagesByMarketplace.md) | Images for an item in the Amazon catalog. | [optional]
**product_types** | [**\Ced\Mcf\Model\ItemProductTypeByMarketplace[]**](ItemProductTypeByMarketplace.md) | Product types associated with the Amazon catalog item. | [optional]
**relationships** | [**\Ced\Mcf\Model\ItemRelationshipsByMarketplace[]**](ItemRelationshipsByMarketplace.md) | Relationships by marketplace for an Amazon catalog item (for example, variations). | [optional]
**sales_ranks** | [**\Ced\Mcf\Model\ItemSalesRanksByMarketplace[]**](ItemSalesRanksByMarketplace.md) | Sales ranks of an Amazon catalog item. | [optional]
**summaries** | [**\Ced\Mcf\Model\ItemSummaryByMarketplace[]**](ItemSummaryByMarketplace.md) | Summary details of an Amazon catalog item. | [optional]
**vendor_details** | [**\Ced\Mcf\Model\ItemVendorDetailsByMarketplace[]**](ItemVendorDetailsByMarketplace.md) | Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
