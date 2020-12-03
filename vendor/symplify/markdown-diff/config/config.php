<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d;

use _PhpScoper6c2f17c43d2d\SebastianBergmann\Diff\Differ;
use _PhpScoper6c2f17c43d2d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper6c2f17c43d2d\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper6c2f17c43d2d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper6c2f17c43d2d\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
