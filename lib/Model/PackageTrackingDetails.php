<?php
/**
 * PackageTrackingDetails
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
 * PackageTrackingDetails Class Doc Comment
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PackageTrackingDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageTrackingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_number' => 'int',
        'tracking_number' => 'string',
        'customer_tracking_link' => 'string',
        'carrier_code' => 'string',
        'carrier_phone_number' => 'string',
        'carrier_url' => 'string',
        'ship_date' => '\DateTime',
        'estimated_arrival_date' => '\DateTime',
        'ship_to_address' => '\Ced\Mcf\Model\TrackingAddress',
        'current_status' => '\Ced\Mcf\Model\CurrentStatus',
        'current_status_description' => 'string',
        'signed_for_by' => 'string',
        'additional_location_info' => '\Ced\Mcf\Model\AdditionalLocationInfo',
        'tracking_events' => '\Ced\Mcf\Model\TrackingEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_number' => 'int32',
        'tracking_number' => null,
        'customer_tracking_link' => null,
        'carrier_code' => null,
        'carrier_phone_number' => null,
        'carrier_url' => null,
        'ship_date' => 'date-time',
        'estimated_arrival_date' => 'date-time',
        'ship_to_address' => null,
        'current_status' => null,
        'current_status_description' => null,
        'signed_for_by' => null,
        'additional_location_info' => null,
        'tracking_events' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'package_number' => false,
		'tracking_number' => false,
		'customer_tracking_link' => false,
		'carrier_code' => false,
		'carrier_phone_number' => false,
		'carrier_url' => false,
		'ship_date' => false,
		'estimated_arrival_date' => false,
		'ship_to_address' => false,
		'current_status' => false,
		'current_status_description' => false,
		'signed_for_by' => false,
		'additional_location_info' => false,
		'tracking_events' => false
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
        'package_number' => 'packageNumber',
        'tracking_number' => 'trackingNumber',
        'customer_tracking_link' => 'customerTrackingLink',
        'carrier_code' => 'carrierCode',
        'carrier_phone_number' => 'carrierPhoneNumber',
        'carrier_url' => 'carrierURL',
        'ship_date' => 'shipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'ship_to_address' => 'shipToAddress',
        'current_status' => 'currentStatus',
        'current_status_description' => 'currentStatusDescription',
        'signed_for_by' => 'signedForBy',
        'additional_location_info' => 'additionalLocationInfo',
        'tracking_events' => 'trackingEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_number' => 'setPackageNumber',
        'tracking_number' => 'setTrackingNumber',
        'customer_tracking_link' => 'setCustomerTrackingLink',
        'carrier_code' => 'setCarrierCode',
        'carrier_phone_number' => 'setCarrierPhoneNumber',
        'carrier_url' => 'setCarrierUrl',
        'ship_date' => 'setShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'ship_to_address' => 'setShipToAddress',
        'current_status' => 'setCurrentStatus',
        'current_status_description' => 'setCurrentStatusDescription',
        'signed_for_by' => 'setSignedForBy',
        'additional_location_info' => 'setAdditionalLocationInfo',
        'tracking_events' => 'setTrackingEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_number' => 'getPackageNumber',
        'tracking_number' => 'getTrackingNumber',
        'customer_tracking_link' => 'getCustomerTrackingLink',
        'carrier_code' => 'getCarrierCode',
        'carrier_phone_number' => 'getCarrierPhoneNumber',
        'carrier_url' => 'getCarrierUrl',
        'ship_date' => 'getShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'ship_to_address' => 'getShipToAddress',
        'current_status' => 'getCurrentStatus',
        'current_status_description' => 'getCurrentStatusDescription',
        'signed_for_by' => 'getSignedForBy',
        'additional_location_info' => 'getAdditionalLocationInfo',
        'tracking_events' => 'getTrackingEvents'
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
        $this->setIfExists('package_number', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('customer_tracking_link', $data ?? [], null);
        $this->setIfExists('carrier_code', $data ?? [], null);
        $this->setIfExists('carrier_phone_number', $data ?? [], null);
        $this->setIfExists('carrier_url', $data ?? [], null);
        $this->setIfExists('ship_date', $data ?? [], null);
        $this->setIfExists('estimated_arrival_date', $data ?? [], null);
        $this->setIfExists('ship_to_address', $data ?? [], null);
        $this->setIfExists('current_status', $data ?? [], null);
        $this->setIfExists('current_status_description', $data ?? [], null);
        $this->setIfExists('signed_for_by', $data ?? [], null);
        $this->setIfExists('additional_location_info', $data ?? [], null);
        $this->setIfExists('tracking_events', $data ?? [], null);
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

        if ($this->container['package_number'] === null) {
            $invalidProperties[] = "'package_number' can't be null";
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
     * Gets package_number
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number
     *
     * @param int $package_number The package identifier.
     *
     * @return self
     */
    public function setPackageNumber($package_number)
    {
        if (is_null($package_number)) {
            throw new \InvalidArgumentException('non-nullable package_number cannot be null');
        }
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number for the package.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets customer_tracking_link
     *
     * @return string|null
     */
    public function getCustomerTrackingLink()
    {
        return $this->container['customer_tracking_link'];
    }

    /**
     * Sets customer_tracking_link
     *
     * @param string|null $customer_tracking_link Link on swiship.com that allows customers to track the package.
     *
     * @return self
     */
    public function setCustomerTrackingLink($customer_tracking_link)
    {
        if (is_null($customer_tracking_link)) {
            throw new \InvalidArgumentException('non-nullable customer_tracking_link cannot be null');
        }
        $this->container['customer_tracking_link'] = $customer_tracking_link;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string|null $carrier_code The name of the carrier.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        if (is_null($carrier_code)) {
            throw new \InvalidArgumentException('non-nullable carrier_code cannot be null');
        }
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_phone_number
     *
     * @return string|null
     */
    public function getCarrierPhoneNumber()
    {
        return $this->container['carrier_phone_number'];
    }

    /**
     * Sets carrier_phone_number
     *
     * @param string|null $carrier_phone_number The phone number of the carrier.
     *
     * @return self
     */
    public function setCarrierPhoneNumber($carrier_phone_number)
    {
        if (is_null($carrier_phone_number)) {
            throw new \InvalidArgumentException('non-nullable carrier_phone_number cannot be null');
        }
        $this->container['carrier_phone_number'] = $carrier_phone_number;

        return $this;
    }

    /**
     * Gets carrier_url
     *
     * @return string|null
     */
    public function getCarrierUrl()
    {
        return $this->container['carrier_url'];
    }

    /**
     * Sets carrier_url
     *
     * @param string|null $carrier_url The URL of the carrier’s website.
     *
     * @return self
     */
    public function setCarrierUrl($carrier_url)
    {
        if (is_null($carrier_url)) {
            throw new \InvalidArgumentException('non-nullable carrier_url cannot be null');
        }
        $this->container['carrier_url'] = $carrier_url;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime|null $ship_date ship_date
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        if (is_null($ship_date)) {
            throw new \InvalidArgumentException('non-nullable ship_date cannot be null');
        }
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date
     *
     * @return \DateTime|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date
     *
     * @param \DateTime|null $estimated_arrival_date estimated_arrival_date
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        if (is_null($estimated_arrival_date)) {
            throw new \InvalidArgumentException('non-nullable estimated_arrival_date cannot be null');
        }
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets ship_to_address
     *
     * @return \Ced\Mcf\Model\TrackingAddress|null
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \Ced\Mcf\Model\TrackingAddress|null $ship_to_address ship_to_address
     *
     * @return self
     */
    public function setShipToAddress($ship_to_address)
    {
        if (is_null($ship_to_address)) {
            throw new \InvalidArgumentException('non-nullable ship_to_address cannot be null');
        }
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets current_status
     *
     * @return \Ced\Mcf\Model\CurrentStatus|null
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param \Ced\Mcf\Model\CurrentStatus|null $current_status current_status
     *
     * @return self
     */
    public function setCurrentStatus($current_status)
    {
        if (is_null($current_status)) {
            throw new \InvalidArgumentException('non-nullable current_status cannot be null');
        }
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets current_status_description
     *
     * @return string|null
     */
    public function getCurrentStatusDescription()
    {
        return $this->container['current_status_description'];
    }

    /**
     * Sets current_status_description
     *
     * @param string|null $current_status_description Description corresponding to the CurrentStatus value.
     *
     * @return self
     */
    public function setCurrentStatusDescription($current_status_description)
    {
        if (is_null($current_status_description)) {
            throw new \InvalidArgumentException('non-nullable current_status_description cannot be null');
        }
        $this->container['current_status_description'] = $current_status_description;

        return $this;
    }

    /**
     * Gets signed_for_by
     *
     * @return string|null
     */
    public function getSignedForBy()
    {
        return $this->container['signed_for_by'];
    }

    /**
     * Sets signed_for_by
     *
     * @param string|null $signed_for_by The name of the person who signed for the package.
     *
     * @return self
     */
    public function setSignedForBy($signed_for_by)
    {
        if (is_null($signed_for_by)) {
            throw new \InvalidArgumentException('non-nullable signed_for_by cannot be null');
        }
        $this->container['signed_for_by'] = $signed_for_by;

        return $this;
    }

    /**
     * Gets additional_location_info
     *
     * @return \Ced\Mcf\Model\AdditionalLocationInfo|null
     */
    public function getAdditionalLocationInfo()
    {
        return $this->container['additional_location_info'];
    }

    /**
     * Sets additional_location_info
     *
     * @param \Ced\Mcf\Model\AdditionalLocationInfo|null $additional_location_info additional_location_info
     *
     * @return self
     */
    public function setAdditionalLocationInfo($additional_location_info)
    {
        if (is_null($additional_location_info)) {
            throw new \InvalidArgumentException('non-nullable additional_location_info cannot be null');
        }
        $this->container['additional_location_info'] = $additional_location_info;

        return $this;
    }

    /**
     * Gets tracking_events
     *
     * @return \Ced\Mcf\Model\TrackingEvent[]|null
     */
    public function getTrackingEvents()
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events
     *
     * @param \Ced\Mcf\Model\TrackingEvent[]|null $tracking_events An array of tracking event information.
     *
     * @return self
     */
    public function setTrackingEvents($tracking_events)
    {
        if (is_null($tracking_events)) {
            throw new \InvalidArgumentException('non-nullable tracking_events cannot be null');
        }
        $this->container['tracking_events'] = $tracking_events;

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


