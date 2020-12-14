<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperc64a4ac1af35\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
