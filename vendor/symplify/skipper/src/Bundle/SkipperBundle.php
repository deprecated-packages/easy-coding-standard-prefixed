<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper3c4e863e8a34\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends Bundle
{
    protected function createContainerExtension() : SkipperExtension
    {
        return new SkipperExtension();
    }
}
