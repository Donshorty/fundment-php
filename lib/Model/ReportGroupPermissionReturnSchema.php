<?php
/**
 * ReportGroupPermissionReturnSchema
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
 * ReportGroupPermissionReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportGroupPermissionReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportGroupPermissionReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_user_group_id' => 'int',
        'report_group_id' => 'int',
        'updating_login_id' => 'int',
        'updated_on' => '\DateTime',
        'report_group' => '\OpenAPI\Client\Model\ReportGroupReturnSchema',
        'report_user_group' => '\OpenAPI\Client\Model\ReportUserGroupReturnSchema',
        'updating_login' => '\OpenAPI\Client\Model\ReducedLoginReturnSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_user_group_id' => null,
        'report_group_id' => null,
        'updating_login_id' => null,
        'updated_on' => 'date-time',
        'report_group' => null,
        'report_user_group' => null,
        'updating_login' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'report_user_group_id' => false,
        'report_group_id' => false,
        'updating_login_id' => false,
        'updated_on' => false,
        'report_group' => false,
        'report_user_group' => false,
        'updating_login' => false
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
        'report_user_group_id' => 'report_user_group_id',
        'report_group_id' => 'report_group_id',
        'updating_login_id' => 'updating_login_id',
        'updated_on' => 'updated_on',
        'report_group' => 'report_group',
        'report_user_group' => 'report_user_group',
        'updating_login' => 'updating_login'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_user_group_id' => 'setReportUserGroupId',
        'report_group_id' => 'setReportGroupId',
        'updating_login_id' => 'setUpdatingLoginId',
        'updated_on' => 'setUpdatedOn',
        'report_group' => 'setReportGroup',
        'report_user_group' => 'setReportUserGroup',
        'updating_login' => 'setUpdatingLogin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_user_group_id' => 'getReportUserGroupId',
        'report_group_id' => 'getReportGroupId',
        'updating_login_id' => 'getUpdatingLoginId',
        'updated_on' => 'getUpdatedOn',
        'report_group' => 'getReportGroup',
        'report_user_group' => 'getReportUserGroup',
        'updating_login' => 'getUpdatingLogin'
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
        $this->setIfExists('report_user_group_id', $data ?? [], null);
        $this->setIfExists('report_group_id', $data ?? [], null);
        $this->setIfExists('updating_login_id', $data ?? [], null);
        $this->setIfExists('updated_on', $data ?? [], null);
        $this->setIfExists('report_group', $data ?? [], null);
        $this->setIfExists('report_user_group', $data ?? [], null);
        $this->setIfExists('updating_login', $data ?? [], null);
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

        if ($this->container['report_user_group_id'] === null) {
            $invalidProperties[] = "'report_user_group_id' can't be null";
        }
        if ($this->container['report_group_id'] === null) {
            $invalidProperties[] = "'report_group_id' can't be null";
        }
        if ($this->container['updating_login_id'] === null) {
            $invalidProperties[] = "'updating_login_id' can't be null";
        }
        if ($this->container['updated_on'] === null) {
            $invalidProperties[] = "'updated_on' can't be null";
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
     * Gets report_user_group_id
     *
     * @return int
     */
    public function getReportUserGroupId()
    {
        return $this->container['report_user_group_id'];
    }

    /**
     * Sets report_user_group_id
     *
     * @param int $report_user_group_id Report User Group ID FK
     *
     * @return self
     */
    public function setReportUserGroupId($report_user_group_id)
    {
        if (is_null($report_user_group_id)) {
            throw new \InvalidArgumentException('non-nullable report_user_group_id cannot be null');
        }
        $this->container['report_user_group_id'] = $report_user_group_id;

        return $this;
    }

    /**
     * Gets report_group_id
     *
     * @return int
     */
    public function getReportGroupId()
    {
        return $this->container['report_group_id'];
    }

    /**
     * Sets report_group_id
     *
     * @param int $report_group_id Report Group ID FK
     *
     * @return self
     */
    public function setReportGroupId($report_group_id)
    {
        if (is_null($report_group_id)) {
            throw new \InvalidArgumentException('non-nullable report_group_id cannot be null');
        }
        $this->container['report_group_id'] = $report_group_id;

        return $this;
    }

    /**
     * Gets updating_login_id
     *
     * @return int
     */
    public function getUpdatingLoginId()
    {
        return $this->container['updating_login_id'];
    }

    /**
     * Sets updating_login_id
     *
     * @param int $updating_login_id Login ID of user that updated this data
     *
     * @return self
     */
    public function setUpdatingLoginId($updating_login_id)
    {
        if (is_null($updating_login_id)) {
            throw new \InvalidArgumentException('non-nullable updating_login_id cannot be null');
        }
        $this->container['updating_login_id'] = $updating_login_id;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param \DateTime $updated_on Last updated time
     *
     * @return self
     */
    public function setUpdatedOn($updated_on)
    {
        if (is_null($updated_on)) {
            throw new \InvalidArgumentException('non-nullable updated_on cannot be null');
        }
        $this->container['updated_on'] = $updated_on;

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
     * Gets report_user_group
     *
     * @return \OpenAPI\Client\Model\ReportUserGroupReturnSchema|null
     */
    public function getReportUserGroup()
    {
        return $this->container['report_user_group'];
    }

    /**
     * Sets report_user_group
     *
     * @param \OpenAPI\Client\Model\ReportUserGroupReturnSchema|null $report_user_group report_user_group
     *
     * @return self
     */
    public function setReportUserGroup($report_user_group)
    {
        if (is_null($report_user_group)) {
            throw new \InvalidArgumentException('non-nullable report_user_group cannot be null');
        }
        $this->container['report_user_group'] = $report_user_group;

        return $this;
    }

    /**
     * Gets updating_login
     *
     * @return \OpenAPI\Client\Model\ReducedLoginReturnSchema|null
     */
    public function getUpdatingLogin()
    {
        return $this->container['updating_login'];
    }

    /**
     * Sets updating_login
     *
     * @param \OpenAPI\Client\Model\ReducedLoginReturnSchema|null $updating_login updating_login
     *
     * @return self
     */
    public function setUpdatingLogin($updating_login)
    {
        if (is_null($updating_login)) {
            throw new \InvalidArgumentException('non-nullable updating_login cannot be null');
        }
        $this->container['updating_login'] = $updating_login;

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


