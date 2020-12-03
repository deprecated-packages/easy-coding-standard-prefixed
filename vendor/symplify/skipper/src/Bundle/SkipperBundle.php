<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper6c2f17c43d2d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper6c2f17c43d2d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
