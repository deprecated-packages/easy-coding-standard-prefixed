<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper83a475a0590e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper83a475a0590e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper83a475a0590e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
