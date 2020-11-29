<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper9d73a84b09ad\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper9d73a84b09ad\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
