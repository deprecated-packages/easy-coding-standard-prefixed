<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
