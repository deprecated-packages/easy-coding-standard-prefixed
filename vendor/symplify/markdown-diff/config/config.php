<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c;

use _PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Differ;
use _PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
