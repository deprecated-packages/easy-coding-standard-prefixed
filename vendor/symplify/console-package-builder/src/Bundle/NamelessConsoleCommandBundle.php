<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopercd2fc5ef50ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass());
    }
}
