<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfaaf57618f34\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
