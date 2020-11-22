<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
