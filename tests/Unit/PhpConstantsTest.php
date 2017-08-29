<?php
declare(strict_types=1);

namespace Tests\Unit;

use Xgc\PhpConfig\Config;
use Xgc\PhpConfig\Test\TestCase;

/**
 * Class PhpConstantsTest
 * @package Tests\Unit
 */
class PhpConstantsTest extends TestCase
{

    public function testUploadMaxFileSize()
    {
        self::assertInternalType('int', Config::uploadMaxFileSize());
    }

    public function testUploadMaxPostSize()
    {
        self::assertInternalType('int', Config::postMaxSize());
    }

    public function testParseSize()
    {
        $number   = self::faker()->numerify();
        $expected = (int)$number;
        self::assertSame($expected, Config::parseSize($number));
    }

    public function testParseSizeWithUnits()
    {
        self::assertSame(1024, Config::parseSize('1k'));
    }

    /**
     * @expectedException \Xgc\PhpConfig\Exception\InvalidPhpConfigException
     */
    public function testInvalidPhpConstant()
    {
        Config::load(self::faker()->word);
    }
}
