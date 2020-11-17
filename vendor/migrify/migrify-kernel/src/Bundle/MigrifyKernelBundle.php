<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Bundle;

use _PhpScoper967c4b7e296e\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper967c4b7e296e\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper967c4b7e296e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper967c4b7e296e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper967c4b7e296e\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper967c4b7e296e\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
