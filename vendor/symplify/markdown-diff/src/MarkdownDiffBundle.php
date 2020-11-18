<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperf77bffce0320\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScoperf77bffce0320\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScoperf77bffce0320\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
