<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d;

use _PhpScoper21c6ce8bfe5d\SebastianBergmann\Diff\Differ;
use _PhpScoper21c6ce8bfe5d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper21c6ce8bfe5d\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper21c6ce8bfe5d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper21c6ce8bfe5d\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
