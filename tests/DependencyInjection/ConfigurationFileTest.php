<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\DependencyInjection;

use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\PackageBuilder\Tests\AbstractKernelTestCase;
final class ConfigurationFileTest extends \Symplify\PackageBuilder\Tests\AbstractKernelTestCase
{
    public function testEmptyConfig() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/ConfigurationFileSource/empty-config.php']);
        $fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        $this->assertCount(0, $fixerFileProcessor->getCheckers());
        $sniffFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor::class);
        $this->assertCount(0, $sniffFileProcessor->getCheckers());
    }
    public function testIncludeConfig() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/ConfigurationFileSource/include-another-config.php']);
        $fixerFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        $this->assertCount(1, $fixerFileProcessor->getCheckers());
        $sniffFileProcessor = self::$container->get(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor::class);
        $this->assertCount(1, $sniffFileProcessor->getCheckers());
    }
}
