<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
