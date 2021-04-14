<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper7b319b4d8e1c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper7b319b4d8e1c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
