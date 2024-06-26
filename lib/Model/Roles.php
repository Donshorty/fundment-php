<?php
/**
 * Roles
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
 * Roles Class Doc Comment
 *
 * @category Class
 * @description [{\&quot;name\&quot;: \&quot;Trustee\&quot;, \&quot;value\&quot;: \&quot;TRUSTEE\&quot;}, {\&quot;name\&quot;: \&quot;Director\&quot;, \&quot;value\&quot;: \&quot;DIRECTOR\&quot;}, {\&quot;name\&quot;: \&quot;Owner\&quot;, \&quot;value\&quot;: \&quot;OWNER\&quot;}, {\&quot;name\&quot;: \&quot;Charity Correspondent\&quot;, \&quot;value\&quot;: \&quot;CHARITY_CORRESPONDENT\&quot;}, {\&quot;name\&quot;: \&quot;Treasurer\&quot;, \&quot;value\&quot;: \&quot;TREASURER\&quot;}, {\&quot;name\&quot;: \&quot;Chair\&quot;, \&quot;value\&quot;: \&quot;CHAIR\&quot;}, {\&quot;name\&quot;: \&quot;Secretary\&quot;, \&quot;value\&quot;: \&quot;SECRETARY\&quot;}, {\&quot;name\&quot;: \&quot;Settlor\&quot;, \&quot;value\&quot;: \&quot;SETTLOR\&quot;}, {\&quot;name\&quot;: \&quot;Beneficiary\&quot;, \&quot;value\&quot;: \&quot;BENEFICIARY\&quot;}]
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Roles
{
    /**
     * Possible values of this enum
     */
    public const TRUSTEE = 'TRUSTEE';

    public const DIRECTOR = 'DIRECTOR';

    public const OWNER = 'OWNER';

    public const CHARITY_CORRESPONDENT = 'CHARITY_CORRESPONDENT';

    public const TREASURER = 'TREASURER';

    public const CHAIR = 'CHAIR';

    public const SECRETARY = 'SECRETARY';

    public const SETTLOR = 'SETTLOR';

    public const BENEFICIARY = 'BENEFICIARY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRUSTEE,
            self::DIRECTOR,
            self::OWNER,
            self::CHARITY_CORRESPONDENT,
            self::TREASURER,
            self::CHAIR,
            self::SECRETARY,
            self::SETTLOR,
            self::BENEFICIARY
        ];
    }
}


