<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Bundle;

use _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
