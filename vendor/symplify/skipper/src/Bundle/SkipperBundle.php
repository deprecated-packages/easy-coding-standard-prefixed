<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
