<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper81b3ff5ab9fe\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
