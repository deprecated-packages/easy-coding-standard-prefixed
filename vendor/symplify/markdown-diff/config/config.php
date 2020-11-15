<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee;

use _PhpScoper49c742f5a4ee\SebastianBergmann\Diff\Differ;
use _PhpScoper49c742f5a4ee\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper49c742f5a4ee\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper49c742f5a4ee\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper49c742f5a4ee\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
