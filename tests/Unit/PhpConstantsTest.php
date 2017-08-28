<?php
declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Xgc\Php\PhpConstants;

/**
 * Class PhpConstantsTest
 * @package Tests\Unit
 */
class PhpConstantsTest extends TestCase
{

    /** @test */
    public function uploadMaxFileSizeTest()
    {
        self::assertInternalType('int', PhpConstants::uploadMaxFileSize());
    }

    /** @test */
    public function uploadMaxPostSizeTest()
    {
        self::assertInternalType('int', PhpConstants::postMaxSize());
    }

    /** @test */
    public function parseSizeTest()
    {
        self::assertSame(123, PhpConstants::parseSize('123'));
    }

    /** @test */
    public function parseSizeWithUnitsTest()
    {
        self::assertSame(1024, PhpConstants::parseSize('1k'));
    }
}
