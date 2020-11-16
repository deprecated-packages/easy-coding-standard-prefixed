<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\MigrifyKernel\Bundle;

use _PhpScopera9d6b451df71\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScopera9d6b451df71\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera9d6b451df71\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopera9d6b451df71\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScopera9d6b451df71\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopera9d6b451df71\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
