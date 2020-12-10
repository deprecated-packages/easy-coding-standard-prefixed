<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfab1bfb7ec99\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
