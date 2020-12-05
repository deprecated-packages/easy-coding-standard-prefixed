<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperaba240c3d5f1\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
