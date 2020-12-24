<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera37d6fb0b1ab\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera37d6fb0b1ab\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
