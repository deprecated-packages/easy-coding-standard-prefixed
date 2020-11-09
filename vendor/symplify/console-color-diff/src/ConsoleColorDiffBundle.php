<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
