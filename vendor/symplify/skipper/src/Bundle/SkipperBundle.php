<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfabf55fef6b7\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
