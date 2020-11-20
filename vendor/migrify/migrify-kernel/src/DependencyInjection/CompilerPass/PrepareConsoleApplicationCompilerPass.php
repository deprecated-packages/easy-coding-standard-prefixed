<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoper5a9febfbbe05\Symfony\Component\Console\Application;
use _PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoper5a9febfbbe05\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoper5a9febfbbe05\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoper5a9febfbbe05\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Reference(\_PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoper5a9febfbbe05\Symfony\Component\Console\Application::class, \_PhpScoper5a9febfbbe05\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
