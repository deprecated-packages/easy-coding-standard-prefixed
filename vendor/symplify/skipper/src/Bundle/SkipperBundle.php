<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf3d5f0921050\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperf3d5f0921050\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
