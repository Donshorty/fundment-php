<?php
/**
 * NestedGoalCreateSchema
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
 * NestedGoalCreateSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NestedGoalCreateSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NestedGoalCreateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'goal_name' => 'string',
        'tax_status' => '\OpenAPI\Client\Model\TaxStatus',
        'status' => '\OpenAPI\Client\Model\FapiDbUserPortfolioStatus',
        'ref' => 'string',
        'goal_adviser_bo_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'goal_name' => null,
        'tax_status' => null,
        'status' => null,
        'ref' => null,
        'goal_adviser_bo_ref' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'goal_name' => false,
        'tax_status' => false,
        'status' => false,
        'ref' => false,
        'goal_adviser_bo_ref' => false
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
        'goal_name' => 'goal_name',
        'tax_status' => 'tax_status',
        'status' => 'status',
        'ref' => 'ref',
        'goal_adviser_bo_ref' => 'goal_adviser_bo_ref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'goal_name' => 'setGoalName',
        'tax_status' => 'setTaxStatus',
        'status' => 'setStatus',
        'ref' => 'setRef',
        'goal_adviser_bo_ref' => 'setGoalAdviserBoRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'goal_name' => 'getGoalName',
        'tax_status' => 'getTaxStatus',
        'status' => 'getStatus',
        'ref' => 'getRef',
        'goal_adviser_bo_ref' => 'getGoalAdviserBoRef'
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
        $this->setIfExists('goal_name', $data ?? [], null);
        $this->setIfExists('tax_status', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('goal_adviser_bo_ref', $data ?? [], null);
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

        if ($this->container['goal_name'] === null) {
            $invalidProperties[] = "'goal_name' can't be null";
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
     * Gets goal_name
     *
     * @return string
     */
    public function getGoalName()
    {
        return $this->container['goal_name'];
    }

    /**
     * Sets goal_name
     *
     * @param string $goal_name goal_name
     *
     * @return self
     */
    public function setGoalName($goal_name)
    {
        if (is_null($goal_name)) {
            throw new \InvalidArgumentException('non-nullable goal_name cannot be null');
        }
        $this->container['goal_name'] = $goal_name;

        return $this;
    }

    /**
     * Gets tax_status
     *
     * @return \OpenAPI\Client\Model\TaxStatus|null
     */
    public function getTaxStatus()
    {
        return $this->container['tax_status'];
    }

    /**
     * Sets tax_status
     *
     * @param \OpenAPI\Client\Model\TaxStatus|null $tax_status tax_status
     *
     * @return self
     */
    public function setTaxStatus($tax_status)
    {
        if (is_null($tax_status)) {
            throw new \InvalidArgumentException('non-nullable tax_status cannot be null');
        }
        $this->container['tax_status'] = $tax_status;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\FapiDbUserPortfolioStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\FapiDbUserPortfolioStatus|null $status status
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
     * Gets ref
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string|null $ref ref
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
     * Gets goal_adviser_bo_ref
     *
     * @return string|null
     */
    public function getGoalAdviserBoRef()
    {
        return $this->container['goal_adviser_bo_ref'];
    }

    /**
     * Sets goal_adviser_bo_ref
     *
     * @param string|null $goal_adviser_bo_ref goal_adviser_bo_ref
     *
     * @return self
     */
    public function setGoalAdviserBoRef($goal_adviser_bo_ref)
    {
        if (is_null($goal_adviser_bo_ref)) {
            throw new \InvalidArgumentException('non-nullable goal_adviser_bo_ref cannot be null');
        }
        $this->container['goal_adviser_bo_ref'] = $goal_adviser_bo_ref;

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


