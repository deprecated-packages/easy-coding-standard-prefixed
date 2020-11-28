<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
