<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperd32e35cfad84\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
