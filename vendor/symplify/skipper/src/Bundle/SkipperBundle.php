<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper6ffa0951a2e9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends Bundle
{
    protected function createContainerExtension() : SkipperExtension
    {
        return new SkipperExtension();
    }
}
