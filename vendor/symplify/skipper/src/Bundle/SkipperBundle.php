<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper59558822d8c7\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper59558822d8c7\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
