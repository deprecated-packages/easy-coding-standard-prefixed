<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\MigrifyKernel\Bundle;

use _PhpScopere5e7dca8c031\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopere5e7dca8c031\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
