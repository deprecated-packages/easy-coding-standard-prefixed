<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
