<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94;

use _PhpScoper3a22e8e0bd94\SebastianBergmann\Diff\Differ;
use _PhpScoper3a22e8e0bd94\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper3a22e8e0bd94\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper3a22e8e0bd94\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper3a22e8e0bd94\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper3a22e8e0bd94\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
