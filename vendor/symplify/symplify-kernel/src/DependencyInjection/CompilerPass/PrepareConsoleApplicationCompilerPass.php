<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\CompilerPass;

use _PhpScoperca8ca183ac38\Symfony\Component\Console\Application;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Reference;
use Symplify\SymplifyKernel\Console\AutowiredConsoleApplication;
use Symplify\SymplifyKernel\Console\ConsoleApplicationFactory;
final class PrepareConsoleApplicationCompilerPass implements \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            $this->registerAutowiredSymfonyConsole($containerBuilder);
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoperca8ca183ac38\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoperca8ca183ac38\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
        // calls
        // resolve name
        // resolve version
    }
    private function resolveConsoleApplicationClass(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoperca8ca183ac38\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
    /**
     * Missing console application? add basic one
     */
    private function registerAutowiredSymfonyConsole(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->autowire(\Symplify\SymplifyKernel\Console\AutowiredConsoleApplication::class, \Symplify\SymplifyKernel\Console\AutowiredConsoleApplication::class)->setFactory([new \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Reference(\Symplify\SymplifyKernel\Console\ConsoleApplicationFactory::class), 'create']);
        $containerBuilder->setAlias(\_PhpScoperca8ca183ac38\Symfony\Component\Console\Application::class, \Symplify\SymplifyKernel\Console\AutowiredConsoleApplication::class)->setPublic(\true);
    }
}
