<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper8ca6426d4e0c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScoper8ca6426d4e0c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper8ca6426d4e0c\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
