<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfa7254c25e18\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfa7254c25e18\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfa7254c25e18\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
