<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
