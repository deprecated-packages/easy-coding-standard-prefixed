<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8;

use _PhpScoperbcc0395698f8\SebastianBergmann\Diff\Differ;
use _PhpScoperbcc0395698f8\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbcc0395698f8\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperbcc0395698f8\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
