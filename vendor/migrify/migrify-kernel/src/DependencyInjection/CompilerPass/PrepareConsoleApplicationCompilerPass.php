<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScopera189153e1f79\Symfony\Component\Console\Application;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScopera189153e1f79\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScopera189153e1f79\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScopera189153e1f79\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Reference(\_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScopera189153e1f79\Symfony\Component\Console\Application::class, \_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
