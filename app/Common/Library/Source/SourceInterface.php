<?php

namespace App\Common\Library\Source;

/**
 * Interface SourceInterface
 * @package App\Common\Library\Source
 */
interface SourceInterface
{
    /**
     * Get source value
     * @param string $key
     * @return string
     */
    public static function get(string $key): string;

    /**
     * Get source options
     * @return iterable
     */
    public static function getOptions(): iterable;

    /**
     * Get source keys
     * @return iterable
     */
    public static function getKeys(): iterable;
}
