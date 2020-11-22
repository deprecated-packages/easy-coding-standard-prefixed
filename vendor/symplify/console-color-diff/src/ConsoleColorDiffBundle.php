<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
