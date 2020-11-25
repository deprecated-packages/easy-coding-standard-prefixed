<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
