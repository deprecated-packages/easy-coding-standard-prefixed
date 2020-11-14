<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
