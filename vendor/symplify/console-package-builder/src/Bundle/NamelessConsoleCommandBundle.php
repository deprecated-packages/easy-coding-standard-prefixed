<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper10b1b2c5ca55\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScoper10b1b2c5ca55\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
