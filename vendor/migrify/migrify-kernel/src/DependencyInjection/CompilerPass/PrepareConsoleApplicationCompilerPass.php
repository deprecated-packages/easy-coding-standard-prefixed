<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperbcc0395698f8\Symfony\Component\Console\Application;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperbcc0395698f8\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperbcc0395698f8\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperbcc0395698f8\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Reference(\_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperbcc0395698f8\Symfony\Component\Console\Application::class, \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
