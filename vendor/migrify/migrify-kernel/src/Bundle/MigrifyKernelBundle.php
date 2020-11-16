<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Bundle;

use _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
