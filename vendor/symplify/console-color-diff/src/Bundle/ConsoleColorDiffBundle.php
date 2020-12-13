<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
