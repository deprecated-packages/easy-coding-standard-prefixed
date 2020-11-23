<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a;

use _PhpScoperc4b135661b3a\SebastianBergmann\Diff\Differ;
use _PhpScoperc4b135661b3a\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc4b135661b3a\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperc4b135661b3a\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperc4b135661b3a\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
