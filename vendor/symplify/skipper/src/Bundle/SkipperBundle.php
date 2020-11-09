<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
