<?php

declare (strict_types=1);
namespace Symplify\Skipper\Bundle;

use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb383f16e851e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\Skipper\DependencyInjection\Extension\SkipperExtension;
final class SkipperBundle extends \_PhpScoperb383f16e851e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\Skipper\DependencyInjection\Extension\SkipperExtension();
    }
}
