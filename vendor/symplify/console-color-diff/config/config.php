<?php

declare (strict_types=1);
namespace _PhpScoperd79d87c3336e;

use _PhpScoperd79d87c3336e\SebastianBergmann\Diff\Differ;
use _PhpScoperd79d87c3336e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd79d87c3336e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd79d87c3336e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
