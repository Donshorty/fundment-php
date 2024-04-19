<?php
/**
 * FapiDbInvstrategyInvStrategyStatus
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
 * FapiDbInvstrategyInvStrategyStatus Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Active\&quot;, \&quot;value\&quot;: \&quot;Active\&quot;}, {\&quot;name\&quot;: \&quot;Inactive\&quot;, \&quot;value\&quot;: \&quot;Inactive\&quot;}, {\&quot;name\&quot;: \&quot;Deleted\&quot;, \&quot;value\&quot;: \&quot;Deleted\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FapiDbInvstrategyInvStrategyStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'Active';

    public const INACTIVE = 'Inactive';

    public const DELETED = 'Deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
            self::DELETED
        ];
    }
}


