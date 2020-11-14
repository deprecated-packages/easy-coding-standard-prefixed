<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
