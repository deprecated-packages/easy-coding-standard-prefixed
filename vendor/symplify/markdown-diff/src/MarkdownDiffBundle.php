<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperdf6a0b341030\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
