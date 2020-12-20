<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\SebastianBergmann\Diff\Differ;
use _PhpScoperba24099fc6fd\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperba24099fc6fd\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperba24099fc6fd\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperba24099fc6fd\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
