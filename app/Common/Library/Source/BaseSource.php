<?php

namespace App\Common\Library\Source;

/**
 * Class BaseSource
 */
abstract class BaseSource implements SourceInterface
{
    protected static $_options = [];

    /**
     * Get source options
     *
     * @return array
     */
    public static function getOptions(): array
    {
        return static::$_options;
    }

    /**
     * Get source keys
     *
     * @return array
     */
    public static function getKeys(): array
    {
        return array_keys(static::$_options);
    }

    /**
     * Get source value
     *
     * @param string $key
     * @param string $default
     * @return string
     */
    public static function get(string $key, string $default = ''): string
    {
        if (isset(static::$_options[$key])) {
            return static::$_options[$key];
        }
        return $default;
    }
}
