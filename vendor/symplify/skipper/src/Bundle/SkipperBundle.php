<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb6ccec8ab642\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperb6ccec8ab642\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb6ccec8ab642\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
