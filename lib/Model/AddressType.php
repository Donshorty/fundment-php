<?php
/**
 * AddressType
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
 * AddressType Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Home\&quot;, \&quot;value\&quot;: \&quot;HOME\&quot;}, {\&quot;name\&quot;: \&quot;Work\&quot;, \&quot;value\&quot;: \&quot;WORK\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddressType
{
    /**
     * Possible values of this enum
     */
    public const HOME = 'HOME';

    public const WORK = 'WORK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOME,
            self::WORK
        ];
    }
}


