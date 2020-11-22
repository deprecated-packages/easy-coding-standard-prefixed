<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb;

use _PhpScoperc5bee3a837bb\SebastianBergmann\Diff\Differ;
use _PhpScoperc5bee3a837bb\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc5bee3a837bb\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperc5bee3a837bb\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperc5bee3a837bb\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperc5bee3a837bb\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
