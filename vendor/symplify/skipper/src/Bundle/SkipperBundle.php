<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
