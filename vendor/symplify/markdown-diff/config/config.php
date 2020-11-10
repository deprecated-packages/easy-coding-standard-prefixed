<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031;

use _PhpScopere5e7dca8c031\SebastianBergmann\Diff\Differ;
use _PhpScopere5e7dca8c031\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere5e7dca8c031\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScopere5e7dca8c031\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScopere5e7dca8c031\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
