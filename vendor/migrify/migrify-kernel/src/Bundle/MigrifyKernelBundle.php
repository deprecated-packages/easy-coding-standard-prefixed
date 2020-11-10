<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\MigrifyKernel\Bundle;

use _PhpScoper666af036e800\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper666af036e800\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper666af036e800\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper666af036e800\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper666af036e800\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper666af036e800\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
