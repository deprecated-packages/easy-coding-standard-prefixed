<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera749ac204cd2\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
