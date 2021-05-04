<?php

declare (strict_types=1);
namespace Symplify\ConsolePackageBuilder\Bundle;

use _PhpScopercfeba9d8ad31\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercfeba9d8ad31\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsolePackageBuilder\DependencyInjection\CompilerPass\NamelessConsoleCommandCompilerPass;
final class NamelessConsoleCommandBundle extends Bundle
{
    public function build(ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new NamelessConsoleCommandCompilerPass());
    }
}
