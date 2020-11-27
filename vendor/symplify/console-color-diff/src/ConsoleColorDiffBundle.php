<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper578a67c80b2b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper578a67c80b2b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
