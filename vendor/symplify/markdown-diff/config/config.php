<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55;

use _PhpScoper10b1b2c5ca55\SebastianBergmann\Diff\Differ;
use _PhpScoper10b1b2c5ca55\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper10b1b2c5ca55\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper10b1b2c5ca55\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper10b1b2c5ca55\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
