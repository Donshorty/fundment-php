<?php
/**
 * ClientLeadUpdateSchema
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
 * ClientLeadUpdateSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientLeadUpdateSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientLeadUpdateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'client_type' => '\OpenAPI\Client\Model\ClientType',
        'title' => 'string',
        'suffix' => 'string',
        'email' => 'string',
        'date_of_birth' => '\DateTime',
        'gender' => '\OpenAPI\Client\Model\Gender',
        'country_of_birth' => 'string',
        'nationality' => 'string',
        'country_of_tax_residency' => 'string',
        'nino' => 'string',
        'adviser_firm_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'client_type' => null,
        'title' => null,
        'suffix' => null,
        'email' => 'email',
        'date_of_birth' => 'date',
        'gender' => null,
        'country_of_birth' => null,
        'nationality' => null,
        'country_of_tax_residency' => null,
        'nino' => null,
        'adviser_firm_ref' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'middle_name' => false,
        'last_name' => false,
        'client_type' => false,
        'title' => false,
        'suffix' => false,
        'email' => false,
        'date_of_birth' => false,
        'gender' => false,
        'country_of_birth' => false,
        'nationality' => false,
        'country_of_tax_residency' => false,
        'nino' => false,
        'adviser_firm_ref' => false
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
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'client_type' => 'client_type',
        'title' => 'title',
        'suffix' => 'suffix',
        'email' => 'email',
        'date_of_birth' => 'date_of_birth',
        'gender' => 'gender',
        'country_of_birth' => 'country_of_birth',
        'nationality' => 'nationality',
        'country_of_tax_residency' => 'country_of_tax_residency',
        'nino' => 'nino',
        'adviser_firm_ref' => 'adviser_firm_ref'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'client_type' => 'setClientType',
        'title' => 'setTitle',
        'suffix' => 'setSuffix',
        'email' => 'setEmail',
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'country_of_birth' => 'setCountryOfBirth',
        'nationality' => 'setNationality',
        'country_of_tax_residency' => 'setCountryOfTaxResidency',
        'nino' => 'setNino',
        'adviser_firm_ref' => 'setAdviserFirmRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'client_type' => 'getClientType',
        'title' => 'getTitle',
        'suffix' => 'getSuffix',
        'email' => 'getEmail',
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'country_of_birth' => 'getCountryOfBirth',
        'nationality' => 'getNationality',
        'country_of_tax_residency' => 'getCountryOfTaxResidency',
        'nino' => 'getNino',
        'adviser_firm_ref' => 'getAdviserFirmRef'
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
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('client_type', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('suffix', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('country_of_birth', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('country_of_tax_residency', $data ?? [], null);
        $this->setIfExists('nino', $data ?? [], null);
        $this->setIfExists('adviser_firm_ref', $data ?? [], null);
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

        if (!is_null($this->container['title']) && !preg_match("/^[A-Za-z]+$/", $this->container['title'])) {
            $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^[A-Za-z]+$/.";
        }

        if ($this->container['date_of_birth'] === null) {
            $invalidProperties[] = "'date_of_birth' can't be null";
        }
        if ($this->container['country_of_birth'] === null) {
            $invalidProperties[] = "'country_of_birth' can't be null";
        }
        if (!preg_match("/^[A-Z]{2}$/", $this->container['country_of_birth'])) {
            $invalidProperties[] = "invalid value for 'country_of_birth', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if ($this->container['nationality'] === null) {
            $invalidProperties[] = "'nationality' can't be null";
        }
        if (!preg_match("/^[A-Z]{2}$/", $this->container['nationality'])) {
            $invalidProperties[] = "invalid value for 'nationality', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if ($this->container['country_of_tax_residency'] === null) {
            $invalidProperties[] = "'country_of_tax_residency' can't be null";
        }
        if (!preg_match("/^[A-Z]{2}$/", $this->container['country_of_tax_residency'])) {
            $invalidProperties[] = "invalid value for 'country_of_tax_residency', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if ($this->container['nino'] === null) {
            $invalidProperties[] = "'nino' can't be null";
        }
        if (!preg_match("/^(?!BG)(?!GB)(?!NK)(?!KN)(?!TN)(?!NT)(?!ZZ)(?:[A-CEGHJ-PR-TW-Z][A-CEGHJ-NPR-TW-Z])(?:\\d){6}([A-D]|\\s)$/", $this->container['nino'])) {
            $invalidProperties[] = "invalid value for 'nino', must be conform to the pattern /^(?!BG)(?!GB)(?!NK)(?!KN)(?!TN)(?!NT)(?!ZZ)(?:[A-CEGHJ-PR-TW-Z][A-CEGHJ-NPR-TW-Z])(?:\\d){6}([A-D]|\\s)$/.";
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
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

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
     * Gets client_type
     *
     * @return \OpenAPI\Client\Model\ClientType|null
     */
    public function getClientType()
    {
        return $this->container['client_type'];
    }

    /**
     * Sets client_type
     *
     * @param \OpenAPI\Client\Model\ClientType|null $client_type client_type
     *
     * @return self
     */
    public function setClientType($client_type)
    {
        if (is_null($client_type)) {
            throw new \InvalidArgumentException('non-nullable client_type cannot be null');
        }
        $this->container['client_type'] = $client_type;

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
     * @param string|null $title Must only contain letters
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        if ((!preg_match("/^[A-Za-z]+$/", ObjectSerializer::toString($title)))) {
            throw new \InvalidArgumentException("invalid value for \$title when calling ClientLeadUpdateSchema., must conform to the pattern /^[A-Za-z]+$/.");
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix suffix
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        if (is_null($suffix)) {
            throw new \InvalidArgumentException('non-nullable suffix cannot be null');
        }
        $this->container['suffix'] = $suffix;

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
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth date_of_birth
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
     * Gets gender
     *
     * @return \OpenAPI\Client\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \OpenAPI\Client\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets country_of_birth
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->container['country_of_birth'];
    }

    /**
     * Sets country_of_birth
     *
     * @param string $country_of_birth Must be a string of letters of length 2, based on the ISO alpha-2 codes
     *
     * @return self
     */
    public function setCountryOfBirth($country_of_birth)
    {
        if (is_null($country_of_birth)) {
            throw new \InvalidArgumentException('non-nullable country_of_birth cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", ObjectSerializer::toString($country_of_birth)))) {
            throw new \InvalidArgumentException("invalid value for \$country_of_birth when calling ClientLeadUpdateSchema., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['country_of_birth'] = $country_of_birth;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality Must be a string of letters of length 2, based on the ISO alpha-2 codes
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", ObjectSerializer::toString($nationality)))) {
            throw new \InvalidArgumentException("invalid value for \$nationality when calling ClientLeadUpdateSchema., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets country_of_tax_residency
     *
     * @return string
     */
    public function getCountryOfTaxResidency()
    {
        return $this->container['country_of_tax_residency'];
    }

    /**
     * Sets country_of_tax_residency
     *
     * @param string $country_of_tax_residency Must be a string of letters of length 2, based on the ISO alpha-2 codes
     *
     * @return self
     */
    public function setCountryOfTaxResidency($country_of_tax_residency)
    {
        if (is_null($country_of_tax_residency)) {
            throw new \InvalidArgumentException('non-nullable country_of_tax_residency cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", ObjectSerializer::toString($country_of_tax_residency)))) {
            throw new \InvalidArgumentException("invalid value for \$country_of_tax_residency when calling ClientLeadUpdateSchema., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['country_of_tax_residency'] = $country_of_tax_residency;

        return $this;
    }

    /**
     * Gets nino
     *
     * @return string
     */
    public function getNino()
    {
        return $this->container['nino'];
    }

    /**
     * Sets nino
     *
     * @param string $nino NI number must be valid as per Government guidelines
     *
     * @return self
     */
    public function setNino($nino)
    {
        if (is_null($nino)) {
            throw new \InvalidArgumentException('non-nullable nino cannot be null');
        }

        if ((!preg_match("/^(?!BG)(?!GB)(?!NK)(?!KN)(?!TN)(?!NT)(?!ZZ)(?:[A-CEGHJ-PR-TW-Z][A-CEGHJ-NPR-TW-Z])(?:\\d){6}([A-D]|\\s)$/", ObjectSerializer::toString($nino)))) {
            throw new \InvalidArgumentException("invalid value for \$nino when calling ClientLeadUpdateSchema., must conform to the pattern /^(?!BG)(?!GB)(?!NK)(?!KN)(?!TN)(?!NT)(?!ZZ)(?:[A-CEGHJ-PR-TW-Z][A-CEGHJ-NPR-TW-Z])(?:\\d){6}([A-D]|\\s)$/.");
        }

        $this->container['nino'] = $nino;

        return $this;
    }

    /**
     * Gets adviser_firm_ref
     *
     * @return string|null
     */
    public function getAdviserFirmRef()
    {
        return $this->container['adviser_firm_ref'];
    }

    /**
     * Sets adviser_firm_ref
     *
     * @param string|null $adviser_firm_ref adviser_firm_ref
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

