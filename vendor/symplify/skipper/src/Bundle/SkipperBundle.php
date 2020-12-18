<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd8b12759ee0d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperd8b12759ee0d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
