<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper79449c4e744b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper79449c4e744b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
