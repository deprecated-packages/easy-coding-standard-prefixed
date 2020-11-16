<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Bundle;

use _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
