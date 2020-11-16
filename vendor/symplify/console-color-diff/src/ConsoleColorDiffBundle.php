<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
