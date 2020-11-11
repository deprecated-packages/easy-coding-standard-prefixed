<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\Bundle;

use _PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper2fe14d6302bc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper2fe14d6302bc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
