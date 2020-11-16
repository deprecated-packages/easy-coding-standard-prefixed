<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Bundle;

use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
