<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9;

use _PhpScoperb6d4bd368bd9\SebastianBergmann\Diff\Differ;
use _PhpScoperb6d4bd368bd9\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb6d4bd368bd9\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperb6d4bd368bd9\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperb6d4bd368bd9\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
