<?php
/**
 * ClientGroupReturnSchema
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
 * ClientGroupReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientGroupReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientGroupReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_name' => 'string',
        'group_notional_amount' => 'int',
        'fee_overrides_json' => 'string',
        'adviser_ref' => 'int',
        'ref' => 'int',
        'adviser_firm_ref' => 'string',
        'date_updated' => '\DateTime',
        'end_date' => '\DateTime',
        'clients' => '\OpenAPI\Client\Model\ClientGroupNestedClientReturnSchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_name' => null,
        'group_notional_amount' => null,
        'fee_overrides_json' => null,
        'adviser_ref' => null,
        'ref' => null,
        'adviser_firm_ref' => null,
        'date_updated' => 'date-time',
        'end_date' => 'date-time',
        'clients' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'group_name' => false,
        'group_notional_amount' => false,
        'fee_overrides_json' => false,
        'adviser_ref' => false,
        'ref' => false,
        'adviser_firm_ref' => false,
        'date_updated' => false,
        'end_date' => false,
        'clients' => false
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
        'group_name' => 'group_name',
        'group_notional_amount' => 'group_notional_amount',
        'fee_overrides_json' => 'fee_overrides_json',
        'adviser_ref' => 'adviser_ref',
        'ref' => 'ref',
        'adviser_firm_ref' => 'adviser_firm_ref',
        'date_updated' => 'date_updated',
        'end_date' => 'end_date',
        'clients' => 'clients'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_name' => 'setGroupName',
        'group_notional_amount' => 'setGroupNotionalAmount',
        'fee_overrides_json' => 'setFeeOverridesJson',
        'adviser_ref' => 'setAdviserRef',
        'ref' => 'setRef',
        'adviser_firm_ref' => 'setAdviserFirmRef',
        'date_updated' => 'setDateUpdated',
        'end_date' => 'setEndDate',
        'clients' => 'setClients'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_name' => 'getGroupName',
        'group_notional_amount' => 'getGroupNotionalAmount',
        'fee_overrides_json' => 'getFeeOverridesJson',
        'adviser_ref' => 'getAdviserRef',
        'ref' => 'getRef',
        'adviser_firm_ref' => 'getAdviserFirmRef',
        'date_updated' => 'getDateUpdated',
        'end_date' => 'getEndDate',
        'clients' => 'getClients'
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
        $this->setIfExists('group_name', $data ?? [], null);
        $this->setIfExists('group_notional_amount', $data ?? [], null);
        $this->setIfExists('fee_overrides_json', $data ?? [], null);
        $this->setIfExists('adviser_ref', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('adviser_firm_ref', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('clients', $data ?? [], null);
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
        if ($this->container['adviser_firm_ref'] === null) {
            $invalidProperties[] = "'adviser_firm_ref' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['clients'] === null) {
            $invalidProperties[] = "'clients' can't be null";
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
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name group_name
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        if (is_null($group_name)) {
            throw new \InvalidArgumentException('non-nullable group_name cannot be null');
        }
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets group_notional_amount
     *
     * @return int|null
     */
    public function getGroupNotionalAmount()
    {
        return $this->container['group_notional_amount'];
    }

    /**
     * Sets group_notional_amount
     *
     * @param int|null $group_notional_amount group_notional_amount
     *
     * @return self
     */
    public function setGroupNotionalAmount($group_notional_amount)
    {
        if (is_null($group_notional_amount)) {
            throw new \InvalidArgumentException('non-nullable group_notional_amount cannot be null');
        }
        $this->container['group_notional_amount'] = $group_notional_amount;

        return $this;
    }

    /**
     * Gets fee_overrides_json
     *
     * @return string|null
     */
    public function getFeeOverridesJson()
    {
        return $this->container['fee_overrides_json'];
    }

    /**
     * Sets fee_overrides_json
     *
     * @param string|null $fee_overrides_json fee_overrides_json
     *
     * @return self
     */
    public function setFeeOverridesJson($fee_overrides_json)
    {
        if (is_null($fee_overrides_json)) {
            throw new \InvalidArgumentException('non-nullable fee_overrides_json cannot be null');
        }
        $this->container['fee_overrides_json'] = $fee_overrides_json;

        return $this;
    }

    /**
     * Gets adviser_ref
     *
     * @return int|null
     */
    public function getAdviserRef()
    {
        return $this->container['adviser_ref'];
    }

    /**
     * Sets adviser_ref
     *
     * @param int|null $adviser_ref adviser_ref
     *
     * @return self
     */
    public function setAdviserRef($adviser_ref)
    {
        if (is_null($adviser_ref)) {
            throw new \InvalidArgumentException('non-nullable adviser_ref cannot be null');
        }
        $this->container['adviser_ref'] = $adviser_ref;

        return $this;
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
     * Gets clients
     *
     * @return \OpenAPI\Client\Model\ClientGroupNestedClientReturnSchema[]
     */
    public function getClients()
    {
        return $this->container['clients'];
    }

    /**
     * Sets clients
     *
     * @param \OpenAPI\Client\Model\ClientGroupNestedClientReturnSchema[] $clients clients
     *
     * @return self
     */
    public function setClients($clients)
    {
        if (is_null($clients)) {
            throw new \InvalidArgumentException('non-nullable clients cannot be null');
        }
        $this->container['clients'] = $clients;

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


