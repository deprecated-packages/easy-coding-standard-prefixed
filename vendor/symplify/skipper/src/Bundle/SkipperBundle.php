<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera4be459e5e3d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
