<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperb6d4bd368bd9\Symfony\Component\Console\Application;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperb6d4bd368bd9\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperb6d4bd368bd9\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperb6d4bd368bd9\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Reference(\_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperb6d4bd368bd9\Symfony\Component\Console\Application::class, \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
