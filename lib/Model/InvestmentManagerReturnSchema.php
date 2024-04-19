<?php
/**
 * InvestmentManagerReturnSchema
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
 * InvestmentManagerReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvestmentManagerReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvestmentManagerReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'login_ref' => 'int',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'title' => 'string',
        'phone_ext' => 'string',
        'phone_number' => 'string',
        'username' => 'string',
        'date_of_birth' => '\DateTime',
        'is_enabled' => 'bool',
        'can_edit' => 'bool',
        'can_approve' => 'bool',
        'is_administrator' => 'bool',
        'end_date' => '\DateTime',
        'ref' => 'int',
        'investment_management_firm_ref' => 'int',
        'date_updated' => '\DateTime',
        'investment_management_firm_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'login_ref' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'title' => null,
        'phone_ext' => null,
        'phone_number' => null,
        'username' => null,
        'date_of_birth' => 'date',
        'is_enabled' => null,
        'can_edit' => null,
        'can_approve' => null,
        'is_administrator' => null,
        'end_date' => 'date-time',
        'ref' => null,
        'investment_management_firm_ref' => null,
        'date_updated' => 'date-time',
        'investment_management_firm_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'login_ref' => false,
        'email' => false,
        'first_name' => false,
        'last_name' => false,
        'title' => false,
        'phone_ext' => false,
        'phone_number' => false,
        'username' => false,
        'date_of_birth' => false,
        'is_enabled' => false,
        'can_edit' => false,
        'can_approve' => false,
        'is_administrator' => false,
        'end_date' => false,
        'ref' => false,
        'investment_management_firm_ref' => false,
        'date_updated' => false,
        'investment_management_firm_code' => false
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
        'login_ref' => 'login_ref',
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'title' => 'title',
        'phone_ext' => 'phone_ext',
        'phone_number' => 'phone_number',
        'username' => 'username',
        'date_of_birth' => 'date_of_birth',
        'is_enabled' => 'is_enabled',
        'can_edit' => 'can_edit',
        'can_approve' => 'can_approve',
        'is_administrator' => 'is_administrator',
        'end_date' => 'end_date',
        'ref' => 'ref',
        'investment_management_firm_ref' => 'investment_management_firm_ref',
        'date_updated' => 'date_updated',
        'investment_management_firm_code' => 'investment_management_firm_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login_ref' => 'setLoginRef',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'title' => 'setTitle',
        'phone_ext' => 'setPhoneExt',
        'phone_number' => 'setPhoneNumber',
        'username' => 'setUsername',
        'date_of_birth' => 'setDateOfBirth',
        'is_enabled' => 'setIsEnabled',
        'can_edit' => 'setCanEdit',
        'can_approve' => 'setCanApprove',
        'is_administrator' => 'setIsAdministrator',
        'end_date' => 'setEndDate',
        'ref' => 'setRef',
        'investment_management_firm_ref' => 'setInvestmentManagementFirmRef',
        'date_updated' => 'setDateUpdated',
        'investment_management_firm_code' => 'setInvestmentManagementFirmCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login_ref' => 'getLoginRef',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'title' => 'getTitle',
        'phone_ext' => 'getPhoneExt',
        'phone_number' => 'getPhoneNumber',
        'username' => 'getUsername',
        'date_of_birth' => 'getDateOfBirth',
        'is_enabled' => 'getIsEnabled',
        'can_edit' => 'getCanEdit',
        'can_approve' => 'getCanApprove',
        'is_administrator' => 'getIsAdministrator',
        'end_date' => 'getEndDate',
        'ref' => 'getRef',
        'investment_management_firm_ref' => 'getInvestmentManagementFirmRef',
        'date_updated' => 'getDateUpdated',
        'investment_management_firm_code' => 'getInvestmentManagementFirmCode'
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
        $this->setIfExists('login_ref', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('phone_ext', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('is_enabled', $data ?? [], null);
        $this->setIfExists('can_edit', $data ?? [], true);
        $this->setIfExists('can_approve', $data ?? [], false);
        $this->setIfExists('is_administrator', $data ?? [], false);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('investment_management_firm_ref', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('investment_management_firm_code', $data ?? [], null);
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

        if ($this->container['is_enabled'] === null) {
            $invalidProperties[] = "'is_enabled' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['investment_management_firm_ref'] === null) {
            $invalidProperties[] = "'investment_management_firm_ref' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['investment_management_firm_code'] === null) {
            $invalidProperties[] = "'investment_management_firm_code' can't be null";
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
     * Gets login_ref
     *
     * @return int|null
     */
    public function getLoginRef()
    {
        return $this->container['login_ref'];
    }

    /**
     * Sets login_ref
     *
     * @param int|null $login_ref login_ref
     *
     * @return self
     */
    public function setLoginRef($login_ref)
    {
        if (is_null($login_ref)) {
            throw new \InvalidArgumentException('non-nullable login_ref cannot be null');
        }
        $this->container['login_ref'] = $login_ref;

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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets phone_ext
     *
     * @return string|null
     */
    public function getPhoneExt()
    {
        return $this->container['phone_ext'];
    }

    /**
     * Sets phone_ext
     *
     * @param string|null $phone_ext phone_ext
     *
     * @return self
     */
    public function setPhoneExt($phone_ext)
    {
        if (is_null($phone_ext)) {
            throw new \InvalidArgumentException('non-nullable phone_ext cannot be null');
        }
        $this->container['phone_ext'] = $phone_ext;

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
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username Must be unique
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled is_enabled
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        if (is_null($is_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_enabled cannot be null');
        }
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets can_edit
     *
     * @return bool|null
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     *
     * @param bool|null $can_edit can_edit
     *
     * @return self
     */
    public function setCanEdit($can_edit)
    {
        if (is_null($can_edit)) {
            throw new \InvalidArgumentException('non-nullable can_edit cannot be null');
        }
        $this->container['can_edit'] = $can_edit;

        return $this;
    }

    /**
     * Gets can_approve
     *
     * @return bool|null
     */
    public function getCanApprove()
    {
        return $this->container['can_approve'];
    }

    /**
     * Sets can_approve
     *
     * @param bool|null $can_approve can_approve
     *
     * @return self
     */
    public function setCanApprove($can_approve)
    {
        if (is_null($can_approve)) {
            throw new \InvalidArgumentException('non-nullable can_approve cannot be null');
        }
        $this->container['can_approve'] = $can_approve;

        return $this;
    }

    /**
     * Gets is_administrator
     *
     * @return bool|null
     */
    public function getIsAdministrator()
    {
        return $this->container['is_administrator'];
    }

    /**
     * Sets is_administrator
     *
     * @param bool|null $is_administrator is_administrator
     *
     * @return self
     */
    public function setIsAdministrator($is_administrator)
    {
        if (is_null($is_administrator)) {
            throw new \InvalidArgumentException('non-nullable is_administrator cannot be null');
        }
        $this->container['is_administrator'] = $is_administrator;

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
     * Gets investment_management_firm_ref
     *
     * @return int
     */
    public function getInvestmentManagementFirmRef()
    {
        return $this->container['investment_management_firm_ref'];
    }

    /**
     * Sets investment_management_firm_ref
     *
     * @param int $investment_management_firm_ref investment_management_firm_ref
     *
     * @return self
     */
    public function setInvestmentManagementFirmRef($investment_management_firm_ref)
    {
        if (is_null($investment_management_firm_ref)) {
            throw new \InvalidArgumentException('non-nullable investment_management_firm_ref cannot be null');
        }
        $this->container['investment_management_firm_ref'] = $investment_management_firm_ref;

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
     * Gets investment_management_firm_code
     *
     * @return string
     */
    public function getInvestmentManagementFirmCode()
    {
        return $this->container['investment_management_firm_code'];
    }

    /**
     * Sets investment_management_firm_code
     *
     * @param string $investment_management_firm_code investment_management_firm_code
     *
     * @return self
     */
    public function setInvestmentManagementFirmCode($investment_management_firm_code)
    {
        if (is_null($investment_management_firm_code)) {
            throw new \InvalidArgumentException('non-nullable investment_management_firm_code cannot be null');
        }
        $this->container['investment_management_firm_code'] = $investment_management_firm_code;

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

