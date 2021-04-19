<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper1c0f546920a5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends Bundle
{
    protected function createContainerExtension() : SkipperExtension
    {
        return new SkipperExtension();
    }
}
