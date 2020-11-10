<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
