<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperaac5f7c652e4\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
