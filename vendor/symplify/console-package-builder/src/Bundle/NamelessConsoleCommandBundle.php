<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoperd2a667bd5a98\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd2a667bd5a98\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends Bundle
{
    public function build(ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new NamelessConsoleCommandCompilerPass());
    }
}
