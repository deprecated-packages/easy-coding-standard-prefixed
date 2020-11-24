<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f;

use _PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Differ;
use _PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
