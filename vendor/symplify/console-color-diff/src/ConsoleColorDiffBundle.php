<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad68e34a80c5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperad68e34a80c5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
