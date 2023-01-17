<?php
namespace codename\parquet\format;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * DEPRECATED: Common types used by frameworks(e.g. hive, pig) using parquet.
 * ConvertedType is superseded by LogicalType.  This enum should not be extended.
 * 
 * See LogicalTypes.md for conversion between ConvertedType and LogicalType.
 */
final class ConvertedType
{
    /**
     * a BYTE_ARRAY actually contains UTF8 encoded chars
     */
    const UTF8 = 0;

    /**
     * a map is converted as an optional field containing a repeated key/value pair
     */
    const MAP = 1;

    /**
     * a key/value pair is converted into a group of two fields
     */
    const MAP_KEY_VALUE = 2;

    /**
     * a list is converted into an optional field containing a repeated field for its
     * values
     */
    const LIST = 3;

    /**
     * an enum is converted into a binary field
     */
    const ENUM = 4;

    /**
     * A decimal value.
     * 
     * This may be used to annotate binary or fixed primitive types. The
     * underlying byte array stores the unscaled value encoded as two's
     * complement using big-endian byte order (the most significant byte is the
     * zeroth element). The value of the decimal is the value * 10^{-scale}.
     * 
     * This must be accompanied by a (maximum) precision and a scale in the
     * SchemaElement. The precision specifies the number of digits in the decimal
     * and the scale stores the location of the decimal point. For example 1.23
     * would have precision 3 (3 total digits) and scale 2 (the decimal point is
     * 2 digits over).
     */
    const DECIMAL = 5;

    /**
     * A Date
     * 
     * Stored as days since Unix epoch, encoded as the INT32 physical type.
     * 
     */
    const DATE = 6;

    /**
     * A time
     * 
     * The total number of milliseconds since midnight.  The value is stored
     * as an INT32 physical type.
     */
    const TIME_MILLIS = 7;

    /**
     * A time.
     * 
     * The total number of microseconds since midnight.  The value is stored as
     * an INT64 physical type.
     */
    const TIME_MICROS = 8;

    /**
     * A date/time combination
     * 
     * Date and time recorded as milliseconds since the Unix epoch.  Recorded as
     * a physical type of INT64.
     */
    const TIMESTAMP_MILLIS = 9;

    /**
     * A date/time combination
     * 
     * Date and time recorded as microseconds since the Unix epoch.  The value is
     * stored as an INT64 physical type.
     */
    const TIMESTAMP_MICROS = 10;

    /**
     * An unsigned integer value.
     * 
     * The number describes the maximum number of meaningful data bits in
     * the stored value. 8, 16 and 32 bit values are stored using the
     * INT32 physical type.  64 bit values are stored using the INT64
     * physical type.
     * 
     */
    const UINT_8 = 11;

    const UINT_16 = 12;

    const UINT_32 = 13;

    const UINT_64 = 14;

    /**
     * A signed integer value.
     * 
     * The number describes the maximum number of meaningful data bits in
     * the stored value. 8, 16 and 32 bit values are stored using the
     * INT32 physical type.  64 bit values are stored using the INT64
     * physical type.
     * 
     */
    const INT_8 = 15;

    const INT_16 = 16;

    const INT_32 = 17;

    const INT_64 = 18;

    /**
     * An embedded JSON document
     * 
     * A JSON document embedded within a single UTF8 column.
     */
    const JSON = 19;

    /**
     * An embedded BSON document
     * 
     * A BSON document embedded within a single BINARY column.
     */
    const BSON = 20;

    /**
     * An interval of time
     * 
     * This type annotates data stored as a FIXED_LEN_BYTE_ARRAY of length 12
     * This data is composed of three separate little endian unsigned
     * integers.  Each stores a component of a duration of time.  The first
     * integer identifies the number of months associated with the duration,
     * the second identifies the number of days associated with the duration
     * and the third identifies the number of milliseconds associated with
     * the provided duration.  This duration of time is independent of any
     * particular timezone or date.
     */
    const INTERVAL = 21;

    static public $__names = array(
        0 => 'UTF8',
        1 => 'MAP',
        2 => 'MAP_KEY_VALUE',
        3 => 'LIST',
        4 => 'ENUM',
        5 => 'DECIMAL',
        6 => 'DATE',
        7 => 'TIME_MILLIS',
        8 => 'TIME_MICROS',
        9 => 'TIMESTAMP_MILLIS',
        10 => 'TIMESTAMP_MICROS',
        11 => 'UINT_8',
        12 => 'UINT_16',
        13 => 'UINT_32',
        14 => 'UINT_64',
        15 => 'INT_8',
        16 => 'INT_16',
        17 => 'INT_32',
        18 => 'INT_64',
        19 => 'JSON',
        20 => 'BSON',
        21 => 'INTERVAL',
    );
}

