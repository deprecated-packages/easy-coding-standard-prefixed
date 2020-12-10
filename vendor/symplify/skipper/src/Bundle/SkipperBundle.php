<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb458b528613f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperb458b528613f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
