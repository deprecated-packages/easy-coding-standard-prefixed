<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5;

use _PhpScoperac4e86be08e5\SebastianBergmann\Diff\Differ;
use _PhpScoperac4e86be08e5\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperac4e86be08e5\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperac4e86be08e5\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperac4e86be08e5\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
