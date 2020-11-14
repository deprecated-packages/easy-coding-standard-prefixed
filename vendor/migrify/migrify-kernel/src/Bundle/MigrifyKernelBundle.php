<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\MigrifyKernel\Bundle;

use _PhpScopercda2b863d098\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopercda2b863d098\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
