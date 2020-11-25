<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
