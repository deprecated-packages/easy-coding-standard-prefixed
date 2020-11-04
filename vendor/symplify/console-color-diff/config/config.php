<?php

declare (strict_types=1);
namespace _PhpScoperfabf55fef6b7;

use _PhpScoperfabf55fef6b7\SebastianBergmann\Diff\Differ;
use _PhpScoperfabf55fef6b7\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfabf55fef6b7\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfabf55fef6b7\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
