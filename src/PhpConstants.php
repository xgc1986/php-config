<?php
declare(strict_types=1);

namespace Xgc\Php;

/**
 * Class Php
 * @package Xgc\Php
 */
class PhpConstants
{
    /**
     * @return int
     */
    public static function uploadMaxFileSize(): int
    {
        $postMaxSize   = self::postMaxSize();
        $uploadMaxSize = self::parseSize(self::load('upload_max_filesize'));

        return \min($postMaxSize, $uploadMaxSize);
    }

    /**
     * returns max post size in bytes
     *
     * @return int
     */
    public static function postMaxSize(): int
    {
        return self::parseSize(self::load('post_max_size'));
    }

    /**
     * @param string $key
     *
     * @return string
     */
    public static function load(string $key): string
    {
        return \ini_get($key);
    }

    /**
     * @param string $size
     *
     * @return int
     */
    public static function parseSize(string $size): int
    {
        $unit = \preg_replace('/[^bkmgtpezy]/i', '', \strtolower($size));
        $size = \preg_replace('/[^0-9.]/', '', $size);

        if ($unit) {
            $ret = \round($size * (1024 ** \stripos('bkmgtpezy', $unit[0])));
        } else {
            $ret = \round($size);
        }

        return (int)$ret;
    }
}
