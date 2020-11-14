<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Differ;
use _PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
