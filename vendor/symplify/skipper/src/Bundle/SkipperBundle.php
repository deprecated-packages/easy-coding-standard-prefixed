<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera34ae19e8d40\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera34ae19e8d40\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
