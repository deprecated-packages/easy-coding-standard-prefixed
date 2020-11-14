<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e;

use _PhpScoperecb978830f1e\SebastianBergmann\Diff\Differ;
use _PhpScoperecb978830f1e\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperecb978830f1e\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperecb978830f1e\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperecb978830f1e\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
