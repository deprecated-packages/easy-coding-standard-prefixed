<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper28ab463fc3ba\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper28ab463fc3ba\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper28ab463fc3ba\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper28ab463fc3ba\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
