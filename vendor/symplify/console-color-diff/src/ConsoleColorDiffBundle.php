<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
