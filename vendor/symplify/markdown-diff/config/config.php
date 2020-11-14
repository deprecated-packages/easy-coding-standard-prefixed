<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f;

use _PhpScoper229e8121cf9f\SebastianBergmann\Diff\Differ;
use _PhpScoper229e8121cf9f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper229e8121cf9f\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper229e8121cf9f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper229e8121cf9f\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
