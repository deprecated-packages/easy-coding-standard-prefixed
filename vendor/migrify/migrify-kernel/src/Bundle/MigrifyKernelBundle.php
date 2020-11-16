<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\Bundle;

use _PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper8e2d8a2760d1\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper8e2d8a2760d1\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper8e2d8a2760d1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
