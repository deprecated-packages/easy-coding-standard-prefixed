<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass;

use _PhpScoper2dcc760f8ff8\Symfony\Component\Console\Command\Command;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper2dcc760f8ff8\Symfony\Component\DependencyInjection\ContainerBuilder;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
/**
 * @see \Symplify\ConsolePackageBuilder\Tests\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPassTest
 */
final class NamelessConsoleCommandCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $containerBuilder) : void
    {
        foreach ($containerBuilder->getDefinitions() as $definition) {
            $definitionClass = $definition->getClass();
            if ($definitionClass === null) {
                continue;
            }
            if (!\is_a($definitionClass, Command::class, \true)) {
                continue;
            }
            $commandName = CommandNaming::classToName($definitionClass);
            $definition->addMethodCall('setName', [$commandName]);
        }
    }
}
