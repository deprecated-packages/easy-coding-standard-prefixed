<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperfacc742d2745\Symfony\Component\Console\Application;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperfacc742d2745\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperfacc742d2745\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperfacc742d2745\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Reference(\_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperfacc742d2745\Symfony\Component\Console\Application::class, \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
