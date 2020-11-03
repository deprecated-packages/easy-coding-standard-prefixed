<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
