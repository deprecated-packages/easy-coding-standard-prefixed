<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper02b5d1bf8fec\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper02b5d1bf8fec\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper02b5d1bf8fec\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper02b5d1bf8fec\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
