<?php
declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Xgc\Php\Exception\InvalidPhpConstantException;
use Xgc\Php\PhpConstants;

/**
 * Class PhpConstantsTest
 * @package Tests\Unit
 */
class PhpConstantsTest extends TestCase
{

    public function testUploadMaxFileSize()
    {
        self::assertInternalType('int', PhpConstants::uploadMaxFileSize());
    }

    public function testUploadMaxPostSize()
    {
        self::assertInternalType('int', PhpConstants::postMaxSize());
    }

    public function testParseSize()
    {
        self::assertSame(123, PhpConstants::parseSize('123'));
    }

    public function testParseSizeWithUnits()
    {
        self::assertSame(1024, PhpConstants::parseSize('1k'));
    }

    /**
     * @expectedException \Xgc\Php\Exception\InvalidPhpConstantException
     */
    public function testInvalidPhpConstant()
    {
        PhpConstants::load('constant does not exist');
    }
}
