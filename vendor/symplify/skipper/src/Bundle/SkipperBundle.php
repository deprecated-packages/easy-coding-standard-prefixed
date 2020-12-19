<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfb2c402b972b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
