<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoper1103e00fb46b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper1103e00fb46b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
