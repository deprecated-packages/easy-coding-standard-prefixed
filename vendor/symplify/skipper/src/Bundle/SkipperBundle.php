<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera909b9d9be2e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
