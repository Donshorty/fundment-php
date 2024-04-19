<?php
/**
 * AdviserFirmType
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
 * AdviserFirmType Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;UK Adviser\&quot;, \&quot;value\&quot;: \&quot;UK_ADVISER\&quot;}, {\&quot;name\&quot;: \&quot;Foreign Adviser\&quot;, \&quot;value\&quot;: \&quot;FOREIGN_ADVISER\&quot;}, {\&quot;name\&quot;: \&quot;Other\&quot;, \&quot;value\&quot;: \&quot;OTHER\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdviserFirmType
{
    /**
     * Possible values of this enum
     */
    public const UK_ADVISER = 'UK_ADVISER';

    public const FOREIGN_ADVISER = 'FOREIGN_ADVISER';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UK_ADVISER,
            self::FOREIGN_ADVISER,
            self::OTHER
        ];
    }
}

