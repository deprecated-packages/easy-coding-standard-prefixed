<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
