<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperedc2e0c967db\Symfony\Component\Console\Application;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperedc2e0c967db\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperedc2e0c967db\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperedc2e0c967db\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Reference(\_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperedc2e0c967db\Symfony\Component\Console\Application::class, \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
