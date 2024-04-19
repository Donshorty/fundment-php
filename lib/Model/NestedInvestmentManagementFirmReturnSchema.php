<?php
/**
 * NestedInvestmentManagementFirmReturnSchema
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
 * NestedInvestmentManagementFirmReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NestedInvestmentManagementFirmReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NestedInvestmentManagementFirmReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'im_type' => '\OpenAPI\Client\Model\InvestmentManagementFirmType',
        'name' => 'string',
        'default_weighting_type' => '\OpenAPI\Client\Model\WeightingType',
        'ref' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'fca_registration_number' => 'string',
        'date_updated' => '\DateTime',
        'status' => '\OpenAPI\Client\Model\InvestmentManagementFirmStatus',
        'institution_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'im_type' => null,
        'name' => null,
        'default_weighting_type' => null,
        'ref' => null,
        'email' => null,
        'phone_number' => null,
        'fca_registration_number' => null,
        'date_updated' => 'date-time',
        'status' => null,
        'institution_ref' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'im_type' => false,
        'name' => false,
        'default_weighting_type' => false,
        'ref' => false,
        'email' => false,
        'phone_number' => false,
        'fca_registration_number' => false,
        'date_updated' => false,
        'status' => false,
        'institution_ref' => false
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
        'im_type' => 'im_type',
        'name' => 'name',
        'default_weighting_type' => 'default_weighting_type',
        'ref' => 'ref',
        'email' => 'email',
        'phone_number' => 'phone_number',
        'fca_registration_number' => 'fca_registration_number',
        'date_updated' => 'date_updated',
        'status' => 'status',
        'institution_ref' => 'institution_ref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'im_type' => 'setImType',
        'name' => 'setName',
        'default_weighting_type' => 'setDefaultWeightingType',
        'ref' => 'setRef',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'fca_registration_number' => 'setFcaRegistrationNumber',
        'date_updated' => 'setDateUpdated',
        'status' => 'setStatus',
        'institution_ref' => 'setInstitutionRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'im_type' => 'getImType',
        'name' => 'getName',
        'default_weighting_type' => 'getDefaultWeightingType',
        'ref' => 'getRef',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'fca_registration_number' => 'getFcaRegistrationNumber',
        'date_updated' => 'getDateUpdated',
        'status' => 'getStatus',
        'institution_ref' => 'getInstitutionRef'
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
        $this->setIfExists('im_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('default_weighting_type', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('fca_registration_number', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('institution_ref', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['default_weighting_type'] === null) {
            $invalidProperties[] = "'default_weighting_type' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['fca_registration_number'] === null) {
            $invalidProperties[] = "'fca_registration_number' can't be null";
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
     * Gets im_type
     *
     * @return \OpenAPI\Client\Model\InvestmentManagementFirmType|null
     */
    public function getImType()
    {
        return $this->container['im_type'];
    }

    /**
     * Sets im_type
     *
     * @param \OpenAPI\Client\Model\InvestmentManagementFirmType|null $im_type im_type
     *
     * @return self
     */
    public function setImType($im_type)
    {
        if (is_null($im_type)) {
            throw new \InvalidArgumentException('non-nullable im_type cannot be null');
        }
        $this->container['im_type'] = $im_type;

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
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NestedInvestmentManagementFirmReturnSchema., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets default_weighting_type
     *
     * @return \OpenAPI\Client\Model\WeightingType
     */
    public function getDefaultWeightingType()
    {
        return $this->container['default_weighting_type'];
    }

    /**
     * Sets default_weighting_type
     *
     * @param \OpenAPI\Client\Model\WeightingType $default_weighting_type default_weighting_type
     *
     * @return self
     */
    public function setDefaultWeightingType($default_weighting_type)
    {
        if (is_null($default_weighting_type)) {
            throw new \InvalidArgumentException('non-nullable default_weighting_type cannot be null');
        }
        $this->container['default_weighting_type'] = $default_weighting_type;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref ref
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets fca_registration_number
     *
     * @return string
     */
    public function getFcaRegistrationNumber()
    {
        return $this->container['fca_registration_number'];
    }

    /**
     * Sets fca_registration_number
     *
     * @param string $fca_registration_number fca_registration_number
     *
     * @return self
     */
    public function setFcaRegistrationNumber($fca_registration_number)
    {
        if (is_null($fca_registration_number)) {
            throw new \InvalidArgumentException('non-nullable fca_registration_number cannot be null');
        }
        $this->container['fca_registration_number'] = $fca_registration_number;

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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\InvestmentManagementFirmStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\InvestmentManagementFirmStatus|null $status status
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
     * Gets institution_ref
     *
     * @return string|null
     */
    public function getInstitutionRef()
    {
        return $this->container['institution_ref'];
    }

    /**
     * Sets institution_ref
     *
     * @param string|null $institution_ref institution_ref
     *
     * @return self
     */
    public function setInstitutionRef($institution_ref)
    {
        if (is_null($institution_ref)) {
            throw new \InvalidArgumentException('non-nullable institution_ref cannot be null');
        }
        $this->container['institution_ref'] = $institution_ref;

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


