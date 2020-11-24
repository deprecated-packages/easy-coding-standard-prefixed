<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Tests\Indentation;

use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use PhpCsFixer\WhitespacesFixerConfig;
use _PhpScoperfd70a7e8e84f\Psr\Container\ContainerInterface;
use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Configuration\StaticEolConfiguration;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;
final class IndentationTest extends \Symplify\PackageBuilder\Testing\AbstractKernelTestCase
{
    /**
     * @var PrivatesAccessor
     */
    private $privatesAccessor;
    protected function setUp() : void
    {
        $this->privatesAccessor = new \Symplify\PackageBuilder\Reflection\PrivatesAccessor();
    }
    public function testSpaces() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/IndentationSource/config-with-spaces-indentation.php']);
        /** @var IndentationTypeFixer $indentationTypeFixer */
        $indentationTypeFixer = $this->getIndentationTypeFixerFromContainer(self::$container);
        $this->assertInstanceOf(\PhpCsFixer\Fixer\WhitespacesAwareFixerInterface::class, $indentationTypeFixer);
        $whitespacesFixerConfig = new \PhpCsFixer\WhitespacesFixerConfig('    ', \Symplify\PackageBuilder\Configuration\StaticEolConfiguration::getEolChar());
        $fixerWhitespaceConfig = $this->privatesAccessor->getPrivateProperty($indentationTypeFixer, 'whitespacesConfig');
        $this->assertEquals($whitespacesFixerConfig, $fixerWhitespaceConfig);
    }
    public function testTabs() : void
    {
        $this->bootKernelWithConfigs(\Symplify\EasyCodingStandard\HttpKernel\EasyCodingStandardKernel::class, [__DIR__ . '/IndentationSource/config-with-tabs-indentation.php']);
        /** @var IndentationTypeFixer $indentationTypeFixer */
        $indentationTypeFixer = $this->getIndentationTypeFixerFromContainer(self::$container);
        $this->assertInstanceOf(\PhpCsFixer\Fixer\WhitespacesAwareFixerInterface::class, $indentationTypeFixer);
        $whitespacesFixerConfig = new \PhpCsFixer\WhitespacesFixerConfig('	', \Symplify\PackageBuilder\Configuration\StaticEolConfiguration::getEolChar());
        $fixerWhitespaceConfig = $this->privatesAccessor->getPrivateProperty($indentationTypeFixer, 'whitespacesConfig');
        $this->assertEquals($whitespacesFixerConfig, $fixerWhitespaceConfig);
    }
    private function getIndentationTypeFixerFromContainer(\_PhpScoperfd70a7e8e84f\Psr\Container\ContainerInterface $container) : ?\PhpCsFixer\Fixer\FixerInterface
    {
        $fixerFileProcessor = $container->get(\Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor::class);
        $checkers = $fixerFileProcessor->getCheckers();
        $this->assertCount(1, $checkers);
        return \array_pop($checkers);
    }
}
