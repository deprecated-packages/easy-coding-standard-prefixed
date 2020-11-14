<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098;

use _PhpScopercda2b863d098\SebastianBergmann\Diff\Differ;
use _PhpScopercda2b863d098\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercda2b863d098\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScopercda2b863d098\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScopercda2b863d098\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
