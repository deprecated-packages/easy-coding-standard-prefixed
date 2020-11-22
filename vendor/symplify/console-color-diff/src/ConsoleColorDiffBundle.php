<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopera88a8b9f064a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
