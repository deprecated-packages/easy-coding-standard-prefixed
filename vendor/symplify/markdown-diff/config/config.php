<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db;

use _PhpScoperedc2e0c967db\SebastianBergmann\Diff\Differ;
use _PhpScoperedc2e0c967db\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperedc2e0c967db\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperedc2e0c967db\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperedc2e0c967db\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
