<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Bundle;

use _PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
