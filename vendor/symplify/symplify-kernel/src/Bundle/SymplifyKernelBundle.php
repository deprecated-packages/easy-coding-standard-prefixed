<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\Bundle;

use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension;
final class SymplifyKernelBundle extends \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\SymplifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\SymplifyKernel\DependencyInjection\Extension\SymplifyKernelExtension();
    }
}
