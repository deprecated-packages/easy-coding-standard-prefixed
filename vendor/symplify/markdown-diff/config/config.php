<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8;

use _PhpScoperbcc0395698f8\SebastianBergmann\Diff\Differ;
use _PhpScoperbcc0395698f8\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbcc0395698f8\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperbcc0395698f8\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperbcc0395698f8\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
