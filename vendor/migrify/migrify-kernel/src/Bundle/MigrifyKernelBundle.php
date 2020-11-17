<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\Bundle;

use _PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper2a8ad010dfbd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper2a8ad010dfbd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper2a8ad010dfbd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
