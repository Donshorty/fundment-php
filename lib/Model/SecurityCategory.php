<?php
/**
 * SecurityCategory
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * SecurityCategory Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Fund\&quot;, \&quot;value\&quot;: \&quot;Fund\&quot;}, {\&quot;name\&quot;: \&quot;Equity\&quot;, \&quot;value\&quot;: \&quot;Equity\&quot;}, {\&quot;name\&quot;: \&quot;Trust\&quot;, \&quot;value\&quot;: \&quot;Trust\&quot;}, {\&quot;name\&quot;: \&quot;Bond\&quot;, \&quot;value\&quot;: \&quot;Bond\&quot;}, {\&quot;name\&quot;: \&quot;Cash\&quot;, \&quot;value\&quot;: \&quot;Cash\&quot;}, {\&quot;name\&quot;: \&quot;Other\&quot;, \&quot;value\&quot;: \&quot;Other\&quot;}, {\&quot;name\&quot;: \&quot;Customindex\&quot;, \&quot;value\&quot;: \&quot;CustomIndex\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SecurityCategory
{
    /**
     * Possible values of this enum
     */
    public const FUND = 'Fund';

    public const EQUITY = 'Equity';

    public const TRUST = 'Trust';

    public const BOND = 'Bond';

    public const CASH = 'Cash';

    public const OTHER = 'Other';

    public const CUSTOM_INDEX = 'CustomIndex';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FUND,
            self::EQUITY,
            self::TRUST,
            self::BOND,
            self::CASH,
            self::OTHER,
            self::CUSTOM_INDEX
        ];
    }
}

