<?php
/**
 * SecurityAttributeUpdateSchema
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
 * SecurityAttributeUpdateSchema Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SecurityAttributeUpdateSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecurityAttributeUpdateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_fixed_income' => 'bool',
        'is_accumulating' => 'bool',
        'is_exchange_traded' => 'bool',
        'is_isa_eligible' => 'bool',
        'is_sipp_eligible' => 'bool',
        'is_uk_reporting' => 'bool',
        'quantity_dps' => 'int',
        'is_reportable' => 'bool',
        'is_tradeable' => 'bool',
        'is_fractional' => 'bool',
        'is_restricted' => 'bool',
        'enable_lookthrough' => 'bool',
        'perf_exchange' => 'string',
        'gbp_perf_exchange' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_fixed_income' => null,
        'is_accumulating' => null,
        'is_exchange_traded' => null,
        'is_isa_eligible' => null,
        'is_sipp_eligible' => null,
        'is_uk_reporting' => null,
        'quantity_dps' => null,
        'is_reportable' => null,
        'is_tradeable' => null,
        'is_fractional' => null,
        'is_restricted' => null,
        'enable_lookthrough' => null,
        'perf_exchange' => null,
        'gbp_perf_exchange' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_fixed_income' => false,
        'is_accumulating' => false,
        'is_exchange_traded' => false,
        'is_isa_eligible' => false,
        'is_sipp_eligible' => false,
        'is_uk_reporting' => false,
        'quantity_dps' => false,
        'is_reportable' => false,
        'is_tradeable' => false,
        'is_fractional' => false,
        'is_restricted' => false,
        'enable_lookthrough' => false,
        'perf_exchange' => false,
        'gbp_perf_exchange' => false
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
        'is_fixed_income' => 'is_fixed_income',
        'is_accumulating' => 'is_accumulating',
        'is_exchange_traded' => 'is_exchange_traded',
        'is_isa_eligible' => 'is_isa_eligible',
        'is_sipp_eligible' => 'is_sipp_eligible',
        'is_uk_reporting' => 'is_uk_reporting',
        'quantity_dps' => 'quantity_dps',
        'is_reportable' => 'is_reportable',
        'is_tradeable' => 'is_tradeable',
        'is_fractional' => 'is_fractional',
        'is_restricted' => 'is_restricted',
        'enable_lookthrough' => 'enable_lookthrough',
        'perf_exchange' => 'perf_exchange',
        'gbp_perf_exchange' => 'gbp_perf_exchange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_fixed_income' => 'setIsFixedIncome',
        'is_accumulating' => 'setIsAccumulating',
        'is_exchange_traded' => 'setIsExchangeTraded',
        'is_isa_eligible' => 'setIsIsaEligible',
        'is_sipp_eligible' => 'setIsSippEligible',
        'is_uk_reporting' => 'setIsUkReporting',
        'quantity_dps' => 'setQuantityDps',
        'is_reportable' => 'setIsReportable',
        'is_tradeable' => 'setIsTradeable',
        'is_fractional' => 'setIsFractional',
        'is_restricted' => 'setIsRestricted',
        'enable_lookthrough' => 'setEnableLookthrough',
        'perf_exchange' => 'setPerfExchange',
        'gbp_perf_exchange' => 'setGbpPerfExchange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_fixed_income' => 'getIsFixedIncome',
        'is_accumulating' => 'getIsAccumulating',
        'is_exchange_traded' => 'getIsExchangeTraded',
        'is_isa_eligible' => 'getIsIsaEligible',
        'is_sipp_eligible' => 'getIsSippEligible',
        'is_uk_reporting' => 'getIsUkReporting',
        'quantity_dps' => 'getQuantityDps',
        'is_reportable' => 'getIsReportable',
        'is_tradeable' => 'getIsTradeable',
        'is_fractional' => 'getIsFractional',
        'is_restricted' => 'getIsRestricted',
        'enable_lookthrough' => 'getEnableLookthrough',
        'perf_exchange' => 'getPerfExchange',
        'gbp_perf_exchange' => 'getGbpPerfExchange'
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
        $this->setIfExists('is_fixed_income', $data ?? [], null);
        $this->setIfExists('is_accumulating', $data ?? [], null);
        $this->setIfExists('is_exchange_traded', $data ?? [], null);
        $this->setIfExists('is_isa_eligible', $data ?? [], null);
        $this->setIfExists('is_sipp_eligible', $data ?? [], null);
        $this->setIfExists('is_uk_reporting', $data ?? [], null);
        $this->setIfExists('quantity_dps', $data ?? [], null);
        $this->setIfExists('is_reportable', $data ?? [], null);
        $this->setIfExists('is_tradeable', $data ?? [], true);
        $this->setIfExists('is_fractional', $data ?? [], false);
        $this->setIfExists('is_restricted', $data ?? [], false);
        $this->setIfExists('enable_lookthrough', $data ?? [], false);
        $this->setIfExists('perf_exchange', $data ?? [], null);
        $this->setIfExists('gbp_perf_exchange', $data ?? [], null);
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

        if (!is_null($this->container['perf_exchange']) && (mb_strlen($this->container['perf_exchange']) > 5)) {
            $invalidProperties[] = "invalid value for 'perf_exchange', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['gbp_perf_exchange']) && (mb_strlen($this->container['gbp_perf_exchange']) > 5)) {
            $invalidProperties[] = "invalid value for 'gbp_perf_exchange', the character length must be smaller than or equal to 5.";
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
     * Gets is_fixed_income
     *
     * @return bool|null
     */
    public function getIsFixedIncome()
    {
        return $this->container['is_fixed_income'];
    }

    /**
     * Sets is_fixed_income
     *
     * @param bool|null $is_fixed_income is_fixed_income
     *
     * @return self
     */
    public function setIsFixedIncome($is_fixed_income)
    {
        if (is_null($is_fixed_income)) {
            throw new \InvalidArgumentException('non-nullable is_fixed_income cannot be null');
        }
        $this->container['is_fixed_income'] = $is_fixed_income;

        return $this;
    }

    /**
     * Gets is_accumulating
     *
     * @return bool|null
     */
    public function getIsAccumulating()
    {
        return $this->container['is_accumulating'];
    }

    /**
     * Sets is_accumulating
     *
     * @param bool|null $is_accumulating is_accumulating
     *
     * @return self
     */
    public function setIsAccumulating($is_accumulating)
    {
        if (is_null($is_accumulating)) {
            throw new \InvalidArgumentException('non-nullable is_accumulating cannot be null');
        }
        $this->container['is_accumulating'] = $is_accumulating;

        return $this;
    }

    /**
     * Gets is_exchange_traded
     *
     * @return bool|null
     */
    public function getIsExchangeTraded()
    {
        return $this->container['is_exchange_traded'];
    }

    /**
     * Sets is_exchange_traded
     *
     * @param bool|null $is_exchange_traded is_exchange_traded
     *
     * @return self
     */
    public function setIsExchangeTraded($is_exchange_traded)
    {
        if (is_null($is_exchange_traded)) {
            throw new \InvalidArgumentException('non-nullable is_exchange_traded cannot be null');
        }
        $this->container['is_exchange_traded'] = $is_exchange_traded;

        return $this;
    }

    /**
     * Gets is_isa_eligible
     *
     * @return bool|null
     */
    public function getIsIsaEligible()
    {
        return $this->container['is_isa_eligible'];
    }

    /**
     * Sets is_isa_eligible
     *
     * @param bool|null $is_isa_eligible is_isa_eligible
     *
     * @return self
     */
    public function setIsIsaEligible($is_isa_eligible)
    {
        if (is_null($is_isa_eligible)) {
            throw new \InvalidArgumentException('non-nullable is_isa_eligible cannot be null');
        }
        $this->container['is_isa_eligible'] = $is_isa_eligible;

        return $this;
    }

    /**
     * Gets is_sipp_eligible
     *
     * @return bool|null
     */
    public function getIsSippEligible()
    {
        return $this->container['is_sipp_eligible'];
    }

    /**
     * Sets is_sipp_eligible
     *
     * @param bool|null $is_sipp_eligible is_sipp_eligible
     *
     * @return self
     */
    public function setIsSippEligible($is_sipp_eligible)
    {
        if (is_null($is_sipp_eligible)) {
            throw new \InvalidArgumentException('non-nullable is_sipp_eligible cannot be null');
        }
        $this->container['is_sipp_eligible'] = $is_sipp_eligible;

        return $this;
    }

    /**
     * Gets is_uk_reporting
     *
     * @return bool|null
     */
    public function getIsUkReporting()
    {
        return $this->container['is_uk_reporting'];
    }

    /**
     * Sets is_uk_reporting
     *
     * @param bool|null $is_uk_reporting is_uk_reporting
     *
     * @return self
     */
    public function setIsUkReporting($is_uk_reporting)
    {
        if (is_null($is_uk_reporting)) {
            throw new \InvalidArgumentException('non-nullable is_uk_reporting cannot be null');
        }
        $this->container['is_uk_reporting'] = $is_uk_reporting;

        return $this;
    }

    /**
     * Gets quantity_dps
     *
     * @return int|null
     */
    public function getQuantityDps()
    {
        return $this->container['quantity_dps'];
    }

    /**
     * Sets quantity_dps
     *
     * @param int|null $quantity_dps quantity_dps
     *
     * @return self
     */
    public function setQuantityDps($quantity_dps)
    {
        if (is_null($quantity_dps)) {
            throw new \InvalidArgumentException('non-nullable quantity_dps cannot be null');
        }
        $this->container['quantity_dps'] = $quantity_dps;

        return $this;
    }

    /**
     * Gets is_reportable
     *
     * @return bool|null
     */
    public function getIsReportable()
    {
        return $this->container['is_reportable'];
    }

    /**
     * Sets is_reportable
     *
     * @param bool|null $is_reportable is_reportable
     *
     * @return self
     */
    public function setIsReportable($is_reportable)
    {
        if (is_null($is_reportable)) {
            throw new \InvalidArgumentException('non-nullable is_reportable cannot be null');
        }
        $this->container['is_reportable'] = $is_reportable;

        return $this;
    }

    /**
     * Gets is_tradeable
     *
     * @return bool|null
     */
    public function getIsTradeable()
    {
        return $this->container['is_tradeable'];
    }

    /**
     * Sets is_tradeable
     *
     * @param bool|null $is_tradeable is_tradeable
     *
     * @return self
     */
    public function setIsTradeable($is_tradeable)
    {
        if (is_null($is_tradeable)) {
            throw new \InvalidArgumentException('non-nullable is_tradeable cannot be null');
        }
        $this->container['is_tradeable'] = $is_tradeable;

        return $this;
    }

    /**
     * Gets is_fractional
     *
     * @return bool|null
     */
    public function getIsFractional()
    {
        return $this->container['is_fractional'];
    }

    /**
     * Sets is_fractional
     *
     * @param bool|null $is_fractional is_fractional
     *
     * @return self
     */
    public function setIsFractional($is_fractional)
    {
        if (is_null($is_fractional)) {
            throw new \InvalidArgumentException('non-nullable is_fractional cannot be null');
        }
        $this->container['is_fractional'] = $is_fractional;

        return $this;
    }

    /**
     * Gets is_restricted
     *
     * @return bool|null
     */
    public function getIsRestricted()
    {
        return $this->container['is_restricted'];
    }

    /**
     * Sets is_restricted
     *
     * @param bool|null $is_restricted is_restricted
     *
     * @return self
     */
    public function setIsRestricted($is_restricted)
    {
        if (is_null($is_restricted)) {
            throw new \InvalidArgumentException('non-nullable is_restricted cannot be null');
        }
        $this->container['is_restricted'] = $is_restricted;

        return $this;
    }

    /**
     * Gets enable_lookthrough
     *
     * @return bool|null
     */
    public function getEnableLookthrough()
    {
        return $this->container['enable_lookthrough'];
    }

    /**
     * Sets enable_lookthrough
     *
     * @param bool|null $enable_lookthrough enable_lookthrough
     *
     * @return self
     */
    public function setEnableLookthrough($enable_lookthrough)
    {
        if (is_null($enable_lookthrough)) {
            throw new \InvalidArgumentException('non-nullable enable_lookthrough cannot be null');
        }
        $this->container['enable_lookthrough'] = $enable_lookthrough;

        return $this;
    }

    /**
     * Gets perf_exchange
     *
     * @return string|null
     */
    public function getPerfExchange()
    {
        return $this->container['perf_exchange'];
    }

    /**
     * Sets perf_exchange
     *
     * @param string|null $perf_exchange perf_exchange
     *
     * @return self
     */
    public function setPerfExchange($perf_exchange)
    {
        if (is_null($perf_exchange)) {
            throw new \InvalidArgumentException('non-nullable perf_exchange cannot be null');
        }
        if ((mb_strlen($perf_exchange) > 5)) {
            throw new \InvalidArgumentException('invalid length for $perf_exchange when calling SecurityAttributeUpdateSchema., must be smaller than or equal to 5.');
        }

        $this->container['perf_exchange'] = $perf_exchange;

        return $this;
    }

    /**
     * Gets gbp_perf_exchange
     *
     * @return string|null
     */
    public function getGbpPerfExchange()
    {
        return $this->container['gbp_perf_exchange'];
    }

    /**
     * Sets gbp_perf_exchange
     *
     * @param string|null $gbp_perf_exchange gbp_perf_exchange
     *
     * @return self
     */
    public function setGbpPerfExchange($gbp_perf_exchange)
    {
        if (is_null($gbp_perf_exchange)) {
            throw new \InvalidArgumentException('non-nullable gbp_perf_exchange cannot be null');
        }
        if ((mb_strlen($gbp_perf_exchange) > 5)) {
            throw new \InvalidArgumentException('invalid length for $gbp_perf_exchange when calling SecurityAttributeUpdateSchema., must be smaller than or equal to 5.');
        }

        $this->container['gbp_perf_exchange'] = $gbp_perf_exchange;

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


