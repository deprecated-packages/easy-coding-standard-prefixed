<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59;

use _PhpScoper7b8580219c59\SebastianBergmann\Diff\Differ;
use _PhpScoper7b8580219c59\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper7b8580219c59\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper7b8580219c59\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper7b8580219c59\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper7b8580219c59\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
