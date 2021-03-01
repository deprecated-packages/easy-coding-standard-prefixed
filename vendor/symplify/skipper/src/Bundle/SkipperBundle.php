<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf3dc21757def\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperf3dc21757def\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf3dc21757def\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
