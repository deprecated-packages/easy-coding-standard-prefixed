<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
