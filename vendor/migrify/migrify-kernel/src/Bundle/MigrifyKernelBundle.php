<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\MigrifyKernel\Bundle;

use _PhpScoper48800f361566\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper48800f361566\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper48800f361566\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper48800f361566\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper48800f361566\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper48800f361566\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper48800f361566\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper48800f361566\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
