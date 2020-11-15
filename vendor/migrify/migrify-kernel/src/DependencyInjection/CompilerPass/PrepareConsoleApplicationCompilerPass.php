<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScopercb576ca159b5\Symfony\Component\Console\Application;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScopercb576ca159b5\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScopercb576ca159b5\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScopercb576ca159b5\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Reference(\_PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScopercb576ca159b5\Symfony\Component\Console\Application::class, \_PhpScopercb576ca159b5\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
