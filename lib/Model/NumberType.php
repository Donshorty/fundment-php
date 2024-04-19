<?php
/**
 * NumberType
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
 * NumberType Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Mobile\&quot;, \&quot;value\&quot;: 1}, {\&quot;name\&quot;: \&quot;Home\&quot;, \&quot;value\&quot;: 2}, {\&quot;name\&quot;: \&quot;Work\&quot;, \&quot;value\&quot;: 3}, {\&quot;name\&quot;: \&quot;Other\&quot;, \&quot;value\&quot;: 4}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NumberType
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_3 = 3;

    public const NUMBER_4 = 4;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_3,
            self::NUMBER_4
        ];
    }
}

