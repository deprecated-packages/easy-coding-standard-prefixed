<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
