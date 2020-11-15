<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\Bundle;

use _PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper49c742f5a4ee\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper49c742f5a4ee\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
