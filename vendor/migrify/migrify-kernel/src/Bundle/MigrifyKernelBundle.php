<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\MigrifyKernel\Bundle;

use _PhpScoperecb978830f1e\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperecb978830f1e\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
