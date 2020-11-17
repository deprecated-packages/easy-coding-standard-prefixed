<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
