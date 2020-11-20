<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Bundle;

use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb6d4bd368bd9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperb6d4bd368bd9\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
