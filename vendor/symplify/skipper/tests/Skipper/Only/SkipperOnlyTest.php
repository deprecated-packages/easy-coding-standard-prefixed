<?php

declare (strict_types=1);
namespace Symplify\Skipper\Tests\Skipper\Only;

use Iterator;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
use Symplify\Skipper\HttpKernel\SkipperKernel;
use Symplify\Skipper\Skipper\Skipper;
use Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass;
use Symplify\Skipper\Tests\Skipper\Only\Source\SkipThisClass;
use Symplify\SmartFileSystem\SmartFileInfo;
final class SkipperOnlyTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var Skipper
     */
    private $skipper;
    protected function setUp() : void
    {
        $this->bootKernelWithConfigs(\Symplify\Skipper\HttpKernel\SkipperKernel::class, [__DIR__ . '/config.php']);
        $this->skipper = self::$container->get(\Symplify\Skipper\Skipper\Skipper::class);
    }
    /**
     * @dataProvider provideCheckerAndFile()
     */
    public function testCheckerAndFile(string $class, string $filePath, bool $expected) : void
    {
        $resolvedSkip = $this->skipper->shouldSkipElementAndFileInfo($class, new \Symplify\SmartFileSystem\SmartFileInfo($filePath));
        $this->assertSame($expected, $resolvedSkip);
    }
    public function provideCheckerAndFile() : \Iterator
    {
        (yield [\Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass::class, __DIR__ . '/Fixture/SomeFileToOnlyInclude.php', \false]);
        (yield [\Symplify\Skipper\Tests\Skipper\Only\Source\IncludeThisClass::class, __DIR__ . '/Fixture/SomeFile.php', \true]);
        // no restrictions
        (yield [\Symplify\Skipper\Tests\Skipper\Only\Source\SkipThisClass::class, __DIR__ . '/Fixture/SomeFileToOnlyInclude.php', \false]);
        (yield [\Symplify\Skipper\Tests\Skipper\Only\Source\SkipThisClass::class, __DIR__ . '/Fixture/SomeFile.php', \false]);
    }
}
