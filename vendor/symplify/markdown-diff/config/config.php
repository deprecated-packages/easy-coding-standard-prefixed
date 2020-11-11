<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc;

use _PhpScoper2fe14d6302bc\SebastianBergmann\Diff\Differ;
use _PhpScoper2fe14d6302bc\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper2fe14d6302bc\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper2fe14d6302bc\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper2fe14d6302bc\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
