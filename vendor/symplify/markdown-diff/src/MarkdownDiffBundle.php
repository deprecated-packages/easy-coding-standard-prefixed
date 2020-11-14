<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperecb978830f1e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
