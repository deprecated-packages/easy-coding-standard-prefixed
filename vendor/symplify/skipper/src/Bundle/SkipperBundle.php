<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
