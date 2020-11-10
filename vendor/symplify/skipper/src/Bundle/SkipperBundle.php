<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
