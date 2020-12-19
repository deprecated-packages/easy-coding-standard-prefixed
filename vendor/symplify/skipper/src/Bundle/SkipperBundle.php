<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera6f918786d5c\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera6f918786d5c\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
