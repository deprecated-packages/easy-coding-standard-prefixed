<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1;

use _PhpScoperaba240c3d5f1\SebastianBergmann\Diff\Differ;
use _PhpScoperaba240c3d5f1\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaba240c3d5f1\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperaba240c3d5f1\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperaba240c3d5f1\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
