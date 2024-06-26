<?php
/**
 * CustomIndexStatus
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
 * CustomIndexStatus Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Pending\&quot;, \&quot;value\&quot;: \&quot;PEND\&quot;}, {\&quot;name\&quot;: \&quot;Active\&quot;, \&quot;value\&quot;: \&quot;ACTV\&quot;}, {\&quot;name\&quot;: \&quot;Pendingcancellation\&quot;, \&quot;value\&quot;: \&quot;PCANC\&quot;}, {\&quot;name\&quot;: \&quot;Cancelled\&quot;, \&quot;value\&quot;: \&quot;CANC\&quot;}, {\&quot;name\&quot;: \&quot;Error\&quot;, \&quot;value\&quot;: \&quot;ERRR\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomIndexStatus
{
    /**
     * Possible values of this enum
     */
    public const PEND = 'PEND';

    public const ACTV = 'ACTV';

    public const PCANC = 'PCANC';

    public const CANC = 'CANC';

    public const ERRR = 'ERRR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PEND,
            self::ACTV,
            self::PCANC,
            self::CANC,
            self::ERRR
        ];
    }
}


