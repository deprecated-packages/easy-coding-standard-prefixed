<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4b135661b3a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperc4b135661b3a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
