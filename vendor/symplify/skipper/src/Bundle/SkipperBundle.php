<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
