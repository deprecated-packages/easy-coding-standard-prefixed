<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
