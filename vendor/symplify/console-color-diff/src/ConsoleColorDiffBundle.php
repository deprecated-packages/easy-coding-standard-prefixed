<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff;

use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb383f16e851e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends \_PhpScoperb383f16e851e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}
