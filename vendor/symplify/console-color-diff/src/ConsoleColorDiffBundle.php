<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercb217fd4e736\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
