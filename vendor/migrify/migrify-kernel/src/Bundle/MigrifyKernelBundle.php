<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Bundle;

use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
