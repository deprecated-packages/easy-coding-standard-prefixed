<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f;

use _PhpScoperd9fcac9e904f\SebastianBergmann\Diff\Differ;
use _PhpScoperd9fcac9e904f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd9fcac9e904f\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperd9fcac9e904f\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperd9fcac9e904f\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperd9fcac9e904f\Symfony\Component\DependencyInjection\Loader\Configurator\service('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
