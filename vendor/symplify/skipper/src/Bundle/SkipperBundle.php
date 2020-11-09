<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperae959d396e95\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperae959d396e95\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
