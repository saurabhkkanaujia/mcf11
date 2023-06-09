<?php
/**
 * Condition
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, see the [Product Pricing v2022-05-01 Use Case Guide](doc:product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Mcf\Model;
use \Ced\Mcf\ObjectSerializer;

/**
 * Condition Class Doc Comment
 *
 * @category Class
 * @description The condition of the item.
 * @package  Ced\Mcf
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Condition
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'New';

    public const USED = 'Used';

    public const COLLECTIBLE = 'Collectible';

    public const REFURBISHED = 'Refurbished';

    public const CLUB = 'Club';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::USED,
            self::COLLECTIBLE,
            self::REFURBISHED,
            self::CLUB
        ];
    }
}


