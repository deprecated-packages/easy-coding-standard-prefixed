<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\MigrifyKernel\Bundle;

use _PhpScoper06c66bea2cf6\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper06c66bea2cf6\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper06c66bea2cf6\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper06c66bea2cf6\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
