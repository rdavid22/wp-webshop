<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/target_impression_share_location.proto

namespace Google\Ads\GoogleAds\V6\Enums\TargetImpressionShareLocationEnum;

use UnexpectedValueException;

/**
 * Enum describing possible goals.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation</code>
 */
class TargetImpressionShareLocation
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Any location on the web page.
     *
     * Generated from protobuf enum <code>ANYWHERE_ON_PAGE = 2;</code>
     */
    const ANYWHERE_ON_PAGE = 2;
    /**
     * Top box of ads.
     *
     * Generated from protobuf enum <code>TOP_OF_PAGE = 3;</code>
     */
    const TOP_OF_PAGE = 3;
    /**
     * Top slot in the top box of ads.
     *
     * Generated from protobuf enum <code>ABSOLUTE_TOP_OF_PAGE = 4;</code>
     */
    const ABSOLUTE_TOP_OF_PAGE = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ANYWHERE_ON_PAGE => 'ANYWHERE_ON_PAGE',
        self::TOP_OF_PAGE => 'TOP_OF_PAGE',
        self::ABSOLUTE_TOP_OF_PAGE => 'ABSOLUTE_TOP_OF_PAGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetImpressionShareLocation::class, \Google\Ads\GoogleAds\V6\Enums\TargetImpressionShareLocationEnum_TargetImpressionShareLocation::class);

