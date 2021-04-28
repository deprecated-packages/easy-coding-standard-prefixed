<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper1b2f8b9c0339\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends Bundle
{
    protected function createContainerExtension() : SkipperExtension
    {
        return new SkipperExtension();
    }
}
