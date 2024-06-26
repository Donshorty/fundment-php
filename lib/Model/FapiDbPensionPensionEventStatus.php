<?php
/**
 * FapiDbPensionPensionEventStatus
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
 * FapiDbPensionPensionEventStatus Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FapiDbPensionPensionEventStatus
{
    /**
     * Possible values of this enum
     */
    public const PAPP = 'PAPP';

    public const PEND = 'PEND';

    public const SBMT = 'SBMT';

    public const PROC = 'PROC';

    public const ACTV = 'ACTV';

    public const COMP = 'COMP';

    public const ERRR = 'ERRR';

    public const CANC = 'CANC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAPP,
            self::PEND,
            self::SBMT,
            self::PROC,
            self::ACTV,
            self::COMP,
            self::ERRR,
            self::CANC
        ];
    }
}


