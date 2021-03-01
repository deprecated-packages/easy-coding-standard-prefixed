<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass;

use _PhpScoperf3dc21757def\Symfony\Component\Console\Command\Command;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\ContainerBuilder;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
/**
 * @see \Symplify\ConsolePackageBuilder\Tests\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPassTest
 */
final class NamelessConsoleCommandCompilerPass implements \_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            $definitionClass = $definition->getClass();
            if ($definitionClass === null) {
                continue;
            }
            if (!\is_a($definitionClass, \_PhpScoperf3dc21757def\Symfony\Component\Console\Command\Command::class, \true)) {
                continue;
            }
            $commandName = \Symplify\PackageBuilder\Console\Command\CommandNaming::classToName($definitionClass);
            $definition->addMethodCall('setName', [$commandName]);
        }
    }
}
