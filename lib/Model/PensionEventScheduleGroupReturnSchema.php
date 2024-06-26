<?php
/**
 * PensionEventScheduleGroupReturnSchema
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
 * PensionEventScheduleGroupReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PensionEventScheduleGroupReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PensionEventScheduleGroupReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'ext_ref' => 'string',
        'status' => '\OpenAPI\Client\Model\FapiDbPensionPensionEventScheduleGroupStatus',
        'status_description' => 'string',
        'end_date' => '\DateTime',
        'date_created' => '\DateTime',
        'date_updated' => '\DateTime',
        'pension_event_schedules' => '\OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[]',
        'notes' => '\OpenAPI\Client\Model\PensionNotesReturnSchema[]',
        'event_groups' => '\OpenAPI\Client\Model\NestedPensionEventGroupReturnSchema[]',
        'client_approvals' => '\OpenAPI\Client\Model\PensionClientApprovalReturnSchema[]'
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
        'id' => null,
        'ext_ref' => null,
        'status' => null,
        'status_description' => null,
        'end_date' => 'date',
        'date_created' => 'date-time',
        'date_updated' => 'date-time',
        'pension_event_schedules' => null,
        'notes' => null,
        'event_groups' => null,
        'client_approvals' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'id' => false,
        'ext_ref' => false,
        'status' => false,
        'status_description' => false,
        'end_date' => false,
        'date_created' => false,
        'date_updated' => false,
        'pension_event_schedules' => false,
        'notes' => false,
        'event_groups' => false,
        'client_approvals' => false
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
        'id' => 'id',
        'ext_ref' => 'ext_ref',
        'status' => 'status',
        'status_description' => 'status_description',
        'end_date' => 'end_date',
        'date_created' => 'date_created',
        'date_updated' => 'date_updated',
        'pension_event_schedules' => 'pension_event_schedules',
        'notes' => 'notes',
        'event_groups' => 'event_groups',
        'client_approvals' => 'client_approvals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'ext_ref' => 'setExtRef',
        'status' => 'setStatus',
        'status_description' => 'setStatusDescription',
        'end_date' => 'setEndDate',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated',
        'pension_event_schedules' => 'setPensionEventSchedules',
        'notes' => 'setNotes',
        'event_groups' => 'setEventGroups',
        'client_approvals' => 'setClientApprovals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'ext_ref' => 'getExtRef',
        'status' => 'getStatus',
        'status_description' => 'getStatusDescription',
        'end_date' => 'getEndDate',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated',
        'pension_event_schedules' => 'getPensionEventSchedules',
        'notes' => 'getNotes',
        'event_groups' => 'getEventGroups',
        'client_approvals' => 'getClientApprovals'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ext_ref', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_description', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('pension_event_schedules', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('event_groups', $data ?? [], null);
        $this->setIfExists('client_approvals', $data ?? [], null);
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ext_ref'] === null) {
            $invalidProperties[] = "'ext_ref' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['pension_event_schedules'] === null) {
            $invalidProperties[] = "'pension_event_schedules' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['event_groups'] === null) {
            $invalidProperties[] = "'event_groups' can't be null";
        }
        if ($this->container['client_approvals'] === null) {
            $invalidProperties[] = "'client_approvals' can't be null";
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
     * @return \OpenAPI\Client\Model\FapiDbPensionPensionEventScheduleGroupStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\FapiDbPensionPensionEventScheduleGroupStatus|null $status status
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
     * Gets status_description
     *
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string|null $status_description status_description
     *
     * @return self
     */
    public function setStatusDescription($status_description)
    {
        if (is_null($status_description)) {
            throw new \InvalidArgumentException('non-nullable status_description cannot be null');
        }
        $this->container['status_description'] = $status_description;

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
     * Gets pension_event_schedules
     *
     * @return \OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[]
     */
    public function getPensionEventSchedules()
    {
        return $this->container['pension_event_schedules'];
    }

    /**
     * Sets pension_event_schedules
     *
     * @param \OpenAPI\Client\Model\NestedPensionEventScheduleReturnSchema[] $pension_event_schedules pension_event_schedules
     *
     * @return self
     */
    public function setPensionEventSchedules($pension_event_schedules)
    {
        if (is_null($pension_event_schedules)) {
            throw new \InvalidArgumentException('non-nullable pension_event_schedules cannot be null');
        }
        $this->container['pension_event_schedules'] = $pension_event_schedules;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Model\PensionNotesReturnSchema[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Model\PensionNotesReturnSchema[] $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets event_groups
     *
     * @return \OpenAPI\Client\Model\NestedPensionEventGroupReturnSchema[]
     */
    public function getEventGroups()
    {
        return $this->container['event_groups'];
    }

    /**
     * Sets event_groups
     *
     * @param \OpenAPI\Client\Model\NestedPensionEventGroupReturnSchema[] $event_groups event_groups
     *
     * @return self
     */
    public function setEventGroups($event_groups)
    {
        if (is_null($event_groups)) {
            throw new \InvalidArgumentException('non-nullable event_groups cannot be null');
        }
        $this->container['event_groups'] = $event_groups;

        return $this;
    }

    /**
     * Gets client_approvals
     *
     * @return \OpenAPI\Client\Model\PensionClientApprovalReturnSchema[]
     */
    public function getClientApprovals()
    {
        return $this->container['client_approvals'];
    }

    /**
     * Sets client_approvals
     *
     * @param \OpenAPI\Client\Model\PensionClientApprovalReturnSchema[] $client_approvals client_approvals
     *
     * @return self
     */
    public function setClientApprovals($client_approvals)
    {
        if (is_null($client_approvals)) {
            throw new \InvalidArgumentException('non-nullable client_approvals cannot be null');
        }
        $this->container['client_approvals'] = $client_approvals;

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


