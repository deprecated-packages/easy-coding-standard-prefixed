<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3;

use _PhpScoper8163b0b2b8f3\SebastianBergmann\Diff\Differ;
use _PhpScoper8163b0b2b8f3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper8163b0b2b8f3\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper8163b0b2b8f3\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper8163b0b2b8f3\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
