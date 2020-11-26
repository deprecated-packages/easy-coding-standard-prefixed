<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e;

use _PhpScoper4a718ec9156e\SebastianBergmann\Diff\Differ;
use _PhpScoper4a718ec9156e\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\MarkdownDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\MarkdownDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper4a718ec9156e\SebastianBergmann\Diff\Differ::class);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper4a718ec9156e\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\MarkdownDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper4a718ec9156e\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\MarkdownDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper4a718ec9156e\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
