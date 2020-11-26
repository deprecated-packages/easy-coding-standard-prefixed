<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
