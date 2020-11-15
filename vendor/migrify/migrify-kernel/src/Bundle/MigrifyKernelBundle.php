<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Bundle;

use _PhpScoperd9c3b46af121\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperd9c3b46af121\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd9c3b46af121\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperd9c3b46af121\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperd9c3b46af121\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperd9c3b46af121\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
