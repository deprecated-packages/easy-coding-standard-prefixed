<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
