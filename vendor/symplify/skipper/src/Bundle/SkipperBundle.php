<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper58a0a169dcfb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
