<?php

declare (strict_types=1);
namespace Symplify\SmartFileSystem\Tests\Normalizer;

use Iterator;
use _PhpScoper6a0a7eb6e565\PHPUnit\Framework\TestCase;
use Symplify\SmartFileSystem\Normalizer\PathNormalizer;
final class PathNormalizerTest extends \_PhpScoper6a0a7eb6e565\PHPUnit\Framework\TestCase
{
    /**
     * @var PathNormalizer
     */
    private $pathNormalizer;
    protected function setUp() : void
    {
        $this->pathNormalizer = new \Symplify\SmartFileSystem\Normalizer\PathNormalizer();
    }
    /**
     * @dataProvider provideData()
     */
    public function test(string $inputPath, string $expectedNormalizedPath) : void
    {
        $normalizedPath = $this->pathNormalizer->normalizePath($inputPath);
        $this->assertSame($expectedNormalizedPath, $normalizedPath);
    }
    public function provideData() : \Iterator
    {
        // based on Linux
        (yield ['/any/path', '/any/path']);
        (yield ['_PhpScoper6a0a7eb6e565\\any\\path', '/any/path']);
    }
}
