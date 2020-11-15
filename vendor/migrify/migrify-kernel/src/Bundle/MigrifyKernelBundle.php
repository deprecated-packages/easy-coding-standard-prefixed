<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\MigrifyKernel\Bundle;

use _PhpScoper279cf54b77ad\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper279cf54b77ad\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper279cf54b77ad\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper279cf54b77ad\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper279cf54b77ad\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper279cf54b77ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper279cf54b77ad\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
