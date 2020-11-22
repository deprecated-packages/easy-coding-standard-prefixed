<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Bundle;

use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
