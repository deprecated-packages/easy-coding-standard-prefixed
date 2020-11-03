<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\DependencyInjection;

use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class MutualExcludedCheckersTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    public function test() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/MutualExcludedCheckersSource/config.php']);
        $fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        $this->assertCount(2, $fixerFileProcessor->getCheckers());
        $sniffFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor::class);
        $this->assertCount(0, $sniffFileProcessor->getCheckers());
    }
}
