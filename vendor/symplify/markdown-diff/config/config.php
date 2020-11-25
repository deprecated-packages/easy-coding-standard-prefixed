<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38;

use _PhpScoperca8ca183ac38\SebastianBergmann\Diff\Differ;
use _PhpScoperca8ca183ac38\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperca8ca183ac38\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperca8ca183ac38\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperca8ca183ac38\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
