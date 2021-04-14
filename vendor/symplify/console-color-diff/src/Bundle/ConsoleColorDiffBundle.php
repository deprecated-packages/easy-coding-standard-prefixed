<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperd32e35cfad84\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
