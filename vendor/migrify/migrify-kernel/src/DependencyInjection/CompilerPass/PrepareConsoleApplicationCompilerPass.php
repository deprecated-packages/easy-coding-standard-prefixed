<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperd4937ee9b515\Symfony\Component\Console\Application;
use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperd4937ee9b515\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperd4937ee9b515\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperd4937ee9b515\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperd4937ee9b515\Symfony\Component\DependencyInjection\Reference(\_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperd4937ee9b515\Symfony\Component\Console\Application::class, \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
