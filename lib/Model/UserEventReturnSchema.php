<?php
/**
 * UserEventReturnSchema
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
 * UserEventReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserEventReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserEventReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'event_type' => '\OpenAPI\Client\Model\FapiDbUserUserEventEventType',
        'source_goal_id' => 'int',
        'target_goal_id' => 'int',
        'amount' => 'float',
        'event_date' => '\DateTime',
        'status' => 'string',
        'parameters' => 'string',
        'latest_note' => '\OpenAPI\Client\Model\UserEventNoteReturnSchema',
        'formatted_event_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_id' => null,
        'event_type' => null,
        'source_goal_id' => null,
        'target_goal_id' => null,
        'amount' => null,
        'event_date' => 'date',
        'status' => null,
        'parameters' => null,
        'latest_note' => null,
        'formatted_event_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_id' => false,
        'event_type' => false,
        'source_goal_id' => false,
        'target_goal_id' => false,
        'amount' => false,
        'event_date' => false,
        'status' => false,
        'parameters' => false,
        'latest_note' => false,
        'formatted_event_type' => false
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
        'user_id' => 'user_id',
        'event_type' => 'event_type',
        'source_goal_id' => 'source_goal_id',
        'target_goal_id' => 'target_goal_id',
        'amount' => 'amount',
        'event_date' => 'event_date',
        'status' => 'status',
        'parameters' => 'parameters',
        'latest_note' => 'latest_note',
        'formatted_event_type' => 'formatted_event_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'event_type' => 'setEventType',
        'source_goal_id' => 'setSourceGoalId',
        'target_goal_id' => 'setTargetGoalId',
        'amount' => 'setAmount',
        'event_date' => 'setEventDate',
        'status' => 'setStatus',
        'parameters' => 'setParameters',
        'latest_note' => 'setLatestNote',
        'formatted_event_type' => 'setFormattedEventType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'event_type' => 'getEventType',
        'source_goal_id' => 'getSourceGoalId',
        'target_goal_id' => 'getTargetGoalId',
        'amount' => 'getAmount',
        'event_date' => 'getEventDate',
        'status' => 'getStatus',
        'parameters' => 'getParameters',
        'latest_note' => 'getLatestNote',
        'formatted_event_type' => 'getFormattedEventType'
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('source_goal_id', $data ?? [], null);
        $this->setIfExists('target_goal_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('event_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('latest_note', $data ?? [], null);
        $this->setIfExists('formatted_event_type', $data ?? [], null);
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

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['source_goal_id'] === null) {
            $invalidProperties[] = "'source_goal_id' can't be null";
        }
        if ($this->container['target_goal_id'] === null) {
            $invalidProperties[] = "'target_goal_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['formatted_event_type'] === null) {
            $invalidProperties[] = "'formatted_event_type' can't be null";
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
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return \OpenAPI\Client\Model\FapiDbUserUserEventEventType
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param \OpenAPI\Client\Model\FapiDbUserUserEventEventType $event_type event_type
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        if (is_null($event_type)) {
            throw new \InvalidArgumentException('non-nullable event_type cannot be null');
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets source_goal_id
     *
     * @return int
     */
    public function getSourceGoalId()
    {
        return $this->container['source_goal_id'];
    }

    /**
     * Sets source_goal_id
     *
     * @param int $source_goal_id source_goal_id
     *
     * @return self
     */
    public function setSourceGoalId($source_goal_id)
    {
        if (is_null($source_goal_id)) {
            throw new \InvalidArgumentException('non-nullable source_goal_id cannot be null');
        }
        $this->container['source_goal_id'] = $source_goal_id;

        return $this;
    }

    /**
     * Gets target_goal_id
     *
     * @return int
     */
    public function getTargetGoalId()
    {
        return $this->container['target_goal_id'];
    }

    /**
     * Sets target_goal_id
     *
     * @param int $target_goal_id target_goal_id
     *
     * @return self
     */
    public function setTargetGoalId($target_goal_id)
    {
        if (is_null($target_goal_id)) {
            throw new \InvalidArgumentException('non-nullable target_goal_id cannot be null');
        }
        $this->container['target_goal_id'] = $target_goal_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return \DateTime|null
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime|null $event_date event_date
     *
     * @return self
     */
    public function setEventDate($event_date)
    {
        if (is_null($event_date)) {
            throw new \InvalidArgumentException('non-nullable event_date cannot be null');
        }
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return string|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param string|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        if (is_null($parameters)) {
            throw new \InvalidArgumentException('non-nullable parameters cannot be null');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets latest_note
     *
     * @return \OpenAPI\Client\Model\UserEventNoteReturnSchema|null
     */
    public function getLatestNote()
    {
        return $this->container['latest_note'];
    }

    /**
     * Sets latest_note
     *
     * @param \OpenAPI\Client\Model\UserEventNoteReturnSchema|null $latest_note latest_note
     *
     * @return self
     */
    public function setLatestNote($latest_note)
    {
        if (is_null($latest_note)) {
            throw new \InvalidArgumentException('non-nullable latest_note cannot be null');
        }
        $this->container['latest_note'] = $latest_note;

        return $this;
    }

    /**
     * Gets formatted_event_type
     *
     * @return string
     */
    public function getFormattedEventType()
    {
        return $this->container['formatted_event_type'];
    }

    /**
     * Sets formatted_event_type
     *
     * @param string $formatted_event_type formatted_event_type
     *
     * @return self
     */
    public function setFormattedEventType($formatted_event_type)
    {
        if (is_null($formatted_event_type)) {
            throw new \InvalidArgumentException('non-nullable formatted_event_type cannot be null');
        }
        $this->container['formatted_event_type'] = $formatted_event_type;

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


