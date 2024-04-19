<?php
/**
 * AdviserFirmFeeReturnSchema
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
 * AdviserFirmFeeReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdviserFirmFeeReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdviserFirmFeeReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lower_threshold' => 'int',
        'initial_fee_percent' => 'float',
        'initial_fee_fixed_cap' => 'float',
        'ongoing_fee_percent' => 'float',
        'ongoing_fee_fixed' => 'float',
        'type' => '\OpenAPI\Client\Model\AdviserFirmFeeType',
        'date_updated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lower_threshold' => null,
        'initial_fee_percent' => null,
        'initial_fee_fixed_cap' => null,
        'ongoing_fee_percent' => null,
        'ongoing_fee_fixed' => null,
        'type' => null,
        'date_updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lower_threshold' => false,
        'initial_fee_percent' => false,
        'initial_fee_fixed_cap' => false,
        'ongoing_fee_percent' => false,
        'ongoing_fee_fixed' => false,
        'type' => false,
        'date_updated' => false
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
        'lower_threshold' => 'lower_threshold',
        'initial_fee_percent' => 'initial_fee_percent',
        'initial_fee_fixed_cap' => 'initial_fee_fixed_cap',
        'ongoing_fee_percent' => 'ongoing_fee_percent',
        'ongoing_fee_fixed' => 'ongoing_fee_fixed',
        'type' => 'type',
        'date_updated' => 'date_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lower_threshold' => 'setLowerThreshold',
        'initial_fee_percent' => 'setInitialFeePercent',
        'initial_fee_fixed_cap' => 'setInitialFeeFixedCap',
        'ongoing_fee_percent' => 'setOngoingFeePercent',
        'ongoing_fee_fixed' => 'setOngoingFeeFixed',
        'type' => 'setType',
        'date_updated' => 'setDateUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lower_threshold' => 'getLowerThreshold',
        'initial_fee_percent' => 'getInitialFeePercent',
        'initial_fee_fixed_cap' => 'getInitialFeeFixedCap',
        'ongoing_fee_percent' => 'getOngoingFeePercent',
        'ongoing_fee_fixed' => 'getOngoingFeeFixed',
        'type' => 'getType',
        'date_updated' => 'getDateUpdated'
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
        $this->setIfExists('lower_threshold', $data ?? [], null);
        $this->setIfExists('initial_fee_percent', $data ?? [], null);
        $this->setIfExists('initial_fee_fixed_cap', $data ?? [], null);
        $this->setIfExists('ongoing_fee_percent', $data ?? [], null);
        $this->setIfExists('ongoing_fee_fixed', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
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

        if ($this->container['lower_threshold'] === null) {
            $invalidProperties[] = "'lower_threshold' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
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
     * Gets lower_threshold
     *
     * @return int
     */
    public function getLowerThreshold()
    {
        return $this->container['lower_threshold'];
    }

    /**
     * Sets lower_threshold
     *
     * @param int $lower_threshold lower_threshold
     *
     * @return self
     */
    public function setLowerThreshold($lower_threshold)
    {
        if (is_null($lower_threshold)) {
            throw new \InvalidArgumentException('non-nullable lower_threshold cannot be null');
        }
        $this->container['lower_threshold'] = $lower_threshold;

        return $this;
    }

    /**
     * Gets initial_fee_percent
     *
     * @return float|null
     */
    public function getInitialFeePercent()
    {
        return $this->container['initial_fee_percent'];
    }

    /**
     * Sets initial_fee_percent
     *
     * @param float|null $initial_fee_percent initial_fee_percent
     *
     * @return self
     */
    public function setInitialFeePercent($initial_fee_percent)
    {
        if (is_null($initial_fee_percent)) {
            throw new \InvalidArgumentException('non-nullable initial_fee_percent cannot be null');
        }
        $this->container['initial_fee_percent'] = $initial_fee_percent;

        return $this;
    }

    /**
     * Gets initial_fee_fixed_cap
     *
     * @return float|null
     */
    public function getInitialFeeFixedCap()
    {
        return $this->container['initial_fee_fixed_cap'];
    }

    /**
     * Sets initial_fee_fixed_cap
     *
     * @param float|null $initial_fee_fixed_cap initial_fee_fixed_cap
     *
     * @return self
     */
    public function setInitialFeeFixedCap($initial_fee_fixed_cap)
    {
        if (is_null($initial_fee_fixed_cap)) {
            throw new \InvalidArgumentException('non-nullable initial_fee_fixed_cap cannot be null');
        }
        $this->container['initial_fee_fixed_cap'] = $initial_fee_fixed_cap;

        return $this;
    }

    /**
     * Gets ongoing_fee_percent
     *
     * @return float|null
     */
    public function getOngoingFeePercent()
    {
        return $this->container['ongoing_fee_percent'];
    }

    /**
     * Sets ongoing_fee_percent
     *
     * @param float|null $ongoing_fee_percent ongoing_fee_percent
     *
     * @return self
     */
    public function setOngoingFeePercent($ongoing_fee_percent)
    {
        if (is_null($ongoing_fee_percent)) {
            throw new \InvalidArgumentException('non-nullable ongoing_fee_percent cannot be null');
        }
        $this->container['ongoing_fee_percent'] = $ongoing_fee_percent;

        return $this;
    }

    /**
     * Gets ongoing_fee_fixed
     *
     * @return float|null
     */
    public function getOngoingFeeFixed()
    {
        return $this->container['ongoing_fee_fixed'];
    }

    /**
     * Sets ongoing_fee_fixed
     *
     * @param float|null $ongoing_fee_fixed ongoing_fee_fixed
     *
     * @return self
     */
    public function setOngoingFeeFixed($ongoing_fee_fixed)
    {
        if (is_null($ongoing_fee_fixed)) {
            throw new \InvalidArgumentException('non-nullable ongoing_fee_fixed cannot be null');
        }
        $this->container['ongoing_fee_fixed'] = $ongoing_fee_fixed;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\AdviserFirmFeeType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\AdviserFirmFeeType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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

