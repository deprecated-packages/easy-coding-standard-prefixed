<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
