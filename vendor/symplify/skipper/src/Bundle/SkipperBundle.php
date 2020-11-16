<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
