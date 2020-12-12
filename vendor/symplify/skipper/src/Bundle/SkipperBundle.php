<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper8a05d21c15c9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper8a05d21c15c9\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper8a05d21c15c9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
