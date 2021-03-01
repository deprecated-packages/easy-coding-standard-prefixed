<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed;

use _PhpScoper06c5fb6c14ed\SebastianBergmann\Diff\Differ;
use _PhpScoper06c5fb6c14ed\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper06c5fb6c14ed\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper06c5fb6c14ed\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper06c5fb6c14ed\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
