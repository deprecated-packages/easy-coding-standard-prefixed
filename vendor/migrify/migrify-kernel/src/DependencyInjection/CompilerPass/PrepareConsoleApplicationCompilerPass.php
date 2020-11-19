<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\MigrifyKernel\DependencyInjection\CompilerPass;

use _PhpScoper63567e560066\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication;
use _PhpScoper63567e560066\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory;
use _PhpScoper63567e560066\Symfony\Component\Console\Application;
use _PhpScoper63567e560066\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper63567e560066\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper63567e560066\Symfony\Component\DependencyInjection\Reference;
/**
 * @todo replace with symplify/symplify-kernel after release of Symplify 9
 */
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoper63567e560066\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoper63567e560066\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoper63567e560066\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoper63567e560066\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoper63567e560066\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoper63567e560066\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoper63567e560066\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\_PhpScoper63567e560066\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class, \_PhpScoper63567e560066\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoper63567e560066\Symfony\Component\DependencyInjection\Reference(\_PhpScoper63567e560066\Migrify\MigrifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoper63567e560066\Symfony\Component\Console\Application::class, \_PhpScoper63567e560066\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
