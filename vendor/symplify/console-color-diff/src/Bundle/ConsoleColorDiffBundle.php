<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
