<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Bundle;

use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \_PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
