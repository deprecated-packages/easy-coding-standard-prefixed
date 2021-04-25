<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperff1e514762b4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends Bundle
{
    public function build(ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new NamelessConsoleCommandCompilerPass());
    }
}
