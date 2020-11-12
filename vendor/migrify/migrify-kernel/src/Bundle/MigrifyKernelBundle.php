<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\MigrifyKernel\Bundle;

use _PhpScoper3d6b50c3ca2f\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper3d6b50c3ca2f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3d6b50c3ca2f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3d6b50c3ca2f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper3d6b50c3ca2f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper3d6b50c3ca2f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper3d6b50c3ca2f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper3d6b50c3ca2f\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
