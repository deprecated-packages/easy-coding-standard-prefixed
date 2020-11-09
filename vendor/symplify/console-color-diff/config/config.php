<?php

declare (strict_types=1);
namespace _PhpScoper880bfa4d8b51;

use _PhpScoper880bfa4d8b51\SebastianBergmann\Diff\Differ;
use _PhpScoper880bfa4d8b51\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use _PhpScoper880bfa4d8b51\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory;
use Symplify\ConsoleColorDiff\Differ\MarkdownDiffer;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper880bfa4d8b51\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper880bfa4d8b51\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    // markdown
    $services->set('markdownDiffOutputBuilder', \_PhpScoper880bfa4d8b51\SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder::class)->factory([\_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\ConsoleColorDiff\Diff\Output\CompleteUnifiedDiffOutputBuilderFactory::class), 'create']);
    $services->set('markdownDiffer', \_PhpScoper880bfa4d8b51\SebastianBergmann\Diff\Differ::class)->arg('$outputBuilder', \_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffOutputBuilder'));
    $services->set(\Symplify\ConsoleColorDiff\Differ\MarkdownDiffer::class)->arg('$markdownDiffer', \_PhpScoper880bfa4d8b51\Symfony\Component\DependencyInjection\Loader\Configurator\ref('markdownDiffer'));
};
