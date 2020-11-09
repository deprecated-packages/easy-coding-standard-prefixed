<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopere015d8a3273c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopere015d8a3273c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
