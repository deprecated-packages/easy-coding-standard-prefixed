<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper83a475a0590e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoper83a475a0590e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
