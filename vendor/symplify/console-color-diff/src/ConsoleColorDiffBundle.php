<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
