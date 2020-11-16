<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
