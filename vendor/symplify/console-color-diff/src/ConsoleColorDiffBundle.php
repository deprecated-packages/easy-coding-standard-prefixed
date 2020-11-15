<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercb576ca159b5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
