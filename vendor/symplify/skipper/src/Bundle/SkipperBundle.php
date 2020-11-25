<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
