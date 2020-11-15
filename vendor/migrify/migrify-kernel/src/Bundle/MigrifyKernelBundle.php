<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\MigrifyKernel\Bundle;

use _PhpScopercb576ca159b5\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScopercb576ca159b5\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScopercb576ca159b5\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopercb576ca159b5\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
