<?php
/**
 * CountryReturnSchema
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
 * CountryReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CountryReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountryReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'un_code' => 'int',
        'iso_abbrev' => 'string',
        'un_letter_code' => 'string',
        'name' => 'string',
        'continent_code' => 'string',
        'continent_desc' => 'string',
        'nationality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'un_code' => null,
        'iso_abbrev' => null,
        'un_letter_code' => null,
        'name' => null,
        'continent_code' => null,
        'continent_desc' => null,
        'nationality' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'un_code' => false,
        'iso_abbrev' => false,
        'un_letter_code' => false,
        'name' => false,
        'continent_code' => false,
        'continent_desc' => false,
        'nationality' => false
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
        'un_code' => 'un_code',
        'iso_abbrev' => 'iso_abbrev',
        'un_letter_code' => 'un_letter_code',
        'name' => 'name',
        'continent_code' => 'continent_code',
        'continent_desc' => 'continent_desc',
        'nationality' => 'nationality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'un_code' => 'setUnCode',
        'iso_abbrev' => 'setIsoAbbrev',
        'un_letter_code' => 'setUnLetterCode',
        'name' => 'setName',
        'continent_code' => 'setContinentCode',
        'continent_desc' => 'setContinentDesc',
        'nationality' => 'setNationality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'un_code' => 'getUnCode',
        'iso_abbrev' => 'getIsoAbbrev',
        'un_letter_code' => 'getUnLetterCode',
        'name' => 'getName',
        'continent_code' => 'getContinentCode',
        'continent_desc' => 'getContinentDesc',
        'nationality' => 'getNationality'
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
        $this->setIfExists('un_code', $data ?? [], null);
        $this->setIfExists('iso_abbrev', $data ?? [], null);
        $this->setIfExists('un_letter_code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('continent_code', $data ?? [], null);
        $this->setIfExists('continent_desc', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
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

        if ($this->container['un_code'] === null) {
            $invalidProperties[] = "'un_code' can't be null";
        }
        if ($this->container['iso_abbrev'] === null) {
            $invalidProperties[] = "'iso_abbrev' can't be null";
        }
        if ($this->container['un_letter_code'] === null) {
            $invalidProperties[] = "'un_letter_code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets un_code
     *
     * @return int
     */
    public function getUnCode()
    {
        return $this->container['un_code'];
    }

    /**
     * Sets un_code
     *
     * @param int $un_code un_code
     *
     * @return self
     */
    public function setUnCode($un_code)
    {
        if (is_null($un_code)) {
            throw new \InvalidArgumentException('non-nullable un_code cannot be null');
        }
        $this->container['un_code'] = $un_code;

        return $this;
    }

    /**
     * Gets iso_abbrev
     *
     * @return string
     */
    public function getIsoAbbrev()
    {
        return $this->container['iso_abbrev'];
    }

    /**
     * Sets iso_abbrev
     *
     * @param string $iso_abbrev iso_abbrev
     *
     * @return self
     */
    public function setIsoAbbrev($iso_abbrev)
    {
        if (is_null($iso_abbrev)) {
            throw new \InvalidArgumentException('non-nullable iso_abbrev cannot be null');
        }
        $this->container['iso_abbrev'] = $iso_abbrev;

        return $this;
    }

    /**
     * Gets un_letter_code
     *
     * @return string
     */
    public function getUnLetterCode()
    {
        return $this->container['un_letter_code'];
    }

    /**
     * Sets un_letter_code
     *
     * @param string $un_letter_code un_letter_code
     *
     * @return self
     */
    public function setUnLetterCode($un_letter_code)
    {
        if (is_null($un_letter_code)) {
            throw new \InvalidArgumentException('non-nullable un_letter_code cannot be null');
        }
        $this->container['un_letter_code'] = $un_letter_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets continent_code
     *
     * @return string|null
     */
    public function getContinentCode()
    {
        return $this->container['continent_code'];
    }

    /**
     * Sets continent_code
     *
     * @param string|null $continent_code continent_code
     *
     * @return self
     */
    public function setContinentCode($continent_code)
    {
        if (is_null($continent_code)) {
            throw new \InvalidArgumentException('non-nullable continent_code cannot be null');
        }
        $this->container['continent_code'] = $continent_code;

        return $this;
    }

    /**
     * Gets continent_desc
     *
     * @return string|null
     */
    public function getContinentDesc()
    {
        return $this->container['continent_desc'];
    }

    /**
     * Sets continent_desc
     *
     * @param string|null $continent_desc continent_desc
     *
     * @return self
     */
    public function setContinentDesc($continent_desc)
    {
        if (is_null($continent_desc)) {
            throw new \InvalidArgumentException('non-nullable continent_desc cannot be null');
        }
        $this->container['continent_desc'] = $continent_desc;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }
        $this->container['nationality'] = $nationality;

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

