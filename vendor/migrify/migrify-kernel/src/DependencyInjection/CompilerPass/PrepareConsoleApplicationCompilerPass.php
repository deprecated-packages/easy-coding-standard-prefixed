<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScopera4be459e5e3d\Symfony\Component\Console\Application;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScopera4be459e5e3d\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScopera4be459e5e3d\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScopera4be459e5e3d\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Reference(\_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScopera4be459e5e3d\Symfony\Component\Console\Application::class, \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
