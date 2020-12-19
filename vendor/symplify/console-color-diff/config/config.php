<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c;

use _PhpScopera6f918786d5c\SebastianBergmann\Diff\Differ;
use _PhpScopera6f918786d5c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera6f918786d5c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera6f918786d5c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
