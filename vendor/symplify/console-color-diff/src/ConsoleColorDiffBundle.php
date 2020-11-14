<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScopercda2b863d098\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
