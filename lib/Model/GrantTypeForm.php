<?php
/**
 * GrantTypeForm
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
 * GrantTypeForm Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Authorization Code\&quot;, \&quot;value\&quot;: \&quot;authorization_code\&quot;}, {\&quot;name\&quot;: \&quot;Refresh Token\&quot;, \&quot;value\&quot;: \&quot;refresh_token\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GrantTypeForm
{
    /**
     * Possible values of this enum
     */
    public const AUTHORIZATION_CODE = 'authorization_code';

    public const REFRESH_TOKEN = 'refresh_token';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTHORIZATION_CODE,
            self::REFRESH_TOKEN
        ];
    }
}


