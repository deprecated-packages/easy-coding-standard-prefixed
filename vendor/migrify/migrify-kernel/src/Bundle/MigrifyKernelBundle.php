<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Bundle;

use _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper1103e00fb46b\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper1103e00fb46b\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
