<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperdf6a0b341030\Symfony\Component\Console\Application;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperdf6a0b341030\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperdf6a0b341030\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperdf6a0b341030\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Reference(\_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperdf6a0b341030\Symfony\Component\Console\Application::class, \_PhpScoperdf6a0b341030\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
