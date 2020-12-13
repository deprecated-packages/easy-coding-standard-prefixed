<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff\Bundle;

use _PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper4298f97f3cb3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
