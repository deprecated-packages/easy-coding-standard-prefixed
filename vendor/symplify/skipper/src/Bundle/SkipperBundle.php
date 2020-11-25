<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper38a7d00685f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper38a7d00685f8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper38a7d00685f8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper38a7d00685f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
