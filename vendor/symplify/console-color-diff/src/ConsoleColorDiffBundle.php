<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper48b5ec5b60cf\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper48b5ec5b60cf\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper48b5ec5b60cf\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
