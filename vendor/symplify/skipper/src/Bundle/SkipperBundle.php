<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperab9510cd5d97\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
