<?php

declare (strict_types=1);
namespace _PhpScoperf3d5f0921050;

use _PhpScoperf3d5f0921050\SebastianBergmann\Diff\Differ;
use _PhpScoperf3d5f0921050\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf3d5f0921050\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperf3d5f0921050\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperf3d5f0921050\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
