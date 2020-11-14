<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2;

use _PhpScopera749ac204cd2\SebastianBergmann\Diff\Differ;
use _PhpScopera749ac204cd2\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera749ac204cd2\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScopera749ac204cd2\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScopera749ac204cd2\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
