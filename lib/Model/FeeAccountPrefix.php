<?php
/**
 * FeeAccountPrefix
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
 * FeeAccountPrefix Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Network\&quot;, \&quot;value\&quot;: \&quot;NW\&quot;}, {\&quot;name\&quot;: \&quot;Adviserfirm\&quot;, \&quot;value\&quot;: \&quot;AF\&quot;}, {\&quot;name\&quot;: \&quot;Investmentmanager\&quot;, \&quot;value\&quot;: \&quot;IM\&quot;}, {\&quot;name\&quot;: \&quot;Consultancy\&quot;, \&quot;value\&quot;: \&quot;C\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeeAccountPrefix
{
    /**
     * Possible values of this enum
     */
    public const NW = 'NW';

    public const AF = 'AF';

    public const IM = 'IM';

    public const C = 'C';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NW,
            self::AF,
            self::IM,
            self::C
        ];
    }
}


