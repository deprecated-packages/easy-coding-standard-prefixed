<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c;

use _PhpScoperc753ccca5a0c\SebastianBergmann\Diff\Differ;
use _PhpScoperc753ccca5a0c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use function _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc753ccca5a0c\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoperc753ccca5a0c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoperc753ccca5a0c\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
