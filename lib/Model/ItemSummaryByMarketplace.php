<?php
/**
 * ItemSummaryByMarketplace
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Mcf\Model;

use \ArrayAccess;
use \Ced\Mcf\ObjectSerializer;

/**
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemSummaryByMarketplace implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'adult_product' => 'bool',
        'autographed' => 'bool',
        'brand' => 'string',
        'browse_classification' => '\Ced\Mcf\Model\ItemBrowseClassification',
        'color' => 'string',
        'contributors' => '\Ced\Mcf\Model\ItemContributor[]',
        'item_classification' => 'string',
        'item_name' => 'string',
        'manufacturer' => 'string',
        'memorabilia' => 'bool',
        'model_number' => 'string',
        'package_quantity' => 'int',
        'part_number' => 'string',
        'release_date' => '\DateTime',
        'size' => 'string',
        'style' => 'string',
        'trade_in_eligible' => 'bool',
        'website_display_group' => 'string',
        'website_display_group_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'adult_product' => null,
        'autographed' => null,
        'brand' => null,
        'browse_classification' => null,
        'color' => null,
        'contributors' => null,
        'item_classification' => null,
        'item_name' => null,
        'manufacturer' => null,
        'memorabilia' => null,
        'model_number' => null,
        'package_quantity' => null,
        'part_number' => null,
        'release_date' => 'date',
        'size' => null,
        'style' => null,
        'trade_in_eligible' => null,
        'website_display_group' => null,
        'website_display_group_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'marketplace_id' => false,
		'adult_product' => false,
		'autographed' => false,
		'brand' => false,
		'browse_classification' => false,
		'color' => false,
		'contributors' => false,
		'item_classification' => false,
		'item_name' => false,
		'manufacturer' => false,
		'memorabilia' => false,
		'model_number' => false,
		'package_quantity' => false,
		'part_number' => false,
		'release_date' => false,
		'size' => false,
		'style' => false,
		'trade_in_eligible' => false,
		'website_display_group' => false,
		'website_display_group_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'adult_product' => 'adultProduct',
        'autographed' => 'autographed',
        'brand' => 'brand',
        'browse_classification' => 'browseClassification',
        'color' => 'color',
        'contributors' => 'contributors',
        'item_classification' => 'itemClassification',
        'item_name' => 'itemName',
        'manufacturer' => 'manufacturer',
        'memorabilia' => 'memorabilia',
        'model_number' => 'modelNumber',
        'package_quantity' => 'packageQuantity',
        'part_number' => 'partNumber',
        'release_date' => 'releaseDate',
        'size' => 'size',
        'style' => 'style',
        'trade_in_eligible' => 'tradeInEligible',
        'website_display_group' => 'websiteDisplayGroup',
        'website_display_group_name' => 'websiteDisplayGroupName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'adult_product' => 'setAdultProduct',
        'autographed' => 'setAutographed',
        'brand' => 'setBrand',
        'browse_classification' => 'setBrowseClassification',
        'color' => 'setColor',
        'contributors' => 'setContributors',
        'item_classification' => 'setItemClassification',
        'item_name' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'memorabilia' => 'setMemorabilia',
        'model_number' => 'setModelNumber',
        'package_quantity' => 'setPackageQuantity',
        'part_number' => 'setPartNumber',
        'release_date' => 'setReleaseDate',
        'size' => 'setSize',
        'style' => 'setStyle',
        'trade_in_eligible' => 'setTradeInEligible',
        'website_display_group' => 'setWebsiteDisplayGroup',
        'website_display_group_name' => 'setWebsiteDisplayGroupName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'adult_product' => 'getAdultProduct',
        'autographed' => 'getAutographed',
        'brand' => 'getBrand',
        'browse_classification' => 'getBrowseClassification',
        'color' => 'getColor',
        'contributors' => 'getContributors',
        'item_classification' => 'getItemClassification',
        'item_name' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'memorabilia' => 'getMemorabilia',
        'model_number' => 'getModelNumber',
        'package_quantity' => 'getPackageQuantity',
        'part_number' => 'getPartNumber',
        'release_date' => 'getReleaseDate',
        'size' => 'getSize',
        'style' => 'getStyle',
        'trade_in_eligible' => 'getTradeInEligible',
        'website_display_group' => 'getWebsiteDisplayGroup',
        'website_display_group_name' => 'getWebsiteDisplayGroupName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const ITEM_CLASSIFICATION_BASE_PRODUCT = 'BASE_PRODUCT';
    public const ITEM_CLASSIFICATION_OTHER = 'OTHER';
    public const ITEM_CLASSIFICATION_PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    public const ITEM_CLASSIFICATION_VARIATION_PARENT = 'VARIATION_PARENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemClassificationAllowableValues()
    {
        return [
            self::ITEM_CLASSIFICATION_BASE_PRODUCT,
            self::ITEM_CLASSIFICATION_OTHER,
            self::ITEM_CLASSIFICATION_PRODUCT_BUNDLE,
            self::ITEM_CLASSIFICATION_VARIATION_PARENT,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('adult_product', $data ?? [], null);
        $this->setIfExists('autographed', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('browse_classification', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('contributors', $data ?? [], null);
        $this->setIfExists('item_classification', $data ?? [], null);
        $this->setIfExists('item_name', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('memorabilia', $data ?? [], null);
        $this->setIfExists('model_number', $data ?? [], null);
        $this->setIfExists('package_quantity', $data ?? [], null);
        $this->setIfExists('part_number', $data ?? [], null);
        $this->setIfExists('release_date', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('style', $data ?? [], null);
        $this->setIfExists('trade_in_eligible', $data ?? [], null);
        $this->setIfExists('website_display_group', $data ?? [], null);
        $this->setIfExists('website_display_group_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($this->container['item_classification']) && !in_array($this->container['item_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'item_classification', must be one of '%s'",
                $this->container['item_classification'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id Amazon marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        if (is_null($marketplace_id)) {
            throw new \InvalidArgumentException('non-nullable marketplace_id cannot be null');
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets adult_product
     *
     * @return bool|null
     */
    public function getAdultProduct()
    {
        return $this->container['adult_product'];
    }

    /**
     * Sets adult_product
     *
     * @param bool|null $adult_product Identifies an Amazon catalog item is intended for an adult audience or is sexual in nature.
     *
     * @return self
     */
    public function setAdultProduct($adult_product)
    {
        if (is_null($adult_product)) {
            throw new \InvalidArgumentException('non-nullable adult_product cannot be null');
        }
        $this->container['adult_product'] = $adult_product;

        return $this;
    }

    /**
     * Gets autographed
     *
     * @return bool|null
     */
    public function getAutographed()
    {
        return $this->container['autographed'];
    }

    /**
     * Sets autographed
     *
     * @param bool|null $autographed Identifies an Amazon catalog item is autographed by a player or celebrity.
     *
     * @return self
     */
    public function setAutographed($autographed)
    {
        if (is_null($autographed)) {
            throw new \InvalidArgumentException('non-nullable autographed cannot be null');
        }
        $this->container['autographed'] = $autographed;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Name of the brand associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets browse_classification
     *
     * @return \Ced\Mcf\Model\ItemBrowseClassification|null
     */
    public function getBrowseClassification()
    {
        return $this->container['browse_classification'];
    }

    /**
     * Sets browse_classification
     *
     * @param \Ced\Mcf\Model\ItemBrowseClassification|null $browse_classification browse_classification
     *
     * @return self
     */
    public function setBrowseClassification($browse_classification)
    {
        if (is_null($browse_classification)) {
            throw new \InvalidArgumentException('non-nullable browse_classification cannot be null');
        }
        $this->container['browse_classification'] = $browse_classification;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Name of the color associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets contributors
     *
     * @return \Ced\Mcf\Model\ItemContributor[]|null
     */
    public function getContributors()
    {
        return $this->container['contributors'];
    }

    /**
     * Sets contributors
     *
     * @param \Ced\Mcf\Model\ItemContributor[]|null $contributors Individual contributors to the creation of an item, such as the authors or actors.
     *
     * @return self
     */
    public function setContributors($contributors)
    {
        if (is_null($contributors)) {
            throw new \InvalidArgumentException('non-nullable contributors cannot be null');
        }
        $this->container['contributors'] = $contributors;

        return $this;
    }

    /**
     * Gets item_classification
     *
     * @return string|null
     */
    public function getItemClassification()
    {
        return $this->container['item_classification'];
    }

    /**
     * Sets item_classification
     *
     * @param string|null $item_classification Classification type associated with the Amazon catalog item.
     *
     * @return self
     */
    public function setItemClassification($item_classification)
    {
        if (is_null($item_classification)) {
            throw new \InvalidArgumentException('non-nullable item_classification cannot be null');
        }
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!in_array($item_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'item_classification', must be one of '%s'",
                    $item_classification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_classification'] = $item_classification;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string|null $item_name Name, or title, associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setItemName($item_name)
    {
        if (is_null($item_name)) {
            throw new \InvalidArgumentException('non-nullable item_name cannot be null');
        }
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Name of the manufacturer associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets memorabilia
     *
     * @return bool|null
     */
    public function getMemorabilia()
    {
        return $this->container['memorabilia'];
    }

    /**
     * Sets memorabilia
     *
     * @param bool|null $memorabilia Identifies an Amazon catalog item is memorabilia valued for its connection with historical events, culture, or entertainment.
     *
     * @return self
     */
    public function setMemorabilia($memorabilia)
    {
        if (is_null($memorabilia)) {
            throw new \InvalidArgumentException('non-nullable memorabilia cannot be null');
        }
        $this->container['memorabilia'] = $memorabilia;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string|null $model_number Model number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setModelNumber($model_number)
    {
        if (is_null($model_number)) {
            throw new \InvalidArgumentException('non-nullable model_number cannot be null');
        }
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets package_quantity
     *
     * @return int|null
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param int|null $package_quantity Quantity of an Amazon catalog item in one package.
     *
     * @return self
     */
    public function setPackageQuantity($package_quantity)
    {
        if (is_null($package_quantity)) {
            throw new \InvalidArgumentException('non-nullable package_quantity cannot be null');
        }
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number Part number associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setPartNumber($part_number)
    {
        if (is_null($part_number)) {
            throw new \InvalidArgumentException('non-nullable part_number cannot be null');
        }
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return \DateTime|null
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param \DateTime|null $release_date First date on which an Amazon catalog item is shippable to customers.
     *
     * @return self
     */
    public function setReleaseDate($release_date)
    {
        if (is_null($release_date)) {
            throw new \InvalidArgumentException('non-nullable release_date cannot be null');
        }
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Name of the size associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style Name of the style associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setStyle($style)
    {
        if (is_null($style)) {
            throw new \InvalidArgumentException('non-nullable style cannot be null');
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets trade_in_eligible
     *
     * @return bool|null
     */
    public function getTradeInEligible()
    {
        return $this->container['trade_in_eligible'];
    }

    /**
     * Sets trade_in_eligible
     *
     * @param bool|null $trade_in_eligible Identifies an Amazon catalog item is eligible for trade-in.
     *
     * @return self
     */
    public function setTradeInEligible($trade_in_eligible)
    {
        if (is_null($trade_in_eligible)) {
            throw new \InvalidArgumentException('non-nullable trade_in_eligible cannot be null');
        }
        $this->container['trade_in_eligible'] = $trade_in_eligible;

        return $this;
    }

    /**
     * Gets website_display_group
     *
     * @return string|null
     */
    public function getWebsiteDisplayGroup()
    {
        return $this->container['website_display_group'];
    }

    /**
     * Sets website_display_group
     *
     * @param string|null $website_display_group Identifier of the website display group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setWebsiteDisplayGroup($website_display_group)
    {
        if (is_null($website_display_group)) {
            throw new \InvalidArgumentException('non-nullable website_display_group cannot be null');
        }
        $this->container['website_display_group'] = $website_display_group;

        return $this;
    }

    /**
     * Gets website_display_group_name
     *
     * @return string|null
     */
    public function getWebsiteDisplayGroupName()
    {
        return $this->container['website_display_group_name'];
    }

    /**
     * Sets website_display_group_name
     *
     * @param string|null $website_display_group_name Display name of the website display group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setWebsiteDisplayGroupName($website_display_group_name)
    {
        if (is_null($website_display_group_name)) {
            throw new \InvalidArgumentException('non-nullable website_display_group_name cannot be null');
        }
        $this->container['website_display_group_name'] = $website_display_group_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


