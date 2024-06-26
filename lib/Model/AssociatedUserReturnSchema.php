<?php
/**
 * AssociatedUserReturnSchema
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
 * AssociatedUserReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AssociatedUserReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssociatedUserReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ref' => 'int',
        'identity_user_id' => 'int',
        'role' => '\OpenAPI\Client\Model\Roles',
        'should_email' => 'bool',
        'end_date' => '\DateTime',
        'associated_user_id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
        'entity_name' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'lei' => 'string',
        'identity_user_ref' => 'string',
        'identity_client_type' => '\OpenAPI\Client\Model\ClientType',
        'identity_user_status' => '\OpenAPI\Client\Model\FapiDbUserUserStatus',
        'linked_to_completed_client' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ref' => null,
        'identity_user_id' => null,
        'role' => null,
        'should_email' => null,
        'end_date' => 'date',
        'associated_user_id' => null,
        'first_name' => null,
        'last_name' => null,
        'entity_name' => null,
        'phone_number' => null,
        'email' => null,
        'lei' => null,
        'identity_user_ref' => null,
        'identity_client_type' => null,
        'identity_user_status' => null,
        'linked_to_completed_client' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ref' => false,
        'identity_user_id' => false,
        'role' => false,
        'should_email' => false,
        'end_date' => false,
        'associated_user_id' => false,
        'first_name' => false,
        'last_name' => false,
        'entity_name' => false,
        'phone_number' => false,
        'email' => false,
        'lei' => false,
        'identity_user_ref' => false,
        'identity_client_type' => false,
        'identity_user_status' => false,
        'linked_to_completed_client' => false
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
        'ref' => 'ref',
        'identity_user_id' => 'identity_user_id',
        'role' => 'role',
        'should_email' => 'should_email',
        'end_date' => 'end_date',
        'associated_user_id' => 'associated_user_id',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'entity_name' => 'entity_name',
        'phone_number' => 'phone_number',
        'email' => 'email',
        'lei' => 'lei',
        'identity_user_ref' => 'identity_user_ref',
        'identity_client_type' => 'identity_client_type',
        'identity_user_status' => 'identity_user_status',
        'linked_to_completed_client' => 'linked_to_completed_client'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ref' => 'setRef',
        'identity_user_id' => 'setIdentityUserId',
        'role' => 'setRole',
        'should_email' => 'setShouldEmail',
        'end_date' => 'setEndDate',
        'associated_user_id' => 'setAssociatedUserId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'entity_name' => 'setEntityName',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'lei' => 'setLei',
        'identity_user_ref' => 'setIdentityUserRef',
        'identity_client_type' => 'setIdentityClientType',
        'identity_user_status' => 'setIdentityUserStatus',
        'linked_to_completed_client' => 'setLinkedToCompletedClient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ref' => 'getRef',
        'identity_user_id' => 'getIdentityUserId',
        'role' => 'getRole',
        'should_email' => 'getShouldEmail',
        'end_date' => 'getEndDate',
        'associated_user_id' => 'getAssociatedUserId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'entity_name' => 'getEntityName',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'lei' => 'getLei',
        'identity_user_ref' => 'getIdentityUserRef',
        'identity_client_type' => 'getIdentityClientType',
        'identity_user_status' => 'getIdentityUserStatus',
        'linked_to_completed_client' => 'getLinkedToCompletedClient'
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
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('identity_user_id', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('should_email', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('associated_user_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('entity_name', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('lei', $data ?? [], null);
        $this->setIfExists('identity_user_ref', $data ?? [], null);
        $this->setIfExists('identity_client_type', $data ?? [], null);
        $this->setIfExists('identity_user_status', $data ?? [], null);
        $this->setIfExists('linked_to_completed_client', $data ?? [], null);
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
        if ($this->container['identity_user_id'] === null) {
            $invalidProperties[] = "'identity_user_id' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['should_email'] === null) {
            $invalidProperties[] = "'should_email' can't be null";
        }
        if ($this->container['associated_user_id'] === null) {
            $invalidProperties[] = "'associated_user_id' can't be null";
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
     * Gets identity_user_id
     *
     * @return int
     */
    public function getIdentityUserId()
    {
        return $this->container['identity_user_id'];
    }

    /**
     * Sets identity_user_id
     *
     * @param int $identity_user_id identity_user_id
     *
     * @return self
     */
    public function setIdentityUserId($identity_user_id)
    {
        if (is_null($identity_user_id)) {
            throw new \InvalidArgumentException('non-nullable identity_user_id cannot be null');
        }
        $this->container['identity_user_id'] = $identity_user_id;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \OpenAPI\Client\Model\Roles
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \OpenAPI\Client\Model\Roles $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets should_email
     *
     * @return bool
     */
    public function getShouldEmail()
    {
        return $this->container['should_email'];
    }

    /**
     * Sets should_email
     *
     * @param bool $should_email should_email
     *
     * @return self
     */
    public function setShouldEmail($should_email)
    {
        if (is_null($should_email)) {
            throw new \InvalidArgumentException('non-nullable should_email cannot be null');
        }
        $this->container['should_email'] = $should_email;

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
     * Gets associated_user_id
     *
     * @return int
     */
    public function getAssociatedUserId()
    {
        return $this->container['associated_user_id'];
    }

    /**
     * Sets associated_user_id
     *
     * @param int $associated_user_id associated_user_id
     *
     * @return self
     */
    public function setAssociatedUserId($associated_user_id)
    {
        if (is_null($associated_user_id)) {
            throw new \InvalidArgumentException('non-nullable associated_user_id cannot be null');
        }
        $this->container['associated_user_id'] = $associated_user_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string|null
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string|null $entity_name entity_name
     *
     * @return self
     */
    public function setEntityName($entity_name)
    {
        if (is_null($entity_name)) {
            throw new \InvalidArgumentException('non-nullable entity_name cannot be null');
        }
        $this->container['entity_name'] = $entity_name;

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
     * Gets lei
     *
     * @return string|null
     */
    public function getLei()
    {
        return $this->container['lei'];
    }

    /**
     * Sets lei
     *
     * @param string|null $lei lei
     *
     * @return self
     */
    public function setLei($lei)
    {
        if (is_null($lei)) {
            throw new \InvalidArgumentException('non-nullable lei cannot be null');
        }
        $this->container['lei'] = $lei;

        return $this;
    }

    /**
     * Gets identity_user_ref
     *
     * @return string|null
     */
    public function getIdentityUserRef()
    {
        return $this->container['identity_user_ref'];
    }

    /**
     * Sets identity_user_ref
     *
     * @param string|null $identity_user_ref identity_user_ref
     *
     * @return self
     */
    public function setIdentityUserRef($identity_user_ref)
    {
        if (is_null($identity_user_ref)) {
            throw new \InvalidArgumentException('non-nullable identity_user_ref cannot be null');
        }
        $this->container['identity_user_ref'] = $identity_user_ref;

        return $this;
    }

    /**
     * Gets identity_client_type
     *
     * @return \OpenAPI\Client\Model\ClientType|null
     */
    public function getIdentityClientType()
    {
        return $this->container['identity_client_type'];
    }

    /**
     * Sets identity_client_type
     *
     * @param \OpenAPI\Client\Model\ClientType|null $identity_client_type identity_client_type
     *
     * @return self
     */
    public function setIdentityClientType($identity_client_type)
    {
        if (is_null($identity_client_type)) {
            throw new \InvalidArgumentException('non-nullable identity_client_type cannot be null');
        }
        $this->container['identity_client_type'] = $identity_client_type;

        return $this;
    }

    /**
     * Gets identity_user_status
     *
     * @return \OpenAPI\Client\Model\FapiDbUserUserStatus|null
     */
    public function getIdentityUserStatus()
    {
        return $this->container['identity_user_status'];
    }

    /**
     * Sets identity_user_status
     *
     * @param \OpenAPI\Client\Model\FapiDbUserUserStatus|null $identity_user_status identity_user_status
     *
     * @return self
     */
    public function setIdentityUserStatus($identity_user_status)
    {
        if (is_null($identity_user_status)) {
            throw new \InvalidArgumentException('non-nullable identity_user_status cannot be null');
        }
        $this->container['identity_user_status'] = $identity_user_status;

        return $this;
    }

    /**
     * Gets linked_to_completed_client
     *
     * @return bool|null
     */
    public function getLinkedToCompletedClient()
    {
        return $this->container['linked_to_completed_client'];
    }

    /**
     * Sets linked_to_completed_client
     *
     * @param bool|null $linked_to_completed_client linked_to_completed_client
     *
     * @return self
     */
    public function setLinkedToCompletedClient($linked_to_completed_client)
    {
        if (is_null($linked_to_completed_client)) {
            throw new \InvalidArgumentException('non-nullable linked_to_completed_client cannot be null');
        }
        $this->container['linked_to_completed_client'] = $linked_to_completed_client;

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


