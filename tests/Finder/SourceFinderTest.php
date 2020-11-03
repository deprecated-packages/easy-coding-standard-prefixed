<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Finder;

use Symplify\EasyCodingStandard\Finder\SourceFinder;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class SourceFinderTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    public function test() : void
    {
        $this->bootKernel(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class);
        $sourceFinder = self::$container->get(\Symplify\EasyCodingStandard\Finder\SourceFinder::class);
        $foundFiles = $sourceFinder->find([__DIR__ . '/SourceFinderSource/Source']);
        $this->assertCount(1, $foundFiles);
        $foundFiles = $sourceFinder->find([__DIR__ . '/SourceFinderSource/Source/SomeClass.php.inc']);
        $this->assertCount(1, $foundFiles);
    }
}
