<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Bundle;

use _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd4937ee9b515\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperd4937ee9b515\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
