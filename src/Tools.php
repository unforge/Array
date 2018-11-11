<?php
/**
 * This file is part of the Array library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ronam Unstirred (unforge.coder@gmail.com)
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace Unforge\ArrayToolkit;

/**
 * Class Tools
 *
 * @package Unforge\ArrayToolkit
 */
final class Tools
{
    /**
     * Check exist key in array
     *
     * @param array $array
     * @param static|int $key
     *
     * @return bool
     */
    public static function checkExistKeyInArray(array $array, $key) : bool
    {
        return (bool) isset($array[$key]);
    }

    /**
     * Check on empty array
     *
     * @param array $array
     *
     * @return bool
     */
    public static function isEmpty(array $array) : bool
    {
        return (bool) empty($array);
    }

    /**
     * Return INT value from array
     *
     * @param array $array
     * @param string|int $key
     * @param int $default
     *
     * @return int
     */
    public static function getInt(array $array, $key, int $default = 0) : int
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return (int) $array[$key];
        }

        return $default;
    }

    /**
     * Return FLOAT value from array
     *
     * @param array $array
     * @param string|int $key
     * @param float $default
     *
     * @return float
     */
    public static function getFloat(array $array, $key, float $default = 0.0) : float
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return (float) $array[$key];
        }

        return $default;
    }

    /**
     * Return STRING value from array
     *
     * @param array $array
     * @param string|int $key
     * @param string $default
     *
     * @return string
     */
    public static function getString(array $array, $key, string $default = '') : string
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return (string) $array[$key];
        }

        return $default;
    }

    /**
     * Return BOOL value from array
     *
     * @param array $array
     * @param string|int $key
     * @param bool $default
     *
     * @return bool
     */
    public static function getBool(array $array, $key, bool $default = false) : bool
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return (bool) $array[$key];
        }

        return $default;
    }

    /**
     * Return ARRAY value from array
     *
     * @param array $array
     * @param string|int $key
     * @param array $default
     *
     * @return array
     */
    public static function getArray(array $array, $key, array $default = []) : array
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return (array) $array[$key];
        }

        return $default;
    }

//    /**
//     * Return OBJECT value from array
//     * @todo Needed add support php-7.2.*
//     *
//     * @param array $array
//     * @param string|int $key
//     * @param object $default
//     *
//     * @return object
//     */
//    public static function getObject(array $array, $key, object $default) : object
//    {
//        $key = (string) $key;
//
//        if ($array[$key] ?? 0) {
//            return (object) $array[$key];
//        }
//
//        return $default;
//    }

    /**
     * Return RAW value from array
     *
     * @param array $array
     * @param string|int $key
     * @param mixed $default
     *
     * @return bool|mixed
     */
    public static function getRaw(array $array, $key, $default = false)
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return $array[$key];
        }

        return $default;
    }

    /**
     * Return JSON ARRAY from array
     *
     * @param array $array
     * @param string|int $key
     * @param array $default
     *
     * @return array
     */
    public static function getJsonArray(array $array, $key, array $default = []) : array
    {
        $key = (string) $key;

        if ($array[$key] ?? 0) {
            return @json_decode($array[$key], true) ?? [];
        }

        return $default;
    }
}
