<?php
/**
 * TransferProviderReturnSchema
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
 * TransferProviderReturnSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransferProviderReturnSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferProviderReturnSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'gateway' => 'string',
        'is_electronic' => 'bool',
        'is_enabled' => 'bool',
        'is_internal' => 'bool',
        'ref' => 'string',
        'options' => '\OpenAPI\Client\Model\TransferProviderOptionReturnSchema',
        'supported_accounts' => '\OpenAPI\Client\Model\TransferProviderSupportedAccountReturnSchema[]',
        'swift_organisation' => '\OpenAPI\Client\Model\TransferProviderSwiftOrganisationReturnSchema[]',
        'date_updated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'gateway' => null,
        'is_electronic' => null,
        'is_enabled' => null,
        'is_internal' => null,
        'ref' => null,
        'options' => null,
        'supported_accounts' => null,
        'swift_organisation' => null,
        'date_updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'gateway' => false,
        'is_electronic' => false,
        'is_enabled' => false,
        'is_internal' => false,
        'ref' => false,
        'options' => false,
        'supported_accounts' => false,
        'swift_organisation' => false,
        'date_updated' => false
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
        'name' => 'name',
        'gateway' => 'gateway',
        'is_electronic' => 'is_electronic',
        'is_enabled' => 'is_enabled',
        'is_internal' => 'is_internal',
        'ref' => 'ref',
        'options' => 'options',
        'supported_accounts' => 'supported_accounts',
        'swift_organisation' => 'swift_organisation',
        'date_updated' => 'date_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'gateway' => 'setGateway',
        'is_electronic' => 'setIsElectronic',
        'is_enabled' => 'setIsEnabled',
        'is_internal' => 'setIsInternal',
        'ref' => 'setRef',
        'options' => 'setOptions',
        'supported_accounts' => 'setSupportedAccounts',
        'swift_organisation' => 'setSwiftOrganisation',
        'date_updated' => 'setDateUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'gateway' => 'getGateway',
        'is_electronic' => 'getIsElectronic',
        'is_enabled' => 'getIsEnabled',
        'is_internal' => 'getIsInternal',
        'ref' => 'getRef',
        'options' => 'getOptions',
        'supported_accounts' => 'getSupportedAccounts',
        'swift_organisation' => 'getSwiftOrganisation',
        'date_updated' => 'getDateUpdated'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('gateway', $data ?? [], null);
        $this->setIfExists('is_electronic', $data ?? [], null);
        $this->setIfExists('is_enabled', $data ?? [], null);
        $this->setIfExists('is_internal', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('supported_accounts', $data ?? [], null);
        $this->setIfExists('swift_organisation', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
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
        if ($this->container['gateway'] === null) {
            $invalidProperties[] = "'gateway' can't be null";
        }
        if ($this->container['is_electronic'] === null) {
            $invalidProperties[] = "'is_electronic' can't be null";
        }
        if ($this->container['is_enabled'] === null) {
            $invalidProperties[] = "'is_enabled' can't be null";
        }
        if ($this->container['is_internal'] === null) {
            $invalidProperties[] = "'is_internal' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['supported_accounts'] === null) {
            $invalidProperties[] = "'supported_accounts' can't be null";
        }
        if ($this->container['swift_organisation'] === null) {
            $invalidProperties[] = "'swift_organisation' can't be null";
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
     * Gets gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string $gateway gateway
     *
     * @return self
     */
    public function setGateway($gateway)
    {
        if (is_null($gateway)) {
            throw new \InvalidArgumentException('non-nullable gateway cannot be null');
        }
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets is_electronic
     *
     * @return bool
     */
    public function getIsElectronic()
    {
        return $this->container['is_electronic'];
    }

    /**
     * Sets is_electronic
     *
     * @param bool $is_electronic is_electronic
     *
     * @return self
     */
    public function setIsElectronic($is_electronic)
    {
        if (is_null($is_electronic)) {
            throw new \InvalidArgumentException('non-nullable is_electronic cannot be null');
        }
        $this->container['is_electronic'] = $is_electronic;

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
     * Gets is_internal
     *
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->container['is_internal'];
    }

    /**
     * Sets is_internal
     *
     * @param bool $is_internal is_internal
     *
     * @return self
     */
    public function setIsInternal($is_internal)
    {
        if (is_null($is_internal)) {
            throw new \InvalidArgumentException('non-nullable is_internal cannot be null');
        }
        $this->container['is_internal'] = $is_internal;

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
     * Gets options
     *
     * @return \OpenAPI\Client\Model\TransferProviderOptionReturnSchema
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\TransferProviderOptionReturnSchema $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets supported_accounts
     *
     * @return \OpenAPI\Client\Model\TransferProviderSupportedAccountReturnSchema[]
     */
    public function getSupportedAccounts()
    {
        return $this->container['supported_accounts'];
    }

    /**
     * Sets supported_accounts
     *
     * @param \OpenAPI\Client\Model\TransferProviderSupportedAccountReturnSchema[] $supported_accounts supported_accounts
     *
     * @return self
     */
    public function setSupportedAccounts($supported_accounts)
    {
        if (is_null($supported_accounts)) {
            throw new \InvalidArgumentException('non-nullable supported_accounts cannot be null');
        }
        $this->container['supported_accounts'] = $supported_accounts;

        return $this;
    }

    /**
     * Gets swift_organisation
     *
     * @return \OpenAPI\Client\Model\TransferProviderSwiftOrganisationReturnSchema[]
     */
    public function getSwiftOrganisation()
    {
        return $this->container['swift_organisation'];
    }

    /**
     * Sets swift_organisation
     *
     * @param \OpenAPI\Client\Model\TransferProviderSwiftOrganisationReturnSchema[] $swift_organisation swift_organisation
     *
     * @return self
     */
    public function setSwiftOrganisation($swift_organisation)
    {
        if (is_null($swift_organisation)) {
            throw new \InvalidArgumentException('non-nullable swift_organisation cannot be null');
        }
        $this->container['swift_organisation'] = $swift_organisation;

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


