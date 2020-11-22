<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
