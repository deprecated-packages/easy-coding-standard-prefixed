<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere4fa57261c04\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopere4fa57261c04\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
