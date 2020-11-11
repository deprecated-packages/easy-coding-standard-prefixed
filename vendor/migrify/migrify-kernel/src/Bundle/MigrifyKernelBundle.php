<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\MigrifyKernel\Bundle;

use _PhpScoper4f985154d5a0\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper4f985154d5a0\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper4f985154d5a0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper4f985154d5a0\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper4f985154d5a0\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper4f985154d5a0\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper4f985154d5a0\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper4f985154d5a0\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
