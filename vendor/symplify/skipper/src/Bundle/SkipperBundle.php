<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperd1a5bf00e83e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
