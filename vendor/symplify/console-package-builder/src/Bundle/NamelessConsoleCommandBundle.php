<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8a7636b3fdaf\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScoper8a7636b3fdaf\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
