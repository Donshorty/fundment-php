<?php
/**
 * Gender
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
 * Gender Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Male\&quot;, \&quot;value\&quot;: \&quot;M\&quot;}, {\&quot;name\&quot;: \&quot;Female\&quot;, \&quot;value\&quot;: \&quot;F\&quot;}, {\&quot;name\&quot;: \&quot;Other\&quot;, \&quot;value\&quot;: \&quot;O\&quot;}, {\&quot;name\&quot;: \&quot;Unspecified\&quot;, \&quot;value\&quot;: \&quot;U\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Gender
{
    /**
     * Possible values of this enum
     */
    public const M = 'M';

    public const F = 'F';

    public const O = 'O';

    public const U = 'U';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::M,
            self::F,
            self::O,
            self::U
        ];
    }
}


