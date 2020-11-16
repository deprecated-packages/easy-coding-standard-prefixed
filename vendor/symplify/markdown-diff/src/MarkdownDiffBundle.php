<?php

declare (strict_types=1);
namespace Symplify\MarkdownDiff;

use _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera9d6b451df71\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension;
final class MarkdownDiffBundle extends \_PhpScopera9d6b451df71\Symfony\Component\HttpKernel\Bundle\Bundle
{
    protected function createContainerExtension() : ?\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\MarkdownDiff\DependencyInjection\Extension\MarkdownDiffExtension();
    }
}
