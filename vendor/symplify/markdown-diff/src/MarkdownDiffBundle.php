<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
