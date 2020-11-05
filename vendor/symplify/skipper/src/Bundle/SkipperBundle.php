<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdebd9d705540\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperdebd9d705540\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
