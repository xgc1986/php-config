<?php
declare(strict_types=1);

namespace Xgc\Php\Exception;

use RuntimeException;

/**
 * Class InvalidPhpConstantException
 * @package Xgc\Php\Exception
 */
class InvalidPhpConstantException extends RuntimeException
{

    /**
     * InvalidPhpConstantException constructor.
     *
     * @param string $key
     */
    public function __construct(string $key)
    {
        parent::__construct("Invalid PHP constant '$key'");
    }
}
