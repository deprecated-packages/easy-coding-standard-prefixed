<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3;

use _PhpScoperbc5235eb86f3\SebastianBergmann\Diff\Differ;
use _PhpScoperbc5235eb86f3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbc5235eb86f3\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperbc5235eb86f3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperbc5235eb86f3\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
