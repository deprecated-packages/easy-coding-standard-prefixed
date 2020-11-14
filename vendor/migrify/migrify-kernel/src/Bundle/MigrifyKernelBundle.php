<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\MigrifyKernel\Bundle;

use _PhpScoper229e8121cf9f\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper229e8121cf9f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper229e8121cf9f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper229e8121cf9f\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
