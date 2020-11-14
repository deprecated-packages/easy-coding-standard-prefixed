<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\MigrifyKernel\Bundle;

use _PhpScopera749ac204cd2\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScopera749ac204cd2\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScopera749ac204cd2\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopera749ac204cd2\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
