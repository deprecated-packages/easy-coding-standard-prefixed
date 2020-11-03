<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera238de2e9b5a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopera238de2e9b5a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
