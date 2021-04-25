<?php

declare (strict_types=1);
namespace Symplify\ConsoleColorDiff\Bundle;

use _PhpScoper4f608e7525a4\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension;
final class ConsoleColorDiffBundle extends Bundle
{
    protected function createContainerExtension() : ConsoleColorDiffExtension
    {
        return new ConsoleColorDiffExtension();
    }
}
