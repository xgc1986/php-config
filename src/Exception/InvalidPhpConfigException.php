<?php
declare(strict_types=1);

namespace Xgc\PhpConfig\Exception;

use RuntimeException;

/**
 * Class InvalidPhpConfigException
 * @package Xgc\PhpConfig\Exception
 */
class InvalidPhpConfigException extends RuntimeException
{

    /**
     * InvalidPhpConfigException constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        parent::__construct("Invalid PHP constant '$key'");
    }
}
