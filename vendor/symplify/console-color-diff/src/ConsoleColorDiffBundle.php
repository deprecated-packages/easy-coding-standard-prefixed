<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdebd9d705540\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperdebd9d705540\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
