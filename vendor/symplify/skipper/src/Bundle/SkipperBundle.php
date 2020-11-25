<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
