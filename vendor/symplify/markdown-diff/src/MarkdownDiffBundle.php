<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb6d4bd368bd9\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperb6d4bd368bd9\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
