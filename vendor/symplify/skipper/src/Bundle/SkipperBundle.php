<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperba5852cc6147\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperba5852cc6147\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
