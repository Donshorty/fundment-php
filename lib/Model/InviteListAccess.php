<?php
/**
 * InviteListAccess
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
 * InviteListAccess Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Cannot see any invites\&quot;, \&quot;value\&quot;: 0}, {\&quot;name\&quot;: \&quot;Only sees invites sent by the adviser\&quot;, \&quot;value\&quot;: 1}, {\&quot;name\&quot;: \&quot;Sees all the firm&#39;s invites\&quot;, \&quot;value\&quot;: 2}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InviteListAccess
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_0 = 0;

    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_0,
            self::NUMBER_1,
            self::NUMBER_2
        ];
    }
}


