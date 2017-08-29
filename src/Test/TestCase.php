<?php
declare(strict_types=1);

namespace Xgc\PhpConfig\Test;

use Faker\Factory;
use Faker\Generator;

/**
 * Class TestCase
 * @package Xgc\PhpConfig\Test
 */
class TestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * @param string $locale
     *
     * @return Generator
     */
    public static function faker(string $locale = 'es_ES'): Generator
    {
        return Factory::create($locale);
    }
}
