<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3;

use _PhpScoper4298f97f3cb3\SebastianBergmann\Diff\Differ;
use _PhpScoper4298f97f3cb3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper4298f97f3cb3\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper4298f97f3cb3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper4298f97f3cb3\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper4298f97f3cb3\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
