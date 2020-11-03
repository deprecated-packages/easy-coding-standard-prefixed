<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera238de2e9b5a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera238de2e9b5a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
