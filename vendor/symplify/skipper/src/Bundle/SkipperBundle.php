<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera51a90153f58\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera51a90153f58\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera51a90153f58\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
