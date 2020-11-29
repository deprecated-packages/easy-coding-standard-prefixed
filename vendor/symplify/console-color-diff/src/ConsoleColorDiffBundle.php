<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
