<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperecb978830f1e\Symfony\Component\Console\Application;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperecb978830f1e\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperecb978830f1e\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperecb978830f1e\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Reference(\_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperecb978830f1e\Symfony\Component\Console\Application::class, \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
