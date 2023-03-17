<?php
/**
 * FulfillmentPreview
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
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
 * FulfillmentPreview Class Doc Comment
 *
 * @category Class
 * @description Information about a fulfillment order preview, including delivery and fee information based on shipping method.
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FulfillmentPreview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentPreview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_speed_category' => '\Ced\Mcf\Model\ShippingSpeedCategory',
        'scheduled_delivery_info' => '\Ced\Mcf\Model\ScheduledDeliveryInfo',
        'is_fulfillable' => 'bool',
        'is_cod_capable' => 'bool',
        'estimated_shipping_weight' => '\Ced\Mcf\Model\Weight',
        'estimated_fees' => '\Ced\Mcf\Model\Fee[]',
        'fulfillment_preview_shipments' => '\Ced\Mcf\Model\FulfillmentPreviewShipment[]',
        'unfulfillable_preview_items' => '\Ced\Mcf\Model\UnfulfillablePreviewItem[]',
        'order_unfulfillable_reasons' => 'string[]',
        'marketplace_id' => 'string',
        'feature_constraints' => '\Ced\Mcf\Model\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_speed_category' => null,
        'scheduled_delivery_info' => null,
        'is_fulfillable' => null,
        'is_cod_capable' => null,
        'estimated_shipping_weight' => null,
        'estimated_fees' => null,
        'fulfillment_preview_shipments' => null,
        'unfulfillable_preview_items' => null,
        'order_unfulfillable_reasons' => null,
        'marketplace_id' => null,
        'feature_constraints' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipping_speed_category' => false,
		'scheduled_delivery_info' => false,
		'is_fulfillable' => false,
		'is_cod_capable' => false,
		'estimated_shipping_weight' => false,
		'estimated_fees' => false,
		'fulfillment_preview_shipments' => false,
		'unfulfillable_preview_items' => false,
		'order_unfulfillable_reasons' => false,
		'marketplace_id' => false,
		'feature_constraints' => false
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
        'shipping_speed_category' => 'shippingSpeedCategory',
        'scheduled_delivery_info' => 'scheduledDeliveryInfo',
        'is_fulfillable' => 'isFulfillable',
        'is_cod_capable' => 'isCODCapable',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'estimated_fees' => 'estimatedFees',
        'fulfillment_preview_shipments' => 'fulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'unfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'orderUnfulfillableReasons',
        'marketplace_id' => 'marketplaceId',
        'feature_constraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
        'is_fulfillable' => 'setIsFulfillable',
        'is_cod_capable' => 'setIsCodCapable',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'estimated_fees' => 'setEstimatedFees',
        'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
        'marketplace_id' => 'setMarketplaceId',
        'feature_constraints' => 'setFeatureConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
        'is_fulfillable' => 'getIsFulfillable',
        'is_cod_capable' => 'getIsCodCapable',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'estimated_fees' => 'getEstimatedFees',
        'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
        'marketplace_id' => 'getMarketplaceId',
        'feature_constraints' => 'getFeatureConstraints'
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
        $this->setIfExists('shipping_speed_category', $data ?? [], null);
        $this->setIfExists('scheduled_delivery_info', $data ?? [], null);
        $this->setIfExists('is_fulfillable', $data ?? [], null);
        $this->setIfExists('is_cod_capable', $data ?? [], null);
        $this->setIfExists('estimated_shipping_weight', $data ?? [], null);
        $this->setIfExists('estimated_fees', $data ?? [], null);
        $this->setIfExists('fulfillment_preview_shipments', $data ?? [], null);
        $this->setIfExists('unfulfillable_preview_items', $data ?? [], null);
        $this->setIfExists('order_unfulfillable_reasons', $data ?? [], null);
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('feature_constraints', $data ?? [], null);
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

        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if ($this->container['is_fulfillable'] === null) {
            $invalidProperties[] = "'is_fulfillable' can't be null";
        }
        if ($this->container['is_cod_capable'] === null) {
            $invalidProperties[] = "'is_cod_capable' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
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
     * Gets shipping_speed_category
     *
     * @return \Ced\Mcf\Model\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category
     *
     * @param \Ced\Mcf\Model\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return self
     */
    public function setShippingSpeedCategory($shipping_speed_category)
    {
        if (is_null($shipping_speed_category)) {
            throw new \InvalidArgumentException('non-nullable shipping_speed_category cannot be null');
        }
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets scheduled_delivery_info
     *
     * @return \Ced\Mcf\Model\ScheduledDeliveryInfo|null
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->container['scheduled_delivery_info'];
    }

    /**
     * Sets scheduled_delivery_info
     *
     * @param \Ced\Mcf\Model\ScheduledDeliveryInfo|null $scheduled_delivery_info scheduled_delivery_info
     *
     * @return self
     */
    public function setScheduledDeliveryInfo($scheduled_delivery_info)
    {
        if (is_null($scheduled_delivery_info)) {
            throw new \InvalidArgumentException('non-nullable scheduled_delivery_info cannot be null');
        }
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    /**
     * Gets is_fulfillable
     *
     * @return bool
     */
    public function getIsFulfillable()
    {
        return $this->container['is_fulfillable'];
    }

    /**
     * Sets is_fulfillable
     *
     * @param bool $is_fulfillable When true, this fulfillment order preview is fulfillable.
     *
     * @return self
     */
    public function setIsFulfillable($is_fulfillable)
    {
        if (is_null($is_fulfillable)) {
            throw new \InvalidArgumentException('non-nullable is_fulfillable cannot be null');
        }
        $this->container['is_fulfillable'] = $is_fulfillable;

        return $this;
    }

    /**
     * Gets is_cod_capable
     *
     * @return bool
     */
    public function getIsCodCapable()
    {
        return $this->container['is_cod_capable'];
    }

    /**
     * Sets is_cod_capable
     *
     * @param bool $is_cod_capable When true, this fulfillment order preview is for COD (Cash On Delivery).
     *
     * @return self
     */
    public function setIsCodCapable($is_cod_capable)
    {
        if (is_null($is_cod_capable)) {
            throw new \InvalidArgumentException('non-nullable is_cod_capable cannot be null');
        }
        $this->container['is_cod_capable'] = $is_cod_capable;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight
     *
     * @return \Ced\Mcf\Model\Weight|null
     */
    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight
     *
     * @param \Ced\Mcf\Model\Weight|null $estimated_shipping_weight estimated_shipping_weight
     *
     * @return self
     */
    public function setEstimatedShippingWeight($estimated_shipping_weight)
    {
        if (is_null($estimated_shipping_weight)) {
            throw new \InvalidArgumentException('non-nullable estimated_shipping_weight cannot be null');
        }
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets estimated_fees
     *
     * @return \Ced\Mcf\Model\Fee[]|null
     */
    public function getEstimatedFees()
    {
        return $this->container['estimated_fees'];
    }

    /**
     * Sets estimated_fees
     *
     * @param \Ced\Mcf\Model\Fee[]|null $estimated_fees An array of fee type and cost pairs.
     *
     * @return self
     */
    public function setEstimatedFees($estimated_fees)
    {
        if (is_null($estimated_fees)) {
            throw new \InvalidArgumentException('non-nullable estimated_fees cannot be null');
        }
        $this->container['estimated_fees'] = $estimated_fees;

        return $this;
    }

    /**
     * Gets fulfillment_preview_shipments
     *
     * @return \Ced\Mcf\Model\FulfillmentPreviewShipment[]|null
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->container['fulfillment_preview_shipments'];
    }

    /**
     * Sets fulfillment_preview_shipments
     *
     * @param \Ced\Mcf\Model\FulfillmentPreviewShipment[]|null $fulfillment_preview_shipments An array of fulfillment preview shipment information.
     *
     * @return self
     */
    public function setFulfillmentPreviewShipments($fulfillment_preview_shipments)
    {
        if (is_null($fulfillment_preview_shipments)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_preview_shipments cannot be null');
        }
        $this->container['fulfillment_preview_shipments'] = $fulfillment_preview_shipments;

        return $this;
    }

    /**
     * Gets unfulfillable_preview_items
     *
     * @return \Ced\Mcf\Model\UnfulfillablePreviewItem[]|null
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->container['unfulfillable_preview_items'];
    }

    /**
     * Sets unfulfillable_preview_items
     *
     * @param \Ced\Mcf\Model\UnfulfillablePreviewItem[]|null $unfulfillable_preview_items An array of unfulfillable preview item information.
     *
     * @return self
     */
    public function setUnfulfillablePreviewItems($unfulfillable_preview_items)
    {
        if (is_null($unfulfillable_preview_items)) {
            throw new \InvalidArgumentException('non-nullable unfulfillable_preview_items cannot be null');
        }
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    /**
     * Gets order_unfulfillable_reasons
     *
     * @return string[]|null
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    /**
     * Sets order_unfulfillable_reasons
     *
     * @param string[]|null $order_unfulfillable_reasons order_unfulfillable_reasons
     *
     * @return self
     */
    public function setOrderUnfulfillableReasons($order_unfulfillable_reasons)
    {
        if (is_null($order_unfulfillable_reasons)) {
            throw new \InvalidArgumentException('non-nullable order_unfulfillable_reasons cannot be null');
        }
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
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
     * @param string $marketplace_id The marketplace the fulfillment order is placed against.
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
     * Gets feature_constraints
     *
     * @return \Ced\Mcf\Model\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints
     *
     * @param \Ced\Mcf\Model\FeatureSettings[]|null $feature_constraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($feature_constraints)
    {
        if (is_null($feature_constraints)) {
            throw new \InvalidArgumentException('non-nullable feature_constraints cannot be null');
        }
        $this->container['feature_constraints'] = $feature_constraints;

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


