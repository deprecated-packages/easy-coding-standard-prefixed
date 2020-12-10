<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera40fc53e636b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera40fc53e636b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
