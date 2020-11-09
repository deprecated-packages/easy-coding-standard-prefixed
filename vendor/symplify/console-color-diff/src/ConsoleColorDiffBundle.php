<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperae959d396e95\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperae959d396e95\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperae959d396e95\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
