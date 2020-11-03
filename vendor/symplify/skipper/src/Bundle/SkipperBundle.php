<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper3d04c8135695\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3d04c8135695\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper3d04c8135695\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper3d04c8135695\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
