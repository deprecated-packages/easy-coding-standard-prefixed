<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera09818bc50da\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScopera09818bc50da\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
