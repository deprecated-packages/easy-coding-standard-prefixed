<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperfcce67077a55\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
