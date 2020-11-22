<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\SebastianBergmann\Diff\Differ;
use _PhpScoperfacc742d2745\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfacc742d2745\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperfacc742d2745\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperfacc742d2745\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
