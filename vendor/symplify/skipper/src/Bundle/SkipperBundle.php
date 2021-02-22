<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfcee700af3df\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfcee700af3df\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
