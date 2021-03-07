<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper6625323d9c29\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper6625323d9c29\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper6625323d9c29\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper6625323d9c29\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
