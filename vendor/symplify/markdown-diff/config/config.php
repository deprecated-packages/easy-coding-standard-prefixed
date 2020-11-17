<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8;

use _PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Differ;
use _PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
