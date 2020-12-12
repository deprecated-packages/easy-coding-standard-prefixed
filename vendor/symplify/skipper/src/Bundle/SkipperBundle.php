<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperef870243cfdb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperef870243cfdb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
