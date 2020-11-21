<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d;

use _PhpScopera4be459e5e3d\SebastianBergmann\Diff\Differ;
use _PhpScopera4be459e5e3d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera4be459e5e3d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
