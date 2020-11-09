<?php

declare (strict_types=1);
namespace _PhpScopere015d8a3273c;

use _PhpScopere015d8a3273c\SebastianBergmann\Diff\Differ;
use _PhpScopere015d8a3273c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScopere015d8a3273c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\ConsoleColorDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopere015d8a3273c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopere015d8a3273c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScopere015d8a3273c\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScopere015d8a3273c\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\ConsoleColorDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScopere015d8a3273c\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
