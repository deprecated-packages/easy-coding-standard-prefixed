<?php

declare (strict_types=1);
namespace Symplify\SymplifyKernel\DependencyInjection\CompilerPass;

use _PhpScoper2b44cb0c30af\Symfony\Component\Console\Application;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder;
final class MakeConsoleApplicationPublicAliasCompilerPass implements \_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $consoleApplicationClass = $this->resolveConsoleApplicationClass($containerBuilder);
        if ($consoleApplicationClass === null) {
            return;
        }
        // add console application alias
        if ($consoleApplicationClass === \_PhpScoper2b44cb0c30af\Symfony\Component\Console\Application::class) {
            return;
        }
        $containerBuilder->setAlias(\_PhpScoper2b44cb0c30af\Symfony\Component\Console\Application::class, $consoleApplicationClass)->setPublic(\true);
    }
    private function resolveConsoleApplicationClass(\_PhpScoper2b44cb0c30af\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : ?string
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            if (!\is_a((string) $definition->getClass(), \_PhpScoper2b44cb0c30af\Symfony\Component\Console\Application::class, \true)) {
                continue;
            }
            return $definition->getClass();
        }
        return null;
    }
}
