<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\MigrifyKernel\Bundle;

use _PhpScoper64a921a5401b\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper64a921a5401b\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper64a921a5401b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper64a921a5401b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper64a921a5401b\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper64a921a5401b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper64a921a5401b\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
