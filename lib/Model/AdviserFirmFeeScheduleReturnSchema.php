<?php
/**
 * AdviserFirmFeeScheduleReturnSchema
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fundment API
 *
 * <div><a href=\"/staging/\"><h1>Getting started</h1></a> </div>
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AdviserFirmFeeScheduleReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdviserFirmFeeScheduleReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdviserFirmFeeScheduleReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ref' => 'int',
        'fee_schedule' => '\OpenAPI\Client\Model\NestedFeeScheduleReturnSchema',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'date_updated' => '\DateTime',
        'is_default' => 'bool',
        'is_overridable' => 'bool',
        'adviser_firm_ref' => 'string',
        'link_fee_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ref' => null,
        'fee_schedule' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'date_updated' => 'date-time',
        'is_default' => null,
        'is_overridable' => null,
        'adviser_firm_ref' => null,
        'link_fee_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ref' => false,
        'fee_schedule' => false,
        'start_date' => false,
        'end_date' => false,
        'date_updated' => false,
        'is_default' => false,
        'is_overridable' => false,
        'adviser_firm_ref' => false,
        'link_fee_type' => false
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
        'ref' => 'ref',
        'fee_schedule' => 'fee_schedule',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'date_updated' => 'date_updated',
        'is_default' => 'is_default',
        'is_overridable' => 'is_overridable',
        'adviser_firm_ref' => 'adviser_firm_ref',
        'link_fee_type' => 'link_fee_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ref' => 'setRef',
        'fee_schedule' => 'setFeeSchedule',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'date_updated' => 'setDateUpdated',
        'is_default' => 'setIsDefault',
        'is_overridable' => 'setIsOverridable',
        'adviser_firm_ref' => 'setAdviserFirmRef',
        'link_fee_type' => 'setLinkFeeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ref' => 'getRef',
        'fee_schedule' => 'getFeeSchedule',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'date_updated' => 'getDateUpdated',
        'is_default' => 'getIsDefault',
        'is_overridable' => 'getIsOverridable',
        'adviser_firm_ref' => 'getAdviserFirmRef',
        'link_fee_type' => 'getLinkFeeType'
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
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('fee_schedule', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], true);
        $this->setIfExists('is_overridable', $data ?? [], false);
        $this->setIfExists('adviser_firm_ref', $data ?? [], null);
        $this->setIfExists('link_fee_type', $data ?? [], null);
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

        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['fee_schedule'] === null) {
            $invalidProperties[] = "'fee_schedule' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['adviser_firm_ref'] === null) {
            $invalidProperties[] = "'adviser_firm_ref' can't be null";
        }
        if ($this->container['link_fee_type'] === null) {
            $invalidProperties[] = "'link_fee_type' can't be null";
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
     * Gets ref
     *
     * @return int
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param int $ref ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            throw new \InvalidArgumentException('non-nullable ref cannot be null');
        }
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets fee_schedule
     *
     * @return \OpenAPI\Client\Model\NestedFeeScheduleReturnSchema
     */
    public function getFeeSchedule()
    {
        return $this->container['fee_schedule'];
    }

    /**
     * Sets fee_schedule
     *
     * @param \OpenAPI\Client\Model\NestedFeeScheduleReturnSchema $fee_schedule fee_schedule
     *
     * @return self
     */
    public function setFeeSchedule($fee_schedule)
    {
        if (is_null($fee_schedule)) {
            throw new \InvalidArgumentException('non-nullable fee_schedule cannot be null');
        }
        $this->container['fee_schedule'] = $fee_schedule;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param \DateTime $date_updated date_updated
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {
        if (is_null($date_updated)) {
            throw new \InvalidArgumentException('non-nullable date_updated cannot be null');
        }
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_overridable
     *
     * @return bool|null
     */
    public function getIsOverridable()
    {
        return $this->container['is_overridable'];
    }

    /**
     * Sets is_overridable
     *
     * @param bool|null $is_overridable is_overridable
     *
     * @return self
     */
    public function setIsOverridable($is_overridable)
    {
        if (is_null($is_overridable)) {
            throw new \InvalidArgumentException('non-nullable is_overridable cannot be null');
        }
        $this->container['is_overridable'] = $is_overridable;

        return $this;
    }

    /**
     * Gets adviser_firm_ref
     *
     * @return string
     */
    public function getAdviserFirmRef()
    {
        return $this->container['adviser_firm_ref'];
    }

    /**
     * Sets adviser_firm_ref
     *
     * @param string $adviser_firm_ref adviser_firm_ref
     *
     * @return self
     */
    public function setAdviserFirmRef($adviser_firm_ref)
    {
        if (is_null($adviser_firm_ref)) {
            throw new \InvalidArgumentException('non-nullable adviser_firm_ref cannot be null');
        }
        $this->container['adviser_firm_ref'] = $adviser_firm_ref;

        return $this;
    }

    /**
     * Gets link_fee_type
     *
     * @return string
     */
    public function getLinkFeeType()
    {
        return $this->container['link_fee_type'];
    }

    /**
     * Sets link_fee_type
     *
     * @param string $link_fee_type link_fee_type
     *
     * @return self
     */
    public function setLinkFeeType($link_fee_type)
    {
        if (is_null($link_fee_type)) {
            throw new \InvalidArgumentException('non-nullable link_fee_type cannot be null');
        }
        $this->container['link_fee_type'] = $link_fee_type;

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


