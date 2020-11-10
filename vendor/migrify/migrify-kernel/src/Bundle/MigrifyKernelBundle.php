<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\Migrify\MigrifyKernel\Bundle;

use _PhpScoper836bc32aecc2\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper836bc32aecc2\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper836bc32aecc2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper836bc32aecc2\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper836bc32aecc2\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper836bc32aecc2\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper836bc32aecc2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper836bc32aecc2\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
