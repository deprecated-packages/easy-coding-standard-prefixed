<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf053e888b664\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperf053e888b664\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf053e888b664\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
