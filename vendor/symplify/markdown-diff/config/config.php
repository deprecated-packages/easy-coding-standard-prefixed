<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671;

use _PhpScoperd4c5032f0671\SebastianBergmann\Diff\Differ;
use _PhpScoperd4c5032f0671\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd4c5032f0671\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperd4c5032f0671\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperd4c5032f0671\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperd4c5032f0671\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
