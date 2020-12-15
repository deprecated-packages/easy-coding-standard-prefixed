<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdeea1786e972\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperdeea1786e972\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
