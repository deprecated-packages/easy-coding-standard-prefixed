<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030;

use _PhpScoperdf6a0b341030\SebastianBergmann\Diff\Differ;
use _PhpScoperdf6a0b341030\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdf6a0b341030\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperdf6a0b341030\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperdf6a0b341030\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperdf6a0b341030\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
