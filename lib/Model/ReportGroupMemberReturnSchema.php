<?php
/**
 * ReportGroupMemberReturnSchema
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
 * ReportGroupMemberReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportGroupMemberReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportGroupMemberReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_ref' => 'int',
        'report_group_ref' => 'int',
        'report' => '\OpenAPI\Client\Model\ReportReturnSchema',
        'report_group' => '\OpenAPI\Client\Model\ReportGroupReturnSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_ref' => null,
        'report_group_ref' => null,
        'report' => null,
        'report_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'report_ref' => false,
        'report_group_ref' => false,
        'report' => false,
        'report_group' => false
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
        'report_ref' => 'report_ref',
        'report_group_ref' => 'report_group_ref',
        'report' => 'report',
        'report_group' => 'report_group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_ref' => 'setReportRef',
        'report_group_ref' => 'setReportGroupRef',
        'report' => 'setReport',
        'report_group' => 'setReportGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_ref' => 'getReportRef',
        'report_group_ref' => 'getReportGroupRef',
        'report' => 'getReport',
        'report_group' => 'getReportGroup'
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
        $this->setIfExists('report_ref', $data ?? [], null);
        $this->setIfExists('report_group_ref', $data ?? [], null);
        $this->setIfExists('report', $data ?? [], null);
        $this->setIfExists('report_group', $data ?? [], null);
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

        if ($this->container['report_ref'] === null) {
            $invalidProperties[] = "'report_ref' can't be null";
        }
        if ($this->container['report_group_ref'] === null) {
            $invalidProperties[] = "'report_group_ref' can't be null";
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
     * Gets report_ref
     *
     * @return int
     */
    public function getReportRef()
    {
        return $this->container['report_ref'];
    }

    /**
     * Sets report_ref
     *
     * @param int $report_ref report_ref
     *
     * @return self
     */
    public function setReportRef($report_ref)
    {
        if (is_null($report_ref)) {
            throw new \InvalidArgumentException('non-nullable report_ref cannot be null');
        }
        $this->container['report_ref'] = $report_ref;

        return $this;
    }

    /**
     * Gets report_group_ref
     *
     * @return int
     */
    public function getReportGroupRef()
    {
        return $this->container['report_group_ref'];
    }

    /**
     * Sets report_group_ref
     *
     * @param int $report_group_ref report_group_ref
     *
     * @return self
     */
    public function setReportGroupRef($report_group_ref)
    {
        if (is_null($report_group_ref)) {
            throw new \InvalidArgumentException('non-nullable report_group_ref cannot be null');
        }
        $this->container['report_group_ref'] = $report_group_ref;

        return $this;
    }

    /**
     * Gets report
     *
     * @return \OpenAPI\Client\Model\ReportReturnSchema|null
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param \OpenAPI\Client\Model\ReportReturnSchema|null $report report
     *
     * @return self
     */
    public function setReport($report)
    {
        if (is_null($report)) {
            throw new \InvalidArgumentException('non-nullable report cannot be null');
        }
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets report_group
     *
     * @return \OpenAPI\Client\Model\ReportGroupReturnSchema|null
     */
    public function getReportGroup()
    {
        return $this->container['report_group'];
    }

    /**
     * Sets report_group
     *
     * @param \OpenAPI\Client\Model\ReportGroupReturnSchema|null $report_group report_group
     *
     * @return self
     */
    public function setReportGroup($report_group)
    {
        if (is_null($report_group)) {
            throw new \InvalidArgumentException('non-nullable report_group cannot be null');
        }
        $this->container['report_group'] = $report_group;

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


