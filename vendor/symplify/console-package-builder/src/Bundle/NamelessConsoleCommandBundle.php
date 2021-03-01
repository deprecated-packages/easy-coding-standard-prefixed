<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
