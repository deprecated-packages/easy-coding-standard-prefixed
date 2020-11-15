<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121;

use _PhpScoperd9c3b46af121\SebastianBergmann\Diff\Differ;
use _PhpScoperd9c3b46af121\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd9c3b46af121\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperd9c3b46af121\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperd9c3b46af121\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
