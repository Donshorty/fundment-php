<?php
/**
 * FapiDbFeeFeeScheduleFeeType
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
 * FapiDbFeeFeeScheduleFeeType Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Adviser\&quot;, \&quot;value\&quot;: \&quot;ADV\&quot;}, {\&quot;name\&quot;: \&quot;Consulting\&quot;, \&quot;value\&quot;: \&quot;CONS\&quot;}, {\&quot;name\&quot;: \&quot;Investment Management\&quot;, \&quot;value\&quot;: \&quot;INVMGR\&quot;}, {\&quot;name\&quot;: \&quot;Platform\&quot;, \&quot;value\&quot;: \&quot;PLAT\&quot;}, {\&quot;name\&quot;: \&quot;Execution\&quot;, \&quot;value\&quot;: \&quot;EXEC\&quot;}, {\&quot;name\&quot;: \&quot;Wrapper\&quot;, \&quot;value\&quot;: \&quot;WRAPPER\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FapiDbFeeFeeScheduleFeeType
{
    /**
     * Possible values of this enum
     */
    public const ADV = 'ADV';

    public const CONS = 'CONS';

    public const INVMGR = 'INVMGR';

    public const PLAT = 'PLAT';

    public const EXEC = 'EXEC';

    public const WRAPPER = 'WRAPPER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADV,
            self::CONS,
            self::INVMGR,
            self::PLAT,
            self::EXEC,
            self::WRAPPER
        ];
    }
}

