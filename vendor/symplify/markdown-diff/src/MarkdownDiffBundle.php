<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper967c4b7e296e\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoper967c4b7e296e\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoper967c4b7e296e\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
