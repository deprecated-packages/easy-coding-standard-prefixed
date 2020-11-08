<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\DependencyInjection;

use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
final class ExcludedCheckersTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    protected function setUp() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/ExcludedCheckersSource/config.php']);
    }
    public function test() : void
    {
        $fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        $this->assertCount(0, $fixerFileProcessor->getCheckers());
    }
}
