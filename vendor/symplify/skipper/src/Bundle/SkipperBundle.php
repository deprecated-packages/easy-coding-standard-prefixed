<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper7e6a1331d94a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends Bundle
{
    protected function createContainerExtension() : SkipperExtension
    {
        return new SkipperExtension();
    }
}
