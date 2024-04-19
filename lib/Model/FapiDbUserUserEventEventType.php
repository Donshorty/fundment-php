<?php
/**
 * FapiDbUserUserEventEventType
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
 * FapiDbUserUserEventEventType Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Bed And Isa\&quot;, \&quot;value\&quot;: \&quot;BED_AND_ISA\&quot;}, {\&quot;name\&quot;: \&quot;Bed And Jisa\&quot;, \&quot;value\&quot;: \&quot;BED_AND_JISA\&quot;}, {\&quot;name\&quot;: \&quot;Bed And Pension\&quot;, \&quot;value\&quot;: \&quot;BED_AND_PENSION\&quot;}, {\&quot;name\&quot;: \&quot;Int Trans Cash\&quot;, \&quot;value\&quot;: \&quot;INT_TRANS_CASH\&quot;}, {\&quot;name\&quot;: \&quot;Int Trans Insp\&quot;, \&quot;value\&quot;: \&quot;INT_TRANS_INSP\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FapiDbUserUserEventEventType
{
    /**
     * Possible values of this enum
     */
    public const BED_AND_ISA = 'BED_AND_ISA';

    public const BED_AND_JISA = 'BED_AND_JISA';

    public const BED_AND_PENSION = 'BED_AND_PENSION';

    public const INT_TRANS_CASH = 'INT_TRANS_CASH';

    public const INT_TRANS_INSP = 'INT_TRANS_INSP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BED_AND_ISA,
            self::BED_AND_JISA,
            self::BED_AND_PENSION,
            self::INT_TRANS_CASH,
            self::INT_TRANS_INSP
        ];
    }
}

