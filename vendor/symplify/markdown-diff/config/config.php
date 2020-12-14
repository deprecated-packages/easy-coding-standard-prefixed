<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35;

use _PhpScoperc64a4ac1af35\SebastianBergmann\Diff\Differ;
use _PhpScoperc64a4ac1af35\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc64a4ac1af35\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperc64a4ac1af35\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperc64a4ac1af35\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperc64a4ac1af35\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
