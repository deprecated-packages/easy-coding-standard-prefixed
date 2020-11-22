<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf3db63c305b2\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperf3db63c305b2\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
