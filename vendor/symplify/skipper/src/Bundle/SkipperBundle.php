<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd4c5032f0671\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperd4c5032f0671\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
