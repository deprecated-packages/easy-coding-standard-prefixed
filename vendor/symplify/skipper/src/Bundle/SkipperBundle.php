<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
