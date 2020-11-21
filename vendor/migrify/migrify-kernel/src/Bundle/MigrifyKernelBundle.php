<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\Migrify\MigrifyKernel\Bundle;

use _PhpScoper224ae0b86670\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper224ae0b86670\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper224ae0b86670\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper224ae0b86670\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper224ae0b86670\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper224ae0b86670\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper224ae0b86670\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
