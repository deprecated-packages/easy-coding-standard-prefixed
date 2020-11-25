<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
