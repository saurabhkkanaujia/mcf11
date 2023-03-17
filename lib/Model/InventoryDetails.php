<?php
/**
 * InventoryDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
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
 * InventoryDetails Class Doc Comment
 *
 * @category Class
 * @description Summarized inventory details. This object will not appear if the details parameter in the request is false.
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillable_quantity' => 'int',
        'inbound_working_quantity' => 'int',
        'inbound_shipped_quantity' => 'int',
        'inbound_receiving_quantity' => 'int',
        'reserved_quantity' => '\Ced\Mcf\Model\ReservedQuantity',
        'researching_quantity' => '\Ced\Mcf\Model\ResearchingQuantity',
        'unfulfillable_quantity' => '\Ced\Mcf\Model\UnfulfillableQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillable_quantity' => null,
        'inbound_working_quantity' => null,
        'inbound_shipped_quantity' => null,
        'inbound_receiving_quantity' => null,
        'reserved_quantity' => null,
        'researching_quantity' => null,
        'unfulfillable_quantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillable_quantity' => false,
		'inbound_working_quantity' => false,
		'inbound_shipped_quantity' => false,
		'inbound_receiving_quantity' => false,
		'reserved_quantity' => false,
		'researching_quantity' => false,
		'unfulfillable_quantity' => false
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
        'fulfillable_quantity' => 'fulfillableQuantity',
        'inbound_working_quantity' => 'inboundWorkingQuantity',
        'inbound_shipped_quantity' => 'inboundShippedQuantity',
        'inbound_receiving_quantity' => 'inboundReceivingQuantity',
        'reserved_quantity' => 'reservedQuantity',
        'researching_quantity' => 'researchingQuantity',
        'unfulfillable_quantity' => 'unfulfillableQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillable_quantity' => 'setFulfillableQuantity',
        'inbound_working_quantity' => 'setInboundWorkingQuantity',
        'inbound_shipped_quantity' => 'setInboundShippedQuantity',
        'inbound_receiving_quantity' => 'setInboundReceivingQuantity',
        'reserved_quantity' => 'setReservedQuantity',
        'researching_quantity' => 'setResearchingQuantity',
        'unfulfillable_quantity' => 'setUnfulfillableQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillable_quantity' => 'getFulfillableQuantity',
        'inbound_working_quantity' => 'getInboundWorkingQuantity',
        'inbound_shipped_quantity' => 'getInboundShippedQuantity',
        'inbound_receiving_quantity' => 'getInboundReceivingQuantity',
        'reserved_quantity' => 'getReservedQuantity',
        'researching_quantity' => 'getResearchingQuantity',
        'unfulfillable_quantity' => 'getUnfulfillableQuantity'
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
        $this->setIfExists('fulfillable_quantity', $data ?? [], null);
        $this->setIfExists('inbound_working_quantity', $data ?? [], null);
        $this->setIfExists('inbound_shipped_quantity', $data ?? [], null);
        $this->setIfExists('inbound_receiving_quantity', $data ?? [], null);
        $this->setIfExists('reserved_quantity', $data ?? [], null);
        $this->setIfExists('researching_quantity', $data ?? [], null);
        $this->setIfExists('unfulfillable_quantity', $data ?? [], null);
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
     * Gets fulfillable_quantity
     *
     * @return int|null
     */
    public function getFulfillableQuantity()
    {
        return $this->container['fulfillable_quantity'];
    }

    /**
     * Sets fulfillable_quantity
     *
     * @param int|null $fulfillable_quantity The item quantity that can be picked, packed, and shipped.
     *
     * @return self
     */
    public function setFulfillableQuantity($fulfillable_quantity)
    {
        if (is_null($fulfillable_quantity)) {
            throw new \InvalidArgumentException('non-nullable fulfillable_quantity cannot be null');
        }
        $this->container['fulfillable_quantity'] = $fulfillable_quantity;

        return $this;
    }

    /**
     * Gets inbound_working_quantity
     *
     * @return int|null
     */
    public function getInboundWorkingQuantity()
    {
        return $this->container['inbound_working_quantity'];
    }

    /**
     * Sets inbound_working_quantity
     *
     * @param int|null $inbound_working_quantity The number of units in an inbound shipment for which you have notified Amazon.
     *
     * @return self
     */
    public function setInboundWorkingQuantity($inbound_working_quantity)
    {
        if (is_null($inbound_working_quantity)) {
            throw new \InvalidArgumentException('non-nullable inbound_working_quantity cannot be null');
        }
        $this->container['inbound_working_quantity'] = $inbound_working_quantity;

        return $this;
    }

    /**
     * Gets inbound_shipped_quantity
     *
     * @return int|null
     */
    public function getInboundShippedQuantity()
    {
        return $this->container['inbound_shipped_quantity'];
    }

    /**
     * Sets inbound_shipped_quantity
     *
     * @param int|null $inbound_shipped_quantity The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number.
     *
     * @return self
     */
    public function setInboundShippedQuantity($inbound_shipped_quantity)
    {
        if (is_null($inbound_shipped_quantity)) {
            throw new \InvalidArgumentException('non-nullable inbound_shipped_quantity cannot be null');
        }
        $this->container['inbound_shipped_quantity'] = $inbound_shipped_quantity;

        return $this;
    }

    /**
     * Gets inbound_receiving_quantity
     *
     * @return int|null
     */
    public function getInboundReceivingQuantity()
    {
        return $this->container['inbound_receiving_quantity'];
    }

    /**
     * Sets inbound_receiving_quantity
     *
     * @param int|null $inbound_receiving_quantity The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed.
     *
     * @return self
     */
    public function setInboundReceivingQuantity($inbound_receiving_quantity)
    {
        if (is_null($inbound_receiving_quantity)) {
            throw new \InvalidArgumentException('non-nullable inbound_receiving_quantity cannot be null');
        }
        $this->container['inbound_receiving_quantity'] = $inbound_receiving_quantity;

        return $this;
    }

    /**
     * Gets reserved_quantity
     *
     * @return \Ced\Mcf\Model\ReservedQuantity|null
     */
    public function getReservedQuantity()
    {
        return $this->container['reserved_quantity'];
    }

    /**
     * Sets reserved_quantity
     *
     * @param \Ced\Mcf\Model\ReservedQuantity|null $reserved_quantity reserved_quantity
     *
     * @return self
     */
    public function setReservedQuantity($reserved_quantity)
    {
        if (is_null($reserved_quantity)) {
            throw new \InvalidArgumentException('non-nullable reserved_quantity cannot be null');
        }
        $this->container['reserved_quantity'] = $reserved_quantity;

        return $this;
    }

    /**
     * Gets researching_quantity
     *
     * @return \Ced\Mcf\Model\ResearchingQuantity|null
     */
    public function getResearchingQuantity()
    {
        return $this->container['researching_quantity'];
    }

    /**
     * Sets researching_quantity
     *
     * @param \Ced\Mcf\Model\ResearchingQuantity|null $researching_quantity researching_quantity
     *
     * @return self
     */
    public function setResearchingQuantity($researching_quantity)
    {
        if (is_null($researching_quantity)) {
            throw new \InvalidArgumentException('non-nullable researching_quantity cannot be null');
        }
        $this->container['researching_quantity'] = $researching_quantity;

        return $this;
    }

    /**
     * Gets unfulfillable_quantity
     *
     * @return \Ced\Mcf\Model\UnfulfillableQuantity|null
     */
    public function getUnfulfillableQuantity()
    {
        return $this->container['unfulfillable_quantity'];
    }

    /**
     * Sets unfulfillable_quantity
     *
     * @param \Ced\Mcf\Model\UnfulfillableQuantity|null $unfulfillable_quantity unfulfillable_quantity
     *
     * @return self
     */
    public function setUnfulfillableQuantity($unfulfillable_quantity)
    {
        if (is_null($unfulfillable_quantity)) {
            throw new \InvalidArgumentException('non-nullable unfulfillable_quantity cannot be null');
        }
        $this->container['unfulfillable_quantity'] = $unfulfillable_quantity;

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


