<?php
declare(strict_types=1);

namespace Xgc\Php;

use Xgc\Php\Exception\InvalidPhpConstantException;

/**
 * Class Php
 * @package Xgc\Php
 */
class PhpConstants
{
    // requests
    const UPLOAD_MAX_FILESIZE = 'upload_max_filesize';
    const POST_MAX_SIZE       = 'post_max_size';

    /**
     * @return int
     *
     * @throws InvalidPhpConstantException
     */
    public static function uploadMaxFileSize(): int
    {
        $postMaxSize   = self::postMaxSize();
        $uploadMaxSize = self::parseSize(self::load(self::UPLOAD_MAX_FILESIZE));

        return \min($postMaxSize, $uploadMaxSize);
    }

    /**
     * returns max post size in bytes
     *
     * @return int
     *
     * @throws InvalidPhpConstantException
     */
    public static function postMaxSize(): int
    {
        return self::parseSize(self::load(self::POST_MAX_SIZE));
    }

    /**
     * @param string $key
     *
     * @return string
     *
     * @throws InvalidPhpConstantException
     */
    public static function load(string $key): string
    {
        $ret = \ini_get($key);

        if ($ret === false) {
            throw new InvalidPhpConstantException($key);
        }

        return $ret;
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
