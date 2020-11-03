<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Bundle;

use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\CompilerPass\MakeConsoleApplicationPublicAliasCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \_PhpScoper2b44cb0c30af\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\SymplifyKernel\DependencyInjection\CompilerPass\MakeConsoleApplicationPublicAliasCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
