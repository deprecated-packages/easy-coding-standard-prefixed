<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Differ;
use _PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
