<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Bundle;

use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\CompilerPass\MakeConsoleApplicationPublicAliasCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\SymplifyKernel\DependencyInjection\CompilerPass\MakeConsoleApplicationPublicAliasCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
