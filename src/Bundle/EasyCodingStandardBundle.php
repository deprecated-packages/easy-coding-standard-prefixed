<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Bundle;

use PHP_CodeSniffer\Sniffs\Sniff;
use PhpCsFixer\Fixer\FixerInterface;
use _PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd8048db577a9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface;
use Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\ConflictingCheckersCompilerPass;
use Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\FixerWhitespaceConfigCompilerPass;
use Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\RemoveExcludedCheckersCompilerPass;
use Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\RemoveMutualCheckersCompilerPass;
use Symplify\EasyCodingStandard\DependencyInjection\Extension\EasyCodingStandardExtension;
use Symplify\PackageBuilder\DependencyInjection\CompilerPass\AutowireInterfacesCompilerPass;
final class EasyCodingStandardBundle extends \_PhpScoperd8048db577a9\Symfony\Component\HttpKernel\Bundle\Bundle
{
    /**
     * Order of compiler passes matters!
     */
    public function build(\_PhpScoperd8048db577a9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // cleanup
        $containerBuilder->addCompilerPass(new \Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\RemoveExcludedCheckersCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\RemoveMutualCheckersCompilerPass());
        // autowire
        $containerBuilder->addCompilerPass(new \Symplify\PackageBuilder\DependencyInjection\CompilerPass\AutowireInterfacesCompilerPass([\PhpCsFixer\Fixer\FixerInterface::class, \PHP_CodeSniffer\Sniffs\Sniff::class, \Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface::class]));
        // exceptions
        $containerBuilder->addCompilerPass(new \Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\ConflictingCheckersCompilerPass());
        // method calls
        $containerBuilder->addCompilerPass(new \Symplify\EasyCodingStandard\DependencyInjection\CompilerPass\FixerWhitespaceConfigCompilerPass());
    }
    protected function createContainerExtension() : \Symplify\EasyCodingStandard\DependencyInjection\Extension\EasyCodingStandardExtension
    {
        return new \Symplify\EasyCodingStandard\DependencyInjection\Extension\EasyCodingStandardExtension();
    }
}
