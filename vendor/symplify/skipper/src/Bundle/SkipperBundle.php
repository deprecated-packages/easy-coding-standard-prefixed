<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper246d7c16d32f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper246d7c16d32f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper246d7c16d32f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper246d7c16d32f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
