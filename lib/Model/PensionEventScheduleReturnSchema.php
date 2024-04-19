<?php
/**
 * PensionEventScheduleReturnSchema
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
 * PensionEventScheduleReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PensionEventScheduleReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PensionEventScheduleReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'group_id' => 'int',
        'source_goal_id' => 'int',
        'target_goal_id' => 'int',
        'target_bank_account_id' => 'int',
        'gross_amount' => 'float',
        'frequency' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'id' => 'int',
        'ext_ref' => 'string',
        'status' => 'string',
        'date_created' => '\DateTime',
        'date_updated' => '\DateTime',
        'last_event_date' => '\DateTime',
        'next_event_date' => '\DateTime',
        'target_bank_account_name' => 'string',
        'target_goal_name' => 'string',
        'events' => '\OpenAPI\Client\Model\NestedPensionEventReturnSchema[]',
        'schedule_group' => '\OpenAPI\Client\Model\NestedPensionEventScheduleGroupReturnSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'group_id' => null,
        'source_goal_id' => null,
        'target_goal_id' => null,
        'target_bank_account_id' => null,
        'gross_amount' => null,
        'frequency' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'id' => null,
        'ext_ref' => null,
        'status' => null,
        'date_created' => 'date-time',
        'date_updated' => 'date-time',
        'last_event_date' => 'date',
        'next_event_date' => 'date',
        'target_bank_account_name' => null,
        'target_goal_name' => null,
        'events' => null,
        'schedule_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'group_id' => false,
        'source_goal_id' => false,
        'target_goal_id' => false,
        'target_bank_account_id' => false,
        'gross_amount' => false,
        'frequency' => false,
        'start_date' => false,
        'end_date' => false,
        'id' => false,
        'ext_ref' => false,
        'status' => false,
        'date_created' => false,
        'date_updated' => false,
        'last_event_date' => false,
        'next_event_date' => false,
        'target_bank_account_name' => false,
        'target_goal_name' => false,
        'events' => false,
        'schedule_group' => false
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
        'type' => 'type',
        'group_id' => 'group_id',
        'source_goal_id' => 'source_goal_id',
        'target_goal_id' => 'target_goal_id',
        'target_bank_account_id' => 'target_bank_account_id',
        'gross_amount' => 'gross_amount',
        'frequency' => 'frequency',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'id' => 'id',
        'ext_ref' => 'ext_ref',
        'status' => 'status',
        'date_created' => 'date_created',
        'date_updated' => 'date_updated',
        'last_event_date' => 'last_event_date',
        'next_event_date' => 'next_event_date',
        'target_bank_account_name' => 'target_bank_account_name',
        'target_goal_name' => 'target_goal_name',
        'events' => 'events',
        'schedule_group' => 'schedule_group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'group_id' => 'setGroupId',
        'source_goal_id' => 'setSourceGoalId',
        'target_goal_id' => 'setTargetGoalId',
        'target_bank_account_id' => 'setTargetBankAccountId',
        'gross_amount' => 'setGrossAmount',
        'frequency' => 'setFrequency',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'id' => 'setId',
        'ext_ref' => 'setExtRef',
        'status' => 'setStatus',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated',
        'last_event_date' => 'setLastEventDate',
        'next_event_date' => 'setNextEventDate',
        'target_bank_account_name' => 'setTargetBankAccountName',
        'target_goal_name' => 'setTargetGoalName',
        'events' => 'setEvents',
        'schedule_group' => 'setScheduleGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'group_id' => 'getGroupId',
        'source_goal_id' => 'getSourceGoalId',
        'target_goal_id' => 'getTargetGoalId',
        'target_bank_account_id' => 'getTargetBankAccountId',
        'gross_amount' => 'getGrossAmount',
        'frequency' => 'getFrequency',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'id' => 'getId',
        'ext_ref' => 'getExtRef',
        'status' => 'getStatus',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated',
        'last_event_date' => 'getLastEventDate',
        'next_event_date' => 'getNextEventDate',
        'target_bank_account_name' => 'getTargetBankAccountName',
        'target_goal_name' => 'getTargetGoalName',
        'events' => 'getEvents',
        'schedule_group' => 'getScheduleGroup'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('source_goal_id', $data ?? [], null);
        $this->setIfExists('target_goal_id', $data ?? [], null);
        $this->setIfExists('target_bank_account_id', $data ?? [], null);
        $this->setIfExists('gross_amount', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ext_ref', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('last_event_date', $data ?? [], null);
        $this->setIfExists('next_event_date', $data ?? [], null);
        $this->setIfExists('target_bank_account_name', $data ?? [], null);
        $this->setIfExists('target_goal_name', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('schedule_group', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['source_goal_id'] === null) {
            $invalidProperties[] = "'source_goal_id' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ext_ref'] === null) {
            $invalidProperties[] = "'ext_ref' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
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
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        if (is_null($group_id)) {
            throw new \InvalidArgumentException('non-nullable group_id cannot be null');
        }
        $this->container['group_id'] = $group_id;

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
     * @return int|null
     */
    public function getTargetGoalId()
    {
        return $this->container['target_goal_id'];
    }

    /**
     * Sets target_goal_id
     *
     * @param int|null $target_goal_id target_goal_id
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
     * Gets target_bank_account_id
     *
     * @return int|null
     */
    public function getTargetBankAccountId()
    {
        return $this->container['target_bank_account_id'];
    }

    /**
     * Sets target_bank_account_id
     *
     * @param int|null $target_bank_account_id target_bank_account_id
     *
     * @return self
     */
    public function setTargetBankAccountId($target_bank_account_id)
    {
        if (is_null($target_bank_account_id)) {
            throw new \InvalidArgumentException('non-nullable target_bank_account_id cannot be null');
        }
        $this->container['target_bank_account_id'] = $target_bank_account_id;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param float|null $gross_amount gross_amount
     *
     * @return self
     */
    public function setGrossAmount($gross_amount)
    {
        if (is_null($gross_amount)) {
            throw new \InvalidArgumentException('non-nullable gross_amount cannot be null');
        }
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $this->container['frequency'] = $frequency;

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ext_ref
     *
     * @return string
     */
    public function getExtRef()
    {
        return $this->container['ext_ref'];
    }

    /**
     * Sets ext_ref
     *
     * @param string $ext_ref ext_ref
     *
     * @return self
     */
    public function setExtRef($ext_ref)
    {
        if (is_null($ext_ref)) {
            throw new \InvalidArgumentException('non-nullable ext_ref cannot be null');
        }
        $this->container['ext_ref'] = $ext_ref;

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
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

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
     * Gets last_event_date
     *
     * @return \DateTime|null
     */
    public function getLastEventDate()
    {
        return $this->container['last_event_date'];
    }

    /**
     * Sets last_event_date
     *
     * @param \DateTime|null $last_event_date last_event_date
     *
     * @return self
     */
    public function setLastEventDate($last_event_date)
    {
        if (is_null($last_event_date)) {
            throw new \InvalidArgumentException('non-nullable last_event_date cannot be null');
        }
        $this->container['last_event_date'] = $last_event_date;

        return $this;
    }

    /**
     * Gets next_event_date
     *
     * @return \DateTime|null
     */
    public function getNextEventDate()
    {
        return $this->container['next_event_date'];
    }

    /**
     * Sets next_event_date
     *
     * @param \DateTime|null $next_event_date next_event_date
     *
     * @return self
     */
    public function setNextEventDate($next_event_date)
    {
        if (is_null($next_event_date)) {
            throw new \InvalidArgumentException('non-nullable next_event_date cannot be null');
        }
        $this->container['next_event_date'] = $next_event_date;

        return $this;
    }

    /**
     * Gets target_bank_account_name
     *
     * @return string|null
     */
    public function getTargetBankAccountName()
    {
        return $this->container['target_bank_account_name'];
    }

    /**
     * Sets target_bank_account_name
     *
     * @param string|null $target_bank_account_name target_bank_account_name
     *
     * @return self
     */
    public function setTargetBankAccountName($target_bank_account_name)
    {
        if (is_null($target_bank_account_name)) {
            throw new \InvalidArgumentException('non-nullable target_bank_account_name cannot be null');
        }
        $this->container['target_bank_account_name'] = $target_bank_account_name;

        return $this;
    }

    /**
     * Gets target_goal_name
     *
     * @return string|null
     */
    public function getTargetGoalName()
    {
        return $this->container['target_goal_name'];
    }

    /**
     * Sets target_goal_name
     *
     * @param string|null $target_goal_name target_goal_name
     *
     * @return self
     */
    public function setTargetGoalName($target_goal_name)
    {
        if (is_null($target_goal_name)) {
            throw new \InvalidArgumentException('non-nullable target_goal_name cannot be null');
        }
        $this->container['target_goal_name'] = $target_goal_name;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \OpenAPI\Client\Model\NestedPensionEventReturnSchema[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \OpenAPI\Client\Model\NestedPensionEventReturnSchema[] $events events
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets schedule_group
     *
     * @return \OpenAPI\Client\Model\NestedPensionEventScheduleGroupReturnSchema|null
     */
    public function getScheduleGroup()
    {
        return $this->container['schedule_group'];
    }

    /**
     * Sets schedule_group
     *
     * @param \OpenAPI\Client\Model\NestedPensionEventScheduleGroupReturnSchema|null $schedule_group schedule_group
     *
     * @return self
     */
    public function setScheduleGroup($schedule_group)
    {
        if (is_null($schedule_group)) {
            throw new \InvalidArgumentException('non-nullable schedule_group cannot be null');
        }
        $this->container['schedule_group'] = $schedule_group;

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

