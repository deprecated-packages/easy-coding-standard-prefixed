<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\Bundle;

use _PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper0f5cd390c37a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper0f5cd390c37a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
