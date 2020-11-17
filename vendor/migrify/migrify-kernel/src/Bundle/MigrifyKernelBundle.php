<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Bundle;

use _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
