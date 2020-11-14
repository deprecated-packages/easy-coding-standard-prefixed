<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoperddde3ba4aebc\Symfony\Component\Console\Application;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperddde3ba4aebc\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperddde3ba4aebc\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperddde3ba4aebc\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Reference(\_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperddde3ba4aebc\Symfony\Component\Console\Application::class, \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
